@extends('layouts.app')
@section('content')
    <div class="container " align="center">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
            {{ csrf_field() }}
            <div class="row" >
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="input-group">

                        <label for ="first_name">First name:</label>
                        <input type="text" name ="first_name" id = "first_name" class="form-control"
                               value={{$profile->first_name}}>
                        <br/>
                        <label for ="last_name">Last name:</label>
                        <input type="text" name ="last_name" id = "last_name" class="form-control"
                               value={{$profile->last_name}}>
                        <br/>
                        <label for ="country">Country:</label>
                        <input type="text" name ="country" id = "country" class="form-control"
                               value={{$profile->country}}>
                        <br/>
                        <label for ="city">City:</label>
                        <input type="text" name ="city" id = "city" class="form-control"
                               value={{$profile->city}}>
                        <br/>
                        <label for ="phone">Phone:</label>
                        <input type="text" name ="phone" id = "phone" class="form-control"
                               value={{$profile->phone}}>
                        <br/>
                        <label for ="facebook_url">Facebook URL:</label>
                        <input type="text" name ="facebook_url" id = "facebook_url" class="form-control"
                               value={{$profile->facebook_url}}>
                        <br/>
                        <label for ="twitter_url">Twitter URL:</label>
                        <input type="text" name ="twitter_url" id = "twitter_url" class="form-control"
                               value={{$profile->twitter_url}}>
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