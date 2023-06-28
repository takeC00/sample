<!DOCTYPE html>
<h1>変数をviewに渡す</h1>
<p>$msgを表示</p>
<p>{{$msg}}</p>
{{--<p>id={{$id}}</p>--}}
<form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>
