<html lang="en">
<head>

<style>
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
  
  
</style>
</head>
<body id="mypage">
	
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
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#d">FOOD</button>
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
	<a href="#"class="btn btn-info" role="button">Become a Volunteer</a>
</b>
</h3>
</div>
<!---------------About us-------------->
<div  id="about" class="container-fluid text-center bg-grey2">
 <h2><b>ABOUT US</b></h2>
    <font size="4"><p>We think every child as a gift of God ; we provide our services to everyone irrespective of their cast,creed and religion.</p><p> For us every senior citizen should be treated goodly ,no matter whether what he/she have to give you in return.</p></font>
</div>

</body>
</head>

