@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
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
    </div>

@endsection