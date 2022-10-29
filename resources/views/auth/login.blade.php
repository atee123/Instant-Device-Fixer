<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="Insta Device Fixer">
    
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/assets/img/favicon.png')}}" />
    
        <!-- TITLE -->
        <title>Insta Device Fixer | Login </title>
    
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{URL::asset('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!-- STYLE CSS -->
        <link href="{{URL::asset('assets/dashboard/css/style.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('assets/dashboard/css/dark-style.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('assets/dashboard/css/transparent-style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/dashboard/css/skin-modes.css')}}" rel="stylesheet" />
        <!--- FONT-ICONS CSS -->
        <link href="{{URL::asset('assets/dashboard/css/icons.css')}}" rel="stylesheet" />
        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{URL::asset('assets/dashboard/colors/color1.css')}}" />
    </head>

<body class="app sidebar-mini ltr login-img">

    <div class="">
        <div id="global-loader">
            <img src="{{URL::asset('/assets/dashboard/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>

        <div class="page">
            <div class="">
                
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="{{URL::asset('/assets/dashboard/images/brand/logo-white.png')}}" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
							@csrf

                            <span class="login100-form-title pb-5">
                                Login
                            </span>
							@error('username')
							<span role="alert">
								<strong class="text-danger">{{ $message }}</strong>
							</span>
							@enderror
                            <div class="panel panel-primary">                                
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0"
													type="text"
													name="username"
													value="{{ old('username') }}"
													placeholder="Username"
													id="username"
													required
													autocomplete="username"
													autofocus
												>												
                                            </div>

                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input
													class="input100 border-start-0 form-control ms-0"
													type="password"
													name="password"
													id="password"
													required
													autocomplete="current-password"
													placeholder="Password"
												>
										    </div>
                                            
                                            <div class="container-login100-form-btn">
												<button class="login100-form-btn btn-primary" type="submit"> Login </button>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
	<script src="{{ URL::asset('assets/dashboard/js/jquery.min.js')}}"></script>
	<!-- BOOTSTRAP JS -->
	<script src="{{ URL::asset('assets/dashboard/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{ URL::asset('assets/dashboard/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- SHOW PASSWORD JS -->
	<script src="{{ URL::asset('assets/dashboard/js/show-password.min.js')}}"></script>
	<!-- GENERATE OTP JS -->
	<script src="{{ URL::asset('assets/dashboard/js/generate-otp.js')}}"></script>
	<!-- Perfect SCROLLBAR JS-->
	<script src="{{ URL::asset('assets/dashboard/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
	<!-- Color Theme js -->
	<script src="{{ URL::asset('assets/dashboard/js/themeColors.js')}}"></script>
	<!-- CUSTOM JS -->
	<script src="{{ URL::asset('assets/dashboard/js/custom.js')}}"></script>
</body>
	

</html>
