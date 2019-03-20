@extends('layouts.master')

@section('page_content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create A New Hub</h3>
            </div>

            @include('include.error')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/hub">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name='hub_address' value="{{ old('hub_address') }}" placeholder="Enter Hub Address">
                </div>


                <div class="form-group">
                  <label for="area">Area</label>
                  <input type="text" class="form-control" id="area" name='hub_area' value="{{ old('hub_area') }}" placeholder="Enter Hub Area">
                </div>

                <div class="form-group">
                  <label for="map_link">Map Link</label>
                  <input type="text" class="form-control" id="map_link" name='map_link' value="{{ old('map_link') }}" placeholder="Enter Map Link">
                </div>

                <div class="form-group">
                  <label>Off day</label>
                  <select class="form-control select2" name='close_days[]' multiple="multiple" data-placeholder="Select Off day"
                        style="width: 100%;">

                    @php
                    $weekdays = array('Friday', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday');
                    @endphp

                    @foreach($weekdays as $day)
                      <option value="{{ $day }}" {{ !empty(old('close_days')) && in_array($day, old('close_days')) ? "selected" : ''}} > {{ $day }}</option>
                    @endforeach

                  </select>
                </div>

<div class="row">
  <div class="col-md-6">
    <div class="bootstrap-timepicker">
      <div class="form-group">
        <label>Start time:</label>

        <div class="input-group">
          <input type="text" name="start_time" value="{{ old('start_time') }}" class="form-control timepicker">

          <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </div>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
    </div>
  </div>

  <div class="col-md-6">
    <div class="bootstrap-timepicker">
      <div class="form-group">
        <label>End time:</label>

        <div class="input-group">
          <input type="text" name="end_time" value= "{{ old('end_time') }}" class="form-control timepicker">

          <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </div>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
    </div>
  </div>
</div>







              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection

@section('script')

<!-- bootstrap time picker -->
<script src="{{ asset('Admin_LTE_resources/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<script>

$(function(){

  //Initialize Select2 Elements
  $('.select2').select2();

  //Timepicker
  $('.timepicker').timepicker({showInputs:false});

});

</script>

@endsection
