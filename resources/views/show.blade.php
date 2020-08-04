<h1>{{$values->title}}</h1>

<br>
<br>
<p>{{$values->contents}}</p>

<a href="/index/{{ $values->id }}/update_page"><li>更新</li></a>



<form action="/index/{{ $values->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">削除</button>
        </form>

