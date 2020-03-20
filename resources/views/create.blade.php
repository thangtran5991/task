<form action="{{ route('task.store') }}" method="post">
    {{ csrf_field() }}
    <p>Name</p><input class="form-control" type="text" name="name" placeholder="name" value="">
    <p>Status</p><input name="status" class="toggle-class" type="checkbox" data-on="Active" data-off="InActive">
    <button type="submit" class="btn btn-danger">Submit</button>
</form>