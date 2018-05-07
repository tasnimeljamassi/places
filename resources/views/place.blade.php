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

    <form method="post" action="{{url('place/search')}}">

        {{csrf_field()}}
        <div class="form-group row">
            <label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">
              Name
            </label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" name="query">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
                <input type="submit" class="btn btn-primary" value="Search">
            </div>
        </div>

    </form>


</div>

</body>
</html>