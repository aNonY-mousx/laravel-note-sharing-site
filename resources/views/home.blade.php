@extends('layouts.template')
@section('title','Home')

@section('body-content')

<center>
<div class="searchbar">
 <div class="container">
  <div class="row">
    
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
         <h2 style="color:#546E7A;margin-bottom: 10px;">Best Place To Find Engineering Note</h2>
         <p style="color:#90A4AE;margin-bottom: 25px;">Join Our Community For Update!!</p>
        <div class="input-group search-section">              
            <input name="search_param" value="all" id="search_param" type="hidden">         
            <input class="form-control" name="x" placeholder="Search anything here" type="text">
            <div class="input-group-btn search-panel">
              <button type="button" class="btn btn-search cat dropdown-toggle" data-toggle="dropdown">
              <span id="search_concept">All</span> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
              
              <li><a href="#">Choose below</a></li>
              <li class="divider"></li>
              <li><a href="#">1st Year</a></li>
              <li><a href="#">2nd Year</a></li>
              <li><a href="#">3rd Year</a></li>
              <li><a href="#">4th Year</a></li>
              
              
              
              </ul>
            </div>
            <span class="input-group-btn">
              <button class="btn btn-search" type="button"><span class="glyphicon glyphicon-search"></span>SEARCH</button>
            </span>

          </div>
          <p class="needhelp">Need help ?</p>
         </div>
  </div>

</div><!--end of row-->
</div><!--end of container-->

<div class="container-fluid" style="margin-top: 20px;">
<div class="row">

<div class="col-md-9">
    <div class="mainbar">


   </div>
</div>
<div class="col-md-3">
   <div class="sidebarcom">

      <div class="sidebar-header">
  <p><i class="fa fa-line-chart" aria-hidden="true"></i> Community Trending</p>
   </div>
   <div class="media">
    <div class="media-left">
      <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="img-circle media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Right-aligned</h4>
      <p>Lorem ipsum dolor sit amet, consectetu</p>
    </div><!--end of media-body-->
  
    </div><!--end of media-->
    <hr>
    <div class="media">
    <div class="media-left">
      <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="img-circle media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Right-aligned</h4>
      <p>Lorem ipsum dolor sit amet, consectetu</p>
    </div><!--end of media-body-->
  
    </div><!--end of media-->
    
</div><!--end of sidecom-->

</div><!-- end of col-md-3-->
</div><!--end of row-->
</div><!--end of container-->

@endsection





