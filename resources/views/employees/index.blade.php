@extends('layouts.app')

@section('content')

<br>
<div class="cn">ABC Company Inc.</div>


<div class="container">
	<br>
	<a href="{{ route('employees.create') }}">
		<button class="btn btn-outline-primary btn-lg">Register</button>
	</a>
	<br><br>
   	<div class="card bx">
    <div class="card-header bg-danger"><h4 style="color:#fff">Employee List</h4></div>
    <div class="card-body">
    	<div class="table-responsive">
        <table class="table table-hover table-md" style="font-family:Arial;">
        <thead class="thead-dark">
          <tr>
            <th><center>First Name</center></th>
            <th><center>Last Name</center></th>
            <th><center>Date of Birth</center></th>
            <th><center>Gender</center></th>
            <th><center>Job Title</center></th>
            <th><center>Date Employed</center></th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
          <tr>
            <td><center>{{ $employee->first }}</center></td>
            <td><center>{{ $employee->last }}</center></td>
            <?php
                $birth = $employee->bday;
                $birth=date_create($birth);
                $birth=date_format($birth,"F d, Y");
            ?>
            <td><center>{{ $birth }}</td>
            <td><center>{{ $employee->gender }}</center></td>
            <td><center>{{ $employee->jobtitle }}</center></td>
            <?php
                $employed = $employee->dateemployed;
                $employed=date_create($employed);
                $employed=date_format($employed,"F d, Y");
            ?>
            <td><center>{{ $employed }}</center></td>
            <td>
            	<center>
            	@include('employees.edit')
            	@include('employees.delete')
            	</center>
            </td>
          </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        <div class="row float-right">
			<div class="col-12">
				{{ $employees->links() }}		
			</div>
		</div>
    </div>
  	</div>
</div>


@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection