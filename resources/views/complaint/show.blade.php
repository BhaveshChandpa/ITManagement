<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summary</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="container pt-5 ">

    <table class="table table-bordered table-hover  table-dark text-center ">
        
            
      
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Problem</th>
            
          </tr>
        </thead>
        @foreach ($problems as $problem)
        <tbody>
          <tr>
            <th scope="row">{{ $problem->id }}</th>
            <td>{{ $problem->problem }}</td>
          
          </tr>
          
        </tbody>
        @endforeach
      </table>

    </div>
    
</body>
</html>