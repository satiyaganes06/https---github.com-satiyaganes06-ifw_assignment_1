<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <li ><a href="/about-us/SHATTHIYA GANES/Bukit Mertajam">About Us page</a></li>
            <li><a href="https://www.linkedin.com/in/satiya-ganes-b0a315209/" alt="_blank">Social Media</a></li>
            <li class="active"><a href="/contactUs">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2>Contact Us</h2>
    <form class="form-horizontal" action="/action_page.php">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Phone Number:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Remark:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

</body>

</html>