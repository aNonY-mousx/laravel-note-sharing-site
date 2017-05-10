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
  	.navbar-default
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

    color: white;
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

.fa, .glyphicon 
{
 margin-right: 10px;
}

</style>
<script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    ]) !!};
  </script>

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
         {{-- <span class="icon-bar"></span> --}}
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
        <button class="btn btn-default navbar-btn"><i class="fa fa-upload" aria-hidden="true"></i>Upload</button>
        @if (Auth::guest())
        <button class="btn btn-default navbar-btn" data-toggle="modal" data-target="#loginregisterModal"><i class="fa fa-user-circle" aria-hidden="true"></i> Sign in<b class="caret"></b></button>
        
              <!--     <ul class="dropdown-menu">
                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                    <hr style="margin: 2px">
                    <li><a href="{{ route('register') }}"><i class="fa fa-plus"></i>Register</a></li>
                  </ul> -->
                  @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>
                @endif
              </ul>
            </div>

          </div>
        </div><!--eND OF NAVBAR-->

        @if (Auth::guest())
        <!-- Modal -->
        <div id="loginregisterModal" class="modal fadein" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal">&times;</button>

               <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Login"> Login </a></li>
                <li><a data-toggle="tab" href="#Register"> Register </a></li>
              </ul>

              <div class="tab-content">
              <!-- Login Tab -->
               <div id="Login" class="tab-pane fade in active">
                <h3>Login</h3>
                <div class="login-tab">
                 <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>    

                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input id="password" type="password" class="form-control" name="password" required>
                      </div>

                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                        Login
                      </button>

                      <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                      </a>
                    </div>
                  </div>
                </form>
              </div> <!--/login-tab -->
            </div>
            <!-- Register tab -->
            <div id="Register" class="tab-pane fade in">
              <h3>Register</h3>
      
              <div class="register-tab">
               <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('collegename') ? ' has-error' : '' }}">
                            <label for="collegename" class="col-md-4 control-label">College Name</label>

                            <div class="col-md-6">
                                <input id="collegename" type="text" class="form-control" name="collegename" value="{{ old('collegename') }}" required>

                                @if ($errors->has('collegename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('collegename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
                            <label for="faculty" class="col-md-4 control-label">Faculty</label>

                            <div class="col-md-6">
                                <input id="faculty" type="text" class="form-control" name="faculty" value="{{ old('collegename') }}" required>

                                @if ($errors->has('faculty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">+977</span>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form> 


              </div> <!--/register-content -->
            </div>
          </div> <!--/tab-content -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div><!-- end of register-login modal -->
  @endif


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

    @if ($errors->has('email'))
    <script type="text/javascript">
       $(window).on('load',function(){
        $('#loginregisterModal').modal('show');
        $("#Register").removeClass("active");
        $("#Login").addClass("active");
    });
    </script>
    @endif
  </body>
  </html>



