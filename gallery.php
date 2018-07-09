
<?php
$host='localhost';
$user='root';
$password='';
$db='electro';
$con=mysqli_connect($host,$user,$password);
if(!$con){
    echo 'Not Connected To Server';
}
if(!mysqli_select_db($con,$db)){
    echo 'Database Not Selected';
}
$log="Please Sign Up";
$log2="";
if(isset($_POST['names']) && !empty($_POST['email'])){

$name=$_POST['names'];
    $em=$_POST['email'];
 $i_git=" INSERT INTO SignUp (User,email) VALUES ('".$name."','".$em."');";                                               
if(!mysqli_query($con,$i_git)){
  $log2="You Are Successfully SignUp";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  ELECTRO-SVNIT
  </title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" type="image/png" sizes="16*16" href="css/img/svnit.png"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></link>
  <script rel="script" href="js/first.js"></script>
  <link rel="stylesheet" type="text/css" href="css/w3school.css"></link>
  <link rel="stylesheet" type="text/css" href="css/first.css"></link>




  <script>
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
    <!--end of javascript-->

  </script>


  <style>
      
  * {box-sizing: border-box}
  /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  /* Add a background color when the inputs get focus */
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity:1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }

  /* Add padding to container elements */
  .container {
    padding: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 45%; /* Could be more or less, depending on screen size */
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
      width: 100%;
    }
  }
</style>
</head>
<body>
  <!--starting of navigation bar-->
  <nav class="navbar navbar-inverse navbar-fixed ">
    <div class="container-fluid">
       <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-fixed">
        <li><a href="http://www.svnit.ac.in/"><span class="glyphicon glyphicon-home"></a></li>
        <li ><a href="index.php">HOME</a></li>
        <li><a href="events.php">EVENTS</a></li>
        <li><a href="research.php">RESEARCH</a></li>
        <li class="active"><a href="gallery.php">GALLERY</a></li>
          <li><a href="comment.php">COMMENT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     </ul>
    </div>
  </nav>
  <!--end of navigation bar-->
     <center> <img src="css/img/elec.jpeg" style="height:100px;width:750px;" alt="elec" id="ele" vspace="10" >
      </center>
      <!-- login form-->
      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'"
      class="close" title="Close Modal">&times;</span>

        <center>
        <form class="modal-content animate" action="#">
          <div class="imgcontainer">
            <img src="css/img/avatar.png" alt="Avatar" class="avatar">
          </div>

          <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" placeholder="name" class="form-control" id="name" name="names">
  </div>

        <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" placeholder="Enter your Email ID" class="form-control" id="email" name="email">
  </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </form>
      </center>
      </div>



      <!--/login-form-->
<div class="container">
     <div align="center" class="embed-responsive embed-responsive-16by9">
    <center><video autoplay loop class="embed-responsive-item">
        <source src="css/video/aatish.mp4" type="video/mp4">
    </video></center>
</div>
 
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="css/img/aatish1.jpg" alt="First" class="slide" style="width:1000px;height: 608px; " >
    </div>

    <div class="item">
      <img src="css/img/ees.jpeg" alt="Second" class="slide" style="width:1000px;height: 608px; " >
    </div>

    <div class="item">
      <img src="css/img/1.jpg" alt="Third" class="slide" style="width:1000px;height: 608px;">
    </div>
  </div>
      <div class="item">
      <img src="css/img/2.jpg" alt="Third" class="slide" style="width:1000px;height: 608px;" >
    </div>
      <div class="item">
      <img src="css/img/3.jpg" alt="Third" class="slide" style="width:1000px;height: 608px;">
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  
  <!--/slider-->


     <div align="center" class="embed-responsive embed-responsive-16by9">
    <center><video autoplay loop class="embed-responsive-item">
        <source src="css/video/dextrix.mp4" type="video/mp4">
    </video></center>
</div>
    
    <!--starting of slider-->
       <!--starting of slider-->




    


   
<!--/slider-->
       
       
       

    </div>
<!--footer-->

<footer class="page-footer center-on-small-only stylish-color-dark">
<div id="low">
    <!--Footer Links-->
    <div class="container">
<table>
            <!--First column-->
            <div class="col-md-4">
              <center><td><tr>  <b><h3 class="title mb-4 mt-3 font-bold">Contact Us</h3></b></tr></center>
              <tr>  <p>Please Sign Up to get Latest Update of events</p></tr></td>
            </div>
        </table>
            <!--/.First column-->

<br />
    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <table>
            <td>
                <tr><h5 id="tab">Register for free</h5><tr>
            </td>
            <td><tr><a onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger btn-rounded" id="tab">Sign up!</a></tr></td>
        </table>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="social-section text-center" >
        <table>

            <td><a href="" class="btn-floating btn-sm btn-fb" style="padding-right:130px;"><i class="fa fa-facebook"> </i></a></td>
            <td><a href="" class="btn-floating btn-sm btn-tw" style="padding-right:130px;"><i class="fa fa-twitter"> </i></a></td>
            <td><a href="mailto:sainiprakash525@gmail.com" class="btn-floating btn-sm btn-li" style="padding-right:130px;"><i class="fa fa-envelope"> </i></a></td>
           </table>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid" style="padding-top:20px">
            © 2018 Copyright: <a href="https://www.svnit.ac.in">SVNIT.com </a>

        </div>
    </div>

    <!--/.Copyright-->
</div>
</div>
</footer>
</body>



</html>
