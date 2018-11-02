<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
  @if ($donors->isEmpty())
  {{"no results found!"}}
  
  @else 
  <ul>
@foreach ($donors as $donor)
 <li>{{$donor->phonenumber}}</li>
 <li> {{$donor->name}}</li>
 <li>{{$donor->age}}</li>
 <li>{{$donor->city}}</li>
 <li>{{$donor->bloodtype}}</li>
 @endforeach
 @endif 
</ul>
</body>
</html>