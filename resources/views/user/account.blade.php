@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="registration text-center">
                    <h2>Create new account</h2>

                    <form class="RegisterUserForm" action="" method="post">
                        <div class="container">
                            <div class="form-group row justify-content-center ">

                                <input class="text col-md-10 form-control rounded-0" type="text" placeholder="Username*"
                                       name="name" value="" required/>
                            </div>
                            <div class="form-group row justify-content-center">
                                <input class="text col-md-10 form-control rounded-0" type="email" placeholder="Email*"
                                       name="email" value="" required/>
                            </div>
                            <div class="form-group row justify-content-center">
                                <input class="text col-md-10 form-control rounded-0" type="password" placeholder="Password*"
                                       name="psw" required/>
                            </div>
                            <div class="form-group row justify-content-center align-items-center">
                                <input type="checkbox" name="acceptTerms"/>
                                <label class="pl-3 m-0" for="acceptTerms"> I agree to the <a href="">Terms and
                                        Conditions</a> and <a
                                            href="">Privacy
                                        Policy</a> </label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary rounded-0 font-weight-bold"
                                    style="border-width: 2px">Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login text-center">
                    <h2>Sign in</h2>

                    <form class="LoginUserForm" action="" method="post">
                        <div class="container">
                            <div class="form-group row justify-content-center">
                                <input class="form-control col-10 rounded-0" type="text" placeholder="Username*" name="username"
                                       required/>
                            </div>
                            <div class="form-group row justify-content-center">

                                <input class="form-control col-10 rounded-0" type="password" placeholder="Password*" name="psw"
                                       required/>
                            </div>
                            <div class="form-group row justify-content-center">
                                <button type="submit" class="btn btn-outline-primary rounded-0 font-weight-bold"
                                        style="border-width: 2px">Login
                                </button>
                                <label class="col-form-label p-2">
                                    <input type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <div class="form-group row justify-content-center">
                                <span class="psw p-2">Forgot <a href="#">password?</a></span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop