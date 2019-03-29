<a href="{{route('users.show',$user->id)}}">
    <img src="{{$user->gravatar('100')}}" alt="{{$user->name}}" class="gravatar">
</a>
<h2>{{$user->name}}</h2>
<div class="row col-md-12 mx-auto font-weight-bold">
    <a class="col-md-4" href="{{route('users.followings',$user->id)}}">
        <p>{{count($user->followings)}}</p>
        <p>关注</p>
    </a>
    <a class="col-md-4" href="{{route('users.followers',$user->id)}}">
        <p>{{count($user->followers)}}</p>
        <p>粉丝</p>
    </a>
    <a class="col-md-4" href="{{route('users.show',$user->id)}}">
        <p>{{$user->statuses()->count()}}</p>
        <p>微博</p>
    </a>
</div>

<div>
    @can('follow',$user)
        @if(Auth::user()->isFollowing($user->id))
            <form action="{{route('follower.destroy',$user->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-secondary btn-sm">取消关注</button>
            </form>
        @else
            <form action="{{route('follower.store',$user->id)}}" method="post">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary btn-sm">关注</button>
            </form>
        @endif
    @endcan
</div>