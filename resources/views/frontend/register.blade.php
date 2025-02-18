<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="../../css/common-1.css">
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap') }}"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ url('assets/css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ url('assets/css/register.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css') }}">
    <script src="{{ url('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
</head>

<body>
    <div class="container" style="margin-top: 2%">
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
                        <h3 class="form-title">Daftar</h3>
                        <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label><strong>Username</strong></label>
                                <input type="nama" placeholder="Username"
                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    name="nama" value="{{ old('nama') }}"
                                    style="background-color: rgb(236, 236, 236)">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><strong>Nomor Hp</strong></label>
                                <input type="hp" placeholder="Nomor Hp"
                                    class="form-control @error('hp') is-invalid @enderror" id="hp" name="hp"
                                    value="{{ old('hp') }}" style="background-color: rgb(236, 236, 236)">
                                @error('hp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-top: -15px">
                                <label><strong>Email</strong></label>
                                <input type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}"
                                    style="background-color: rgb(236, 236, 236)">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="position: relative;">
                                <label><strong>Kata Sandi</strong></label>
                                <input type="password" placeholder="Buat Kata Sandi"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password" style="background-color: rgb(236, 236, 236)">
                                <i class="far fa-eye" id="togglePassword" style="position: absolute; top: 70%; transform: translateY(-50%); right: 10px; cursor: pointer;"></i>
                                @error('password')
                                    <span class="text-danger">
                                        <i class="bx bx-error-circle error-icon"></i>{{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="check-label"><span><span></span></span>Saya menyetujui <a type="button" class="term-service" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ketentuan yang berlaku</a></label>
                            </div>
                            <button class="btn signin" name="register" id="register" style="margin-top: 20px">Daftar</button>
                        </form>
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

        const agreementCheckbox = document.getElementById('agree-term');
        const registerButton = document.getElementById('register');

        document.addEventListener('DOMContentLoaded', function() {
            var checkbox = document.getElementById('agree-term');
            var submitButton = document.getElementById('register');
            checkbox.addEventListener('change', function() {
                submitButton.disabled = !checkbox.checked;
            });
            });

        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            if (!agreementCheckbox.checked) {
                event.preventDefault();
                swal("Pendaftaran terhambat!", "Anda harus menyetujui ketentuan yang berlaku", "error");
            }
        });
    </script>
</body>
</html>
