

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" >
    <title>Document</title>
</head>
<body>


<nav class="navbar navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand text-white ml-4 ">Society<span>Maintenance</span></a>
  <form class="form-inline">
    <input class="form-control mr-sm-3  " type="text" placeholder="Email or phone no.">
    <input class="form-control mr-sm-3" type="text" placeholder="password">
    <button class="btn btn-outline btn-primary my-2 my-sm-0 text-uppercase" name="login"  type="login">Login</button>
  </form>
</nav>

<div class="container">
  <h3 class="title text-center mt-3"> <span>REGISTER YOUR SOCIETY</span></h3>
  <div class="row">
      <div class="col-lg-10 col-xl-10 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">

             <!-- Background image for card set in CSS! -->

          </div>
          <div class="card-body" style="">
            <h5 class="card-title text-center">Register</h5>
          <form class="form-group" method="POST" action="index.php"> 
            <div class="form-group">
            
            <div class="form-group">
              <input type="text" class="form-control" id="societyName" name="societyName" placeholder="Society Name" required>
            </div>
            <div class="form-group">
              <input type="text"   class="form-control mb-2 mr-sm-1" id="cityName" name="cityName" placeholder="City name" required>
            </div>
              
            <div class="form-group">
              <input id="postalCode"  name="postalCode" type="text" placeholder="zip or postal code" class="form-control mb-2 mr-sm-1" required>
            </div>
            <div class="form-group">
              <input name="addressLine" id="addressLine" type="text"class="form-control" placeholder="Address details" required>
            </div>
            
            <!-- **************************************************** -->

              <hr>

            <!-- ******************************************************** -->

              <div class="form-group">
              <input type="text" id="bankName" name="bankName"  class="form-control" placeholder="Bank Name" required>  
            </div>
              <div class="form-group">
              <input type="text" id="accountNo" name="accountNo"  class="form-control" placeholder="AccountNo." required>  
            </div>
            <div class="form-group">
              <input type="text" id="IFCSCode" name="IFCSCode"  class="form-control" placeholder="IFCS code" required>  
            </div>

            <!-- ********************************************************* -->

              <hr>

            <!-- *********************************************************  -->
              
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirmpassword" id="inputConfirmPassword" class="form-control" placeholder="confirm Password" required>
            </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit"  type="submit">Register</button>
              <!-- <a class="d-block text-center mt-2 small" href="#">Sign In</a> -->
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> -->
              <br>
              <p class="text-primary text-center">Already have an account?please login</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['signup']))
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $company = $_POST['company'];
  // $phonenumber = $_POST['phonenumber'];
  $address = $_POST['address'];
  $zipcode = $_POST['zipcode'];
  $district = $_POST['district'];
  $companyactivity = $_POST['companyactivity'];
  $language = $_POST['language'];
  $products = implode(',' , $_POST['products']);
  $productprefer = $_POST['productprefer'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
 
  $password = password_hash($password, PASSWORD_BCRYPT);
  $cpassword = password_hash($cpassword, PASSWORD_BCRYPT);

  
  $dup = mysqli_query($con, "select * from signup_buyer where email ='$email' ");


  if (mysqli_num_rows($dup)>0)
  {
    echo"it is same duplicate entry";
  }
  else
  {
  
  $insertquery = "insert into signup_buyer(firstname,lastname,company,phonenumber,address,zipcode,district,companyactivity,language,products,productprefer,email,password,cpassword) values('$firstname','$lastname','$company','$phonenumber','$address','$zipcode','$district','$companyactivity','$language','$products','$productprefer','$email','$password','$cpassword')";

 if(mysqli_query($con, $insertquery))
 {
    echo"inserted value";
 } else {
    $success = '';
  echo "Error: " . $insertquery . "<br>" . $con->error;
  }
    }
  
}
?>