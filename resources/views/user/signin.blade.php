@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <!--Form with header-->
        <div class="card">
            <div class="card-block">
            
                <!--Header-->
                <div class="form-header text-xs-center">
                    <h3>Sign In:</h3>
                </div>
                
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <!--Body-->
                <form action="{{ route('user.signin') }}" method="post">

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password">Your password</label>
                    </div>

                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>

                    {{ csrf_field() }}

                    <!--Footer-->
                    <div class="modal-footer" style="margin-top: 10px;">
                        <div class="options">
                            <p>Not a member? <a href="{{ route('user.signup') }}">Sign Up</a></p>
                            <p>Forgot <a href="#">Password?</a></p>
                        </div>
                    </div>

                </form>
            </div> <!-- /.card-block -->
        </div> <!-- /.card -->
        <!--/Form with header-->
    </div>
</div>
@endsection
