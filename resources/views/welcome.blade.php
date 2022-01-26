<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Homeworks</title>
</head>

<style>
    td:hover {
        cursor: pointer;
    }

    .right {
        float: right;
    }
</style>

<body class="bg-dark text-white">
    <div style="width: 100%;" class="pb-5">
        <div style="float: right; margin: 10px 10px">
            <a href="{{ route('homework.create') }}" class="btn btn-success">Új házifeladat felvétele</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <table class="table table-dark table-striped table-hover" cellspacing=0>
                <tr>
                    <th style="width: 20%;">Diák</th>
                    <th style="width: 10%;">URL</th>
                    <th style="width: 60%;">Szöveges értékelés</th>
                    <th style="width: 5%;">Jegy</th>
                    <th style="width: 5%;"></th>
                </tr>
                @foreach($homeworks as $homework)
                <tr>
                    <td data-href="{{ route('homework.show', $homework->id) }}">{{ $homework->studentInfo->name }}</td>
                    <td data-href="{{ route('homework.show', $homework->id) }}"><a class="link-info" href="{{ $homework->url }}">Link</a></td>
                    <td data-href="{{ route('homework.show', $homework->id) }}">{{ $homework->review }}</td>
                    <td data-href="{{ route('homework.show', $homework->id) }}">
                        @if($homework->grade != 0) 
                            {{ $homework->grade }} 
                        @endif
                    </td>
                    <td>
                        <form method="POST" action="{{ route('homework.destroy', $homework->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="X" class="btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let rows = document.querySelectorAll("td[data-href]");

        rows.forEach(row => {
            row.addEventListener('click', () => {
                window.location.href = row.dataset.href;
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>