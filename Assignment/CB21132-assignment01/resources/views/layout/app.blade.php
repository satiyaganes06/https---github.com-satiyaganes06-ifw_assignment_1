<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disney+</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!--Bootstrap Script-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />

    <!--CSS-->
    <link rel="stylesheet" href="../css/home.css">

    <!-- Icon -->
    <link rel="shortcut icon" type="image/jpg" href="{{URL('images/logox2.jpg')}}" />

    <style>
        body {
            background-color: #040714;
            width: 100vw;
            overflow-x: hidden;
        }

        .main_bg {
            background-image: url('images/bg_index.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 80vh;
            width: 100vw;
            filter: brightness(45%);

        }

        .main_bg2 {
            background-image: url('images/bg_index.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 90vh;
            width: 100vw;
            filter: brightness(45%);

        }

        .container-center {
            position: absolute;
            top: 50%;
            left: 31%;
            width: 100%;
            text-align: center;
            font-size: 18px;
        }

        .container-center2 {
            position: absolute;
            top: 0%;
            left: 11.5%;
            width: 100%;
            text-align: center;
            font-size: 18px;
        }

        .main_part {
            position: relative;
        }

        .video-card-container {
            position: relative;
            width: 92%;
            margin: auto;
            height: 10vw;
            display: flex;
            margin-bottom: 20px;
            justify-content: space-around;
        }

        .title {
            font-weight: 500;
        }

        .box-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .first-box {
            width: 25vw;
            height: 65vh;
            background-color: transparent;
            border-radius: 10px;
            border-style: solid;
            border-color: #0027D3;
            margin: 0 10px;
            text-align: left;
            padding: 40px;
        }

        .video-card-image {
            height: 90%;
            border-radius: 10px;
        }

        .card {
            position: relative;
            min-width: 150px;
            width: 150px;
            height: 200px;
            border-radius: 5px;
            overflow: hidden;
            margin-left: 10px;
            transition: .5s;
            background: #000;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card:hover .card-body {
            opacity: 1;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .card-body {
            opacity: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            background: linear-gradient(to bottom, rgba(4, 8, 15, 0), #192133 90%);
            padding: 10px;
            transition: 0.5s;
        }

        .card-container {
            position: absolute;
            width: 96%;
            padding-left: 4%;
            height: 220PX;
            display: flex;
            margin: 0 auto;
            align-items: center;
            overflow-x: auto;
            overflow-y: visible;
            scroll-behavior: smooth;
        }

        .card-container::-webkit-scrollbar {
            display: none;
        }

        .name {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize;
            margin-top: 60%;
        }

        .des {
            color: #fff;
            opacity: 0.8;
            margin: 5px 0;
            font-weight: 500;
            font-size: 12px;
        }

        .watchlist-btn {
            position: relative;
            width: 100%;
            text-transform: capitalize;
            background: none;
            border: none;
            font-weight: 500;
            text-align: right;
            color: rgba(255, 255, 255, 0.5);
            margin: 5px 0;
            cursor: pointer;
            padding: 10px 5px;
            border-radius: 5px;
        }


        nav {
            background-color: #040714;
        }

        footer {
            background-color: #060B1F;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    @include('navbar')

    @yield('content')

    @include('footer')

    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <!--Bootstrap 4 & 5 & jQuery Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>