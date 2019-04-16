</!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../charity/css/bootstrap.min.css">
  <script src="../charity/jquery.min.js"></script>
  <script src="../charity/js/bootstrap.min.js"></script>

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
        <li><a href="#">HOME</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#" id="myBtn">VOLUNTEER</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">DONATION
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">FOOD</a></li>
            <li><a href="#">BLOOD</a></li>
            <li><a href="#">BOOKS</a></li>
             <li><a href="#">ORGAN</a></li>
             <li><a href="#">MONEY</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">NEEDY
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="needy_food">FOOD</a></li>
            <li><a href="needy_blood">BLOOD</a></li>
            <li><a href="needy_books">BOOKS</a></li> 
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
<!---------Volunteer------>
<div id="volunteer" class="container-fluid2 text-center bg-grey">
<h3><b>Lets Change the world we all together, join us now as a volunteer<br><br>
  <a href="#"class="btn btn-info" role="button" data-toggle="modal" data-target="#myModal2">Become a Volunteer</a>
</b>
</h3>
</div>
<!-------------modal------------->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#" id="reg">Register</a></p>
          <p>Forgot <a href="#" id="pass">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<!----------reg---------->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Register</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter name">
            </div>
            <div class="form-group">
            <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
            <label for="contact"><span class="glyphicon glyphicon-user"></span> Contact No.</label>
              <input type="text" class="form-control" id="contact" placeholder="Enter contact number">
            </div>
            <div class="form-group">
            <label for="aadharnumber"><span class="glyphicon glyphicon-user"></span> Aadhar number</label>
              <input type="text" class="form-control" id="aadhar" placeholder="Enter aadhar number">
            </div>
            <div class="form-group">
            <label for="gender"><span class="glyphicon glyphicon-user"></span> Gender</label>
              <input type="radio"  name="gen" value="Male">Male
              <input type="radio" name="gen" value="Female">Female
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
                        <div class="form-group">
              <label for="psw2"><span class="glyphicon glyphicon-eye-open"></span>Confirm Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>I agree that all the details filled by me is correct.</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
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
        $("#myModal2").modal();
    });
});
</script>
<!-----forget---------->
<div class="modal fade" id="myModal3" role="dialog">
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
              <label for="aadhar"><span class="glyphicon glyphicon-user"></span> Aadhar Number</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter your aadhar number">
            </div>

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Get password</button>
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
    $("#pass").click(function(){
        $("#myModal3").modal();
    });
});
</script>
<!---------------About us-------------->
<div  id="about" class="container-fluid text-center bg-grey2">
 <h2><b>ABOUT US</b></h2>
    <font size="4"><p>We think every child as a gift of God ; we provide our services to everyone irrespective of their cast,creed and religion.</p><p> For us every senior citizen should be treated goodly ,no matter whether what he/she have to give you in return.</p></font>
</div>





<!-------contact------->
<div id="contact" class="container-fluid bg-grey3">
  <h2 class="text-center"><b>CONTACT</b></h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
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
    </div>
  </div>
</div>
</body>
</html>