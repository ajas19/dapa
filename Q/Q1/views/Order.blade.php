<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="{{route('orderReg')}}" method="post">
        @csrf
        <label>Iteam name:</label>
        <input type="text" name="name" placeholder="Enter iteam name">
        <br><br>
        <label>Quantity:</label>
        <input type="number" name="quty" placeholder="Enter the quantity">
        <br><br>
        <label>Date</label>
        <input type="date" name="date">
        <br><br>
        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset">

        </form>




</body>
</html>
