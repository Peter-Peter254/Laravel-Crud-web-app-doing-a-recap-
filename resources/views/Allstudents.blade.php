@extends('layouts.app')
@section('content')

<h1>Faculty Review Application page</h1> 
<div> 
    <a class="btn btn-primary my-3" href="{{route('students.create')}}"> CREATE A NEW APPLICATION</a>
</div>
@if($message=Session::get('success'))
<div class="alert bg-danger mb-3" aria-role="alert" >
    <p class="bg-danger">{{$message}}</p>

</div>
@endif
<table class="table table-bordered mx-5 mr-5">
       
            <tr>
            <th>Application Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Course</th>
            <th>Comments</th>
            <th width="280px"></th>
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
                    <Button class="btn btn-primary" >REJECT AND DELETE</Button>


                </form>
                    
            </td>
        </tr>
        @endforeach
            
       
    </table>
@endsection