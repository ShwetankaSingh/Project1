</!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../charity/css/bootstrap.min.css">
  <script src="../charity/jquery.min.js"></script>
  <script src="../charity/js/bootstrap.min.js"></script>
<script>
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
  document.getElementById("lat").value=position.coords.latitude;
    document.getElementById("lon").value=position.coords.longitude;

   
}
</script>

<style>
	/* Add a dark background color with a little bit see-through */ 
.navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: yellow !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn green */
.dropdown-menu li a:hover {
	color:yellow !important;
    background-color: green !important;
    
}
.bg-grey3 {
      background-color:black;
      color:yellow;
      padding-top: 40px;
  }
.container {
    padding: 80px 120px;
}
 .bg-grey1 {
      background-color:#99ff99;
  }
.container-fluid {
      padding: 60px 50px;
  }
  .container-fluid2 {
      padding: 15px 15px;
  }
.bg-grey {
      background-color:#ffff99;
  }
  .bg-grey2 {
      background-color:#99ff99;
  }

  .carousel-inner img {
    -webkit-filter: grayscale(30%);
    filter: grayscale(30%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
}

.carousel-caption h1 {
    color: yellow !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
}
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  

</style>
</head>
<body id="mypage">>
	<!------nav--->
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
  </button>
      <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-circle" style="margin-top:-23px "><b>SMILE</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myCarousel">HOME</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">VOLUNTEER</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">DONATIONS
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" id="food">FOOD</a></li>
            <li><a href="#" id="blood" >BLOOD</a></li>
            <li><a href="#" id="mybooks">BOOKS</a></li>
             <li><a href="#">ORGAN</a></li>
             <li><a href="#">MONEY</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">NEEDY
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" id="needy">REGISTER</a></li>
            <li><a href="needy_blood">URGENT NEED</a></li>
          </ul>
        </li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  
</nav>

  
<!---carousel--->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/charity1.jpg" alt="charity1_image">
      <div class="carousel-caption">
        <h1>SERVICE TO OTHERS IS THE RENT <br>YOU PAY FOR YOUR ROOM HERE ON EARTH</h1>
        <h2>Help everyone.</h2>
      </div> 
    </div>

    <div class="item">
      <img src="images/charity2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h1>EVEN A SMILE IS CHARITY</h1>
        <h2>Take a smile.</h2>
      </div> 
    </div>

    <div class="item">
      <img src="images/charity3.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h1>GUIDE US TO THE<br>STRAIGHT PATH</h1>
        <h2>Make the World A Better Place For Poor.</h2>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---container-->
<div class="container text-center">
  <h3><b>OUR MISSION</b></h3>
  <center><img class="img-responsive"src="images/download.png"></center>
  <p><b>We love to help!</b></p>
  <p>We have created a fictional charity website.......</p><br>
</div>

<!-- Container (Services Section) -->
<div id="services"class="container-fluid text-center bg-grey1">
  <h2><b>SERVICES</b></h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/transfusion.png"><br><br>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">BLOOD</button>
  <div id="demo" class="collapse">
    <b>Our organization provide the facility of blood donation where nearby volunteers can donate the blood to the needy person.</b>
  </div>
    </div>
    <div class="col-sm-4">
      <img src="images/groceries.png">
      <br><br>
      <button type="button" class="btn btn-info" data-toggle="collapse" 
data-target="#d">FOOD</button>
  <div id="d" class="collapse">
    <b>Our organization offers the facility of providing food to the needy person as well as to the orphanage,oldage home and to the slum areas.</b>
  </div>
    </div>
    <div class="col-sm-4">
      <img src="images/shiirt.png">
      <br><br>
     <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#de">CLOTH</button>
  <div id="de" class="collapse">
    <b>Our organization offers the facility of providing cloth to the needy person as well as to the orphanage,oldage home and to the slum areas.</b>
  </div>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
           <img src="images/shelter.png">
                      <br><br>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#dem">SHELTER</button>
  <div id="dem" class="collapse">
  <b>Our organization offers the facility of providing temporary shelter to the needy person,who lost their house in any natural disaster.</b>
  </div>
    </div>
    <div class="col-sm-4">
      <img src="images/money.png">
                      <br><br>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mo">MONEY</button>
  <div id="mo" class="collapse">
       <b>Our organization provide the facility where one can help needy person by giving money.</b>
       </div>
    </div>
    <div class="col-sm-4">
       <img src="images/scholarship.png">
           <br><br>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#emo">BOOKS</button>
  <div id="emo" class="collapse">
   <b>It is seen that almost every child of middle or high class always buy new books for new session whereas there are many children who do not complete their study due to unavailability of books. So here one can donate books to the needy children by doing register oneself as a volunteer in book section.</b>
  </div>
    </div>
  </div>
</div>


 
<!---------------About us-------------->
<!------------about us--->
                <div id="about" class="container-fluid bg-1 text-center" style="background-color:#99ff99;">
                 <b><h2>ABOUT US</h2></b><br>
<div class="row">
<div class="col-sm-3"><img src="../images/volunteer.png" height="150" width="150"></div><div class="col-sm-9">
                        <p>In a country that wastes billions of pounds of food each year,there are still many people who are hungry and homeless.Yet every day,there are </p>
              <p>millions of people who do not get the meals they need to thrive. We work to get nourishing food,shelter,blood,organs donation,books,basic home</p>
            <p>amenities,money donations for those in need from the people who have enough and want to help needy ones by donating and bringing smile to </p>
            <p> unhappy faces .At the same time, we also seek to help the people we serve build a path to a brighter, food-secure future.</p>
            
              
            <p>Smile is a non-profit organistion dedicated to encouraging and empowering people to help people by offering food,clothing,shelter,blood,basic home</p>
                        <p> amenities and aid to needy people nearby them.We make efforts to reduce the miseries faced by the children in India.</p>

</div></div>
</div>

<!-------contact------------------------------------>
  

   <div id="contact" class="container-fluid bg-grey" style="background-color:#1f1f2e;">
  <h2 class="text-center"><b><font color=" #e6e6e6">CONTACT US</font></b></h2><br>
  <div class="row">
    <div class="col-sm-5">
     <font color="white"> <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Lucknow(U.P.),India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> smile@gmail.com.com</p></font>
    </div>
    <form method="get" action="contact.php">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div></form>
  </div>
</div>
</div>



               <!-------------------------------- login Modal--------------------------------------------- -->
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" width="500px">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="get" action="logcode.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" name="pass" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#" id="reg">REGISTER</a></p>
          <p>Forgot <a href="#" id="my">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 




   <footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
  $(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== ""){
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>



     <!-- register Modal -->
  <div class="modal fade" id="Modal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> NEW REGISTRATION</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="get" action="regcode.php">
               <div class="form-group" >
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
             
            <div class="form-group">
              <label for="cno"><span class="glyphicon glyphicon-eye-open"></span>Contact_Number</label>
              <input type="text" class="form-control" id="cno" name="cno" placeholder="Enter contact_no.">
            </div>
             <div class="form-group">
              <label for="adhaar"><span class="glyphicon glyphicon-user"></span> Adhaar_number</label>
              <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter adhaar no.">
            </div>
              <div class="form-group">
              <label for="gender"><span class="glyphicon glyphicon-user"></span>Gender</label>
             <input type="radio" name="gen" value="Male">Male
              <input type="radio" name="gen" value="Female">Female            </div>
               <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="pass" placeholder="Enter password">
            </div>
             <div class="form-group">
              <label for="rpsw"><span class="glyphicon glyphicon-eye-open"></span>Confirm Password</label>
              <input type="password" class="form-control" id="rpsw"  name="rpass" placeholder="Re-Enter password">
            </div>

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> REGISTER</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
<script>
$(document).ready(function(){
    $("#reg").click(function(){
        $("#Modal1").modal();
    });
});
</script>



         <!--Forgot Modal -->
  <div class="modal fade" id="Modal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="adhaar"><span class="glyphicon glyphicon-user"></span> Enter Adhaar Number</label>
              <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter adhaar_no.">
            </div>
            
                          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> GET PASSWORD</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#my").click(function(){
        $("#Modal2").modal();
    });
});
</script>


 <!-- donor blood Modal -->
  <div class="modal fade" id="bModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Online Registration form for blood Donor</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
<form class="form-horizontal" role="form" method="get" action="bloodcode.php">
              <div class="form-group" >
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name">
            </div>
           
            <div class="form-group">
            <label for="dob" >DOB:</label>
            <input type="dob" name="dob" class="form-control datepicker" id="dob" placeholder=" Date of Birth">
</div>
              <div class="form-group">
              <label for="cno"><span class="glyphicon glyphicon-eye-open"></span>Contact_Number</label>
              <input type="text" class="form-control" id="cno" name="cno" placeholder="Enter contact_no.">
            </div>
             <div class="form-group">
              <label for="adhaar"><span class="glyphicon glyphicon-user"></span> Adhaar_number</label>
              <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter adhaar no.">
            </div>
              <div class="form-group">
              <label for="gender"><span class="glyphicon glyphicon-user"></span>Gender</label>
             <input type="radio" name="gen" value="Male">Male
              <input type="radio" name="gen" value="Female">Female            </div>
               <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
               <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password">
            </div>
              <div class="form-group">
              <label for="latit"><span class="glyphicon glyphicon-user"></span>Latitude</label>
              <input type="text" class="form-control" id="lat" name="lat">
            </div>
               <div class="form-group">
              <label for="long"><span class="glyphicon glyphicon-user"></span>Longitude</label>
              <input type="text" class="form-control" id="lon" name="lon">
            </div>
             <div class="form-group">
              <button type="button" class="btn btn-success" onclick="getLocation()">GET LOCATION</button></div>
            <div class="form-group">
<label for="Have you donated previously">Have you donated previously:</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously1" value="Yes">Yes
</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously2" value="No">No
</label>
 
</div>


 

<div class="form-group">
<label for="ift" >If yes,then how many times:</label>
<input type="number" name="ift" class="form-control" id="ift ">
</div>
         
          <div class="form-group">
  <label for="bgroup"  > Blood Group:</label>
  <select class="form-control"  name="bgroup"  id="bgroup"placeholder="Blood Group">
  <option>Choose</option>
  <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
  <option value="B-">B-</option>
    <option value="O+">O+</option>
  <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option1 value="O-">O-</option>
  </select></div>

      
<div class="form-group">
<label for="Did you have any discomfort during/after donation?" >Did you have any discomfort during/after donation?:</label>
<label class="radio-inline">
<input type="radio" name="disany" id="Did you have any discomfort during/after donation?1" value="Yes">Yes
</label>
<label class="radio-inline">
<input type="radio" name="disany" id="Did you have any discomfort during/after donation?2" value="No ">No
</label>
 
</div>
   <div class="form-group">
<label for="In the last 6 months have you had any history of the following" >In the last 6 months have you had any history of the following:</label><br>
<label class="radio-inline">
<input type="radio" name="l6" id="In the last 6 months have you had any history of the following1" value="Unexplained weight loss">Unexplained weight loss
</label>
<label class="radio-inline">
<input type="radio" name="l6" In the last 6 months have you had any history of the following2" value="Repeated Dirrhoea">Repeated Dirrhoea
</label>
<label class="radio-inline">
<input type="radio" name="l6" id="In the last 6 months have you had any history of the following3" value="Swollean glands">Swollean glands
</label>
<label class="radio-inline">
<input type="radio" name="l6" id="In the last 6 months have you had any history of the following4" value="Continuous low-grade fever">Continuous low-grade fever
</label>
<label class="radio-inline">
<input type="radio" name="l6" id="In the last 6 months have you had any history of the following5" value="In the last 6 months have you had any history of the following">Tattooing
</label>
<label class="radio-inline">
<input type="radio" name="l6" id="In the last 6 months have you had any history of the following6" value="Tattooing">Ear Piercing
</label>
</div>
  <div class="form-group">
<label for="For women donors," >For women donors,</label>
<label for="Are you pregnant" >Are you pregnant :</label>
<label class="radio-inline">
<input type="radio" name="preg" id="Are you pregnant1" value="Yes">Yes
</label>
<label class="radio-inline">
<input type="radio" name="preg" id="Are you pregnant2" value="No">No
</label><br><br>
<label for="Have you had an abortion in the last 3 months " >Have you had an abortion in the last 3 months :</label>
<label class="radio-inline">
<input type="radio" name="l3" id="Have you had an abortion in the last 3 months1" value="Yes">Yes
</label>
<label class="radio-inline">
<input type="radio" name="l3" id="Have you had an abortion in the last 3 months2" value="No">No
</label>

</div> 
   <div class="form-group">
<label for="Do you suffer from or have suffered from any of the following diseases?" >Do you suffer from or have suffered from any of the following diseases?:</label><br>
<br>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?1" value="Heart Disease">Heart Disease
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?2" value="Cancer">Cancer
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?3" value="Diabetes">Diabetes
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?4" value="Allergic disease">Allergic disease
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?5" value="Typhoid(last 1 yr)
</label>">Typhoid(last 1 yr)
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?6" value="Lung Disease">Lung Disease
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?1" value="Kidney Disease">Kidney Disease
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?2" value="Jaundice(last 1 yr)">Jaundice(last 1 yr)
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?3" value="Tuberculosis">Tuberculosis
</label>
<label class="radio-inline"><input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?4" value="Hepatitis B/C">Hepatitis B/C
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?5" value="Epilepsy">Epilepsy
</label>
<label class="radio-inline">
<input type="radio" name="disease" id="Do you suffer from or have suffered from any of the following diseases?6" value="Fainting spells">Fainting spells
</label>+  `  
</div>

<div class="form-group">
<label for="I understand that ">I understand that:</label>
<ul>
<li>blood donation is really voluntary act and no inducement or renumeration has been offered.<\li>
<li>donation of blood/component is a medical procedure and that by donating voluntarily,I accept the risk associated with this procedure.</li>
<li>My blood will be tested for Hepatitis B,Hepatitis c ,malaria Parasite,HIV/AIDs and veneral disease in addition to any other screening tests required to ensure blood safety.</li>
</ul></div>



         

          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
         
        </div>
      </div>
      
    </div>
  </div> 

 
<script>
$(document).ready(function(){
    $("#blood").click(function(){
        $("#bModal").modal();
    });
});
</script>

 <!-- Modal -->
  <div class="modal fade" id="fModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Donation For Food</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
<form class="form-horizontal" role="form" method="get" action="foodcode.php">
                <div class="form-group">
        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" >
        </div>
   
    
  <div class="form-group">
                 <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" name="lname">
        </div>
    
    
  <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Adress" name="email">
       </div>
  
  
    <div class="form-group">
          <input type="text" class="form-control" id="cno" name="cno" placeholder="Contact No." name="cno">
        </div>
      
   <div class="form-group">
                <input type="text" class="form-control" id="age" placeholder="Age" name="age">
        </div>
    
  
  <div class="form-group">
         
        <input type="text" class="form-control" id="organization" placeholder="School/College/Company/Organization" name="organization">
        </div>
    
    
   <div class="form-group">
         <input type="text" class="form-control" id="state" placeholder="State" name="state">
        </div>
    
  
  
   <div class="form-group">
          <input type="text" class="form-control" id="City" placeholder="City" name="city">
        </div>
           <div class="form-group">
<label for="What do you want you donate">What do you want you donate:</label>
<label class="radio-inline">
<input type="radio" name="don" id="don" value="Food">Food
</label>
<label class="radio-inline">
<input type="radio" name="don" id="don" value="Clothing">Clothing
</label>
<label class="radio-inline">
<input type="radio" name="don" id="don" value="Shelter">Shelter
</label>
 
</div>
  
    
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
      </div>
      
    </div>
  </div> 

 
<script>
$(document).ready(function(){
    $("#food").click(function(){
        $("#fModal").modal();
    });
});
</script>


<!--Needy ------              --------------------- Modal -->
  <div class="modal fade" id="nModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> REGISTRATION FOR NEEDY</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter your name">
            </div>
             <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your emailId">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
              <div class="form-group">
              <label for="gender"><span class="glyphicon glyphicon-user"></span>Gender</label>
             <input type="radio" name="gen" value="Male">Male
              <input type="radio" name="gen" value="Female">Female            </div>
             <div class="form-group">
              <label for="state"><span class="glyphicon glyphicon-user"></span> State</label>
              <input type="text" class="form-control" id="state" placeholder="Enter state">
            </div>
             <div class="form-group">
              <label for="city"><span class="glyphicon glyphicon-user"></span> City</label>
              <input type="text" class="form-control" id="city" placeholder="Enter your city">
            </div>
             <div class="form-group">
              <label for="latit"><span class="glyphicon glyphicon-user"></span>Latitude</label>
              <input type="text" class="form-control" id="lat" name="lat">
            </div>
               <div class="form-group">
              <label for="long"><span class="glyphicon glyphicon-user"></span>Longitude</label>
              <input type="text" class="form-control" id="lon" name="lon">
            </div>
             <div class="form-group">
              <button type="button" class="btn btn-success" onclick="getLocation()" >GET LOCATION</button></div>
             <div class="form-group">
              <label for="contact"><span class="glyphicon glyphicon-user"></span> Contact_No.</label>
              <input type="text" class="form-control" id="cno" placeholder="Enter your contact">
            </div>
             <div class="form-group">
              <label for="adhaar"><span class="glyphicon glyphicon-user"></span> Adhaar_no.</label>
              <input type="text" class="form-control" id="adhaar" placeholder="Enter your name">
            </div>
                        <div class="form-group">
<label for="Have you donated previously">Need for:</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously1" value="Food">Food
</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously2" value="Clothing">Clothing
</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously2" value="Shelter">Shelter
</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously2" value="Blood">Blood
</label>
<label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously2" value="Organ">Organ
</label>
 <label class="radio-inline">
<input type="radio" name="dp" id="Have you donated previously2" value="Money">Money
</label>
</div>

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#needy").click(function(){
        $("#nModal").modal();
    });
});
</script>
</body>
</html>