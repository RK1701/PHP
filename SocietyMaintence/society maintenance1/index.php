<!DOCTYPE html>
<!--
Template Name: M
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="utf-8">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Society-Maintenance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link rel="stylesheet" href="style.css"> -->

</head>
<body id="top">

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/02.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1 class="logoname"><a href="index.html">Society<span>Maintenance</span></a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="#pageintro">Home</a></li>
          <li><a href="#services">services</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#Registration">Registration</a></li>
          <li><a href="#footer">Contact</a></li>
          <li ><a href="#" data-target="#exampleModalsignup" data-toggle="modal" >login/signup</a></li>
          
          
       
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      <!-- <p>Magnis dis parturient</p> -->
      <h3 class="heading" style="color: rgba(0, 0, 0, 0.8);"> we help to
        provide service like instant pay maintenance</h3>
   
    </article>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <!-- pyayment gate way -->
    <div class="modal fade bd-example-modal-lg" id="payment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container-fluid">
      <table class="table table">
        <h3 class="mt-3">Maintence Details:</h3>
        <tr>
          <th>Parking charge:</th>
          <td>----------</td>
        </tr>
        <tr>
          <th>water charge:</th>
          <td>----------</td>
        </tr>
        <tr>
          <th>service charge:</th>
          <td>----------</td>
        </tr>
        <tr>
          <th>other charge:</th>
          <td>----------</td>
        </tr>
        <tr>
          <th>Total Amount:</th>
          <td>----------</td>
        </tr>
      </table>
      </div>
      <hr>
      <div class="container-fluid">
      <h3 class="mt-2">Enter Your Details:</h3>
      <form action="" method="POST">
          <div class="form-group">
            <div class="input-group mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label ml-2">Name:</label>
              <input type="text" class="form-control col-sm-8" name="name" placeholder="Your Name" required>
            </div>
            <div class="input-group mb-3"> 
              <label for="inputEmail3" class="col-sm-2 col-form-label ml-2">Phone:</label>
              <input type="tel" class="form-control col-sm-8" name="phone" placeholder=" phoneNo." required>
            </div>
            <div class="input-group mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label ml-2"> Email:</label>
              <input type="mail" class="form-control col-sm-8" name="email" placeholder="E-mail" required>
            </div>
            <button type="pay" name="pay" class="btn btn-primary btn-sm ml-4" data-toggle="modal" data-target="#recieptModal"  data-abc="true" data-dismiss="modal">Pay Maintence</button>
          </div>
        </form>
        </div>
    </div>
  </div>
</div>

<!-- ################################################################################# -->
<!-- reciept table -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="recieptModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container-fluid">
      <table class="table table">
        <h3 class="mt-3 text-center">Thanks for payMaintenance</h3>
        <tr>
          <th>Payment ID:</th>
          <td>************</td>
        </tr>
        
        <tr>
          <th>Payment name:</th>
          <td>abcd</td>
        </tr>
        
        <tr>
          <th>Payment email:</th>
          <td>zxy@gmail.com</td>
        </tr>
        
        <tr>
          <th>Amount paid:</th>
          <td>_ _ _Rs\-</td>
        </tr>
      </table>
      </div>
      </div>
    </div>
  </div>
</div>
    
    <!-- ################################################################################################ -->
    <section id="services" class="container">
      <div class="sectiontitle">
        <!-- <p class="nospace font-xs">Vivamus blandit lectus nec fringilla</p> -->
        <h1 class="heading font-x3">SERVICES</h1>
      </div>
      <ul class="nospace group">
        <li class="one_quarter">
          <article>
            <a href="" data-toggle="modal" data-target="#payment" ><i class="fas fa-money-check-alt" ></i></a>
            <h6 class="heading">Pay Maintenance</h6>
            <p>Maintenance charges bills on regular periodical basis or for specific perpose/debit notes can be genrated 
              with ease.intrest and penalty can be charged for delayed payment and rebate can be given for prompt payment as per 
              rules set by the society.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-star"></i></a>
            <h6 class="heading"> Festival & Events</h6>
            <p>A festival is a gathering of people to event ordinarily celebrated by a community and centering on some 
              charectristic aspect of that community and relligion or cultures.This is nothing better than organizing some events in a housing society to bring all members together and foster
              the bonding. </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-handshake"></i></a>
            <h6 class="heading">Meetings and Managment</h6>
            <p>Our system provides the format to record the Minutes of Meeting in accordance with the applicable bye-laws by
              recording the agenda discussed, place, time and date of meeting.  Members with appropriate 
             authority have access to this feature to manage all kinds of society meetings. </p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class=" fas fa-parking"></i></a>
            <h6 class="heading">Parking Service</h6>
            <p>managing parking space from a major part of housing socity managment.with the morden urbun cooprative
              living format where thousands of people unrelated by blood or even culture, are co-living there can be no dearth
              of reason to spur unrest.parking is one that also needs special attention..</p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <section id="About" class="row3 inspace-30 clear">
      <div class="sectiontitle">
      <h1 class="heading font-x3">ABOUT</h1>
      </div>
      <div class="one_half first">
        <!-- <h6 class="heading">Mus sodales nulla integer</h6> -->
        <p class="heading font-x2">    It is one of the best society maintenance system website that allowes to manage your society residents & staff,
          vendors,visitors, doccuments,assets,income,billing and other operation solution in a single platform. we help to
           provide service like instant pay maintainance.</p>
      </div>
      <div class="one_half">
        <ul class="nospace group">
          <li class="one_half first btmspace-30">
            <h6 class="heading">Smart Society</h6>
            <p>Societymaintenance.com offers you hassle-free platform to transform your society, making it highly functional and easily 
               manageable. Developed by an expert team  of experience handling society matters, this software enables even a 
               newcomer to participate in the management process.</p>
          </li>
          <li class="one_half btmspace-30">
            <h6 class="heading">Tools for Society</h6>
            <p>Societymaintenance is an online Society Management & administration and Society Accounting solution which can be 
              used by Cooperative Societies to their benefit for effective administration of Society affairs.SM(Society Maintenance)
               provides a completely integrated software and mobile app based solutions for accounting, billing, management and 
              communications for Housing Societies.</p>
          </li>
          <li class="one_half first">
            <h6 class="heading">Our Attitude</h6>
            <p>"We are here, because we serve better". This attitude is the driving force to constantly Improve on our services and
              Add Values to our services. Our reputation and success lies in our services. “Once a Customer, always a Customer”
              Societycity is a Online Housing Society Billing Management Software for residential and commercial complexes & 
             Housing Societies.</p>
          </li>
          <li class="one_half">
            <h6 class="heading">Services & Managment</h6>
            <p>we are providing many services such as payment of maintenance bill,parking service, meetings and event ,facility 
              managment, festival celebration,housing society gate managment,asset managment,complain managment ,society supported 
              conferences  any other activities are performed on single platform using society maintainance website.</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
 <!-- ..........Registration.............. -->
<section id="Registration" class="row3 inspace-30 clear">
      <div class="sectiontitle">
      <h1 class="heading font-x3">REGISTRATION</h1>
      
<?php

include 'rgdb1.php';
?>
      </div>

<!-- ################################################################################################ -->

<!-- Modal -->

<!-- sign up from -->
<div class="modal fade" id="exampleModalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <divs class="modal-content">
    
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h5 class="modal-title text-center" id="exampleModalLabel">signup</h5>
        <br>
        <form action="#exampleModallogin" method="POST">
          <div class="form-group">
            <div class="input-group mb-3">
              <input type="text" id="first_name" class="form-control mb-2 mr-sm-2" name="first_name" placeholder="First Name" required>
              <input type="text" class="form-control mb-2 mr-sm-2" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="Society_name" placeholder="Your Society Name" required>
            </div>
            <div class="input-group mb-3"> 
              <input type="phone_no" class="form-control" name="phone_no" placeholder="your phone no." required>
            </div>
            <div class="input-group mb-3">
              <!-- <span class="input-group-text"><span class="fas fa-user"></span></span> -->
              <input type="email" class="form-control" name="email" placeholder="E-mail" required>
            </div>
            <div class="input-group mb-3">
              <!-- <span class="input-group-text"><span class="fas fa-lock"></span></span> -->
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
              <!-- <span class="input-group-text"><span class="fas fa-lock"></span></span> -->
              <input type="password" class="form-control" name="confirmpassword" placeholder="confirmPassword" required>
            </div>
          
            <button type="signup" name="signup" class="btn btn-primary btn-lg btn-block">SIGNUP</button>
          </div>
          <p class="text-inverse">already have an account? <a href="#exampleModallogin" data-toggle="modal" data-target="" data-abc="true" data-dismiss="modal">Login</a></p>
        </form>
      </div>
    </divs></div>
  </div>


<!-- ################################################################################################ -->
<!-- login form -->
<div class="modal fade" id="exampleModallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <divs class="modal-content">
    
     <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title " id="exampleModalLabel">Login</h5>
        <br>
        <form action="" method="POST">
          <div class="form-group">
            <div class="input-group mb-3">
              <span class="input-group-text"><span class="fas fa-user"></span></span>
              <input type="email" class="form-control" name="email" placeholder="Email or Phone no." required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><span class="fas fa-lock"></span></span>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
              <a href="#"  data-toggle="modal">Forgot my password</a>
            </div>
            <button type="login" name="login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
          </div>
          <p class="text-inverse">you  have not an account? <a href="#exampleModalsignup" data-toggle="modal" data-target="" data-abc="true" data-dismiss="modal">signup</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
 
<!-- Society form -->
<!-- 
<div class="modal fade" id="exampleModalregistration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <divs class="modal-content">
    
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title " id="exampleModalLabel">Registration</h5>
        <br>
        <form href="registra.php" method="POST">
          <div class="form-group">
            <p style="color: rgba(0, 0, 0, 0.9);"><u>Society Details</u></p> 
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="societyName" name="societyName" placeholder="Society Name" required>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control mb-2 mr-sm-2" id="cityName" name="cityName" placeholder="City name" required>
              <input id="postalCode" name="postalCode" type="text" placeholder="zip or postal code" class="form-control mb-2 mr-sm-2" required>
            </div>
            <div class="input-group mb-3">
              <input name="addressLine" id="addressLine" type="text"class="form-control" placeholder="Address details" required>
            </div>

            <p style="color: rgba(0, 0, 0, 0.9);"><u>Society Account Details</u></p>
            <div class="input-group mb-3 ">
              <input type="text" id="bankName" name="bankName"  class="form-control" placeholder="Bank Name" required>  
            </div>
            <div class="input-group mb-3 ">
              <input type="text" id="accountNo" name="accountNo"  class="form-control" placeholder="Account No." required>  
            </div>
            <div class="input-group mb-3 ">
              <input type="text" id="IFCSCode" name="IFCSCode"  class="form-control" placeholder="IFCS code" required>  
            </div>
            
            <p style="color: rgba(0, 0, 0, 0.9);"><u>register details</u></p>
            <div class="input-group mb-3">
              <input type="mail" class="form-control" id="mail" name="mail" placeholder="E-mail" required>
            </div>
            <div class="input-grup mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="repeatPassword" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->


<!-- ################################################################################################ -->
<div class="bgded overlay row4">
  <footer id="footer" class="hoc clear"> 
    <div class="group">
      <div class="one_third first">
        <h1 class="logoname"><a href="index.html">Society<span>Maintence</span></a></h1>
        <p>Enyone can find ususing social media like Facebook,tWeeters,Instagram etc.you can Share your feedback and other problems using any application.</p>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
          <!-- <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li> -->
          <li><a class="faicon-instagram" href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <!-- <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li> -->
        </ul>
      </div>
      <div class="one_third">
        <h6 class="heading">CONTACT</h6>
        <!-- <p class="nospace btmspace-15">Est integer molestie sapien ac enim aliquam ligula maecenas.</p> -->
        <form method="POST"  id="contactForm">
          <fieldset>
            <!-- <legend>Newsletter:</legend> -->
            <input class="btmspace-15" type="text" id="Name" name="Name" placeholder="Name">
            <input class="btmspace-15" type="text" id="Email" name="Email" placeholder="Email">
            <textarea class="btmspace-15" type="text" id="Message" name="Message" placeholder="your message" ></textarea>
            <button class="btn" id="submit1" type="submit1" name="submit1" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <div class="one_third">
        <h6 class="heading">MENU</h6>
        <ul class="nospace linklist">
          <li><a href="#"><i class="fas fa-home">Home</i></a></li>
          <li><a href="#"><i class=" fas fa-info-circle">About</i></a></li>
          <li><a href="#"><i class="far fa-life-ring">Services</i></a></li>
          <li><a href="#"><i class="fas fa-edit">Registration</i></a></li>
          <li><a href="#"><i class=" fas fa-phone-square">Contact</i></a></li>
        </ul>
      </div>
      <!-- <div class="one_quarter">
        <h6 class="heading">Id eleifend tellus erat</h6>
        <ul class="nospace clear latestimg">
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        </ul>
      </div> -->
    </div>
    <!-- ################################################################################################ -->
    <figure id="ctdetails">
      <ul class="nospace group">
        <li class="one_half first">
          <div class="clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
        </li>
        <li class="one_half">
          <div class="clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> SocietyMaintance@gmail.com</span></div>
        </li>
        <!-- <li class="one_third">
          <div class="clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
        </li> -->
      </ul>
    </figure>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Society<span>Maintence</span> </a></p>
    <p class="fl_right">Template by <a href="#" title="Free Website Templates">Maintenance</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

<!-- JAVASCRIPTS -->

<script src="layout/scripts/script.js"></script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



<!-- contact php -->
<?php

include 'connection.php';

if(isset($_POST['submit1']))
{



  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Message = $_POST['Message'];

  $dup = mysqli_query($con, "select * from contact where name ='$Name' ");


  if (mysqli_num_rows($dup)>0)
  {
    // echo"it is same duplicate entry";
  }
  else
  {

  $insertquery = "insert into contact(name,email,message) values('$Name','$Email','$Message') ";

  if(mysqli_query($con, $insertquery))
 {
  //  echo"insertred value";
 }
 else {
  // $success = '';
  echo "Error: " . $insertquery . "<br>" . $con->error;
}
  }

}

?>

<!-- sign up php -->
<?php

include 'connection.php';

if(isset($_POST['signup']))
{



  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $Society_name = $_POST['Society_name'];
  $phone_no = $_POST['phone_no'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];

  $dup = mysqli_query($con, "select * from signup1 where email =' $email' ");


  if (mysqli_num_rows($dup)>0)
  {
    // echo"it is same duplicate entry";
  }
  else
  {

  $insertquery = "insert into signup1(firstname,lastname,societyname,phoneno,email,password,confirmpassword) values('$first_name','$last_name','$Society_name','$phone_no','$email','$password','$confirmpassword') ";

  if(mysqli_query($con, $insertquery))
 {
  //  echo"insertred value";
 }
 else {
  // $success = '';
  echo "Error: " . $insertquery . "<br>" . $con->error;
}
  }

}

?>



<!-- login php -->
<?php

include 'connection.php';

if(isset($_POST['login']))
{



  
  $email = $_POST['email'];
  $password = $_POST['password'];

  $dup = mysqli_query($con, "select * from login1 where email ='$email' ");


  if (mysqli_num_rows($dup)>0)
  {
    // echo"it is same duplicate entry";
  }
  else
  {

  $insertquery = "insert into login1(email,password) values('$email','$password')";

  if(mysqli_query($con, $insertquery))
 {
  //  echo"insertred value";
 }
 else {
  // $success = '';
  echo "Error: " . $insertquery . "<br>" . $con->error;
}
  }

}

?>
