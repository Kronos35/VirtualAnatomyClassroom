@extends('layouts.master')
@section('edit-button')
<a class="btn btn-primary" href="{{ URL::to($controllerUrl) }}/{{$test->id}}/edit">Edit</a>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    {{$test->name}}
    <small>Administration panel</small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <!-- /.row -->
  <div class="row">
    <div class="col-md-12">
      <!-- TABLE: Questions -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Instructions</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              {{$test->instructions}}
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Answer New Test</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View all tests</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Student Performance in Test</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-wrench"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Due {{$test->due_at->diffForHumans()}} ({{$test->due_at}})</strong>
              </p>
              <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="salesChart" style="height: 180px;"></canvas>
              </div>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <p class="text-center">
                <strong>Goal Completion</strong>
              </p>
              <div class="progress-group">
                <span class="progress-text">Add Products to Cart</span>
                <span class="progress-number"><b>160</b>/200</span>
                <div class="progress sm">
                  <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Complete Purchase</span>
                <span class="progress-number"><b>310</b>/400</span>
                <div class="progress sm">
                  <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Visit Premium Page</span>
                <span class="progress-number"><b>480</b>/800</span>
                <div class="progress sm">
                  <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Send Inquiries</span>
                <span class="progress-number"><b>250</b>/500</span>
                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                <h5 class="description-header">$35,210.43</h5>
                <span class="description-text">TOTAL REVENUE</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                <h5 class="description-header">$10,390.90</h5>
                <span class="description-text">TOTAL COST</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                <h5 class="description-header">$24,813.53</h5>
                <span class="description-text">TOTAL PROFIT</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block">
                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                <h5 class="description-header">1200</h5>
                <span class="description-text">GOAL COMPLETIONS</span>
              </div>
              <!-- /.description-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="col-md-8">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Tests</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>Test ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Due date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="label label-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Create New Test</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View all tests</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
      <div class="row">
        <div class="col-md-6">
        </div>
        <!-- /.col -->
        <div class="col-md-6">
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('instance_body')
<div class="container">
  <div class="row">
    <h4>Description: </h4>
    {{$test->description}}
    <br>
    <br>
  </div>
  <div class="row">
    <div class="col-sm-3"><button class="btn btn-primary">Add Student</button></div>
    <div class="col-sm-3"><button class="btn btn-primary">Create Tests</button></div>
    <div class="col-sm-3"><button class="btn btn-primary">Create Class</button></div>
    <div class="col-sm-3"><button class="btn btn-danger" onclick="document.getElementById('delete-group{{$test->id}}').submit();">Delete Group</button></div>
    <form id="delete-group{{$test->id}}" action="{{ $controllerUrl }}/{{$test->id}}" method="POST">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
    <br><br>
  </div>
  <div class="row">
    <h4>Students: </h4>
    <table id="example2" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>e-mail</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($test->users as $user) --}}
        <tr>
          <td>{{-- {{$user->name}} --}}</td>
          <td>{{-- {{$user->email }} --}}</td>
          <td>
            <a class="btn btn-primary" href="profiles/{{-- {{$user->id}} --}}">View</a>
            {{-- @if((Auth::user())->can('create articles')) --}}
            {{-- <button class="btn btn-danger" onclick="document.getElementById('delete{{$user->id}}').submit();">Remove</button> --}}
            <form id="delete{{-- {{$user->id}} --}}" action="{{-- {{ $controllerUrl }}/{{$user->id}} --}}" method="POST">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
            </form>
            {{-- @endif --}}
          </td>
        </tr>
        {{-- @endforeach --}}
      </tbody>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>e-mail</th>
          <th>Options</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection