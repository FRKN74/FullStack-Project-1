<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="{{ asset('admin-panel/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    @toastr_css
</head>

<body>
    <div class="conainer">
        @include('layouts.back.sidebar')
                <!-- Main-->
                <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <i class="fa fa-bars" style="color: black;"></i>
                        </div>
                        <!--search-->
                        <!--
                        <div class="search">
                            <label>
                                <input type="text" placeholder="Arama yap"/>
                                <i class="fa fa-search" id="icon" ></i>
                            </label>
                        </div>
                        -->
                        <!--img-user-->
                        
                        <div class="user">
                            <img src="{{ asset('admin-panel/image/FE2.jpeg') }}" alt="" width="50px" height="50px" class="img-user">
                            
                        </div>
                        
                    </div>
