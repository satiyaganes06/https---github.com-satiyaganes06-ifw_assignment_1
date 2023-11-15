<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Company Profile Page</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">sGDevelopers</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/companyProfile/sGDevelopers/--/Empowering%20a%20Connected%20World./productList">Home Page</a></li>
                <li><a href="/productList">Product List</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/about-us/SHATTHIYA GANES/Bukit Mertajam">About Us page</a></li>
                        <li><a href="https://www.linkedin.com/in/satiya-ganes-b0a315209/" alt="_blank">Social Media</a></li>
                        <li><a href="/contactUs">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <h1>Company Profile Page</h1>

    <br>
    <br>

    <table border="1" class="ml-5">


        <tr>
            <td>Company Logo</td>
            <td><img src="https://marketplace.canva.com/EAE0rNNM2Fg/1/0/1600w/canva-letter-c-trade-marketing-logo-design-template-r9VFYrbB35Y.jpg" width="100px" height="100px" alt="Image"></td>
        </tr>

        <tr>
            <td>Company Name</td>
            <td>{{$companyName}}</td>
        </tr>

        <tr>
            <td>Visi</td>
            <td>{{$visi}}</td>
        </tr>

        <tr>
            <td>Misi</td>
            <td>{{$misi}}</td>
        </tr>


    </table>

    <br>

    <!-- <a href="http://127.0.0.1:8000/about-us/satiya/penang"><button class="btn btn-warning">About Us</button></a>
    <a href="/productList"><button class="btn btn-primary">Product List</button></a> -->
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>