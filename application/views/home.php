<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>QuizHub | Sign Up</title>
  </head>
  <body>
    <img src="<?php echo base_url();?>assets/images/logo.png" class="logosignup" width="100px" height="100px" >
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>SignUp Form</span></div>
        <form method="post" action="<?php echo site_url('Welcome/RegisterNow')?>">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Lastname" name="lastName" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Firstname" name="firstName" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="date" placeholder="Birthdate" name="birthdate" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row button">
            <input type= "submit" value="SignUp">
          </div>            
        </form>
      </div>
    </div>
  </body>
</html>
