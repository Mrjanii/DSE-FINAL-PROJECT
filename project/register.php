<?php
    session_start();

    include("dbConnection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $Uemail = $_POST['email'];
      $Uname = $_POST['name'];
      $Username = $_POST['uid'];
      $Upwd = $_POST['pwd'];

      if(!empty($Uemail) && !empty($Upwd) && !is_numeric($Uemail)){

        $query = "insert into users (Uemail, Uname, Username, Upwd)  values ('$Uemail', '$Uname', '$Username', '$Upwd')";

        mysqli_query($conn, $query);

        echo "<script type='text/javascript'> alert('SUCCESSFULLY REGISTER!!!')</script>";


      } else{
        echo "<script type='text/javascript'> alert('PLEASE ENTER SOME VALID INFO!!!!')</script>";

        
      }

    }
?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- font-awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--aos class-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;0,800;1,300&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,600&family=Raleway:ital,wght@0,300;0,400;0,500;0,800;0,900;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Gunawardhana Showroom!!</title>
    <style>
        * {
          margin-top: 100px;
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins', sans-serif;
                }
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                    background: transparent;

                }
                .box{
                  margin-top: 60px;
                  margin-bottom: 50px;
                  top: 30px;
                  left: 450px;
                    position:relative;
                    padding-left: 15px;
  width: 400px;
  height: 700px;
  background: transparent;
  border:  2px solid rgba(255,255,255,0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
                          }          .box .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  border-bottom: 2px solid #162938;
  margin: 30px 0;

                }
                .input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #162938;
  font-weight: 600;
  padding: 0 35px 0 5px;

}
.input-box i{
  position: absolute;
  right: 8px;
  font-size: 1.2em;
  color: #162938;
  line-height: 57px;
}
.remember-forgot{
  font-size: 0.9em;
  color: #162938;
  font-weight: 500;
  margin: -15px 0 15px;
  display: flex;
  justify-content: space-between;

}
.remember-forgot label input{
  accent-color: #162938;
  margin-right: 3px;
}
.remember-forgot a{
  color: #162938;
  text-decoration: none;
}
.remember-forgot a:hover{
  text-decoration: underline;
}
.btn{
  width: 100%;
  height: 45px;
  background: #162938;
  border: none;
  outline: none;
  border-radius: 6px;
  cursor: pointer;
  color: #fff;
  font-weight: 500;
  

}

.register-link{
  font-size: .9em;
  color: #162938;
  text-align: center;
  font-weight: 500;
  margin: 25px 0 10px;
}
.register-link p a{
  color: #162938;
  text-decoration: none;
  font-weight: 600;

}
.register-link p a:hover{
  text-decoration: underline;
}
  


    </style>
  </head>
  <body>
    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="background.mp4" type="video/mp4">
        </video>
        <nav id="navigation" class="navbar navbar-expand-lg fixed-top">
            <div class="container align-items-stretch">
                <div class="logo">
                    <a class="navbar-brand" href="#">G&S</a>
                </div>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="deals.php">Daily Deals</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                    
              </ul>
            </div>
        </div>
          </nav>
          <div class="box">
          <form method="POST">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text"  id="fname" name="email"  placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
              <input type="text"  id="fname" name="name"  placeholder="name" required>
              <i class='bx bxs-user'></i>
          </div>
            <div class="input-box">
                <input type="text"  id="fname" name="uid"  placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password"   id="fname" name="pwd" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password"  id="fname"  name="pwdrepeat" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label ><input type="checkbox">Remember me</label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Already have an Account?  <a href="login.php">Login</a></p>
            </div>
         </div>
        </form>
        <footer id="footer">
          <div class="footer_top">
            <style>
              body{
                bottom: 40px;
              }
          
            </style>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-6 footer_contact">
                          <h3>Gunawardhana & Sons</h3>
                          <p>No 122<br>
                            Main street<br>
                            Kegalle<br><br>
                          <strong>Phone:</strong>0773269244<br>
                          <strong> Email:</strong>Gunawardhana&Sons@gmail.com>
                          </p>
                      </div>
                      <div  class="col-lg-2 col-md-6 footer_links">
                          <h4>Gunawardhana & Sons</h4>
                          <ul>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">About us</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Blogs</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Careers</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Terms & conditions</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Privacy Policy</a>
                              </li>
                          </ul>
                      </div>
                      <div  class="col-lg-3 col-md-6 footer_links">
                          <h4>Earn With Us</h4>
                          <ul>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Sell with us</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Code of Condact</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Join our applicant programe</a>
                              </li>
                              <li>
                                  <i class="fa fa-chevron-right"></i>
                                  <a href="#">Free business ideas</a>
                              </li>
                          </ul>
                      </div>
                      <div class="col-lg-4 col-md-6 footer_newsletter">
                          <h4>Join our newsletter</h4>
                          <P>To get updates about us join our newsletter</P>
                          <form>
                              <input type="email" name="email">
                              <input type="submit" value="subscribe">
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container d-md-flex py-4">
              <div class="mr-md-auto text-center text-md-left">
                  <div class="copyright">
                      <p class="mb=0">&#169; Copyright <strong> Gunawardhana & sons</strong> All Rights Reserved</p>
                  </div>
                  <div class="credits">
                      <p class="mb-0"> Designed by <a href="#">Mr_Janiii</a></p>
                  </div>
              </div>
              <div class="social pt-3 pt-md-0">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
          </div>
      </footer>
      <!--back to top button-->
      <a href="#" class="back_to_top d-flex align-items-center justify-content-center">
          <i class="fa fa-arrow-up"></i>
      </a>
           

    </body>
</html> 