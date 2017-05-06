@extends('layouts.template')
@section('css')
 <link rel="stylesheet" href="/css/user_profile0.css">
@endsection

@section('body-content')
<!-- THe Users profile side bar  -->
<div class="">
	<div class="row profile">
		<div class="col-md-5 col-xs-12">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="Userpics/userprofile.png" class="img-responsive img-circle" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						MR. SSSSSSS sSS
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>

				<div class="profile-usermenu">
					<ul id ="profile-nav" class="nav">
						<li class="active profile-options" value="1">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li value = "2" class="profile-options">
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li value ="3" class="profile-options">
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li value = "4" class ="profile-options">
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
					<br><br>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-7 col-xs-12">

            <div class="profile-content fb-profile" style="display: block">
              	<div class ="profile-section" id="Overview">
              	   <div class="img-wrapper">

					<img align="left" class="fb-image-lg" src="Userpics/ss0.jpg" alt="Profile image example"/>
	        		<img align="left" class="fb-image-profile thumbnail" src="Userpics/userprofile.png" alt="Profile image example"/>
	        		<div class="img-overlay">
	        			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-cog"></span><span class="caret"/></span></button>

	           		 	<ul class="dropdown-menu" role="menu">
	                                <li><a href="#">Change Profile Pic</a></li>
	                                <li class="divider"></li>
	                                <li><a href="#">Changer Cover pic</a></li>
	                    </ul>
	            	</div>
	              </div>

	        		<div class="fb-profile-text">
	        			<br>
	           		 	<h3>MR. SSSSS sSs</h3>
	            		<p>Description</p>
	        		</div>
	        		<div class="profile-introduction">
					
                    		<div class="panel panel-primary">
                        	<div class ="panel-body">
                        	<small><cite title="User-Location">Dhapakhel, Lalitpur <i class="glyphicon glyphicon-map-marker">
                    		</i></cite></small>
                            <i class="glyphicon glyphicon-envelope"></i> mrsssss@gmail.com
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="#">User has shared no website</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i> June 02, 1988</div>
                            </div>
				</div>

        	  	</div>

        	  	<div class="profile-section" id="AccountSettings" style="display: none">
        	  		<p>Account Settings</p>
        	  		<ul class="nav nav-tabs">
        	  			<li><a class="active" data-toggle="tab" href="#settings-personal">Personal</a></li>
        	  			<li><a data-toggle="tab" href="#settings-password">Password</a></li>
        	  			<li><a data-toggle="tab" href="#settings-editprofile">Edit Profile</a></li>
        	  		</ul>
        	  		<div class="tab-content">
        	  			<div id="settings-personal" class="tab-pane fade in active">
        	  				<p>PESONAL SETTINGS</p>
        	  			</div>
        	  			<div id="settings-password" class="tab-pane fade">
        	  				<p class="text text-info">CHANGE PASSWORD</p>
        	  				<form>
        	  					<div class="form-group">
        	  						<label class="control-label sr-only " for="email">Current Password</label>

    									<div class="input-group">
    										<span class="input-group-addon">
    											Current Password
    										</span>
      										<input type="password" class="form-control" id="email" placeholder="Current password">
      									</div>
        	  					</div>

        	  					<div class="form-group">
        	  						<label class="control-label sr-only" for="email">New Password</label>
      									<div class="input-group">
    										<span class="input-group-addon">
    											The New Password    
    										</span>
      										<input type="password" class="form-control" id="email" placeholder="New password">
      									</div>
        	  					</div>
        	  					<div class="form-group">
        	  						<label class="control-label sr-only" for="email">Confirm Password</label>
      									<div class="input-group">
    										<span class="input-group-addon">
    											Confirm Password
    										</span>
      										<input type="password" class="form-control" id="email" placeholder="Confirm">
      									</div>
        	  					</div>
        	  					<div class="form-group">
        	  						<input type="submit" name="submit-new-password" class=" pull-left btn btn-default" value="Change Password">
        	  					</div>
        	  				</form>
        	  			</div>
        	  			<div id="settings-editprofile" class="tab-pane fade">
        	  				<p>EDIT PROFILE</p>
        	  			</div>
        	  		</div>
        	  	</div>
        	  	<div class ="profile-section" id="Tasks" style="display: none">
        	  		<p>Tasks</p>
        	  	</div>
        	  	<div class="profile-section" id="Help" style="display: none">
        	  		<p>Help</p>
        	  	</div>		  
			   
            </div>
		</div>
	</div>
	
</div>

<!-- End of Users side profile sidebar -->

@endsection

@section('script')
<!--a simple script to handle click events on the sidebar usin jquery -->

<script type="text/javascript">
	$(document).ready(function(){
		$("#profile-nav").on("click","li",function(event){
			event.preventDefault();
			$(".profile-options").removeClass("active");
			$(this).addClass("active");			
			var va=$(this).val();
			$(".profile-section").css('display','none');

			 switch(va)
			 {	
			 	case 2:
			 		$("div #AccountSettings").css('display','block');
			 		break;
			 	case 3:
					$("div #Tasks").css('display','block');	
					break;
				case 4:
					$("div #Help").css('display','block');
					break;
				default:
			 		$("div #Overview").css('display','block');

			 }
		});
	});	
</script>
<!-- End of the script :)  and yeah we will need ajax implementation -->

@endsection
