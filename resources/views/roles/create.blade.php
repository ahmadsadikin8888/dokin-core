@extends('layouts.app')
 
@section('content')
<div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Account
                                            <small>Create New Role</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                   
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <a href="#">Pages</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <a href="#">Roles</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Create New Role</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">
 <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>Create New Role </div>
            <div class="tools">
                <a href="javascript:;" class="reload"> </a>
            </div>
        </div>
        <div class="portlet-body form">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- BEGIN FORM-->
            {!! Form::open(array('route' => 'roles.store','method'=>'POST','class'=>'form-horizontal')) !!}
                <div class="form-body">
                    <h3 class="form-section">Role Info</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Name</label>
                                <div class="col-md-9">
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</div>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Display Name</label>
                                <div class="col-md-9">
                                 {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}
              					 </div>
                            </div>
                        </div>
						</div>
						<div class="row">
						<div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Description</label>
                                <div class="col-md-9">
											{!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
								</div>
                            </div>
                        </div>
						</div>
                        
                        <h3 class="form-section">Permission</h3>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Role</label>
                                <div class="col-md-9">
                                 @foreach($permission as $value)
									<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
									{{ $value->display_name }}</label>
									<br/>
								@endforeach
							 </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <a href="{{ route('users.index') }}" class="btn default">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> </div>
                    </div>
                </div>
            	{!! Form::close() !!}
            <!-- END FORM-->
        </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                       
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>



@endsection