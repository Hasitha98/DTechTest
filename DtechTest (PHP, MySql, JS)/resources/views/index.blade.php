<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D Tech Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2>Students</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                        </tr>
                    </thead>
                    <tbody id="tblStudent">
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <h2>Teachers</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Teacher ID</th>
                            <th>Teacher Name</th>
                        </tr>
                    </thead>
                    <tbody id="tblTeacher">
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <h2>Subjects</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Subject ID</th>
                            <th>Subject Name</th>
                        </tr>
                    </thead>
                    <tbody id="tblSubject">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="thead-dark">
                        <th>Student Name</th>
                        <th>Subject Name</th>
                    </thead>
                    <tbody id="tblSubjectsToStudent">

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ url('assets/js/dtec.js') }}"></script>
</body>
</html>