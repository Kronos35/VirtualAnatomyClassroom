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
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @yield('instance_body')
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="row">
              @yield('pagination')
              </div>
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

@section('js')
<script type="text/javascript">
$( "#datepicker" ).datepicker({
  format: "mm/dd/yy",
  weekStart: 0,
  calendarWeeks: true,
  autoclose: true,
  todayHighlight: true,
  rtl: true,
  orientation: "auto"
});
</script>
@endsection
