@extends('layouts.template')
@section('title','User Profile')

@section('css')
<link rel="stylesheet" type="text/css" href="/css/userprofile.css">
@endsection


@section('body-content')

<div class="container-fluid">
 <div class="row">
   <div class="account-heading">
<h3><i class="fa fa-cog" aria-hidden="true"></i>
 ACCOUNT SETTING</h3>
     </div>
     <div class="account-menu">
 <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#profile"> <i class="fa fa-user accounticon" aria-hidden="true"></i> PROFILE</a></li>
    <li><a data-toggle="pill" href="#note"><i class="fa fa-upload accounticon" aria-hidden="true"></i> NOTES</a></li>
    <li><a data-toggle="pill" href="#request"><i class="fa fa-tags" aria-hidden="true"></i> REQUEST</a></li>
    
  </ul>
  </div>
  
  <div class="tab-content">



    <div id="profile" class="tab-pane fade in active">
      
       <div class="container-fluid" style="margin-top: 10px;">
       <div class="row">
         <div class="col-sm-3">
              <div class="profile-pics">
                <div class="col-sm-12  col-xs-12 ">
                  <center>
                   <img src="/Userpics/userprofile.png" class="img-responsive profile-sidepics" width="150px" height="150px">
        
                      <div class="profile-username">
                       <h5>Lapzap 98</h5>
                       <p>Joined:4,April 2017</p>
                      
                      </div>
                      <button class="btn btn-default update-pics">update profile pics</button>
                        
                      
                      <center>
                   </div>
              </div><!-- end of profile pics-->              
         </div><!-- end of col-sm-3-->
         <hr class="section-division">
         <div class="col-sm-9 col-xs-12">
        
            <div class="profile-sidebar">
              <div class="col-sm-6  col-xs-12">


               <h3>Account data</h3>
             <form>
               <div class="form-group">
                <label class="inputlabel">Username:</label>
                <input type="text" class="form-control" id="name" value="lapzap98" disabled>
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="lapzap98@gmail.com" disabled>
              </div>
               <div class="form-group">
                <label for="oldpwd">Old password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter your old password">
              </div>

               <div class="form-group">
                <label for="newpwd">New password:</label>
                <input type="password" class="form-control" id="newpwd" placeholder="Enter your new password">
              </div>
              <button class="btn btn-default" type="submit"> UPDATE</button>

              </form><!-- end of form-->
              </div><!--account details end-->

             <div class="col-sm-6 col-xs-12">
              <h3>Personal data</h3>
           

             <form>
               <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" value="Manjil Nepali" disabled>
              </div>

              <div class="form-group">
                <label>Faculty:</label>
                <input type="text" class="form-control"  value="computer" disabled>
              </div>
               <div class="form-group">
                <label>Batch</label>
                <input type="text" class="form-control"  placeholder="2072">
              </div>

               <div class="form-group">
                <label >College</label>
                <input type="text" class="form-control"  placeholder="Kantipur engineering College">
              </div>
              <button class="btn btn-default" type="submit"> UPDATE</button>

              </form><!-- end of form-->
                </div><!--end of personal data-->

         </div>
         
         </div>



       </div><!-- end of row-->
       </div><!-- end of container-->





    </div><!-- end of profile tab-->





    <div id="note" class="tab-pane fade">
      <div class="container-fluid"> 
      <div class="row">
      <div class="container-fluid" style="margin-top: 10px;">
       <div class="row">
         <div class="col-sm-3">
              <div class="profile-pics">
                <div class="col-sm-12  col-xs-12 ">
                  <center>
                   <img src="userprofile.png" class="img-responsive profile-sidepics" width="150px" height="150px">
        
                      <div class="profile-username">
                       <h5>Lapzap 98</h5>
                       <p>Joined:4,April 2017</p>
                      
                      </div>
                      <button class="btn btn-default update-pics">update profile pics</button>
                        
                      
                      <center>
                   </div>
              </div><!-- end of profile pics-->              
         </div><!-- end of col-sm-3-->
         <hr class="section-division">
         <div class="col-sm-9 col-xs-12">
        
            <div class="profile-sidebar">
             <center>
              <div class="note-header">
                 <p>UPLOADED NOTES</p>
              </div>
                     


             </center>
            </div><!--end of profile-sidebar-->

             

         </div><!--end of col-sm-9-->
         
         </div><!--end of row-->

      </div><!--end of container-->
      </div><!--end of row-->
      </div><!-- end of container-->
    </div><!--end  of note tab-->


    <div id="request" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div><!-- end of request tab-->
   
  </div><!-- end of tab-contene-->

</div>
</div>



@endsection
