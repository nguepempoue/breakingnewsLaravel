@extends('layouts.dashboard')

@section('content')

<div class="content-wrapper">
<!--message of validation-->
@if ($message = Session::get('success'))
      <div class="alert alert-success fade show" role="alert">
      <button class="btn btn-sm btn-icon btn-faded-success btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
            <p>{{ $message }}</p>
      </div>
      @endif
<!--message of not validation-->
      @if ($errors->any())
          <div class="alert alert-danger">
          <button class="btn btn-sm btn-icon btn-faded-danger btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
 <!-- Breadcrumb -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                  <div class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </div>



            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#addCategory"><i class="fas fa-plus-circle"></i>Add new product</button>
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>

              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  <i class="far fa-trash-alt"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-reply"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-share"></i>
                </button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-sync-alt"></i>
              </button>
              <div class="float-right">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-left"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-right"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>

            <!--including files -->
           @include('categories.create')

           @include('categories.list')
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                <i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  <i class="far fa-trash-alt"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-reply"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-share"></i>
                </button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-sync-alt"></i>
              </button>
              <div class="float-right">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-left"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-right"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

@endsection
