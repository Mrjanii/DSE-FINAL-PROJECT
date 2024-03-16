<?php
include "dbadconnection.php";
$Nid = $_GET["Nid"];

if (isset($_POST["submit"])) {
    $Nname = $_POST['Nname'];
    $Ncatagory = $_POST['Ncatagory'];
    $Nprice = $_POST['Nprice'];

  $sql = "UPDATE `newproducts` SET `Nname`='$Nname',`$Ncatagory`='Ncatagory',`Nprice`='$Nprice' WHERE Nid = 1";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.admin.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head><style>
   #navigation{
    top: 10px;
    padding: 0;
    transition: 0.5s all;
 }
 
 #navigation .logo{
   width: 50%;
   padding: 17px 30px;
   background-color: #009970;
 }
 
 
 #navigation .logo a{
   font-size: 26px;
   padding: 0;
   line-height: 1;
   font-weight: 700;
   color: #fff;
   text-transform: uppercase;
   font-family: 'Poppins', sans-serif;
   
 }
 #navigation #navbarNav{
   background-color: #fff;
 }
 
 #navigation #navbarNav a{
   display: block;
   position: relative;
   color: #36343a;
   padding: 10px 15px;
   font-size: 13px;
   font-weight: 500;
   text-transform: uppercase;
   font-family: 'Poppins', sans-serif;
   transition: 0.3s all;
 
 }
 #navigation #navbarNav a:hover{
   color: #009970;
   text-decoration: none;
 }
 #navigation.nav-scroll{
   background-color: #fff;
   top: 0;
   box-shadow: 0 2px 15px rgba(0,0,0,0.1);
 }
 #hero{
   font-size: 26px;
   padding: 0;
   font-weight: 700;
   color:#36343a;
   text-transform: uppercase;
   font-family: 'Poppins', sans-serif;
 
 }
 .jt{
  margin-top:100px;
 }
</style>

<body>
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
                  <a class="nav-link" href="home/index.php">Home</a>
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

  

  <div class="jt">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `newproducts` WHERE Nid = $Nid LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Product Name:</label>
            <input type="text" class="form-control" name="Nname" value="<?php echo $row['Nname'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Product Catagory:</label>
            <input type="text" class="form-control" name="Ncatagory" value="<?php echo $row['Ncatagory'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Product Price:</label>
          <input type="text" class="form-control" name="Nprice" value="<?php echo $row['Nprice'] ?>">
        </div>

       
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.admin.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>