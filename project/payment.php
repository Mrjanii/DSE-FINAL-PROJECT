<?php
    session_start();

    include("dbConnection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $Unumber = $_POST['Upnum'];
      $Uname = $_POST['Uname'];
      $Email = $_POST['Email'];
      $Address = $_POST['Address'];
      $City = $_POST['City'];
      $State = $_POST['State'];
      $Zipcode = $_POST['Zipcode'];
      $Cardname = $_POST['Cardname'];
      $Cardnum = $_POST['Cardnum'];
      $Cardexm = $_POST['Cardexm'];
      $Cardexy = $_POST['Cardexy'];
      $Cvv = $_POST['Cvv'];
      $Payment = $_POST['Payment'];

      if(!empty($Email) && !empty($Payment) && !is_numeric($Email)){

        $query = "insert into `usersorders` (Upnum, Uname, Email, Address, City, State, Zipcode, Cardname, Cardnum, Cardexm, Cardexy, Cvv, Payment)  values ( '$Unumber', '$Uname', '$Email', '$Address', '$City', '$State', '$Zipcode', '$Cardname', '$Cardnum', '$Cardexm', '$Cardexy', '$Cvv', '$Payment')";

        mysqli_query($conn, $query);

        echo "<script type='text/javascript'> alert('PAYMENT DONE!!!')</script>";


      } else{
        echo "<script type='text/javascript'> alert('PLEASE ENTER SOME VALID INFO!!!!')</script>";

        
      }

    }
?>







<!DOCTYPE html>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.bill{
    margin-top:100px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
}

.bill form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.bill form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.bill form .row .col{
  flex:1 1 250px;
}

.bill form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.bill form .row .col .inputBox{
  margin:15px 0;
}

.bill form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.bill form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.bill form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.bill form .row .col .flex{
  display: flex;
  gap:15px;
}

.bill form .row .col .flex .inputBox{
  margin-top: 5px;
}

.bill form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.bill form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #27ae60;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.bill form .submit-btn:hover{
  background: #2ecc71;
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
                    <a class="nav-link" href="cart.php">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="deals.php">Daily Deals</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="login.php">Log out</a>
              </ul>
            </div>
        </div>
          </nav>
        
   

<div class="bill">

    <form method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                        <span>YOUR NUMBER :</span>
                        <input type="text" name="Upnum" placeholder="094-xxxxxxx">
                    </div>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="Uname" placeholder="Name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="Email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="Address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="City" placeholder="Kegalle">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="State" placeholder="Srilanka">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="Zipcode" placeholder="123 456">
                    </div>
                   
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="Cardname" placeholder="mr.janith">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="Cardnum" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="Cardexm" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="Cardexy" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="Cvv" placeholder="1234">
                    </div>
                    <div class="inputBox">
                        <span>PAYMENT :</span>
                        <input type="text" name="Payment" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>