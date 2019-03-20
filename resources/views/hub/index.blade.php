@extends('layouts.master')

@section('page_content')
<div class="col-xs-12">
  <div class="row">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Hub Area</th>
                  <th>Hub Address</th>
                  <th>Map Link</th>
                  <th>Off Day</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hubs as $hub)
                <tr>
                  <td>{{$hub->hub_area}}</td>
                  <td>{{$hub->hub_address}}</td>
                  <td>{{$hub->map_link}}</td>
                  <td>{{$hub->off_day}}</td>
                  <td>{{$hub->status}}</td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

  </div>

</div>

@endsection

@section('script')

<script type="text/javascript">

  $(function(){
    $('#example1').DataTable();
  })

</script>

@endsection
