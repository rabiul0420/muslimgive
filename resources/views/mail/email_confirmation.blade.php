<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>

<p>Hello {{$alldata->name}}</p>

<h3>Please click the following link to activate your account</h3>

<p><a href="{{url('user/activate', $alldata->id)}}">Verify Email</a></p>



<p>Best Regards,</p>

<p>{{settings('site_title',$settings)}}</p>

</body>
</html>
