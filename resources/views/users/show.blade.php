@extends('layouts.default')
@section('title',$user->name)
    
@section('content')
    <div class="row">
        <div class="offset-sm-2 col-sm-8">
            <div class="col-sm-12">
                <div class="offset-sm-2 col-sm-8">
                    <section class="user_info text-center">
                        @include('shared._user_info',['user'=>$user])
                    </section>
                </div>
                <section class="status">
                    @if($statuses->count()>0)
                        @foreach ($statuses as $status)
                            @include('shared._status',['user'=>$user])
                        @endforeach

                        <div class="mt-5">
                            {!!$statuses->render()!!}
                        </div>
                        
                    @else
                        <p>没有数据!</p>
                    @endif
                </section>
            </div>
        </div>
    </div>
@endsection