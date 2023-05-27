<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Diagnosis</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Diagnosis</th>
            <th>Intervention</th>
            <th>Goal</th>
        </tr>
        @foreach($diagnoses as $diagnosis)
        <tr>
            <td>{{$diagnosis->id}}</td>
            <td>{{$diagnosis->diagnosis_name}}</td>
            <td>{{$diagnosis->intervention}}</td>
            <td>{{$diagnosis->goal}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>