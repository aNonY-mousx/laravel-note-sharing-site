<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet"> 
  <style type="text/css">
  	.navbar-defaultt
    {

      background-color:#263238;
      border-radius:0px;
      border:0px;
      color: white;
      margin-bottom:0px;
    }
    .navbar-nav
    {

      padding-left: 50px;
    }
    @media only screen and (max-width: 768px)
    {

      .navbar-nav
      {
        padding-left: 0px;
      }
    }
    .navbar-nav>li:
    {

      color: red;
    }
    .navbar-brand
    {

      padding-left: 20px;
      font-size: 20px;
      font-weight: bold;
    }
    a.navbar-brand:hover
    {

      color:white;
    }
    .btn-default
    {

      background-color:#0288D1;
      border:0px;
      color:white;
      margin-right:  10px;
      margin-left: 10px;
    }
    .btn-default:hover
    {

      background-color: #0277BD;
      color:white;
    }
    .btn-default:active
    {

      background-color: #0277BD;
      color:white;
    }
    .btn-default:focus
    {

      background-color: #0277BD;
      color:white;
    }
    .searchbar
    {

      background-color:#E0E0E0;
      background-image: url("backgroundpattern.png");
      padding-top: 150px;
     
      padding-bottom:150px;
    }
    @media only screen and (max-width: 768px)
    {
     .searchbar{
     padding-top:60px;
     padding-bottom: 60px;
   }


    }
    .searchabove
    {

      line-height:0.7;
    }
    .btn-danger
    {

      background-color:#607D8B;
      border:0px;
      outline: none !important;
    }
    .btn-danger:hover
    {

      background-color:#607D8B;
    }
    .btn-danger.active,btn-danger:active
    {

      background-color:#607D8B;
    }
    .fa-bars
    {

      background-color: white;
    }
    .needhelp
    {
      text-align: left;
       font-weight: normal;
       color:#90A4AE;
       padding-top: 5px
    }
    .box
    {
      background-color:black;
      height: 100px;
      width: 200px;
      display: inline-block;
    }
    .sidebarcom

    {
      
     background-color:#F5F5F5;
      width:100%;
      height:300px;
      display: inline-block;
    }
    .mainbar

    {
      border:solid 1px red;
     background-color: black;
      width:100%;
      height:500px;
      display: inline-block;
    }
    .sidebar-header
    {
      color:white;
      width: 100%;
      height: 50px;
      background-color:#0288D1;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .sidebar-header>p
    {

      padding-top: 10px;
      padding-bottom: 10px;
    }
    .sidebar-header>p>i
    {
      font-size: 20px;
    }
    .media-body
    {

      font-weight: normal;
      text-align: left;
      font-size: 10px;
    }
    .media-body>h1
    {
          
      font-size: 15px;
    }
    .media-left
    {
      padding-left: 10px;
    }
    .media>hr
    {
      background-color: black;
    }
  </style>
  @section('css')
  @show
</head>
<body style="font-family: 'Open Sans', sans-serif;">
<!-- NAVBAR -->
<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">Site LOGO</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
             <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Note<b class="caret"></b></a>
                </li>
                <li><a href="#">Syllabus<b class="caret"></b></a>
                </li>
                <li><a href="#">Contact Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Community <i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
              <button class="btn btn-default navbar-btn"><i class="fa fa-upload" aria-hidden="true"></i>

              Upload</button>
              <button class="btn btn-default navbar-btn"><i class="fa fa-user-circle" aria-hidden="true"></i> Sign in</button>
            </ul>
        </div>
         
    </div>
</div><!--eND OF NAVBAR-->

<!-- body content  -->
@section('body-content')
@show




<br><br><br><br><br>
<br><br><br><br><br>

<!-- footer section -->
<div id="footer">
  <div class="row">
    <div class="col-md-3">
      <h4>About Us</h4>
      <hr class="custom_hr">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium nunc eget mi pellentesque vel adipiscing orci tempus. In dapibus porta feugiat.<br><br> Donec eleifend pharetra velit, ac euismod nunc porta ac. Aliquam est mauris, cursus sit amet facilisis nec, euismod in elit.</p>
    </div>
    <div class="col-md-3 menu">
      <h4>Our Menu</h4>
      <hr class="custom_hr">
      <ul class="custom_ul">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="col-md-3" >
      <h4>Recent Posts</h4>
      <hr class="custom_hr">
      <ul class="custom_ul recent">
        <li>
          <h5>Nulla Consequat massa</h5>
          Aliquam est mauris, cursus sit amet facilisis nec, euismod in elit.
        </li>
        <li>
          <h5>Lorem Ipsum text</h5>
          Aliquam est mauris, cursus sit amet facilisis nec, euismod in elit.         
        </li>
      </ul>
    </div>
    <div class="col-md-3">
      <h4>Contact Us</h4>
      <hr class="custom_hr">
      <ul class="custom_ul contact">
        <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>100 King St,Newyork PTI 1402, United States</li>
        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>9876543210</li>
        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">kritish.dhaubanjar@gmail.com</a></li>
        <li><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span><a href="#">www.example.com</a></li>
      </ul>
    </div>
  </div>
  <div class="row end">
    <div class="col-md-6">&copy2017 Business Growth, All Rights Reserved.</div>
    <div class="col-md-6" style="text-align:right;">Designed by Project Lite.</div>
  </div>
  </div>

<!--  end of footer section -->
@section('script')
@show
</body>
</html>



