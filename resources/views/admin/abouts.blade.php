@extends('layouts.master')

@section ('title')
About US | Rizwan
@endsection 


@section ('content')

<div class="panel-header panel-header-sm">
      </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-aboutus" method="post">
      {{ csrf_field() }}
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name ="title" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Subtitle:</label>
            <input type="text" name ="subtitle" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name ="description" id="message-text"></textarea>
          </div>
      
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>




      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> About Us</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >About us</button>
                
              </div>


              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Subtitle
                      </th>
                      <th>
                        Description
                      </th>
                      <th class="text-right">
                        Edit
                      </th>
                      <th class="text-right">
                        Delete
                      </th>

                    </thead>
                    <tbody>
                    @foreach ($abouts as $data)
                      <tr>
                    
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                        {{$data->title}}
                        </td>
                        <td>
                        {{$data->subtitle}}
                        </td>
                        <td >
                        {{$data->description}}
                        </td>
                        <td class="text-right">
                          <a href="{{url('abouts/'.$data->id)}}" class="btn btn-sucess">Edit</a>
                        </td>
                        <td class="text-right">
                          <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          

      @endsection 


      @section  ('script')

      <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  @endsection 