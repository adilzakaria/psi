<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk</title>

    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/bootstrap.min.css"> -->


    <link rel="stylesheet" href="../../css/common-1.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css') }}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet') }}">
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @if (session()->has('success'))
                    <script>
                        swal("Daftar Akun Berhasil!", "{{ session('success') }}", "success");
                    </script>
                @endif

                @if (session()->has('LoginError'))
                    <script>
                        swal("Daftar Akun Gagal!", "{{ session('LoginError') }}", "error");
                    </script>
                @endif
                <div class="form-container">
                    <div class="left-content">
                        <h3 class="title" style="margin-bottom: 5px">Isna</h3>
                        <h3 class="title" style="margin-bottom: 70px">Collection</h3>
                        <h4 class="sub-title" style="word-break: break-all">Mewujudkan</h4>
                        <h4 class="sub-title" style="word-break: break-all">Kreativitas</h4>
                        <h4 class="sub-title" style="word-break: break-all">Melalui</h4>
                        <h4 class="sub-title" style="word-break: break-all">Jarum Dan</h4>
                        <h4 class="sub-title" style="word-break: break-all">Benang</h4>
                    </div>
                    <div class="right-content">
                        <h3 class="form-title">Masuk</h3>
                        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}"
                                    style="background-color: rgb(236, 236, 236)" autofocus required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label>Kata Sandi</label>
                                <input type="password" placeholder="Kata Sandi"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password" style="background-color: rgb(236, 236, 236)" required/>
                                <i class="far fa-eye" id="togglePassword" style="position: absolute; top: 70%; transform: translateY(-50%); right: 10px; cursor: pointer;"></i>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn signin">Masuk</button>
                            <div class="remember-me">
                                <input type="checkbox" class="checkbox">
                                <span class="check-label">Ingat saya</span>
                            </div>
                            <a href="{{ route('forgot') }}" class="forgot">Lupa Kata Sandi</a>
                        </form>

                        <div class="signup-link" style="margin-top: 125px">Tidak memiliki akun? Daftar sekarang <a
                                href="{{ route('register') }}">di sini</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye slash icon
            if (this.classList.contains('fa-eye-slash')) {
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            } else {
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            }
        });
    </script>
</body>

</html>
