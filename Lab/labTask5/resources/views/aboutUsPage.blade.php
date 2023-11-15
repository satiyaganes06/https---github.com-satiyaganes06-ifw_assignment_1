<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>About Us</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">sGDevelopers</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/companyProfile/sGDevelopers/--/Empowering%20a%20Connected%20World./productList">Home Page</a></li>
                <li><a href="/productList">Product List</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="active">About Us
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="/about-us/SHATTHIYA GANES/Bukit Mertajam">About Us page</a></li>
                        <li><a href="https://www.linkedin.com/in/satiya-ganes-b0a315209/" alt="_blank">Social Media</a></li>
                        <li><a href="/contactUs">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <img src="https://img.freepik.com/premium-vector/young-smiling-man-avatar-man-with-brown-beard-mustache-hair-wearing-yellow-sweater-sweatshirt-3d-vector-people-character-illustration-cartoon-minimal-style_365941-860.jpg" width="100px" height="100px" alt="Image">

    <div style="display: flex;">
        <h3>Name : </h3>
        <h3> {{$name}}</h3>
    </div>

    <div style="display: flex;">
        <h3>Home City : </h3>
        <h3> {{$homeCity}}</h3>
    </div>
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>