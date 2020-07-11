@extends('layouts.master')

@section ('title')
About US edit | Rizwan
@endsection 


@section ('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">About us edit</div>
                            <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Title:</label>
                                    <input type="text" name ="title" class="form-control" id="recipient-name" value="{{$abouts->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Subtitle:</label>
                                    <input type="text" name ="subtitle" class="form-control" id="recipient-name" value="{{$abouts->subtitle}}">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea class="form-control" name ="description" id="message-text" >{{$abouts->description}}</textarea>
                                </div>
                            
                            </div>
                            
                            <div class="modal-footer">
                                <a href="{{url('abouts')}}" class="btn btn-secondary" >Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            </form>
                
                </div>
            </div>
        </div>
</div>


@endsection