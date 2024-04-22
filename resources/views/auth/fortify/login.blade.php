@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" id="cocacolaEspuma" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="correo" class="form-control" required autofocus>
                                <span class="error" id="emailError"></span>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="contrasenya" class="form-control" required>
                                <span class="error" id="passwordError"></span>
                            </div>

                            <button type="submit" id="loginBtn" class="btn btn-primary" id="loginBtn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection