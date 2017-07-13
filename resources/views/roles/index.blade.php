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
                                            <small>Role Management</small>
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
                                            <span>Role Management</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">

												 <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box green">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-globe"></i> </div>
                                                        <div class="actions">
														@permission('role-create')
														  <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm btn-circle">
														<i class="fa fa-plus"></i> Add </a>
														@endpermission
                                                          
                                                            <a href="javascript:;" class="btn btn-default btn-sm btn-circle">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                                                            <thead>
                                                                <tr>
																	<th>No</th>
																	<th>Name</th>
																	<th>Description</th>
																	<th>Action</th>
																</tr>
                                                            </thead>
                                                            <tfoot>
                                                               <tr>
																	<th>No</th>
																	<th>Name</th>
																	<th>Description</th>
																	<th>Action</th>
																</tr>
                                                            </tfoot>
                                                            <tbody>
                                                               @foreach ($roles as $key => $role)
																<tr>
																	<td>{{ ++$i }}</td>
																	<td>{{ $role->display_name }}</td>
																	<td>{{ $role->description }}</td>
																	<td>
																		{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
																			
																			<a href="{{ route('roles.edit',$role->id) }}" class="btn btn-icon-only yellow"><i class="fa fa-edit"></i></a>
																			<button type="submit" data-toggle="confirmation" data-popout="true" class="btn btn-icon-only red"><i class="fa fa-times"></i></button>
																			
																			{!! Form::close() !!}
																		
																	</td>
																</tr>
																@endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->

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