<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD - User Edit</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $user->id }}">
        <input type="text" name="name" placeholder="Name" value="{{ old('name', $user->name) }}">
        @error('name')
        <span style="color:red">*required</span>            
        @enderror
        <br>
        <input type="text" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
        @error('email')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>