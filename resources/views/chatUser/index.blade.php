<h1>ChatUser一覧</h1>


<table border = 1px solid>
    <th>id</th>
    <th>名前</th>
    <th>既読id</th>
    <th>メッセージ確認</th>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->message_id}}</td>
            <td><a href="/message/{{$user->id}}">確認</a></td>
        </tr>
    @endforeach
</table>
