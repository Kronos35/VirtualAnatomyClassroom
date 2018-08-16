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
  @include('layouts.partials.questions_form')
  <!-- /.row -->
  <div class="row">
    <div class="col-md-12">
      <!-- TABLE: Questions -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Test</h3>
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
              <h4>Instructions</h4>
              {{$test->instructions}}
            </div>
          </div>
          <div class="table-responsive">
            <table class="table no-margin">
              <tbody>
                @foreach($test->questions as $question)
                <tr>
                  <td class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-12">
                        {{ $question->body }} 
                      </div>
                    </div>
                    <div class="row">
                    @foreach($question->options as $option)
                      <div class="col-sm-3">
                        <input type="checkbox" name="options" id="option1" autocomplete="off" name="option{{ $option->id }}">
                        <label for="option{{ $option->id }}">
                        {{ $option->body }}
                        </label>
                      </div>
                    @endforeach
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
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
    <div class="col-md-4">
      <!-- Info Boxes Style 2 -->
      <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Inventory</span>
          <span class="info-box-number">5,200</span>
          <div class="progress">
            <div class="progress-bar" style="width: 50%"></div>
          </div>
          <span class="progress-description">
          50% Increase in 30 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Mentions</span>
          <span class="info-box-number">92,050</span>
          <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
          </div>
          <span class="progress-description">
          20% Increase in 30 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Downloads</span>
          <span class="info-box-number">114,381</span>
          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
          <span class="progress-description">
          70% Increase in 30 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Direct Messages</span>
          <span class="info-box-number">163,921</span>
          <div class="progress">
            <div class="progress-bar" style="width: 40%"></div>
          </div>
          <span class="progress-description">
          40% Increase in 30 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Browser Usage</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <div class="chart-responsive">
                <canvas id="pieChart" height="150"></canvas>
              </div>
              <!-- ./chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <ul class="chart-legend clearfix">
                <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                <li><i class="fa fa-circle-o text-green"></i> IE</li>
                <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
              </ul>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#">United States of America
              <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a>
            </li>
            <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
            </li>
            <li><a href="#">China
              <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a>
            </li>
          </ul>
        </div>
        <!-- /.footer -->
      </div>
      <!-- /.box -->
      <!-- PRODUCT LIST -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Recently Added Products</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            <li class="item">
              <div class="product-img">
                <img src="https://adminlte.io/themes/AdminLTE/dist/img/default-50x50.gif" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">Samsung TV
                <span class="label label-warning pull-right">$1800</span></a>
                <span class="product-description">
                Samsung 32" 1080p 60Hz LED Smart HDTV.
                </span>
              </div>
            </li>
            <!-- /.item -->
            <li class="item">
              <div class="product-img">
                <img src="https://adminlte.io/themes/AdminLTE/dist/img/default-50x50.gif" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">Bicycle
                <span class="label label-info pull-right">$700</span></a>
                <span class="product-description">
                26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                </span>
              </div>
            </li>
            <!-- /.item -->
            <li class="item">
              <div class="product-img">
                <img src="https://adminlte.io/themes/AdminLTE/dist/img/default-50x50.gif" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">Xbox One <span
                  class="label label-danger pull-right">$350</span></a>
                <span class="product-description">
                Xbox One Console Bundle with Halo Master Chief Collection.
                </span>
              </div>
            </li>
            <!-- /.item -->
            <li class="item">
              <div class="product-img">
                <img src="https://adminlte.io/themes/AdminLTE/dist/img/default-50x50.gif" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">PlayStation 4
                <span class="label label-success pull-right">$399</span></a>
                <span class="product-description">
                PlayStation 4 500GB Console (PS4)
                </span>
              </div>
            </li>
            <!-- /.item -->
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="javascript:void(0)" class="uppercase">View All Products</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
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