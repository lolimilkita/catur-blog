@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
		<div class="col">

			<div class="card-group" id="cardLogin">

                <div class="card border-0 text-end" id="cardImgLoginAtas">
					<img src="img/for-login.png" class="imgLogin">
				</div>

				<div class="card border-0" id="cardInputLogin">
					<h2 class="card-header text-start my-4" id="cardHeaderLogin">Login</h2>
					<div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control border-opacity-75" name="email" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email / Username</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="password" class="form-control border-opacity-75" name="password" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-dark" id="btn-login" type="submit">Login</button>

                            <p class="or">OR</p>

                            <a href="#" class="w-100 btn btn-lg btn-light border-dark border-opacity-75 mb-5" style="background-color: white; padding: 12px 0">
                                <img width="20px" style="margin-bottom: 3px; margin-right: 5px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="">
                                Login with google
                            </a>

                        </form>

                        <small><a href="" class="text-decoration-none" style="color: rgba(54, 54, 54, 1)">Forgot my password</a></small>
                        
                        <hr style="border-bottom: 2px solid">

                        <small style="color: rgba(54, 54, 54, 1)">Don’t Have An Account?<a href="/register" class="btn" id="dont-have-account" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; background-color: white;">Register now!</a></small>
                    </div>
				</div>

                <div class="card border-0 text-end" id="cardImgLogin">
					<img src="img/for-login.png" class="imgLogin">
				</div>

			</div>

		</div>
	</div>

@endsection