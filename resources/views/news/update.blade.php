<div class="modal fade bd-example-modal-lg" id="updateNews{{ $new->id }}" tabindex="-1" role="dialog"
    aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('news.update', $new->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="custom-file">
                        <input type="file"
                            class="custom-file-input  @error('picture') is-invalid @enderror"
                            id="customFile" name="picture" multiple >
                        <label class="custom-file-label" for="customFile">picture</label>
                        @error('picture')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div><br>


                     <label>Title: </label>
                     <div class="row">
                         <input type="text" name="title" value="{{ $new->title }}" id="title" class="form-control">
                     </div>


                     <label>Description: </label>
                     <div class="row">
                         <textarea class="form-control" name="desc" id="desc" cols="30" rows="10">{{ $new->desc }}</textarea>
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
