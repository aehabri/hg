<?php
include "resources/includes/header.php";

?>


  <header>
    <nav>
      <div class="row">
        <div class="logo">
          <img src="resources/css/img/hourglass.png" class= "logo" alt="Omnifood logo">
          <h1 id= "textlogo">Hour Glass</h1>
        </div>
        <ul class= "navigation-bar">
          <li><a href= "#">Contact Us</a></li>
          <li><a href= "#">Our clients</a></li>
          <li><a href= "#">Services</a></li>
          <li><a href ="#">Home</a></li>
        </ul>
      </div>

    </nav>
    <div class="row_btn headline">
      <h1>Save Your Time<br>Order From Anywhere</h1>
      <a class ="button button-full" href="#">Login Now</a>
      <a class= "button button-ghost" href="#">Register</a>
      <a href ="#"><i class= "fa fa-arrow-right" id ="arrow"></i></a>

    </div>
  </header>

  <section class = "services section-padding">
      <div class="services-header">

        <h2>Services</h2>
        <hr id ="serv_hr">
        <p class ="long-paragraph">we offer alot of services from ordering from home to booking an appointement and alot more.</p>
      </div>
      <div class="services-content">
        <div id = "serv1">

            <div class="row">
              <div class="col-md-8" style="text-align : left;" id ="serv1_content">
                <h2>Order Food From home </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

              </div>
              <div class="col-md-4" id ="serv1_img">
                <img src="resources/css/img/serv1.png" style="height : 280px; width : 400px;margin-top : -50px; margin-left : 50px;"  alt="">
              </div>
            </div>

        </div>
        <div id="serv2">
          <div class="row">
            <div class="col-md-4" id = "serv2_img">
              <img src="resources/css/img/serv2.png" style="height : 280px; width : 400px;margin-top : -50px; "  alt="">
            </div>

            <div class="col-md-8" id = "serv2_content " style="text-align : left;padding : 0px 100px;">
              <h2>Book an appointement </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

            </div>
          </div>
        </div>

        <div id = "serv1">

            <div class="row">
              <div class="col-md-8" style="text-align : left;" id = "serv3_content">
                <h2>Buy  from your favorite store </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

              </div>
              <div class="col-md-4" id ="serv3_img">
                <img src="resources/css/img/serv3.png" style="height : 280px; width : 400px;margin-top : -50px; margin-left : 50px;"  alt="">
              </div>
            </div>

        </div>
      </div>



  </section>
  <section id = "clients">
    <div class="container">
      <h2>some of our known clients</h2>
      <div class="row">
        <div class="col-md-4">
          <div id = "client-1">

          </div>
        </div>
        <div class="col-md-4">
          <div id = "client-2">

          </div>
        </div>
        <div class="col-md-4">
          <div id = "client-3">

          </div>
        </div>
      </div>
    </div>
  </section>


































<?php include "resources/includes/footer.php"; ?>
