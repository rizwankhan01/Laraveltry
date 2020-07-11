@extends('layouts.master')

@section ('title')
Register | Rizwan
@endsection 


@section ('content')


      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Resgisterd Users Role</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>id</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>
                        Email
                      </th>
                      <th class="text-right">
                       Edit
                      </th>
                      <th class="text-right">
                       Delete
                      </th>
                    </thead>
                    <tbody>

                    @foreach ($users as $row)
                      <tr>
                      <td>{{$row->id}}
                        </td>
                        <td>{{$row->name}}
                        </td>
                        <td>
                        {{$row->phone}}
                        </td>
                        <td>
                        {{$row->email}}
                        </td>
                        <td class="text-right">
                          <a href="/register-edit/{{$row->id}}" class="btn btn-sucess">Edit user</a>
                        </td>
                        <td class="text-right">
                        <form action="/register-delete/{{$row->id}}" method="post">
                        
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach

                      
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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