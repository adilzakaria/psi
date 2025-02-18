<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>

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
        href="{{ url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/register.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css') }}">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet') }}">
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
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
                        <h3 class="form-title">Lupa Kata Sandi</h3>
                        <form class="form-horizontal" action="{{ route('forgot') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}"
                                    style="background-color: rgb(236, 236, 236)" autofocus required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label for="password1">Buat Kata Sandi Baru</label>
                                <input type="password" placeholder="Buat Kata Sandi Baru"
                                    class="form-control @error('password1') is-invalid @enderror" id="password1"
                                    name="password1" style="background-color: rgb(236, 236, 236)" required>
                                <i class="far fa-eye" id="togglePassword1" style="position: absolute; top: 70%; transform: translateY(-50%); right: 10px; cursor: pointer;"></i>
                                @error('password1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="position: relative; margin-top: -15px;">
                                <label for="password2">Konfirmasi Password</label>
                                <input type="password" placeholder="Konfirmasi Password"
                                    class="form-control @error('password2') is-invalid @enderror" id="password2"
                                    name="password2" style="background-color: rgb(236, 236, 236)" required>
                                <i class="far fa-eye" id="togglePassword2" style="position: absolute; top: 70%; transform: translateY(-50%); right: 10px; cursor: pointer;"></i>
                                @error('password2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn signin" style="margin-top: 50px">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const togglePassword1 = document.querySelector('#togglePassword1');
        const togglePassword2 = document.querySelector('#togglePassword2');
        const password1 = document.querySelector('#password1');
        const password2 = document.querySelector('#password2');

        togglePassword1.addEventListener('click', function(e) {
            // Toggle the type attribute
            const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
            password1.setAttribute('type', type);

            // Toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        togglePassword2.addEventListener('click', function(e) {
            // Toggle the type attribute
            const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
            password2.setAttribute('type', type);

            // Toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
