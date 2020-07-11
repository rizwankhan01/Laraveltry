@extends('layouts.master')

@section ('title')
Register Edit | Rizwan
@endsection 


@section ('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role for Registered</h3>
                </div>
                
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-4">
                            <form action="/role-update/{{$users->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="username" value="{{$users->name}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Give Role</label>
                                    <select name="usertype" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="vendor">Vendor</option>
                                    </select>
                                </div>
                                    <button type = "submit" class="btn btn-sucess" >Update</button>
                                    <a href="/roleregister" class="btn btn-danger">cancel</a>
                            </form>
                        </div>
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