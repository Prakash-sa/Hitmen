
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
<link rel="icon" type="image/png" sizes="16*16" href="css/img/svnit.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></link>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/first.css"></link>
     
     
     <style>
         /*--starting of loading--*/
.spinner {
  width: 40px;
  height: 40px;
  background-color: #333;

  position: absolute;
top: 48%;
left: 48%;
  -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
  animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
  0% { -webkit-transform: perspective(120px) }
  50% { -webkit-transform: perspective(120px) rotateY(180deg) }
  100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
}

@keyframes sk-rotateplane {
  0% { 
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg) 
  } 50% { 
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg) 
  } 100% { 
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}

.spinner-wrapper {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ff6347;
z-index: 999999;
}
/*--loading--*/


@-webkit-keyframes background {
  0% { background-color: #99f; }
  33% { background-color: #9f9; }  
  67% { background-color: #99f; }
  100% { background-color: #9f9; }
}

@keyframes background {
  0% { background-color: #99f; }
  33% { background-color: #9f9; }  
  67% { background-color: #99f; }
  100% { background-color: #9f9; }
}
         
     .message{overflow: scroll;height: 300px;width: 70%;margin-top: 20px;background-color:aqua;margin-left: 15%; padding-bottom: 15px;}
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
      cursor: progress;
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

<script>
$(document).ready(function() {
//Preloader
$(window).load(function() {
    
            $('.spinner-wrapper').delay(5000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(5000).css({'overflow':'visible'});
});
});
</script>


<!--end of javascript-->



</head>
<body>

<div class="spinner-wrapper">
<div class="spinner"></div>
</div>


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
      <li class="active"><a href="index.php">HOME</a></li>
      <li><a href="events.php">EVENTS</a></li>
      <li><a href="research.php">RESEARCH</a></li>
      <li><a href="gallery.php">GALLERY</a></li>
      <li><a href="comment.php">COMMENT</a></li>
      
    
    </ul>
    <ul class="nav navbar-nav navbar-right" class="progress">
     <li><a onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
   </ul>
</div>
</nav>
<!--end of navigation bar-->
   <center> <img src="css/img/elec.jpeg" style="height:100px;width:750px;" alt="elec" id="ele" vspace="10" class="img-responsive" >
    </center>
    
    
    
    <!-- login form-->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'"
    class="close" title="Close Modal">&times;</span>

      <center>
      <form class="modal-content animate" method="POST">       
         <div class="imgcontainer">
          <img src="css/img/avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="form-group">
    <label ><?php echo $log ; ?></label>
  </div>
        <div class="form-group">
    <label ><?php echo $log2; ?></label>
  </div>
        <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" placeholder="name" class="form-control" id="name" name="names">
  </div>

        <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" placeholder="Enter your Email ID" class="form-control" id="email" name="email">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    </center>
    </div>



    <!--/login-form-->
   
    <!-- Slideshow container -->
    <!--starting of slider-->
    <div class="jumbotron">
<div class="container">
    <div class="wrapper">
        <center>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner">
    <div class="item active">
      <img src="css/img/index.png" alt="First" class="slide" style="width:1000px;height: 608px; " />
    </div>

    <div class="item">
      <img src="css/img/index.jpeg" alt="Second" class="slide" style="width:1000px;height: 608px; " />
    </div>

      
      
    <div class="item">
      <img src="css/img/26219694_1480365712061784_7345392360284438494_n.jpg" alt="Third" class="slide" style="width:1000px;height: 608px;" />
    </div>
      <div class="item">
      <img src="css/img/aa.png" alt="Third" class="slide" style="width:1000px;height: 608px;" />
    </div>
      <div class="item">
      <img src="css/img/26231765_1480362048728817_7209997193788692162_n.jpg" alt="Third" class="slide" style="width:1000px;height: 608px;" />
    </div>
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
        </center>
    
    
    



   
<!--/slider-->
    <font color="#faf0e6">
<center>
      

          <center><h2>Current Head Of Department</h2</center>
            <br />
        <center><img src="css/img/7323sns.jpg" classs="img-responsive" alt="Card image" style="margin-left:50px;"></center>
        <div style="font-size:20px;">
        <td width="30%" valign="top" style="vertical-align: top;"><hr>
			<p><b>Dr. Shambhu N. Sharma</b><br>
			<b>Ph. D.</b><br>
			<b>Associate Professor</b></p>
			<p><b>Mobile:</b> 8866093530</p>												
			<p><b>Office Phone:</b> (O)0261-2201649; 1</p>		
			<b>E-mail:<a href="http://www.sns.eed.svnit.sc.in"></b> sns.eed.svnit.ac.in</a><br>
			<b>Personal E-mail:</b> <br>

		</td>
      </div>
              </font>
</center>
<!--paragraph-->
<section id="page">
<div class="message bod">

        <center>

            <h2 class="bg-info text-white"><span>MESSAGE FROM H.O.D.</span></h2>
            </center>
            <section class="bg-info text-white" style="font-size:20px">
        <p>The universality of Electrical Engineering discipline spans from theory, applications, technological development and finally its societal implications. The Electrical Engineering Department runs an undergraduate program in Electrical Engineering, two master programs in Power Electronics and Electric Drives, Power systems. The Department runs the Doctoral program in three major groups, Power Electronics and Electric Drives, Control and Instrumentation and Power Systems. In recent years, the Department has attracted sizable number of Research Scholars under different categories.</p>

<p>We pursue research in emerging topics as well established topics. The Department is actively engaged in executing research projects funded from the Department of Science and Technology, Council of Scientific and Industrial Research etc. The Department has generated revenues by providing testing and consultancy services to industrial clients as well. The Department sincerely looks for contributing to the technological development of the nation.</p>

<p>The Department provides Faculty-Student interactive environment with the intent of generating better ideas and setting new directions by discussions. We encourage students to spend greater time in the Department. We believe in teaching commitment as well as research excellence. In recent years, the Department has achieved substantial outreach activities by participating in the prestigious scientific activities in the country and abroad as well as organizing courses on emerging topics for dissemination of knowledge among younger generations.</p>

<p>The Department actively invites alumni inputs for making the Department better and adding new dimensions to our activities. The greater alumni interaction will add to the greater growth trajectory of the Department. We value your inputs and would be given full considerations.</p>

<p>Finally, we encourage associations of Aspirants, looking for the undergraduate and advanced learning, in the different academic program of the Department as well.</p>

<p>Sincerely,<p>

<p>Dr. S. N. Sharma</p>
<p>Head, Electrical Engineering Department </p>
</div>
</section>
              </section>
              </div>
<!--/paragraph-->
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
