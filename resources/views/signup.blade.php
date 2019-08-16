@extends('layouts.main')
@section('content')

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
<div class="container">
<a class="navbar-brand" href="#">Sign Up Form:</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <p class="text-center">Already have an account? <a href="login">Log In</a> </p>
      </li>
      
  </ul>

</div>
</div>
</nav>

<div class="my-form">
<div class="cotainer">
  <div class="row justify-content-center">
      <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Sign Up Here</div>
                  <div class="card-body">
            <form name="my-form"  action="/signup" method="POST">
               {{ csrf_field() }}

                          <div class="form-group row">
                   <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="first_name" class="form-control" name="first_name">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="last_name" class="form-control" name="last_name">
                              </div>
                          </div>
                          

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                              <div class="col-md-6">
                                  <input type="email" id="email" class="form-control" name="email">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Create Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="occupation" class="col-md-4 col-form-label text-md-right">Occupation</label>
                              <div class="col-md-6">
                          <div class="input-group">
                              <div class="rs-select2 js-select-simple select--no-search">
                                  <select name="occupation">
                                      <option disabled="disabled" selected="selected">Occupation</option>
                                      <option>Lawyer</option>
                                      <option>Student</option>
                                      <option>Other</option>
                                  </select>
                                  <div class="select-dropdown"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                          <div class="form-group row">
                              <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                              <div class="col-md-6">
                                  <input type="text" id="phone" class="form-control" name="phone">
                              </div>
                          </div>


                          

                          

                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <button type="reset" class="btn btn-primary">Cancel</button>
                              </div>
                              </form>
                          </div>
                      
                  </div>
              </div>
      </div>
  </div>
</div>
@endsection
