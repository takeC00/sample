<h1>メッセージ</h1>

<form action="../chatUser/{{$user->id}}" method="get">
    <table border = 1px solid>
        <th>id</th>
        <th>メッセージ内容</th>
        <th>投稿者</th>
        @foreach($messages as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->content}}</td>
                <td>{{$user->name}}</td>
                <td><input type="submit" value="既読"></td>
            </tr>
        @endforeach
    </table>
</form>
