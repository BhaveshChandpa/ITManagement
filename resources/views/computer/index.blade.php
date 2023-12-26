@extends('layout.default')

@section('content')

    <div class="container pt-5">
        
        <a class="btn btn-primary" role="button" href="{{ route('computer.create') }}">Do Complaint</a>
            
        <a class="btn btn-secondary"  role="button" href="{{ route('computer.index')}}">Complainted</a>

        <a class="btn btn-success"  role="button" href="{{ route('export.computers') }}"> Export Computer Data </a>
        
        <a class="btn btn-success"  role="button" href="{{ route('computer.upload') }}"> Import Computer Data </a>



        <br>

        <br>
   
        <table class="table table-bordered table-hover  table-dark text-center ">
        
            
      
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">UserName</th>
                <th scope="col">IP</th>
                <th scope="col">OS</th>
                <th scope="col">Remote Name</th>
                <th scope="col">PC Passwd</th>
                <th scope="col">Shed</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @foreach ($computers as $computer)
            <tbody>
              <tr>
                <th scope="row">{{ $computer->id }}</th>
                <td>{{ $computer->username }}</td>
                <td>{{ $computer->ip }}</td>
                <td>{{ $computer->os_name }}</td>
                <td>{{ $computer->remote_name }}</td>
                <td>{{ $computer->pc_passwd }}</td>
                <td>{{ $computer->shed }}</td>
    
    
                <td>
                  <form action="{{ route('computer.destroy' , $computer->id) }}" method="Post">
                    @csrf
                    <a class="btn btn-primary" href="{{ route('computer.edit', $computer->id) }}">Edit</a>
        
                   
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
      
                  </td>
              </tr>
              
            </tbody>
            @endforeach
          </table>
    </div>


@endsection

