<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('login/style.css') }}">
    <title>Login</title>
</head>
<body style="background-color: #171717">
    <div class="container">
        <div class="row ml-5 justify-content-center align-content-center d-flex flex-column mt-5">
            <div class="col-md-6">
                <img src="{{ asset('template/image/login2.jpg') }}" class="w-100 rounded" alt="" srcset="">
            </div>
            <div class="col-md-6  text-center border-top border-warning">
                <label class="font-weight-bold text-uppercase mt-5 border-bottom p-md-2 border-warning text-white">Giriş yap</label>

                <form action="{{ route('loginPost') }}" method="POST" class="mt-5">
                    {{ csrf_field() }}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark border-warning text-white" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control border-warning" name="email" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark border-warning text-white" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control border-warning" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-block mt-5">Giriş yap</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>