<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
</head>
<body>
    @if (session('store_subject'))
    <span>{{session('store_subject')}}</span>
    @endif
    @if (session('update_subject'))
    <span>{{session('update_subject')}}</span>
    @endif
    <h1>Subjects</h1>
    <a href="/subjects/create">Add Subjects</a>
    <table>
        <thead>
            <tr>
                <th>Subject</th>
                <th>Room</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subj)
                <tr>
                    <td>{{ $subj->sub_title }}</td>
                    <td>{{ $subj->sub_room }}</td>
                    <td>
                        <a href="/subjects/{{ $subj->id }}/edit">Update</a>
                        <br>
                        <form action="{{ route('subjects.destroy', $subj->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
