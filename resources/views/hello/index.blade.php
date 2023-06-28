<!DOCTYPE html>
<h1>変数をviewに渡す</h1>
@if ($msg)
<p>$msgを表示</p>
<p>{{$msg}}</p>
@else
<p>何か入力してください</p>
@endif

{{--<p>id={{$id}}</p>--}}
<form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>

{{ '<h2>エスケープされる</h2>' }}
{!! '<h2>エスケープされない</h2>' !!}

<ol>
@for($i=1; $i<100; $i++)
@if($i%2 == 1)
    @continue
@elseif ($i<=10)
<li>No, {{$i}}
@else
    @break
@endif
@endfor
</ol>
