<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>

<p>Hello {{$alldata['name']}}</p>

<table border="1">
    <tr>
        <th>Name</th>
        <td>{{$alldata['name']}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$alldata['email']}}</td>
    </tr>
    <tr>
        <th>Message</th>
        <td>{{$alldata['message']}}</td>
    </tr>
</table>


<p>Best Regards,</p>

<p>{{settings('site_title',$settings)}}</p>

</body>
</html>
