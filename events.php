
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

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <title>
ELECTRO-SVNIT
</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image/png" sizes="16*16" href="css/img/svnit.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  </script>
  <style>
      
      #wrapper{width: 1080px;background-color:skyblue;margin: 0 auto;border: 1px solid #4285F4;padding:10px;margin-bottom: 30px;}
      
      
      
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
            <li class="active"><a href="events.php">EVENTS</a></li>
            <li><a href="research.php">RESEARCH</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
              <li><a href="comment.php">COMMENT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
           <li><a onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         </ul>
        </div>
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

 <div class="jumbotron">
<div class="container">
    <div class="wrapper">
          <!--/login-form-->
        <div align="center" class="embed-responsive embed-responsive-16by9">
    <center><video autoplay loop class="embed-responsive-item">
        <source src="css/video/dextrix.mp4" type="video/mp4">
    </video></center>
</div>
        
    
    <div class="main">
<font color="#faf0e6">
  <div id="wrapper" style="font-size: 30px;">
        <center><h2>About EES</h2></center>
        <center><p>It is a student chapter formed under the Electrical Engineering Department of Sardar Vallabhbhai National Institute of Technology, Surat (SVNIT).</p></center>
        <center><h3>MISSION</h3></center>
        <p>A healthy student chapter to organize student centered technical and non-technical activities in order to provide a platform for knowledge sharing and intra-departmental social interaction.</p>
        
        <center  style="font-style:em">

            <h2 class="bg-info text-white"><span class="h1 text-info">AATISH</span></h2></center>
         <section style="font-size:30px">
         <p>It is the the annual tech-fest of the ELECTRICAL ENGINEERING SOCIETY (EES), SVNIT. Guest lectures, workshops, informals and much more awaits!!
        
        
        
        <div class="img-responsive"><img src="css/img/aatish2.jpg" alt="Second" class="slide" style="width:1000px;height: 608px; " /></div>
             <p>This is the link to see photos of <a href="https://www.facebook.com/svnit.ees/photos/ms.c.eJxNVFmyZTEI2lGXY4z731jXwRe8v5QSQKNGR5lklbX1iX86gHyAi~;4B2m1y7PjxB5z2zi7t15KBCtEHxABKQOVrOXVZoQCiyHFGRz7AHRxmD7BARdcKg1KjDrvTQlJvtFxyqI~_OXGFoCQJ2hqPfK6kfEMI8El7KLwGbCgZUU6F3leLZPlsB6fkCCvt0ZPvTEdkfcF~_LBVos2eKVaLlCAAFtph4D1AOyPy9ZHHbE~_YRZvIAcw85~_w7ZsPBv~_nk016JCXekzLZUvYVPSr8IR99~_clT0BH6z4LHXSbY65oLkepUml0AOhYYQCKHFiHvFyHIwCKAaVhkzXp5fSEbMsB~_808IgHwlRBHYmyJwijvzU39e0W61stwcNgj3eonIAizn0FB2LY0Zps0F57gSN8WCJMdg8w66OYBYQw5BJM7~;NmRk8ehOVFUmOyg4CWYh4~_wyy3saXFZc2hJzsWwQeVOpaPjNGc7y8~_DcgyJydmFGdL4yQP2qfRIzfQvOSAshPbPTK5fyHZxUOQ8Um387OjHYTO5XQfrnJZHaubfK8UWvT0cvcBXcf2FbDKA8lfOlRJeKRtAFzActuD5tDOAbQVusvreD~_yYv0NvHjDnDMjDZ2HodkLeD2SNpXN~_D0usVHDYFqNjleYAvgDOpwo5LgAproOMsEthVgCO0u2k3ny2apTSnI3Ss6QIuX5ChjDnF3MbUpf~;GV514A~-~-.bps.a.1494719403959748.1073741837.540200286078336/1494720577292964/?type=3&theater">Aatish</a></p>
      </section>
    
        
        
        <center  style="font-style:em">

            <h2 class="bg-info text-white"><span class="h1 text-info">DEXTRIX</span></h2></center>
        
      <p>to know what happens inside the general electrical gadgets and machines, EES brings *Dextrix* - exclusively for first yearites. We have models, machines, poster presentations and research project explanations which will make you aware about day-to-day gadgets. Open and recommended for freshers of all branches.</p>
        <div class="img-responsive"><img src="css/img/dextrix.jpg" alt="Second" class="slide" style="width:600px;height: 1000px; " /></div>
        <center  style="font-style:em">

            <h2 class="bg-info text-white"><span class="h1 text-info">QUIZIYAPA</span></h2></center>
      <p>The most innovative rounds ever in quizzing circuit</p>
           <div class="img-responsive"><img src="css/img/quziappa.jpg" alt="Second" class="slide" style="width:900px;height: 900px; " /></div>
            
            <p>Please like the page for more update</p>
        <a href="https://www.facebook.com/svnit.ees/">Like EES</a>
            <p>Members</p>

        <p>To contact us live comment on facebook</p>
        <a href="https://www.facebook.com/rashmit.pankhania.18"></a>
        <a href="https://www.facebook.com/Cyberrajat"></a>
        <a href="https://www.facebook.com/svnit.ees/videos/1481284028636619/?hc_ref=ARRBGaY9fkiAuCic6ebrejpBJ-byP4Pf4qHSGIyJLghxKZgDXa8slD7ehFwm3EGPItA&fref=nf"><p>NEW EVENT:Aatish</p></a>
            
            
    
     </div>
</font>
</div>
</div>
     </div>
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
