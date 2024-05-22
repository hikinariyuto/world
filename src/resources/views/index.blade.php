<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    最新SNS”World”

    <form class="form" action="/test" method="post">
        @csrf
        <div>名前<input type="text" name="name" /></div>
        <div>電話番号<input type="text" name="tel" /></div>
        <div><button class="form__button" type="submit">送信</button></div>
    </form>
    @foreach ($datas as $data)
    {{ $data -> id}}
    {{ $data -> name}}
    @endforeach
</body>
</html>