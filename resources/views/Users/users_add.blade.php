<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD - Add user</title>
</head>
<body>
    <h1>Add User</h1>
    <form action="/users" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">     
        @error('name')
            <span style="color: red">*required</span>
        @enderror
        <br> 
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">     
        @error('email')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">     
        @error('password')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <input type="submit" value="Add">  
    </form>
</body>
</html>