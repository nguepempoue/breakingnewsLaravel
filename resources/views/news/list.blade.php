
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
            <th class="mailbox-star">Picture</th>
            <th class="mailbox-name">Title</th>
            <th class="mailbox-name">Description</th>
            <th class="mailbox-star">Category</th>
            <th class="mailbox-name">Action</th>
        </tr>
        @foreach ($news as $new)
        <tr>
            <td>
            <div class="icheck-primary">
                <input type="checkbox" value="" id="check1">
                <label for="check1"></label>
            </div>
            </td>
            <td class="mailbox-star">{{ $new->id }}</td>
            <td class="mailbox-star"><img src="{{ asset('pictures') }}/{{ $new->image }}"
                style="max-width:60px; max-heigth:100px;" /></td>
            <td class="mailbox-name">{{ $new->title }}</td>
            <td class="mailbox-name">{{ $new->desc }}</td>
            <td class="mailbox-name">{{ $new->category->name }}</td>
            <td>
             <div class="row">
                    <a class=" btn btn-default btn-sm" data-toggle="modal"
                    data-target="#updateNews{{ $new->id }}"
                    {{ route('news.edit', $new->id) }}><i  class="far fa-edit"></i></a>

                <button type="button" class="btn btn-default btn-sm"><i class="far fa-eye"></i></button>
                <form action="{{ route('news.destroy', $new->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are sure you want to delete it ?')"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
            </td>
        </tr>
        @include('news.update')
        @endforeach

      </tbody>
    </table>
    <!-- /.table -->
  </div>
