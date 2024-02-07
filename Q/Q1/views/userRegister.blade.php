<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        /* .reg{

            width:400px;
            margin:auto;
            border:2px black solid;
        }

        form{
            padding:20px;
        }

        h1{
            text-align:center;
        } */

    </style>
</head>
<body>

<h1>Register Here</h1>

<div class="reg">
    <form action="{{route('RegisterUser')}}" method="post">
    @csrf
        <label>Name :</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Email :</label>
        <input type="text" name="email" placeholder="Enter your name">
        @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Gender :</label>
        <input type="radio" name="gender" value="Male">

        <label>male </label>
        <input type="radio" name="gender" value="Male">
        <label>Female</label>
        <input type="radio" name="gender" value="Male">
        <label>Other</label>
        @error('gender')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>
        <label>Description</label>
        <textarea name="desc" cols="20" rows="15"></textarea>
        @error('desc')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Select the country</label>
        <select name="country">
            <option selected value="">Choose ...</option>
            <option value="SRILANKA">SRILANKA</option>
            <option value="JAPAN">JAPAN</option>
            <option value="UK">UK</option>
            <option value="USA">USA</option>
        </select>
        @error('country')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <label>Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm your password">
        @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br><br>

        <input type="submit" name="submit" value="submit">
        <input type="reset" name=""reset value="reset">

        @if(session('status'))
        <span style="color:green">{{session('status')}}</span>
        @endif

    </form>

<div>


</body>
</html>
