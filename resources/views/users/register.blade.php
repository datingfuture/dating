@extends('layouts.frontview.master')
@section('content')


   <div class="col-md-6">
            <div class="card bg-primary text-center card-form">
              <div class="card-body">
                <h3 class="text-white">Sign Up Today</h3>
                <p class="text-white">Please fill out this form to register</p>


                <form id="registerForm" action="{{ url('/signup') }}" method="post">{{ csrf_field() }}



                  <div class="form-group">
                    <label></label>
                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                  </div>


                  <div class="form-group">


                    <input id="name"  name="name" type="text" class="form-control form-control-lg" placeholder="name">
                  </div>

               



                  <div class="form-group">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email address">
                  </div>



                  <div class="form-group">
                    <label for="inputPassword"><h6 class="text-white">Password:</h6></label>
                   <input  id="user_password" name="password" type="password" class="form-control" placeholder="Password"><span id="passstrength"></span>
                  </div>

                  <div class="form-group">

                     <label for="inputPassword"><h6 class="text-white">Confirm Password:</h6></label>
                   <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Password"><span id="passstrength"></span>
                  </div>

                  <div class="form-group">



                   <input type="checkbox" id="agree" name="agree" value="remember-me" class="form-check-input">

                     <br>


                    <h6 class="text-white">Please Agree to our policy</h6>

                  </div>


                  <div class="form-group">

                   <label for="inputPassword"><h6 class="text-white">Captcha:</h6></label>
                  <div class="col">{!! app('captcha')->display() !!}

                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
            

                  </div>






                  <button class="btn btn-lg btn-dark btn-block" name="submit" type="submit">Register Now</button>
                </form>
              </div>
            </div>
          </div>



@endsection
