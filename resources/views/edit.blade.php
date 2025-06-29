<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('store.update',$id)}}" method="POST">


@csrf
@method('patch')
<label for="clientname">clientname</label>
<input type="text" name="clientname" id="clientname" value="{{$id->clientname}}">

<label for="clientnumber">clientnumber</label>
<input type="text" name="clientnumber" id="clientnumber" value="{{$id->clientnumber}}">

<label for="studentname">studentname</label>
<input type="text" name="studentname" id="studentname" value="{{$id->studentname}}">

<label for="studentlevel">studentlevel</label>
<input type="text" name="studentlevel" id="studentlevel" value="{{$id->studentlevel}}">




<button type="submit">send</button>






</form>
<a href="{{url('/list')}}">list</a>



</body>
</html>
