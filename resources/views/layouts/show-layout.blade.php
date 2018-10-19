@extends('layouts.master')

@section('layout_content')
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="box box-info">
          <div class="box-header">
            <div class="box-title">
              @yield('card-header')
            </div>
            <div class="box-tools">
                @yield('edit-button')
            </div>
          </div>
          <!-- /.card-header -->
          <div class="box-body">
            @yield('instance_body')
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection
