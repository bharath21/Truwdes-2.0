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
      background: #00c6ff;
      background: -webkit-linear-gradient(to right, #00c6ff , #0072ff);
      background: linear-gradient(to right, #00c6ff , #0072ff);
    }
    .navbar-nav li:hover a
    {
      color: #00c6ff !important;
    }
    .navbar-toggle:active .icon-bar
    {
      border: 1px solid #00c6ff !important;
    }

    .donate_div
    {
      margin: 50px;
    }

    #penguin_head
    {
      width: 50px;
      height: initial;
      position: absolute;
      z-index: -1;
      left: 50%;
      margin: 0px;
      padding: 0px;
      transform-origin: bottom center;
      perspective: 100px;
      transform: translate(-50%, 25%) scale(.72);
      transition: transform .6s;
    }
    .donate_btn_row
    {
      display: inline;
      height: 0px;
      margin: 0px;
      padding: 0px;
    }
    .donate_btn
    {
      margin-top: 40px;
    }
    .btn:focus, .btn:active
    {
      outline: none !important;
    }
    .donate_btn_row:hover #penguin_head
    {
      transform: translate(-50%, -10%) scale(.9);
    }


    #path2817
    {
      animation: left_hand 3s ease-in-out infinite;
      transform-origin: 100% 30%;
    }
    
    @keyframes left_hand
    {
      0%
      {
        transform: rotateZ(-10deg);
      }
      40%
      {
        transform: rotateZ(-10deg);
      }
      50%
      {
        transform: rotateZ(10deg);
      }
      60%
      {
        transform: rotateZ(-10deg);
      }
      100%
      {
        transform: rotateZ(-10deg);
      }

    }
    #path2821
    {
      animation: right_hand 3s ease-in-out infinite;
      transform-origin: 0% 30%;
    }
    
    @keyframes right_hand
    {
      0%
      {
        transform: rotateZ(10deg);
      }
      40%
      {
        transform: rotateZ(10deg);
      }
      50%
      {
        transform: rotateZ(-10deg);
      }
      60%
      {
        transform: rotateZ(10deg);
      }
      100%
      {
        transform: rotateZ(10deg);
      }

    }
    
    #path2829, #path2825
    {
      animation: blink 3s ease-in infinite;
      transform-origin: center center;
    }
    
    @keyframes blink
    {
      
      0%
      {
        transform: rotateX(0deg)
      }
      40%
      {
        transform: rotateX(0deg);
      }
      50%
      {
        transform: rotateX(80deg);
      }
      60%
      {
        transform: rotateX(0deg);
      }
      100%
      {
        transform: rotateX(0deg);
      }
    }
    #svg4190
    {
      position: relative;
      left: 50%;
      transform: translateX(-50%);
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
  <h1>Donation</h1> 
</div>

<div class="donate_div">
  
  <p class="lead text-center">
    TAKE A SMALL STEP AND MAKE A HUGE DIFFERENCE BY DONATING TO OUR NGO.<br><br>
    YOUR DONATION WILL HELP US SUPPORT THE ELDERS WITH BASIC NECESSITIES. <br>something like this here...
  </p>


  <form id="donate_form" action="#donate" method="POST" class="row">
    <div class="form-group col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <label for="donorName">Name</label>
      <input type="text" class="form-control" id="donorName" placeholder="Name" required>
    </div>
    <div class="form-group col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <label for="donationAmount">Amount ( <i class="fa fa-inr"></i> )</label>
      <input type="number" class="form-control" id="donationAmount" placeholder="Amount" required>
    </div>
    <div class="form-group col-sm-8  col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
      <div class="donate_btn_row ">
        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
        <!-- Created with Inkscape (http://www.inkscape.org/) -->

        <svg
           xmlns:dc="http://purl.org/dc/elements/1.1/"
           xmlns:cc="http://creativecommons.org/ns#"
           xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
           xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
           width="45mm"
           height="68mm"
           viewBox="0 0 45 68"
           version="1.1"
           id="penguin_head"
           inkscape:version="0.92.0 r15299"
           sodipodi:docname="penguin_head.svg">
          <defs
             id="defs4722" />
          <sodipodi:namedview
             id="base"
             pagecolor="#ffffff"
             bordercolor="#666666"
             borderopacity="1.0"
             inkscape:pageopacity="0.0"
             inkscape:pageshadow="2"
             inkscape:zoom="0.98994949"
             inkscape:cx="166.47729"
             inkscape:cy="196.54094"
             inkscape:document-units="mm"
             inkscape:current-layer="g4764"
             showgrid="false"
             inkscape:window-width="1366"
             inkscape:window-height="705"
             inkscape:window-x="-8"
             inkscape:window-y="-8"
             inkscape:window-maximized="1" />
          <metadata
             id="metadata4725">
            <rdf:RDF>
              <cc:Work
                 rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type
                   rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                <dc:title></dc:title>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <g
             inkscape:label="Layer 1"
             inkscape:groupmode="layer"
             id="layer1"
             transform="translate(0,-229)">
            <g
               id="g4764"
               transform="translate(3.4745039,19.777945)">
              <g
                 id="g4780"
                 transform="translate(-33.887202,205.04158)">
                <path
                   inkscape:connector-curvature="0"
                   id="path2721"
                   style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="m 53.501746,72.04227 h -2.82187 c -11.31887,0 -19.75379,-3.26743 -19.75379,-14.574298 V 28.24738 c 0,-11.30688 9.26077,-20.5577703 20.57965,-20.5577703 h 2.82187 c 11.31887,0 20.579641,9.2508903 20.579641,20.5577703 v 29.220592 c 0,11.306868 -10.08662,14.574298 -21.405501,14.574298" />
                <path
                   inkscape:connector-curvature="0"
                   id="path2729"
                   style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="m 71.789646,30.19563 c 0,10.42317 -8.449739,18.872911 -18.87291,18.872911 -10.42317,0 -18.8729,-8.449741 -18.8729,-18.872911 0,-10.42317 8.44973,-18.8729 18.8729,-18.8729 10.423171,0 18.87291,8.44973 18.87291,18.8729" />
                <path
                   sodipodi:nodetypes="csssc"
                   inkscape:connector-curvature="0"
                   id="path2829"
                   style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="m 47.314806,28.73898 c 0,1.264 -1.02447,2.30489 -2.28847,2.30489 -1.264,0 -2.28847,-1.04089 -2.28847,-2.30489 0,-1.26401 1.02447,-2.28847 2.28847,-2.28847 1.264,0 2.28847,1.02446 2.28847,2.28847">
                </path>
                <path
                   inkscape:connector-curvature="0"
                   id="path2833"
                   style="fill:#f9d641;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="m 50.366266,31.26546 h 5.88821 c 0,0 -0.48683,3.45334 -2.96616,3.611741 -2.34173,0.14958 -2.92205,-3.611741 -2.92205,-3.611741" />
                <path
                   inkscape:connector-curvature="0"
                   id="path2841"
                   style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="M 66.799707,14.248 53.310196,8.8691897 36.862636,14.8142 33.571926,26.85945 h 0.57397 c 0,0 4.43371,-14.99412 18.69334,-6.87882 14.25998,-8.1153 18.69369,6.87882 18.69369,6.87882 h 0.573971 z" />
                <path
                   inkscape:connector-curvature="0"
                   id="path2845"
                   style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="m 52.273236,7.8811998 c 0,0 1.16875,-3.4734501 4.77555,-2.9389901 0,0 -2.16429,2.29764 -1.33597,3.95429" />
                <path
                   inkscape:connector-curvature="0"
                   id="path2849"
                   style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   d="m 53.398206,7.8811998 c 0,0 -1.16875,-3.4734501 -4.77555,-2.9389901 0,0 2.16394,2.29764 1.33597,3.95429" />
                <path id="path2825"
                   d="m 63.352467,28.678073 c 0,1.264 -1.02447,2.30489 -2.28847,2.30489 -1.264,0 -2.28847,-1.04089 -2.28847,-2.30489 0,-1.26401 1.02447,-2.28847 2.28847,-2.28847 1.264,0 2.28847,1.02446 2.28847,2.28847"
                   style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
                   id="path4768"
                   inkscape:connector-curvature="0"
                   sodipodi:nodetypes="csssc">
                </path>
              </g>
            </g>
          </g>
        </svg>
        <button type="submit" class="btn btn-info donate_btn">Donate</button>
      </div>
    </div>
  </form>

</div>

<!-- modal -->
<div id="thankYouModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PAYMENT CONFIRMATION</h4>
      </div>
      <div class="modal-body">
        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
        <svg
        xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:cc="http://creativecommons.org/ns#"
        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
        xmlns:svg="http://www.w3.org/2000/svg"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
        width="91mm"
        height="82mm"
        viewBox="0 0 91 82"
        version="1.1"
        id="svg4190"
        inkscape:version="0.92.0 r15299"
        sodipodi:docname="penguin.svg">
        <defs
         id="defs4184" />
        <sodipodi:namedview
         id="base"
         pagecolor="#ffffff"
         bordercolor="#666666"
         borderopacity="1.0"
         inkscape:pageopacity="0.0"
         inkscape:pageshadow="2"
         inkscape:zoom="0.98994949"
         inkscape:cx="21.344335"
         inkscape:cy="92.83382"
         inkscape:document-units="mm"
         inkscape:current-layer="layer1"
         showgrid="false"
         inkscape:window-width="1366"
         inkscape:window-height="705"
         inkscape:window-x="-8"
         inkscape:window-y="-8"
         inkscape:window-maximized="1" />
        <metadata
         id="metadata4187">
        <rdf:RDF>
          <cc:Work
            rdf:about="">
          <dc:format>image/svg+xml</dc:format>
          <dc:type
            rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
          <dc:title></dc:title>
          </cc:Work>
        </rdf:RDF>
        </metadata>
        <g
         inkscape:label="Layer 1"
         inkscape:groupmode="layer"
         id="layer1"
         transform="translate(0,-215)">
        <g
          id="g4238"
          transform="translate(215.15905,-51.212515)">
          <path
            inkscape:connector-curvature="0"
            id="path2713"
            style="fill:#f9d641;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -188.0884,329.44773 c 0,0 -4.9597,2.25143 -6.63539,4.08199 -2.21933,2.42464 -0.13935,4.04848 6.63539,3.12067 6.77475,-0.9278 8.76371,-1.23648 8.76371,-1.23648 z" />
          <path
            inkscape:connector-curvature="0"
            id="path2717"
            style="fill:#f9d641;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -152.78176,329.47962 c 0,0 5.33894,1.96568 6.6354,4.08199 0.94897,1.54905 0.13934,4.04813 -6.6354,3.12068 -6.77475,-0.92781 -9.28864,-1.48096 -9.28864,-1.48096 z" />
          <path
            inkscape:connector-curvature="0"
            id="path2721"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -169.63262,336.33614 h -2.82187 c -11.31887,0 -19.75379,-3.26743 -19.75379,-14.5743 v -29.22059 c 0,-11.30688 9.26077,-20.55777 20.57965,-20.55777 h 2.82187 c 11.31887,0 20.57964,9.25089 20.57964,20.55777 v 29.22059 c 0,11.30687 -10.08662,14.5743 -21.4055,14.5743" />
          <path
            inkscape:connector-curvature="0"
            id="path2725"
            style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -150.08301,319.0325 c 0,9.92787 -8.89212,15.3035 -20.01238,15.3035 -11.11991,0 -20.25685,-5.37563 -20.25685,-15.3035 0,-9.92787 9.13694,-20.64808 20.25685,-20.64808 11.12026,0 20.01238,10.72021 20.01238,20.64808" />
          <path
            inkscape:connector-curvature="0"
            id="path2729"
            style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -151.34472,294.4895 c 0,10.42317 -8.44974,18.87291 -18.87291,18.87291 -10.42317,0 -18.8729,-8.44974 -18.8729,-18.87291 0,-10.42317 8.44973,-18.8729 18.8729,-18.8729 10.42317,0 18.87291,8.44973 18.87291,18.8729" />
          <path
            inkscape:connector-curvature="0"
            id="path2817"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -191.24682,318.05975 c 0.66675,0 -17.4378,-16.25953 -16.77105,-20.81601 0.66675,-4.55648 15.89229,8.55733 16.55904,0.66675">
          </path>
          <path
            inkscape:connector-curvature="0"
            id="path2821"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -148.93176,318.05975 c -0.66675,0 17.43781,-16.25953 16.77106,-20.81601 -0.66675,-4.55648 -15.89229,8.55733 -16.55904,0.66675">
          </path>
          <path
            inkscape:connector-curvature="0"
            id="path2825"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -159.7819,293.03285 c 0,1.264 -1.02482,-0.68051 -2.28847,-0.68051 -1.264,0 -2.28846,1.94451 -2.28846,0.68051 0,-1.26401 1.02446,-2.28847 2.28846,-2.28847 1.26365,0 2.28847,1.02446 2.28847,2.28847"
            onload="">
          </path>
          <path
            inkscape:connector-curvature="0"
            id="path2829"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -175.81956,293.03285 c 0,1.264 -1.02447,-0.76871 -2.28847,-0.76871 -1.264,0 -2.28847,2.03271 -2.28847,0.76871 0,-1.26401 1.02447,-2.28847 2.28847,-2.28847 1.264,0 2.28847,1.02446 2.28847,2.28847">
          </path>
          <path
            inkscape:connector-curvature="0"
            id="path2833"
            style="fill:#f9d641;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -172.7681,295.55933 h 5.88821 c 0,0 -0.48683,3.45334 -2.96616,3.61174 -2.34173,0.14958 -2.92205,-3.61174 -2.92205,-3.61174" />
          <path
            inkscape:connector-curvature="0"
            id="path2837"
            style="fill:#ff033e;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.91665655"
            d="m -154.99708,298.80817 c -6.31577,0 -12.69018,3.6208 -14.82692,8.72201 -2.13671,-5.10121 -8.51115,-8.72201 -14.82691,-8.72201 -8.18853,0 -14.82689,6.08661 -14.82689,13.59493 0,4.94172 1.92219,9.84953 5.09656,14.37415 5.52834,7.8777 14.86639,14.59314 24.55724,18.28453 15.25682,-5.81255 29.6538,-19.1123 29.6538,-32.65868 0,-7.50832 -6.63835,-13.59493 -14.82689,-13.59493" />
          <path
            inkscape:connector-curvature="0"
            id="path2841"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -156.33466,278.54187 -13.48951,-5.37881 -16.44756,5.94501 -3.29071,12.04525 h 0.57397 c 0,0 4.43371,-14.99412 18.69334,-6.87882 14.25998,-8.1153 18.69369,6.87882 18.69369,6.87882 h 0.57397 z" />
          <path
            inkscape:connector-curvature="0"
            id="path2845"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -170.86113,272.17507 c 0,0 1.16875,-3.47345 4.77555,-2.93899 0,0 -2.16429,2.29764 -1.33597,3.95429" />
          <path
            inkscape:connector-curvature="0"
            id="path2849"
            style="fill:#231f20;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.35277775"
            d="m -169.73616,272.17507 c 0,0 -1.16875,-3.47345 -4.77555,-2.93899 0,0 2.16394,2.29764 1.33597,3.95429" />
        </g>
        <text
          xml:space="preserve"
          style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:10.58333302px;line-height:12.60999966px;font-family:sans-serif;-inkscape-font-specification:'sans-serif Bold';text-align:center;letter-spacing:0px;word-spacing:0px;text-anchor:middle;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458332"
            x="45.893929"
            y="267.85153"
            id="text4688"><tspan
            sodipodi:role="line"
            x="45.893929"
            y="267.85153"
            style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;line-height:12.60999966px;font-family:sans-serif;-inkscape-font-specification:'sans-serif Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:0.26458332"
            id="tspan4692">THANK</tspan><tspan
            sodipodi:role="line"
            x="45.893929"
            y="280.46152"
            style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;line-height:12.60999966px;font-family:sans-serif;-inkscape-font-specification:'sans-serif Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:0.26458332"
            id="tspan4700">YOU</tspan></text>
          </g>
        </svg>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Close</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">CONFIRM</button>
      </div>
    </div>

  </div>
</div>


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

$(document).ready(function() {
  $('#donate_form').submit(function(evt) {
    
    evt.preventDefault();

    $('#thankYouModal').modal();
  });
});


</script>

</body>
</html>
