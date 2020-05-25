<?php

include "header.php";

 ?>


<header>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<div class="container headercontainer">
  <div class="row mx-auto mb-0">
    <div class="col1"><img src="img/phone.png" alt="phone">
    </div>
    <div class="col2">
      <h1 class="headertitle pb-5">Join more than <span class="text-white">1000+</span> <br> satisfied users</h1>
      <div class="headertext py-5 text-white">
      <a>People are definitely a compagny's greatest asset.<br>It dosen't make any difference<br> wheter the product is cars or cosmetics.<br>
      A compagny is only as good as the people it keeps.</a>
      </div>
      <a href="index.php"
      <img class="androidbutton py-5"src="img/androidappbutton.png" alt="android application download"/>
    </a>
      </div>
  </div>
</div>
</header>


<section class="article1">
  <div class="container section1">
    <div class="row mx-auto mb-0">
      <div class="col1 sectiontext text-white">
        <h1 class="sectiontitle text-white pb-5">What you Get</h1>
        <div class="sectiontext pb-5">
      <a>People are definitely a compagny's greatest asset.<br>It dosen't make any difference<br> wheter the product is cars or cosmetics.<br>
      A compagny is only as good as the people it keeps.</a>
    </div>
      <div>
      <a href="index.php" class="btn btn-primary btn-lg active buttona" role="button" aria-pressed="false">GET IT NOW</a>
      </div>
      </div>

      <div class="col2">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/slide.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/slide2.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/slide3.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

      </div>
</section>

<section class="article2">
  <h1 class="a2title text-white">Some words from our owners</h1>
  <p class=" p2 text-black">People are definitely a compagny's greatest asset.<br>It dosen't make any difference</p>
  <div class="container headercontainer">
    <div class="row mx-auto ">
      <div id="img-right" class="col-sm"><img src="img/phone2.png" alt="phone">
      </div>
      <div class="col-sm">
        <div class="headertext text-black">
          <div class="speech-bubble">
            <div class="quot">&quot;</div>
              <p class="flextexte">People are definitely a compagny's greatest asset.It dosen't make<br>
                any difference wheter the product is cars or cosmetics.<br>
                A compagny is only as good as the people it keeps.<br>
                  <span class="johndoe"> John Doe</span>
              </p>
            <div id="quote-right" class="quot">&quot;</div>
          </div>
        </div>
    </div>
  </div>
</div>
</section>
<section class="joinus py-5 ">
  <h1 class="titrejoinus pb-5">Join us</h1>
  <p class="pb-5">
    we will send you from time to time<br>
    mail about our news and offers
  </p>
  <form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Mail">
  <button type="submit" class="btn btn-primary buttonb">SEND</button>
</form>
</section>

<footer>

  <img class="pb-4"src="img/logofooter.png" alt="logo">
  <p>
    © 2016-<span class="nordfooter">NORD</span> All Right Reserved
  </p>

</footer>


 <?php

 include "footer.php";
