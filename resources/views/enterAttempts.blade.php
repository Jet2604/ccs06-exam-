<!DOCTYPE html>
<html lang="en">
    <head>
        <title>enter-grades</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <div class="container-sm">
        <h1>Input of Students</h1>

        <form action="/compute-power" method="POST">
                <input type="hidden" name="Student_1" value="{{ $student_1 }}">
                <input type="hidden" name="Student_2" value="{{ $student_2 }}">
                <input type="hidden" name="Student_3" value="{{ $student_3 }}">
                <input type="hidden" name="Student_4" value="{{ $student_4 }}">
                <input type="hidden" name="Student_5" value="{{ $student_5 }}">
            @csrf
            <div class="row">
                <label>Student: <strong>{{ $student_1 }} </strong></label>
                <div class="col col-md-4">
                    <label>Attempt Score 1</label>
                    <input type="number" name="student_attempt1" class="form-control"> 
                </div>

           

            
            <div class="row">
                <button></button>
                </div>
            </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity>



    </body>

</html>