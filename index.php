<!DOCTYPE html>
<html lang="en">
<head>

  <title>DoscDev</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> -->
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  


  <style>


  body {
      font: sans-serif;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;  /*Teks Agar Besar*/
      color: #303030;
      font-weight: 600; /*Ketebalan font*/
  }
  h4 {
      font-size: 19px;
      color: #303030;
      font-weight: 400;
  }  
  .jumbotron {
      background-color:#1e8df4;
      color: #fff;
      padding: 80px ;
      font-family: sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #1e8df4;
      font-size: 50px;
  }
  .logo {
      color: #1e8df4;
      font-size: 200px;
  }



  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #1e8df4;
  }
  .carousel-indicators li {
      border-color: #1e8df4;
  }
  .carousel-indicators li.active {
      background-color: #1e8df4;
  }

/* 


padding adalah sisi dalam sebuah elemen ,kita bisa menggunakannua untuk mengatur jarak
 pada sisi dalam sebuag elemen yang kita tentukan
*/

 /* margin fungsinya untuk mengatur jarak dari luar */

  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  
  .item h4 {
      font-size: 19px;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  

  .panel {
      border: 1px solid #1e8df4; 
      border-radius:0 !important;
  }


  .panel-footer .btn:hover {
      border: 1px solid #1e8df4;
      background-color: #fff !important;
      color: #1e8df4;
  }


  .panel-heading {
      color: #fff !important;
      background-color: #1e8df4 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #1e8df4;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #1e8df4;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #1e8df4 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #1e8df4 !important;
  }
  
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #1e8df4;
  }


  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><\DoscDev></a>
    </div>
    

    <div id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>DoscDev</h1> 
  <p>We specialize in Web Developer</p> 
  <!-- <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form> -->
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About DoscDev</h2><br>
<h4>DoscDev Berfokus Pada Pelayan Pengembangan Web</h4><br>
<p>DoscDev didirikan oleh orang-orang yang berbakat serta memiliki potensi dan dedikasi yang tinggi. Sehingga dapat menyediakan solusi yang tepat untuk keperluan IT dari klien.</p><br>
<p>Untuk menjadi perusahaan terkemuka di dunia komputerisasi, manajemen yang baik dan sumber daya manusia yang berkualitas tinggi telah menjadi hal yang sangat penting. Itulah yang kami gunakan untuk menjamin kualitas layanan kepada klien.</p>
<br>
      <button class="btn btn-default btn-lg">Download Profil Perusahaan</button>
    </div>
    
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Visi & Misi</h2><br>

      <h4><strong>Visi</strong> Menjadi perusahaan teknologi informasi dan komunikasi kelas dunia.</h4>
      <h4><strong>Misi</strong> Memberikan solusi keseluruhan teknologi informasi dan komunikasi untuk klien.</h4><br>

    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>

  <h4><b>Apa yang kami buat ?</b></h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Front End</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Back End</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Front End & Back End</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
<br><br><br>
  <h4><b>Prinsip Kami</b></h4><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Kepuasan Pelangan</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Produk & Layanan yang berkualitas</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Menyediakan solusi terbaik untuk klien dalam Teknologi Informasi</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2> 
  <h4>Produk Yang Kita Buat</h4><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://www.uianduxdesign.com/wp-content/plugins/php-image-cache/image.php?path=/wp-content/uploads/2013/06/Facebook-Sign-Up.png" alt="Paris" width="400" height="300">
        <p><strong>Facebook</strong></p>
        <p>2018</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://www.uianduxdesign.com/wp-content/plugins/php-image-cache/image.php?path=/wp-content/uploads/2013/06/Facebook-Sign-Up.png" alt="New York" width="400" height="300">
        <p><strong>Facebook</strong></p>
        <p>2018</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="http://www.uianduxdesign.com/wp-content/plugins/php-image-cache/image.php?path=/wp-content/uploads/2013/06/Facebook-Sign-Up.png" alt="San Francisco" width="400" height="300">
        <p><strong>Facebook</strong></p>
        <p>2018</p>
      </div>
    </div>
  </div><br>
  


  <h2>Testimoni</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
   
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Rizki</span></h4>
      </div>
      <div class="item">
        <h4>"WOW!!"<br><span>Mark Zuckerberg</span></h4>
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
</div>



<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Harga</h2>
    <h4>Harga yang kami tawarkan</h4>
  </div><br>

  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Front End</h1>
        </div>

      
        <div class="panel-footer">
          <h3>Rp.200.000</h3>
          <a class="btn btn-lg" href="pendaftar.php">Pesan</a>


        </div>
      </div>      
    </div>     


    
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Back End</h1>
        </div>
     
        <div class="panel-footer">
          <h3>Rp.400.000</h3>
          <a class="btn btn-lg" href="pendaftar.php">Pesan</a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Front & Back End</h1>
        </div>
     
        <div class="panel-footer">
          <h3>Rp.800.000</h3>
          <a class="btn btn-lg" href="pendaftar.php">Pesan</a>
        </div>
      </div>      
    </div>    
  </div>
</div>


<div style="height:400px;width:100%;">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.1155905376913!2d110.40782157629837!3d-6.982023487884449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas+Dian+Nuswantoro!5e0!3m2!1sid!2sid!4v1522050531204" width="1234px" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
  
  </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <br>  
  <div class="row">
    <div class="col-sm-5">
        <p>Anda bisa menghubungi kami di :</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Universitas Dian Nuswatoro</p>
      <p><span class="glyphicon glyphicon-phone"></span> 081218181282</p>
      <p><span class="glyphicon glyphicon-envelope"></span> admin@doscdev.com</p>
    </div>


    <?php
        /* handle error */
        if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
            </div>
        <?php endif;?>

    <form action="send_pesan.php" class="inner-login" method="post">

    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
        <input type="text" class="form-control" name="nickname" placeholder="Nama">
        </div>
        <div class="col-sm-6 form-group">
        <input type="email" class="form-control" name="email" placeholder="email">
        </div>
      </div>
      
      <input type="text" class="form-control" name="pesan" placeholder="Pesan"><br>

      <div class="row">
        <div class="col-sm-12 form-group">

        <input type="submit" class="col-sm-6" value="Kirim" >
        </div>
      </div>
    </div>
    </form>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>DoscDev Theme Made By <a href="https://doscom.org" title="">Doscom</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
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
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
