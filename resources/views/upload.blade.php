<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Excel</title>
</head>
<body>

    <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".xls, .xlsx">
        <button type="submit">Import Data</button>
    </form>
    
</body>
</html>