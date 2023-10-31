<?php include('inc/header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBits</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/index.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6fFE00WHqnjZ" crossorigin="anonymous">

<!-- Bootstrap JS (optional, if you want to use Bootstrap's JavaScript features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-iFp3rCRqH06PZl3ZNl1PDApzOfVoFmYfSkLDRbH70F9FDvH4JAwJ8ER9ML+nBao" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6fFE00WHqnjZ" crossorigin="anonymous"></script>

</head>
<body>
  <!--home section starts-->
   <div class="slider">
    <div class="slides">
      <!--radio buttons start-->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
    <!--radio buttons ends-->
    <!--slide images start-->
    <div class="slide first">
      <img src="assets/img/2.webp" alt="" srcset="">
    </div>
    <div class="slide">
      <img src="assets/img/pic1.jpg" alt="" srcset="">
    </div>
    <div class="slide">
      <img src="assets/img/3.jpg" alt="" srcset="">
    </div>
    <div class="slide">
      <img src="assets/img/4.jpg" alt="" srcset="">
    </div>
    <!--slide images end-->
    <!--automatic navigation start-->
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
    </div>
    <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
   </div>
   </div>
   
  <!--home section ends-->
  <!--section packages starts-->
  <div class="Packages" id="Packages">
    <div class="container">
      <div class="main-txt">
        <h1><span>P</span>ackages</h1>
      </div>
      <div class="row" style="margin-top:30px;">
        <!--delhi-->
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="assets/img/delhi.webp" alt="">
          <div class="card-body">
            <h3>Delhi</h3>
            <p>A symbol of the country's rich past and thriving present, Delhi is a city where ancient and modern blend seamlessly together. It is a place that not only touches your pulse but even fastens it to a frenetic speed</p>
            <a href="#" class="btn btn-outline-warning">Book Now!</a>
          </div>
        </div>
      </div>
      <!--mumbai-->
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="assets/img/mumbai.jpg" alt="">
          <div class="card-body">
            <h3>Mumbai</h3>
            <p>Mumbai has something to offer everybody. It's a city where diversity rules! In Mumbai, you can experience everything from food trucks to the 5-star dining. You can travel in the luxury of the chauffeur driven car or choose to experience the hustle</p>
            <a href="#" class="btn btn-outline-warning">Book Now!</a>
          </div>
        </div>
      </div>
      <!--kolkata-->
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="assets/img/Visit-in-Kolkata-1.webp" alt="">
          <div class="card-body">
            <h3>Kolkata</h3>
            <p>Whether it be victoria memorial,howrah bridge or botanical garden from tasty puchkas to sweet rasgullas and sandesh kolkata is the ultimate destination for travel.Witness durgashtmi during navratri</p>
            <a href="#" class="btn btn-outline-warning">Book Now!</a>
          </div>
        </div>
      </div>
      </div>
      <div class="row" style="margin-top:30px;" id="row2">
        <!--rajasthan-->
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="assets/img/rajasthan2.jpeg.jpg" alt="">
          <div class="card-body">
            <h3>Rajasthan</h3>
            <p>Rajasthan, which is a premier tourist destination attracts tourist for its historical forts, palaces, art and culture.Major cities of
              Rajasthan like Jaipur, Jodhpur, Udaipur, Ajmer, Bikaner, Jaisalmer, etc. are known for their
              historical traditions and arts.Rajasthan is known for its historical hill forts & palaces, it is claimed as the best place for tourism-related to palaces.</p>
            <a href="#" class="btn btn-outline-warning">Book Now!</a>
          </div>
        </div>
      </div>
      <!--Punjab-->
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="assets/img/Punjab-Tourism_600.jpg" alt="">
          <div class="card-body">
            <h3>Punjab</h3>
            <p>"Smiling State Of India" Located in the northwestern part of India, Punjab means the land of five rivers. Known for its cuisine, culture and history, Punjab is visited by tourists who want to enjoy its vibrant culture and food.</p>
            <a href="#" class="btn btn-outline-warning">Book Now!</a>
          </div>
        </div>
      </div>
      </div>
      

      </div>
    </div>
  </div>

<!--Services-->
<section class="services" id="services">
  <h1 class="heading-services"><span>O</span>ur <span>S</span>ervices</h1>
  <div class="box-container">
    <div class="box">
      <img src="assets/img/hotel.jpg" alt="" class="img">
      <h3>Affordable hotels</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatem nihil laborum, eos voluptatibus reprehenderit iure veniam minus vero, aut quisquam illo doloribus distinctio quod alias quae. Veniam, corporis vitae?
      Nesciunt accusamus atque, iusto dolor numquam nemo quos dolore voluptas sint possimus quae et</p>
    </div>
    <div class="box">
      <img src="assets/img/Horned Clipart Transparent Background, Horn Icon, Horn, Icon, Sound PNG Image For Free Download.jpeg.jpg" alt="" class="img">
      <h3>Safety guide</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatem nihil laborum, eos voluptatibus reprehenderit iure veniam minus vero, aut quisquam illo doloribus distinctio quod alias quae. Veniam, corporis vitae?
      Nesciunt accusamus atque, iusto dolor numquam nemo quos dolore voluptas sint possimus quae et</p>
    </div>
    <div class="box">
      <img src="assets/img/symbole-d-avion-et-de-voyage-jaune.png" alt="" class="img">
      <h3>Faster travel</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatem nihil laborum, eos voluptatibus reprehenderit iure veniam minus vero, aut quisquam illo doloribus distinctio quod alias quae. Veniam, corporis vitae?
      Nesciunt accusamus atque, iusto dolor numquam nemo quos dolore voluptas sint possimus quae et</p>
    </div>
    


  </div>
</section>
<!--Services Ends-->

<!--About Section start-->
<section class="about" id="about">
  <div class="main-txt">
    <h1>About <span>Us</span></h1>
  </div>
  <div class="row" style="margin-top: 50px;">

  <div class="col-md-6 py-3 py-md-0">
    <div class="card">
      <img src="assets/img/5.jpg" alt="" class="img-fluid">
    </div>
  </div>
  <div class="col-md-6 py-3 py-md-0">
    <h2>How Travel Bits Works</h2>
    <p>Welcome to TravelBits – Your Gateway to Adventure!

      At Travel Bits, we believe that life's most meaningful experiences are often found in the journeys we take. We are passionate about travel and dedicated to helping you discover the wonders of the world, one adventure at a time.Our mission is to inspire and empower travelers like you to explore the beauty and diversity of our planet. We want to provide you with the tools and information you need to plan unforgettable trips that create lifelong memories.<b>Who are we?</b>Travel Bits is a team of experienced and enthusiastic globetrotters, travel writers, and tech-savvy adventurers. We've explored remote corners of the globe, soaked up different cultures, and have an insatiable appetite for discovering new destinations. Our collective experiences have led us to create this platform where we can share our love for travel.</p>
    <button id="about-btn">Explore Now!...</button>
  </div>
</div>
</section>
<!--About Section ends-->
<?php include('inc/footer.php');?>
</body>
</html>

