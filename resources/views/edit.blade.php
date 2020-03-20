<form action="{{ route('task.update', $edit->id) }}" method="post">
    {{ csrf_field() }}
    <p>ID</p><input class="form-control" type="number" name="ID" value="{{ $edit->id }}" disabled>
    <p>Name</p><input class="form-control" type="text" name="name" placeholder="name" value="{{ $edit->name }}">
    <p>Status</p><input data-id="{{$edit->id}}" name="status" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $edit->status ? 'checked' : '' }}>
    <button type="submit" class="btn btn-danger">Submit</button>
</form>