@extends('layouts.default')
@section('title','首页')

@section('content')

    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">  
                    <form action="{{route('statuses.store')}}" method="POST">
                        @include('shared._errors')
                        @csrf
                        <textarea name="content" rows="3" class="form-control" placeholder="聊聊新鲜事……">
                            {{old('content')}}
                        </textarea>

                        <div class="text-right">
                            <button class="btn btn-primary mt-3" type="submit">发布</button>
                        </div>
                    </form>
                </section>

                <h5>微博列表</h5>
                <hr>
                <section class="status">
                    @if($statuses->count()>0)
                        @foreach ($statuses as $status)
                            @include('shared._status',['user'=>$status->user])
                        @endforeach

                        <div class="mt-5">
                            {!!$statuses->render()!!}
                        </div>
                        
                    @else
                        <p>没有数据!</p>
                    @endif
                </section>
            </div>

            <div class="col-md-4 text-center">
                @include('shared._user_info',['user'=>Auth::user()])
            </div>
        </div>
    @else
        <div class="jumbotron">
            <h1>欢迎来到金龙的博客</h1>
            <p class="lead">
                这里有最好玩的应用推荐，欢迎留言。
            </p>
            <p>
                <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">现在注册登录去留言</a>
            </p>
        </div>
    @endif
@endsection