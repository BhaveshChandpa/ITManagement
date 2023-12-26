



@extends('layout.default')

@section('content')

    <div class="container pt-5">
        
        <a class="btn btn-primary" role="button" href="{{ route('complaints.create') }}">Do Complaint</a>
            
        <a class="btn btn-secondary"  role="button" href="{{ route('complaints.index')}}">Complainted</a>

        <a class="btn btn-success"  role="button" href="{{ route('export.complaints') }}"> Export Complaint Data </a>



        <br>

        <br>
   
        

<form action="{{ route('complaint.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
            @error('file')
               <span class="alert-danger">{{ $message }}</span>
            @enderror
        <label for="file">Choose Excel File</label>
        <input type="file" name="file" id="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Import</button>
</form>

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
</div>






@endsection

