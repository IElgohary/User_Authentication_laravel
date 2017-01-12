@extends('layouts.app')
@section('content')

    <div class="container" align="center">
            <div class="col-lg-4 col-lg-offset-4">

                    <h1 class>{{ $profile->first_name }} {{ $profile->last_name }}</h1>
                    <h3>Country: {{ $profile->country }}</h3>
                    <h3>City: {{ $profile->city }}</h3>
                    <h3>Phone: {{ $profile->phone }}</h3>

                    <div class="btn-group">
                        <form action="http://www.facebook.com/{{$profile->facebook_url}}">
                            <input type='submit' value='Facebook' class="btn-info btn-group-justified"/>
                        </form>
                        <br/>
                        <form action="http://www.twitter.com/{{$profile->twitter_url}}">
                            <input type='submit' value='Twitter' class="btn-info btn-group-justified"/>
                        </form>
                        <br/>
                        <form action="/edit_profile">
                            <input type='submit' value='Edit Profile' class="btn-default btn-group-justified"/>
                        </form>

                        <form action="/edit_info">
                            <input type='submit' value='Edit Login info' class="btn-default btn-group-justified"/>
                        </form>

                </div>
            </div>
        </div>

@endsection