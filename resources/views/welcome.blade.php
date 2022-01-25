<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeworks</title>
</head>
<body>
    <table>
        <tr>
            <th>Diák</th>
            <th>URL</th>
            <th>Szöveges értékelés</th>
            <th>Jegy</th>
        </tr>
        @foreach($homeworks as $homework)
        <tr>
            <td>{{ $homework->studentInfo->name }}</td>
            <td><a href="{{ $homework->url }}">Link</a></td>
            <td>{{ $homework->review }}</td>
            <td>
                @if($homework->grade != 0) 
                    {{ $homework->grade }} 
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>