<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a diagnosis</h1>
    <form method="post" action="{{route('diagnosis.store')}}">
        @csrf
        @method("post")
        <div>
            <label>Diagnosis:</label>
            <input type="text" name="diagnosis_name" placeholder="Diagnosis_name">
        </div>
        <div>
            <label>Intervention:</label>
            <input type="text" name="intervention" placeholder="Intervention">
        </div>
        <div>
            <label>Goal:</label>
            <input type="text" name="goal" placeholder="Goal">
        </div>
        <input type="submit" value="Save Diagnosis">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>

</html>