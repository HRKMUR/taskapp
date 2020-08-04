<h1>新規作成</h1>

<form action="/edit" method="POST">
            @csrf
            <p>タイトル：<input type="text" name="title"></p>
            <p>内容：<textarea name="contents" cols="50" rows="10"></textarea></p>
            <p>
                <input type="submit" value="登録">
            </p>
        </form>