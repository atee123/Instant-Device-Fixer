	<div class="login-wrapper columns is-gapless" data-switcher-visible>
        <!-- Form section -->
        <div class="column is-6">
            <div class="hero is-fullheight">
                <!-- Header -->

                <!-- Body -->
                <div class="hero-body">
                    <div class="container">
                        <div class="columns">
                            <div class="column is-12">
                                <div class="auth-content">
                                    <h2>{{ __('Hi There.') }}</h2>
                                    <p>{{ __('Please start by creating an account.') }}</p>
                                    <a href="{{ route('login') }}">{{ __('Have an account? Sign In') }} </a>
                                </div>

                                <div class="auth-form-wrapper">
                                    <!-- Sign up form -->
                                    <div id="login-card" class="animated preFadeInLeft fadeInLeft">
										<div class="flex-card-form ">
											<div id="e_msg"></div>
											<form method="POST" action="{{ route('register') }}">
												@csrf

												<div class="row">
													<div class="col-md-12">
														<div class="control-material is-primary">
															<label for="name">{{ __('Name') }}</label>
															<input type="text" id="name" name="name" value="{{ old('name') }}" class="material-input @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
															<span class="material-highlight"></span>
															<span class="bar"></span>
															@error('name')
																<span class="invalid-feedback" role="alert">
																	<strong class="text-danger">{{ $message }}</strong>
																</span>
															@enderror
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="control-material is-primary">
															<label for="username">{{ __('Username') }}</label>
															<input type="text" id="username" name="username" value="{{ old('username') }}" class="material-input @error('username') is-invalid @enderror" required autocomplete="username" autofocus>
															<span class="material-highlight"></span>
															<span class="bar"></span>
															@error('username')
																<span class="invalid-feedback" role="alert">
																	<strong class="text-danger">{{ $message }}</strong>
																</span>
															@enderror
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="control-material is-primary">
															<label for="email">{{ __('Email Address') }}</label>
															<input type="email" id="email" name="email" value="{{ old('email') }}" class="material-input @error('email') is-invalid @enderror" required autocomplete="email">
															<span class="material-highlight"></span>
															<span class="bar"></span>
															@error('email')
																<span class="invalid-feedback" role="alert">
																	<strong class="text-danger">{{ $message }}</strong>
																</span>
															@enderror
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="control-material is-primary">
															<label for="password">{{ __('Password') }}</label>
															<input type="password" id="password" name="password"class="material-input  @error('password') is-invalid @enderror" required autocomplete="new-password">
															<span class="material-highlight"></span>
															<span class="bar"></span>
															@error('password')
																	<span class="invalid-feedback" role="alert">
																		<strong class="text-danger">{{ $message }}</strong>
																	</span>
															@enderror
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="control-material is-primary">
														<label for="repassword">{{ __('Confirm Password') }}</label>
														<input type="password" id="password_confirmation" name="password_confirmation"class=" material-input" required>
														<span class="material-highlight"></span>
														<span class="bar"></span>
													</div>
													</div>
												</div>

												<div class="row mt-20">
													<div class="col-md-12">
														<button type="submit" class="button button-cta btn-align primary-btn is-fullwidth raised no-lh">
															{{ __('Sign Up') }}
														</button>														
													</div>
												</div>
											</form>

										</div>

									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image section (hidden on mobile) -->
        <div class="column login-column is-6 is-hidden-mobile hero-banner" >
            <div class="hero signup-hero has-background-image is-cover is-fullheight is-app-grey" data-background="assets/img/logo.png" data-demo-background="assets/img/logistic-bg.jpg">
                <div class="hero-body"></div>
                <div class="hero-footer">
                    <p class="has-text-centered"></p>
                </div>
            </div>
        </div>
    </div>

