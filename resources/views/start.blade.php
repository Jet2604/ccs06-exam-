<!DOCTYPE html>
<html lang="en">
    <head>
        <title>First Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <div class="container-sm">
        <h1>Enter name of student</h1>

        <form action="/enter-attempt" method="POST">
            @csrf
            @for ($i = 1; $i <= 6; $i++)
            <div class="row">
                <label>Student {{ $i }} Name:</label>
                <input type="text" name="name_{{ $i }}" class="form-control"> 
            </div>
            @endfor 
            <hr />
            <div class="row">
                <button class="btn btn-primary btn-lg">Submit Student List</button>
                </div>
            </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity>



    </body>
</html>