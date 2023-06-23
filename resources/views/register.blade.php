@extends('master')
@section("content")
<style>
    html, body {
        height: 100%;
    }

    .form{
        margin-bottom:200px;
    }
.row{
    margin-bottom:219px;
}
    .custom-register {
        max-width: 400px;
        margin: 20px auto; /* Added margin */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f8f8f8;
    }


    .custom-register h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: 600;
        color: #333;
    }

    .custom-register label {
        font-weight: 500;
    }

    .custom-register input[type="text"],
    .custom-register input[type="email"],
    .custom-register input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border-radius: 3px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .custom-register button[type="submit"] {
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        border: none;
    }

    .custom-register button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="container custom-register">
    <div class="row">
        <div class="col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
                <h2>Register</h2>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
