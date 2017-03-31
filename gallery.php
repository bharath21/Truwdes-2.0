<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Theme Made By www.w3schools.com - No Copyright -->
	<title>Truwdes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<!-- lightgallery -->
	<link href="./lightgallery/dist/css/lightgallery.css" rel="stylesheet">
	<link rel="stylesheet" href="./lightgallery/css/style.css">
	<style>
		.jumbotron, .navbar
		{
			background: #da22ff;

			background: -webkit-linear-gradient(to left, #da22ff , #9733ee);

			background: linear-gradient(to left, #da22ff , #9733ee);

			/* background: #fe8c00;
			background: -webkit-linear-gradient(to right, #fe8c00 , #f83600);
			background: linear-gradient(to right, #fe8c00 , #f83600); */
		}
		.navbar-nav li:hover a
		{
		  color: #f857a6 !important;
		}
		.navbar-toggle:active .icon-bar
		{
		  border: 1px solid #f857a6 !important;
		}
	</style>
</head>

<body class="home">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Truwdes</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">ABOUT</a></li>
        <li><a href="objective.php">OBJECTIVE</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="donation.php">DONATION</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Gallery</h1> 
</div>

<div class="container">
    <div class="gallery">
		<ul id="lightgallery" class="list-unstyled row">
			<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="" data-src="http://placehold.it/600x350/449955/FFF.jpg" data-sub-html="<h4>Image Title</h4><p>Image description here...</p>">
				<a href="">
					<img class="img-responsive" src="http://placehold.it/600x350/449955/FFF.jpg">
				</a>
			</li>
			<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="" data-src="http://placehold.it/600x350/449955/FFF.jpg" data-sub-html="<h4>Image Title</h4><p>Image description here...</p>">
				<a href="">
					<img class="img-responsive" src="http://placehold.it/600x350/449955/FFF.jpg">
				</a>
			</li>
			<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="" data-src="http://placehold.it/600x350/2255EE.jpg" data-sub-html="<h4>Truwdes</h4><p>This beautiful image was taken for Truwdes NGO</p>">
				<a href="">
					<img class="img-responsive" src="http://placehold.it/600x350/2255EE.jpg">
				</a>
			</li>
		</ul>
	</div> <!-- row -->
</div><!-- container -->


<footer class="container-fluid text-center" style="background-color: white">
  <div class="row">
    <div class="about col-sm-10 col-md-5">
      <h4>About Us!!</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum tempora, deserunt placeat, voluptatem vero praesentium voluptatibus in molestiae, sit nulla distinctio esse iste necessitatibus cumque ab laudantium, tempore perspiciatis itaque.</p>
    </div>
    <div class="contact col-sm-10 col-md-5 col-md-offset-2">
      <h4>Contact Us</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ad sunt animi odit provident ab. Culpa, accusamus qui minus, quasi ducimus quaerat laboriosam aut, laborum tempore vitae saepe obcaecati quae.</p>
    </div>
  </div>
</footer>

	
	<!-- lightgallery scripts -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('#lightgallery').lightGallery();
	});
	</script>
	<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
	<script src="lightgallery/js/lightgallery.js"></script>
	<script src="lightgallery/js/lg-fullscreen.js"></script>
	<script src="lightgallery/js/lg-thumbnail.js"></script>
	<script src="lightgallery/js/lg-video.js"></script>
	<script src="lightgallery/js/lg-autoplay.js"></script>
	<script src="lightgallery/js/lg-zoom.js"></script>
	<script src="lightgallery/js/lg-hash.js"></script>
	<script src="lightgallery/js/lg-pager.js"></script>
	<script src="lightgallery/lib/jquery.mousewheel.min.js"></script>
</body>
</html>
