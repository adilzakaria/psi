<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Akun</title>


    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="http://jrain.oscitas.netdna-cdn.com/tutorial/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/bootstrap.min.css"> -->


    <link rel="stylesheet" href="../../css/common-1.css">
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&amp;family=Poppins:wght@200;300;400;500;600&amp;display=swap') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/akun.css') }}">
    <script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    @include('frontend.navcontent')

    <nav id="navbar" class="navbar"
        style="background-color: White; box-shadow: 0 15px 19px rgba(0, 0, 0, 0.2); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1
            style="text-align: left; font-weight: bold; margin: 0; width: 58%; font-family: 'Poppins', sans-serif; color: black; font-size: 25px; margin-right: 25%;">
            Hai, {{ auth()->user()->nama }}</h1>
    </nav>

        <div class="row">
            <div class="col-md-offset-2 col-lg-8">
                <div class="form-container">
                    <div class="left-content">
                        <div style="display: flex; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40" width="36"
                                style="margin-bottom: 70px"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <a class="title" style="margin-bottom: 70px; margin-left: 20px;"
                                href="{{ route('akun') }}">{{ auth()->user()->nama }}</a>
                        </div>
                        <form class="form-horizontal" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="{{ route('edit_akun') }}" class="btn kiri" style="margin-top: 20px">
                                <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" height="17" width="17"
                                    style="position: relative; left: -50px; top: -2px"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg><span>Edit Profil</span></a>

                            <a href="{{ route('pesanan') }}" class="btn kiri" style="margin-top: 20px">
                                <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" height="17" width="18.75"
                                    style="position: relative; left: -35px;"
                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg><span>Pesanan Saya</span></a>

                            <button type="submit" class="btn kiri" style="margin-top: 20px"><svg
                                    xmlns="{{ url('http://www.w3.org/2000/svg') }}" height="17" width="18.75"
                                    style="position: relative; left: -55px;"
                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M352 224H305.5c-45 0-81.5 36.5-81.5 81.5c0 22.3 10.3 34.3 19.2 40.5c6.8 4.7 12.8 12 12.8 20.3c0 9.8-8 17.8-17.8 17.8h-2.5c-2.4 0-4.8-.4-7.1-1.4C210.8 374.8 128 333.4 128 240c0-79.5 64.5-144 144-144h80V34.7C352 15.5 367.5 0 386.7 0c8.6 0 16.8 3.2 23.2 8.9L548.1 133.3c7.6 6.8 11.9 16.5 11.9 26.7s-4.3 19.9-11.9 26.7l-139 125.1c-5.9 5.3-13.5 8.2-21.4 8.2H384c-17.7 0-32-14.3-32-32V224zM80 96c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16H400c8.8 0 16-7.2 16-16V384c0-17.7 14.3-32 32-32s32 14.3 32 32v48c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V112C0 67.8 35.8 32 80 32h48c17.7 0 32 14.3 32 32s-14.3 32-32 32H80z" />
                                </svg><span>Keluar</span></button>
                        </form>
                    </div>
                    <div class="right-content" style="border-bottom-right: 15px; border-top-right-radius: 15px;">
                        <h2 class="title" style="margin-top: 10px">Edit Profil</h2>
                        <form class="form-horizontal" style="margin-top: 30px" action="{{ route('edit_akun') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color: black">Username :</label>
                                <input class="form-control" name="nama" placeholder="{{ auth()->user()->nama }}"
                                    style="background-color: rgb(255, 255, 255); font-size: 18px; color: black; opacity: 0.7;"></input>
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-top: -10px">
                                <label style="color: black">Nomor Hp :</label>
                                <input class="form-control" name="hp" placeholder="{{ auth()->user()->hp }}"
                                    style="background-color: rgb(255, 255, 255); font-size: 18px; color: black; opacity: 0.7;"></input>
                                @error('hp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-top: -25px">
                                <label style="color: black">Email :</label>
                                <output class="form-control"
                                    style="background-color: rgb(255, 255, 255); font-size: 18px; color: black; font-weight: bold">{{ auth()->user()->email }}</output>
                                    <p class="text-danger" style="font-style: italic">*Email Tidak Bisa Diubah.</p>
                            </div>
                            <button type="submit" class="btn btnkiri">Simpan</button>
                            <button type="button" class="btn btnkanan" style="float: right;" onclick="window.location.href='{{ route('akun') }}';">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


            <!-- Vendor JS Files -->
            <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
            <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
            <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
            <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

            <!-- Template Main JS File -->
            <script src="{{ url('assets/js/main.js') }}"></script>
            <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="6030eb7e-c752-422c-aedc-06dc472fe214";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</body>
</html>
