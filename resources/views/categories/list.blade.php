
<div class="table-responsive mailbox-messages">

    <table class="table table-hover table-striped" id="datatable">
      <tbody>
        <tr>
            <th>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </th>
            <th class="mailbox-star">Id</th>
            <th class="mailbox-star">Name</th>
            <th class="mailbox-name">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </td>
            <td class="mailbox-star">{{ $category->id }}</td>
            <td class="mailbox-name">{{ $category->name }}</td>
            <td>
             <div class="row">
                    <a class=" btn btn-default btn-sm" data-toggle="modal"
                    data-target="#updatecategory{{ $category->id }}"><i  class="far fa-edit"></i></a>

                <button type="button" class="btn btn-default btn-sm"><i class="far fa-eye"></i></button>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are sure you want to delete it ?')"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
            </td>
        </tr>
        @include('categories.update')
        @endforeach

      </tbody>
    </table>
    <!-- /.table -->
  </div>
