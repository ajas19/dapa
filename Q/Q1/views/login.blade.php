<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Login Here</h1>
<form action="{{route('clogin')}}" method="post">
    @csrf
    <label for="">Email</label>
    <input type="email" name="email" placeholder=""Enter Your email>
    @error('email')
    <span style="color:red">{{$message}}</span>
    @enderror
   <br><br>

    <label>Password</label>
    <input type="password" name="password">
    @error('password')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br><br>
    <button type="submit" name="submit">Submit</button>

    @if(session('status'))
    <span style="color:red">{{session('status')}}</span>
    @endif


</form>





</body>
</html>
