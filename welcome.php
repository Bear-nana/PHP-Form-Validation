<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>PHP FV</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/form.css">

  </head>
  

  <body>
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Form-Validation</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


     <?php
        $name = $email = $pwd = $Cpwd = $message = $gender = "";
        $nameErr = $emailErr = $pwdErr = $CpwdErr = $messageErr = $genderErr = "";
        $form = "";

        if (isset($_POST['submit'])) {
          if (empty($_POST['name'])) {
            $nameErr = "Name Required";
          }else {
            $name = $_POST['name'];
          }

          if (empty($_POST['email'])) {
            $emailErr = "Email Required";
          
          }else {
            $email = $_POST['email'];
          }

          if (empty($_POST['pwd'])) {
            $pwdErr = "Password Required";
          }else {
            $pwd = $_POST['pwd'];
          }

           if (empty($_POST['Cpwd'])) {
            $CpwdErr = "Confirm Password";
          }else {
            $Cpwd = $_POST['Cpwd'];
          }

          if ($pwd != $Cpwd) {
            $CpwdErr = "Password does not match";
          }

           if (empty($_POST['message'])) {
            $messageErr = "Type Message";
          }else {
            $message = $_POST['message'];
          }

          if (empty($_POST['gender'])) {
            $genderErr = "Gender is Required";
          }else {
            $gender = $_POST['gender'];
          }
        
        if($name && $email && $pwd && $Cpwd && $message && $gender != "" && $CpwdErr == "") {

          $form = "<h3>Form Submitted</h3>";

        }
        
        }

      ?>           


    <div class="container">
      
      <div class="row">
        <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-6 col-sm-6">
        <center><h2>PHP Form Validation</h2></center>
            <form name="myForm" action="welcome.php" method="post">
            <p><span class="error">* Required fields</span></p>
            <span class="error"><?php echo $form; ?></span>
            <div class="form-group">
              <label for="name">Name:</label>
              <input name="name" type="name" placeholder="Enter Name" class="form-control" id="name">
              <span class="error">* <?php echo $nameErr; ?></span>
              <br><br>
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input name="email" type="email" placeholder="Enter Email" class="form-control" id="email">
              <span class="error">* <?php echo $emailErr; ?></span>
              <br><br>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input name="pwd" type="password" class="form-control" id="pwd">
              <span class="error">* <?php echo $pwdErr; ?></span>
              <br><br>
            </div>
            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input name="Cpwd" type="password" class="form-control" id="Cpwd">
              <span class="error">* <?php echo $CpwdErr; ?></span>
              <br><br>
            </div>
            <div class="form-group">
              <textarea name="message" placeholder="Type your message..."></textarea>
              <span class="error">* <?php echo $messageErr; ?></span>
              <br><br>
            </div>
            <div class="form-group">
              <label>Gender:</label>
              <input name="gender" type="radio" value="male"> Male
              <input name="gender" type="radio" value="female"> Female
              <span class="error">* <?php echo $genderErr; ?></span>
              <br><br>
            </div>
            <button name="submit" type="submit" value="submit" class="btn btn-danger">Submit</button>
          </form>
          </div>
          <div class="col-md-3 col-sm-3"></div>
          </div>
      </div>




     


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>







          