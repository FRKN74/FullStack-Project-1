<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanıtım-2</title>

    <!-- Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwsome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


</head>
<body style="background: linear-gradient(to bottom,black,#666);">
    <div class="loading">
        <img src="{{ asset('template/image/loading.gif') }}" alt="" srcset="">
    </div>
    <header>
        <div class="cookie-info">
            <ul>
                <li>+90 555 555 55 55</li>
                <li>Bartın-Merkez</li>
            </ul>
        </div>
        <!-- navbar started -->
        <nav>
            <input type="checkbox" name=""  id="menu">
            <label for="menu" class="checkbtn text-white m-3">
                <i class="fa fa-bars fa-2x"></i>
            </label>
            <a href=""><img src="{{ asset('template/image/logo.png') }}" style="color: white" class="mt-3 rounded-circle" width="50px" alt=""></a>
            <ul>
                <li><a href="">Anasayfa</a></li>
                <li><a href="">Hakkımda</a></li>
                <li><a href="">İletişim</a></li>
            </ul>

        </nav>
        <div class="image">
            <img src="{{ asset('template/image/wp2.jpg') }}" style="  object-fit: cover;
            object-position: 50% 50%;" width="100%" height="950px" alt="" srcset="">
        </div>
    </header>