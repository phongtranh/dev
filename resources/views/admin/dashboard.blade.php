@extends('admin/admin_app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default" id="main-sidebar">
                <div class="panel-heading"><h5>DASHBOARD</h5></div>
                <div class="panel-body">
                    <ul class="list-group menu-list">
                        <li><a href="#" class="list-group-item">Users</a></li>
                        <li><a class="list-group-item" href="#">Articles</a></li>
                        <li><a class="list-group-item" href="#">Setting</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /sidebar -->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div><!-- /content -->
    </div>
</div>
@endsection()