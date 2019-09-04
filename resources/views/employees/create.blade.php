@extends('layouts.app')

@section('content')

<br>
<div class="cn">ABC Company Inc.</div>




<div class="row">
<div class="col-sm-3">
</div>

<div class="col-sm-6">

    <br>
    <a href="{{ route('employees.index') }}">
		<button class="btn btn-outline-danger btn-lg">Employee List</button>
	</a>
	<br><br>
    <div class="card bx">
    <div class="card-header bg-primary"><h4 style="color:#fff;">Employee Registration</h4></div>
    <div class="card-body">
    <form action="{{ route('employees.store') }}" method="POST">
        <div class="form-group row">
        <label for="first" class="col-md-4 col-form-label text-md-right">First Name</label>
            <div class="col-md-6">
            <input type="text" name="first" value="{{old('first') }}" class="form-control" required>
            <div>{{ $errors->first('first') }}</div>
            </div>
        </div>

        <div class="form-group row">
        <label for="last" class="col-md-4 col-form-label text-md-right">Last Name</label>
            <div class="col-md-6">
            <input type="text" name="last" value="{{old('last') }}" class="form-control" required>
            <div>{{ $errors->first('last') }}</div>
            </div>
        </div>

        <div class="form-group row">
        <label for="bday" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
            <div class="col-md-6">
            <input type="date" name="bday" value="{{old('bday') }}" class="form-control" required>
            <div>{{ $errors->first('bday') }}</div>
            </div>
        </div>

        <div class="form-group row">
        <label for="gender" class="col-md-4 text-md-right">Gender</label>
            <div class="col-md-6">
		        <input type="radio"  name="gender" value="Male">Male
		        <input type="radio"  name="gender" value="Female">Female
            	<div>{{ $errors->first('gender') }}</div>
            </div>
        </div>

        <div class="form-group row">
        <label for="sasasaas" class="col-md-4 col-form-label text-md-right">Job Title</label>
            <div class="col-md-6">
            <input type="text" name="jobtitle" value="{{old('jobtitle') }}" class="form-control" required>
       		<div>{{ $errors->first('jobtitle') }}</div>
            </div>
        </div>

        <div class="form-group row">
        <label for="dateemployed" class="col-md-4 col-form-label text-md-right">Date Employed</label>
            <div class="col-md-6">
            <input type="date" name="dateemployed" value="{{old('dateemployed') }}" class="form-control" required>
            <div>{{ $errors->first('dateemployed') }}</div>
            </div>
        </div>
        @csrf
        <center>
        <button type="submit" class="btn btnsubmit">Register</button>        	
        </center>
    </form>
    </div>
  	</div>
</div>

<div class="col-sm-3">
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection