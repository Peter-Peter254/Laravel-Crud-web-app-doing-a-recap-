@extends('Header')
@section('title',"All students")
@section('pagecontent')

<h1>Sample Crud</h1> 
<div> 
    <a class="btn btn-primary my-3" href="{{route('students.create')}}"> ADD A NEW STUDENT</a>
</div>
@if($message=Session::get('success'))
<div class="alert bg-danger mb-3" aria-role="alert" >
    <p class="bg-danger">{{$message}}</p>

</div>
@endif
<table class="table table-bordered mx-5 mr-5">
       
            <tr>
            <th>Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th width="280px">Action</th>
        </tr>
       <div aria-hidden="true" style="display:none"> {{$i=0}} </div>
        @foreach($students as $student)
        <tr>
            
            <td>{{++$i}}</td>
            <td>{{$student->FirstName}}</td>
            <td>{{$student->LastName}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->fee}}</td>
            <td>
            
                <form method="POST" action = "{{route('students.destroy',$student->id)}}">
                <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <Button class="btn btn-primary" >DELETE</Button>


                </form>
                    
            </td>
        </tr>
        @endforeach
            
       
    </table>
@endsection