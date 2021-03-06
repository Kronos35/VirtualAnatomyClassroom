@extends('layouts.master')

@section('layout_content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <div class="box-title">
                @yield('card-header')
              </div>
              <!-- SEARCH FORM -->
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                  <input id="search" type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" onclick="window.location.href='{{$controllerUrl}}?search='+$('#search').val()"><i class="fa fa-search"></i></button>
                    <button class="btn btn-success" type="submit" onclick="window.location.href='{{$controllerUrl}}/create'">
                      Create New
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @yield('instance_body')
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
            @yield('pagination')
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
