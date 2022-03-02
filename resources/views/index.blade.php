
@extends('dashboard')
 
@section('content')
<table  style="width: 30%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: 60px" >
          <th>
          <a 
 class="btn btn-primary" href="{{ route('home') }}">Complete Your Registration</a>
</th>
</table>
    <center><h2> Admin Page</h2></center>
    
   
    <table class="table table-bordered" style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          text-indent: 60px">
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->email }}</td>
            <td>{{ $value->first_name }}&nbsp{{ $value->last_name }}</td>
            <td>{{ $value->phone_number }}</td>
           
            <td>
                <form action="{{ route('destroy',$value->email) }}" method="POST">  
                <a class="btn btn-primary" href="{{ route('update_form',$value->email) }}">Edit</a> 
                    
                      
                {{ csrf_field() }}
                {{ method_field('DELETE') }}     
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
             
        </tr>
        @endforeach
    </table>  
   
    <div class="d-felx justify-content-center"
    style="width: 30%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: 60px" >
        

            {{ $data->links('pagination::bootstrap-4') }}

        </div>
  
@endsection