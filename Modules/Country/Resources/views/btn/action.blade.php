<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changeStatus{{ $id }}">
    <i class="fa fa-eye"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="changeStatus{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Status In Country :: {{ $name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('country.update','id') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">

                    <div class="row">
                        <div class="col">
                            <label>Country Status :: {{ $name }}</label>
                            <select class="form-control" name="status">
                                   <option value="1" {{ $status == true ? 'selected' : null }}>Active</option> 
                                   <option value="0" {{ $status == false ? 'selected' : null }}>NO Active</option> 
                            </select>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>