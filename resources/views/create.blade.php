<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-4">
        <a href="/"><button class="btn btn-danger">Back</button></a>
        <form action="/create/todo" method="POST">
            @csrf
            <div class="mt-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">

            </div>
           <div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
           </div>
        </form>
    </div>
</body>

</html>
