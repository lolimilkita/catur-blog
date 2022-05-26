@extends('layouts.main')

@section('container')
    {{-- <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 my-3 fw-normal text-center">Register Form</h1>
                <form>
                    <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center my-3">Have account? <a href="/login">Login!</a></small>
            </main>
        </div>
    </div> --}}

    <div class="row justify-content-center">
		<div class="col">

			<div class="card-group" id="cardLogin">

                <div class="card border-0 text-end" id="cardImgLoginAtas">
					<img src="img/for-register.png" class="imgLogin">
				</div>

				<div class="card border-0" id="cardInputLogin">
					<h2 class="card-header text-start my-4" id="cardHeaderLogin">Register</h2>
					<div class="card-body">
                        <form>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control border-dark border-opacity-75" name="name" id="floating-name" placeholder="Name" style="border-radius: 12px; height: 62px;">
                                <label for="floating-name">Name</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control border-dark border-opacity-75" name="username" id="floating-username" placeholder="Username" style="border-radius: 12px; height: 62px;">
                                <label for="floating-username">Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control border-dark border-opacity-75" name="email" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="password" class="form-control border-dark border-opacity-75" name="password" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-dark" id="btn-login" type="submit">Register</button>
                        </form>
                        
                        <hr style="border-bottom: 2px solid">

                        <small style="color: rgba(54, 54, 54, 1)">Have An Account?<a href="/login" class="btn" id="dont-have-account" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; background-color: white;">Login</a></small>
                    </div>
				</div>

                <div class="card border-0 text-end" id="cardImgLogin">
					<img src="img/for-register.png" class="imgLogin">
				</div>

			</div>

		</div>
	</div>

@endsection