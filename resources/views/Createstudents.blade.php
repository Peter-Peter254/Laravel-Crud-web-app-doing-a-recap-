@extends('layouts.app')
@section('content')
<div class="card px-5 py-5" style="margin:auto;width:50%" >
    <div class="card-header">Insert a student here</div>
    @if($errors->any())
     <div class="alert aler-danger">
        <strong>There were some problems with the input</strong>
        @foreach($errors->all() as $error)
            <<li>
                {{$error}}
            </li>
        

        @endforeach

    </div>


    @endif
<form method="POST" action="{{route('students.store')}}">
    @csrf
    <input class="form-control mt-3" type="text" placeholder="First Name" name="FirstName" required>
    <input class="form-control mt-3" type="text" placeholder="Last Name"  name="LastName" required>
    <input class="form-control mt-3" type="text" placeholder="Course" name="course" required>
    <input class="form-control mt-3" type="text" placeholder="FEE" name="fee" required>
    <input type="submit" class="btn btn-primary mt-4"  value="Submit Details" />

</form>

</div>


@stop