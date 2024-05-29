
@vite(['resources/css/app.css'])

<x-layout>
    <div class="container">
        <div class="mainBox">
            <div class="centeredBox">
                <div class="loginBoxVisibility" id="loginBox">
                    <div class="loginBox">
                        <div>
                            Already Have an Account?
                        </div>
                        <div class="btnBox">
                            <button class="btn" id="signinBtn">Sign in</button>
                        </div>
                    </div>
                </div>
                <div class="loginForm" id="loginFormm">
                    <form action="/login" method="POST">
                        @csrf
                    <div class="mainLoginBox">
                        <div class="loginVisibility" id="loginVisibility">
                            <div class="loginTitle">
                                Sign in
                            </div>
                            <div class="loginFormInput">
                                <div class="input">
                                    <input name="loginusername" type="text" placeholder="Username" />
                                </div>

                                <div class="input">
                                    <input name="loginpassword" type="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="btnBox">
                                <button class="LoginBtn">Sign in</button>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>
                <div class="fakeSignupDiv" id="fakeSignupDiv"></div>
                <div class="fakeSigninDiv" id="fakeSigninDiv"></div>
                <div class="signupBoxVisibility" id="signupBox">
                    <div class="signupBox">
                        <div>
                            Don't Have an Account?
                        </div>
                        <div class="btnBox">
                            <button class="btn" id="signupBtn">Sign up</button>
                        </div>
                    </div>
                </div>
                <div class="signupForm" id="signupFormm">
                    <form action="/singUp" method="POST" id="registration-form">
                        @csrf
                    <div class="mainSignupBox">
                        <div class="signupVisibility" id="signupVisibility">
                            <div class="signupTitle">
                                Sign up
                            </div>
                            <div class="signupFormInput">
                                <div class="input">
                                    <input value="{{old('username')}}" name="username" id="username-register" type="text" placeholder="Pick a username" autocomplete="off" />
                                    @error('username')
              <p class='m-0 small alert alert-danger shadow-sm'> {{$message}}</p>
            @enderror
                                </div>
                                <div class="input">
                                    <input value="{{old('email')}}" name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
                                    @error('email')
              <p class='m-0 small alert alert-danger shadow-sm'>   {{$message}}</p>
            @enderror
                                </div>
                                <div class="input">
                                    <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
                                    @error('password')<p class='m-0 small alert alert-danger shadow-sm'>
                                        {{$message}}
                                    </p>@enderror
                                </div>
                                <div class="input">
                                    <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
                                </div>
                            </div>
                            <div class="btnBox">
                                <button class="signupBtn">Sign up</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    
@vite(['resources/js/app.js']) 


</x-layout>