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
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Formatted Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach($results->results as $entry)
            <tr>
                <td><a href="{{url('place/'.$entry->place_id)}}">{{$entry->place_id}}</a></td>
                <td>{{$entry->name}}</td>
                <td>{{$entry->formatted_address}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>