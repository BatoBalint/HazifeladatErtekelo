<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Homework</title>
</head>
<style>
    .error {
        color: red;
        font-size: 0.8em;
    }
</style>
<body class="bg-dark text-white">
    <div style="width: 100%;" class="pb-5">
        <div style="float: right; margin: 10px 10px">
            <a href="{{ route('homework.index') }}" class="btn btn-danger">Vissza a főoldalra</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-ms-8 mx-auto">
                <form method="POST" action="{{ route('homework.store') }}">
                    @csrf
                    <label for="user" class="form-label">Diák:</label>
                    <div class="col-sm-4 mb-5">
                        <select class="form-select text-dark" name="student">
                                <option value=""> </option>
                                @foreach($users as $user)

                                <option value="{{ $user->id }}">{{ $user->name }}</option>

                                @endforeach
                        </select>
                        @error('student')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    <div class="mb-5">
                    <label for="review" class="form-label mb-2">URL:</label>
                    <input type="text" class="form-control mb-1" name="url">
                    @error('url')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    </div>
                    <input class="btn btn-success" type="submit" value="Mentés">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>