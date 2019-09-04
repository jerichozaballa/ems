<button type="button" class="btn btn-info btn-md" style="color:#fff;" data-toggle="modal" data-target="#myModal{{ $employee->id }}">Update</button>
<!-- The Modal -->
  <div class="modal fade" id="myModal{{ $employee->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title" style="color:#fff;">Update Employee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

		<form action="{{ route('employees.update', ['employee' => $employee]) }}}" method="POST">
	    	@method('PATCH')
        <!-- Modal body -->
        <div class="modal-body" style="text-align:left;">
	        <div class="form-group row">
	        <label for="first" class="col-md-4 col-form-label text-md-right">First Name</label>
	            <div class="col-md-6">
	            <input type="text" name="first" value="{{old('first') ?? $employee->first }}" class="form-control" required>
	            <div>{{ $errors->first('first') }}</div>
	            </div>
	        </div>

	        <div class="form-group row">
	        <label for="last" class="col-md-4 col-form-label text-md-right">Last Name</label>
	            <div class="col-md-6">
	            <input type="text" name="last" value="{{old('last') ?? $employee->last }}" class="form-control" required>
	            <div>{{ $errors->first('last') }}</div>
	            </div>
	        </div>

	        <div class="form-group row">
	        <label for="bday" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
	            <div class="col-md-6">
	            <input type="date" name="bday" value="{{old('bday') ?? $employee->bday }}" class="form-control" required>
	            <div>{{ $errors->first('bday') }}</div>
	            </div>
	        </div>

	        <div class="form-group row">
	        <label for="gender" class="col-md-4 text-md-right">Gender</label>
	            <div class="col-md-6">
			     <input type="radio"  name="gender" value="Male" <?php if ($employee->gender=="Male") echo "checked";?>>Male
			    <input type="radio"  name="gender" value="Female" <?php if ($employee->gender=="Female") echo "checked";?>>Female
	            	<div>{{ $errors->first('gender') }}</div>
	            </div>
	        </div>

	        <div class="form-group row">
	        <label for="sasasaas" class="col-md-4 col-form-label text-md-right">Job Title</label>
	            <div class="col-md-6">
	            <input type="text" name="jobtitle" value="{{old('jobtitle') ?? $employee->jobtitle }}" class="form-control" required>
	       		<div>{{ $errors->first('jobtitle') }}</div>
	            </div>
	        </div>

	        <div class="form-group row">
	        <label for="dateemployed" class="col-md-4 col-form-label text-md-right">Date Employed</label>
	            <div class="col-md-6">
	            <input type="date" name="dateemployed" value="{{old('dateemployed') ?? $employee->dateemployed }}" class="form-control" required>
	            <div>{{ $errors->first('dateemployed') }}</div>
	            </div>
	        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	@csrf
          	<button type="submit" class="btn btn-success">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>



