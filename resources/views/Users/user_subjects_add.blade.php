<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Subjects - Add</title>
</head>
<body>
    <h1>Add User Subjects</h1>
    <h3>Name: {{$user->name}}</h3>
    <form action="{{ route('user_subjects.add') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <table>
            <thead>
                <tr>
                    <th>
                        Subject List
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subj)
                    <tr>
                        <td>{{ $subj->sub_title.' - '.$subj->sub_room }}</td>
                        <td><input type="checkbox" name="{{ $subj->id }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <input type="submit" value="ADD">
    </form>


</body>
</html>
