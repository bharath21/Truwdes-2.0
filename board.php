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
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  
  <style>
    .jumbotron, .navbar
    {
      background: #FF8008;
      background: -webkit-linear-gradient(to left, #FF8008 , #FFC837);
      background: linear-gradient(to left, #FF8008 , #FFC837);
    }
    .navbar-nav li:hover a
    {
      color: #FF8008 !important;
    }
    .navbar-toggle:active .icon-bar
    {
      border: 1px solid #FF8008 !important;
    }
    .gallery img:hover
    {
      /*border: 1px solid red;*/
    }
    .modal-dialog
    {
      margin-top: 8%;
    }

    @media screen and (max-width: 990px) {
      .modal-dialog
      {
        margin-top: 18%;
      }
    }


  </style>

  <script>
    // function add_to_modal(elmt)
    // {
    //   var ar = elmt.classList[elmt.classList.length-1].split('-');
    //   console.log(elmt, ar[ar.length-1]);
    // };
  </script>

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
  <h1>Board</h1> 
</div>

<div class="container">

    <div class="row Gallery" id="Gallery1">
        <div class="col-lg-12">
            <h1 class="page-header">Managing Board</h1>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6 lol"><a title="Gallery 1 Image 1" href="#"><img class="thumbnail img-responsive modal-member-1 " onload="//add_to_modal(this)" src="http://placehold.it/600x350"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6 lol"><a title="Gallery 1 Image 2" href="#"><img class="thumbnail img-responsive modal-member-2" onload="//add_to_modal(this)" src="http://placehold.it/600x350/2255EE"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6 lol"><a title="Gallery 1 Image 3" href="#"><img class="thumbnail img-responsive modal-member-3" onload="//add_to_modal(this)" src="http://placehold.it/600x350/449955/FFF"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6 lol"><a title="Gallery 1 Image 4" href="#"><img class="thumbnail img-responsive modal-member-4" onload="//add_to_modal(this)" src="http://placehold.it/600x350/992233"></a></div>
    </div> <!-- row -->

  <div class="row Gallery">
        <div class="col-lg-12">
            <h1 class="page-header">Other Members</h1>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Gallery 2 Image 1" href="#"><img class="thumbnail 
        img-responsive modal-member-5" onload="//add_to_modal(this)" src="http://placehold.it/600x350"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Gallery 2 Image 2" href="#"><img class="thumbnail img-responsive modal-member-6" onload="//add_to_modal(this)" src="http://placehold.it/600x350/2255EE"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Gallery 2 Image 3" href="#"><img class="thumbnail img-responsive modal-member-7" onload="//add_to_modal(this)" src="http://placehold.it/600x350/449955/FFF"></a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Gallery 2 Image 4" href="#"><img class="thumbnail img-responsive modal-member-8" onload="//add_to_modal(this)" src="http://placehold.it/600x350/992233"></a></div>
  </div> <!-- row -->
</div> <!-- container -->

<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <button class="close" type="button" data-dismiss="modal">×</button>
    <h3 class="modal-title"></h3>
  </div>
  <div class="modal-body">
      <div id="modalCarousel" class="carousel">

        <div class="carousel-inner"></div>

        <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
   </div>
  </div>
</div>

<!-- modal -->
<!-- 
<div class="modal fade bs-example-modal-lg" id="modal-gallery" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
        <div class="modal-body">
          <div id="modal-carousel" class="carousel">
   
            <div class="carousel-inner">           
            </div>
            
            <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            
          </div>
      </div>

    </div>
</div>
 -->
<!-- modal -->


<footer class="container-fluid text-center">
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

<script>

  $(document).ready(function(){
    
    //console.log($('#Gallery1 > .lol'));
    var imgs = $('#Gallery1 > .lol').not(function() { return this.complete; });
    
    var count = imgs.length;
    
    console.log('initially count', count);
    
    if(count)
    {
        imgs.on('load', function() {
          console.log('inside loading', count);
          count--;
          /*
          if( !count ) {
              $("#Gallery1").show();
              alert( 'all done' );
          }
          */
        });

    }
    else
    {
        // $("#Gallery1").show();
        console.log('else condition');
    }


    /* copy loaded thumbnails into carousel */
    $('.modal-member').on('ready', function() {
      // console.log('thumbnail ready');
      // console.log($(this));
    }).each(function(i) {
      if(this.complete) {

        var item = $('<div class="item"></div>');
        var itemDiv = $(this).parents('div');
        var title = $(this).parent('a').attr("title");
        
        item.attr("title",title);
        // console.log(itemDiv.html());
        $(itemDiv.html()).appendTo(item);
        item.appendTo('.carousel-inner'); 
        
        if (i==0){
          // set first item active
         item.addClass('active');
        }

      }
    });

    /* activate the carousel */
    $('#modalCarousel').carousel({interval:false});

    /* change modal title when slide changes */
    $('#modalCarousel').on('slide.bs.carousel', function () {
      $('.modal-title').html($(this).find('.active').attr("title"));
    })

    /* when clicking a thumbnail */
    $('.row .thumbnail').click(function(){
        var idx = $(this).parents('div').index();
        var id = parseInt(idx);
        $('#myModal').modal('show'); // show the modal
        $('#modalCarousel').carousel(id); // slide carousel to selected
        
    });

  });

</script>

</body>
</html>
