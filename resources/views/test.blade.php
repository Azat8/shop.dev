<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($model as $cat)
    @if($cat->parent_id == 0)
        <ul>
            <li>{{$cat->title}}
                <ul>
                    <li></li>
                </ul>
            </li>
        </ul>
    @endif
@endforeach
</body>
</html>
