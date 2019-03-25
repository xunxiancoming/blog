@extends('layouts.default')
@section('title',$user->name)
    
@section('content')
    <div class="row">
        <div class="offset-sm-2 col-sm-8">
            <div class="col-sm-12">
                <div class="offset-sm-2 col-sm-8">
                    <div class="user_info text-center">
                        @include('shared._user_info',['user'=>$user])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection