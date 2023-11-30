<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Subjects</title>
</head>
<body>
    @if (session('store_subject_on_user'))
    <span>{{session('store_subject_on_user')}}</span>
    @endif
    <h1>User Subjects</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Subject ID | Subjects | Room</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_subjects as $user_subject)
                <tr>
                    <td>
                        {{ $user_subject->name }}
                    </td>
                    <td>
                        @foreach ($user_subject->subjects as $subs)
                        {{ $subs->id }}
                        {{ $subs->sub_title }}
                        {{ $subs->sub_room }}
                        <hr>
                        @endforeach
                        <a href="/user_subjects/add/{{ $user_subject->id }}">Add</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
