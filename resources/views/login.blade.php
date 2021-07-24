@extends('master')

@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-sm-2">
                <form action="login" method="POST">
                    <div class="mb-3">
                        @csrf
                      <label for="InputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="InputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="InputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="InputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection