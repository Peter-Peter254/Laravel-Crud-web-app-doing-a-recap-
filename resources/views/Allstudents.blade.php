@extends('Header')
@section('title',"All students")
@section('pagecontent')

<h1>Sample Crud</h1> 
<div> 
    <a class="btn btn-primary" href="{{route('students.create')}}"> ADD A NEW STUDENT</a>
</div>
<table class="table table-bordered">
       
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$student->LastName}}</td>
            <td>{{$student->FirstName}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->fee}}</td>
            <td>
                <form action = "{{route('students.destroy',$student->id)}}">
                    @csrf
                    <a class="btn btn-primary" href="{{route('students.show',$student->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>
                    @method('DELETE')
                    <Button class="btn btn-primary">DELETE</Button>


                </form>
                    
            </td>
        </tr>
        @endforeach
            
       
    </table>
@endsection