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
                                            <small>user account setting</small>
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
                                            <span>User</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN PROFILE SIDEBAR -->
                                                <div class="profile-sidebar">
                                                    <!-- PORTLET MAIN -->
                                                    <div class="portlet light profile-sidebar-portlet ">
                                                        <!-- SIDEBAR USERPIC -->
                                                        <div class="profile-userpic">
                                                            <img src="{{asset('uploads/propic/original/'.$user->avatar)}}" class="img-responsive" alt=""> </div>
                                                        <!-- END SIDEBAR USERPIC -->
                                                        <!-- SIDEBAR USER TITLE -->
                                                        <div class="profile-usertitle">
                                                            <div class="profile-usertitle-name"> {{$user->name}} </div>
                                                            <div class="profile-usertitle-job"> Developer </div>
                                                        </div>
                                                        <!-- END SIDEBAR USER TITLE -->
                                                         <!-- SIDEBAR MENU -->
                                                        <div class="profile-usermenu">
                                                            <ul class="nav">
                                                                <li class="active">
                                                                    <a href="#">
                                                                        <i class="icon-settings"></i> Account Settings </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- END MENU -->
                                                    </div>
                                                    <!-- END PORTLET MAIN -->
                                                    
                                                </div>
                                                <!-- END BEGIN PROFILE SIDEBAR -->
                                                <!-- BEGIN PROFILE CONTENT -->
                                                <div class="profile-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="portlet light ">
                                                                <div class="portlet-title tabbable-line">
                                                                    <div class="caption caption-md">
                                                                        <i class="icon-globe theme-font hide"></i>
                                                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                                    </div>
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active">
                                                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                                        </li>
                                                                   </ul>
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="tab-content">
                                                                        <!-- PERSONAL INFO TAB -->
                                                                        <div class="tab-pane active" id="tab_1_1">
                                                                            <form  method="post" action="{{action('ProfileController@update',$id)}}">
                                                                            {{csrf_field()}}
                                                                             <input name="_method" type="hidden" value="PATCH">
                                                                              <input name="type" type="hidden" value="info">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Name</label>
                                                                                    <input type="text" placeholder="John" name="name" class="form-control" value="{{$user->name}}"/> </div>
                                                                                <div class="margiv-top-10">
                                                                                    <button type="submit" class="btn green"> Save Changes </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- END PERSONAL INFO TAB -->
                                                                        <!-- CHANGE AVATAR TAB -->
                                                                        <div class="tab-pane" id="tab_1_2">
                                                                             <form  method="post" action="{{action('ProfileController@update',$id)}}" enctype="multipart/form-data">
                                                                                {{csrf_field()}}
                                                                                <input name="_method" type="hidden" value="PATCH">
                                                                                <input name="type" type="hidden" value="avatar">
                                                                                <div class="form-group">
                                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                            <img src="{{asset('uploads/propic/original/'.$user->avatar)}}" alt="" /> </div>
                                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                                        <div>
                                                                                            <span class="btn default btn-file">
                                                                                                <span class="fileinput-new"> Select image </span>
                                                                                                <span class="fileinput-exists"> Change </span>
                                                                                                <input type="file" name="avatar" > </span>
                                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clearfix margin-top-10">
                                                                                        <span class="label label-danger">NOTE! </span>
                                                                                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="margin-top-10">
                                                                                    <button type="submit" class="btn green"> Save Changes </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- END CHANGE AVATAR TAB -->
                                                                        <!-- CHANGE PASSWORD TAB -->
                                                                        <div class="tab-pane" id="tab_1_3">
                                                                             <form  method="post" action="{{action('ProfileController@update',$id)}}">
                                                                                {{csrf_field()}}
                                                                                <input name="_method" type="hidden" value="PATCH">
                                                                                <input name="type" type="hidden" value="password">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Current Password</label>
                                                                                    <input type="password" name="curpassword" class="form-control" /> </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">New Password</label>
                                                                                    <input type="password" name="newpassword" class="form-control" /> </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Re-type New Password</label>
                                                                                    <input type="password" name="renewpassword" class="form-control" /> </div>
                                                                                <div class="margin-top-10">
                                                                                    <button type="submit" class="btn green"> Save Changes </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- END CHANGE PASSWORD TAB -->
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PROFILE CONTENT -->
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
