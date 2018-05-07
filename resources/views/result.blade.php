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

<div class="container">
   <p>
       <h3>{{$result->result->name}}</h3>
       <h3>{{$result->result->formatted_address}}</h3>
       <h3>Lat: {{$result->result->geometry->location->lat}}</h3>
       <h3>Lng: {{$result->result->geometry->location->lng}}</h3>
   </p>
</div>

</body>
</html>