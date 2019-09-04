<button type="button" class="btn btn-danger btn-md" style="color:#fff;" data-toggle="modal" data-target="#DeleteModal{{ $employee->id }}">Delete</button>
<!-- The Modal -->
  <div class="modal fade" id="DeleteModal{{ $employee->id }}">
    <div class="modal-dialog">
	<div class="modal-content">
        <div class="modal-header bg-danger">
            <h4 class="modal-title" style="color:#fff">DELETE CONFIRMATION</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p class="text-center">Are You Sure Want To Delete ?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          	<form action="{{ route('employees.destroy', ['employee' => $employee]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            </form>
        </div>
    </div>
    </div>
  </div>



