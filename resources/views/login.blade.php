@extends('master')
@section("content")
<style>
    .custom-login {
        max-width: 400px;
        margin: 20px auto; /* Added margin */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f8f8f8;
    }

    .custom-login h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: 600;
        color: #333;
    }

    .custom-login label {
        font-weight: 500;
    }

    .custom-login input[type="email"],
    .custom-login input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border-radius: 3px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .custom-login button[type="submit"] {
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        border: none;
    }

    .custom-login button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <h2>Login</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection
