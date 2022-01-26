<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Házifeladat</title>
</head>
<body class="bg-dark text-white">
    <div style="width: 100%;" class="pb-5">
        <div style="float: right; margin: 10px 10px">
            <a href="{{ route('homework.index') }}" class="btn btn-danger">Vissza a főoldalra</a>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <h1>{{ $homework->studentInfo->name }}</h1>
                <h3>Beadott link: <span class="h4"><a href="{{ $homework->url }}">{{ $homework->url }}</a> </span></h3>
                <form method="POST" action="{{ route('homework.update', $homework->id) }}">
                @method('PATCH')    
                @csrf
                    <label for="review" class="form-label">Értékelés</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="review" value="{{ $homework->review }}">
                        <div class="col-sm-1">
                            <select class="form-select text-dark bg-secondary" name="grade">
                                @for ($i = 0; $i < 6; $i++)
                                    @if($homework->grade == $i)
                                    <option selected="true" value="{{ $i }}">
                                        @if($i != 0)
                                        {{ $i }}
                                        @endif
                                    </option>
                                    @else
                                    <option value="{{ $i }}">
                                        @if($i != 0)
                                        {{ $i }}
                                        @endif
                                    </option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Mentés">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>