



@extends('layout.default')

@section('content')


 
@php
$i = 0;
@endphp


    <div class="container pt-5">
        
        <a class="btn btn-primary" role="button" href="{{ route('nvr.create') }}">Do Complaint</a>
            
        <a class="btn btn-secondary"  role="button" href="{{ route('nvr.index')}}">Complainted</a>

        <a class="btn btn-success"  role="button" href="{{ route('nvr.store') }}"> Export Complaint Data </a>



        <br>

        <br>
   
        





</div>



<table class="table table-bordered  table-striped-columns">
    
        
  
    <thead class="text-center">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Location</th>
        <th scope="col">IP</th>
        <th scope="col">Type</th>
        <th scope="col">Remark</th>
        {{-- <th scope="col">Action</button></th> --}}
        
      </tr>
    </thead>


    @foreach ($nvr as $nvr)


    {{-- @foreach ($nvr->cctv as $item) --}}
        
   
    <tbody class="text-center">
      <tr>
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $nvr->location }}</td> 
        <td>{{ $nvr->ip }}</td> 
        <td>{{ $nvr->type }}</td>
        <td>{{ $nvr->remark }}</td> 
        
    
        {{-- <td>
        <form action="{{ route('cctv.destroy' , $cctv->id) }}" method="Post">
          @csrf
          <a class="btn btn-primary" href="{{ route('cctv.edit', $cctv->id) }}">Edit</a>

         
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>


        </form>

        </td> --}}
      </tr>
      {{-- @endforeach --}}
    @endforeach
    </tbody>
    
  </table> 


@endsection

