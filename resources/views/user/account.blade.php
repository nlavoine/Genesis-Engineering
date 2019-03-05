@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="registration">
                    <h2>Create an Account</h2>

                    <form class="RegisterUserForm" action="" method="post">
                        <fieldset>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <input class="text" type="text" placeholder="Enter name" name="name" value=""/>
                            </div>
                            <div class="form-group row">
                                <label for="tel" class="col-sm-3 col-form-label">Phone Number</label>
                                <input class="text" type="tel" placeholder="Enter tel" name="tel" value=""/>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <input class="text" type="email" placeholder="Enter email" name="email" value=""/>
                            </div>
                            <div class="form-group row">
                                <label for="psw" class="col-sm-3 col-form-label">Password</label>
                                <input class="text psw" type="password" placeholder="Enter password" name="psw"/>
                            </div>
                            <div class="form-group row">
                                <input class="acceptTerms" type="checkbox" name="acceptTerms"/>
                                <label for="acceptTerms"> I agree to the <a href="">Terms and Conditions</a> and <a
                                            href="">Privacy
                                        Policy</a> </label>
                            </div>
                            <button class="registerNew" type="submit">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="login">
                    <h2>Sign in</h2>

                    <form class="LoginUserForm" action="" method="post">
                        <div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" required>
                            </div>
                            <div class="form-group row">
                                <label for="psw" class="col-sm-3 col-form-label"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                            </div>
                            <div class="form-group row">
                                <button type="submit">Login</button>
                                <label class="col-form-label p-2">
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="container" style="">
                            <div class="form-group row">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @stop