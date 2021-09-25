<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="container-fluid">
                     <label>Name: </label>
                     <div class="row">
                         <input type="text" name="name" id="name" class="form-control">
                     </div>
                 </div>
               </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     <input type="submit" value="Save" class="btn btn-primary">
                 </div>
        </form>

      </div>
    </div>
  </div>
