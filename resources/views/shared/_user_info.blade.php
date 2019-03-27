<a href="{{route('users.show',$user->id)}}">
    <img src="{{$user->gravatar('100')}}" alt="{{$user->name}}" class="gravatar">
</a>
<h2>{{$user->name}}</h2>
<div class="row col-md-12 mx-auto font-weight-bold">
    <div class="col-md-4">
        <p>12</p>
        <p>关注</p>
    </div>
    <div class="col-md-4">
        <p>8</p>
        <p>粉丝</p>
    </div>
    <div class="col-md-4">
        <p>121</p>
        <p>微博</p>
    </div>
</div>