<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>E-Comm Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-pzjw8f+ua5v9x4xjytfF2HYsase79f6hysBk5B32176kR/HP7yB2KLrE9JQqA1bz"
    crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha384-lAf6vq0u+o/RMOqDMl+HCQMa2vEpv5c76sXnug10LlsRbOcIHnMoBq28wOJ6oB+H"
    crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="/path/to/favicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/path/to/favicon-16x16.png" sizes="16x16">

</head>

<body>

    {{View::make('header')}}

    @yield('content')


    {{View::make('footer')}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
<style>
    html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #d1c9c9;
        }

        .content {
            flex: 1;
        }
    .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.1rem;
            margin-left: 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }
        .nav-item{
            display:flex;
        }
.custom-login {
    height: 685px;
    padding-top: 100px;
}
/* .custom-carousel-control {
    background-color: black;
    color: white;
}
img.slider-img{
    height:400px !important
}
.custom-product{
    height:600px;
}
.carousel-coption{
    margin-top:20px;
    text-align: center;
}*/
.trending-image{
    height:100px;
}
.trending-item{
    float: left;
    width:20%;
}
.trending-wrapper{
    margin:20px;
} 
.detail-img{
    height:200px
}
.cart-list-devider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}

.custom-product {
        flex: 1;
    }

    footer {
        background-color: black; /* Set the background color to black */
        color: white; /* Set the font color to white */
        text-align: center;
        padding: 10px 0;
    }
    @media (max-width: 767px) {
    .navbar-nav {
        flex-direction: column;
        margin-bottom: 10px;
    }
    .nav-item {
        width: 100%;
        text-align: center;
        margin-bottom: 5px;
    }
    .btn-group {
        margin-top: 10px;
        margin-bottom: 5px;
    }
    .dropdown-menu {
        min-width: 100%;
    }
}

    
</style>

</html>