<html lang="en">
 
<head>
   
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

 <meta charset="utf-8">
  <title>Assignment insertion</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<script>
a:hover {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
</script>
  <!-- Favicons -->
  <link href="ss.png" rel="icon">
  <link href="ss.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
  
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
	
</head>
 <body background="w.jpeg">
   <div id="preloader"></div>
    <div id="wrap">
        <div class="container-fluid">
            <div class="row">
                <form class="form-horizontal" action="insertassign1.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                       
						<div class="container">
                        <legend><font color="white">ADDITION OF THE DATA</font> </legend>
						</div>		
						<div class="container-fluid">
  <label class="col-md-1 control-label" for="ex1">Branch:</label>
    <div class="col-xs-2">
  <select class="form-control "  name="branch" id="branch">
    <option value="CSE">CSE</option>
    <option value="IT">IT</option>
    <option value="EEE">EEE</option>
    <option value="BSC">Bsc</option>
  </select>
  </div>
  <label class="col-md-1 control-label" for="ex1">Semester:</label>
    <div class="col-xs-2">
  <select class="form-control "  name="sem" id="sem">
    <option value="1">-1-</option>
    <option value="2">-2-</option>
    <option value="3">-3-</option>
    <option value="4">-4-</option>
	<option value="5">-5-</option>
    <option value="6">-6-</option>
    <option value="7">-7-</option>
    <option value="8">-8-</option>
  </select>
  </div>
  <label class="col-md-1 control-label" for="ex1">Section:</label>
    <div class="col-xs-2">
  <select class="form-control " name="section" id="sec">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
  </select>
  </div>
  <label class="col-md-1 control-label" for="ex1">Assignment number:</label>
     <div class="col-xs-2">
   <select class="form-control " name="assign" id="assign">
    <option value="assig1">assig 1</option>
    <option value="assig2">assig 2</option>
    <option value="assig3">assig 3</option>
    <option value="assig4">assign 4</option>
  </select>
  </div>

</div>
</div>
</div>
</div>
</div>
<center>
<br>
                                <button type="submit" id="submit"  class="btn btn-primary btn-lg">submit</button>
                         
 </center>
 </body>
 </html>