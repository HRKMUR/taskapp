<h1>更新</h1>

<form action="/index/{{$task -> id}}/update_page" method="post">
            @csrf
            <p>タイトル：<input type="text" name="title"></p>
            <p>内容：<textarea name="contents" cols="50" rows="10"></textarea></p>
            <p>
                <input type="submit" value="更新">
            </p>
        </form>