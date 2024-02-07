<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>This is the home page</h1>


<button><a href="{{url('iteam')}}">Order Iteam</a></button>


<table border="1">

    <tr>
        <th>User_ID</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>date</th>
    </tr>

    @foreach($order as $iteam)
    <tr>
        <td>{{$iteam->User_ID}}</td>
        <td>{{$iteam->name}}</td>
        <td>{{$iteam->quty}}</td>
        <td>{{$iteam->date}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
