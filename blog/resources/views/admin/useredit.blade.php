@extends('layouts.master2')
@section('title','My Web | Admin | Edit User Roles')
@section('header','Edit User Roles')
@section('content')





    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"><i class="fas fa-user fa-5x"></i>
                                    <h4 class="card-title m-t-10">Id : {{$users->id}}</h4>
                                    <h4 class="card-title m-t-10">User Type : {{$users->usertype}}</h4>
                                </center>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                
                                    <form class="form-horizontal form-material" action="/userroleupdate/{{$users->id}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$users->name}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{$users->email}}" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-md-12">Created At</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{$users->created_at->diffForHumans()}}" class="form-control form-control-line">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>User Type: </label>
                                        <select class="form-control" name="usertype"  id="exampleFormControlSelect1">
                                            <option>admin</option>
                                            <option>user</option>
                                            <option> </option>
                                        </select>
                                    </div>


                                    <button class="btn btn-success">Submit</button>
                                    <a href="/users" class="btn btn-secondary">Back</a>
                                    
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection