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
</style>

<body class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <table class="table table-dark table-striped table-hover" cellspacing=0>
                <tr>
                    <th>Diák</th>
                    <th>URL</th>
                    <th>Szöveges értékelés</th>
                    <th>Jegy</th>
                </tr>
                @foreach($homeworks as $homework)
                <tr data-href="{{ route('homework.show', $homework->id) }}">
                    <td>{{ $homework->studentInfo->name }}</td>
                    <td><a class="link-info" href="{{ $homework->url }}">Link</a></td>
                    <td>{{ $homework->review }}</td>
                    <td>
                        @if($homework->grade != 0) 
                            {{ $homework->grade }} 
                        @endif
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
        let rows = document.querySelectorAll("tr[data-href]");

        rows.forEach(row => {
            row.addEventListener('click', () => {
                window.location.href = row.dataset.href;
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>