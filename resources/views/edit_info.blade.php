@extends('layouts.app')
@section('content')
    <div class="container " align="center">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/updated_info') }}">
            {{ csrf_field() }}
            <div class="row" >
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="input-group">

                        <label for ="name">Name:</label>
                        <input type="text" name ="name" id = "name" class="form-control"
                               value={{$user->name}}>
                        <br/>
                        <label for ="email">Email:</label>
                        <input type="email" name ="email" id = "email" class="form-control"
                               value={{$user->email}}>
                        <br/>
                        <label for ="password">Password:</label>
                        <input type="password" name ="password" id = "password" class="form-control">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <input type="submit" value="Apply" class="btn btn-group-lg btn-info form-control"/>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection