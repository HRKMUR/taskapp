<ul>
@foreach ($values as $value)
   @if($value->user_id==$id)
    <a href="index/{{ $value->id }}"><li>{{ $value->title }}</li></a>
    @endif
   
@endforeach
</ul>

<a href="/edit"><p>新規投稿</p></a>

<p>{{$user_id}}</p>