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
                                        <h1>Posts
                                            <small>Create New Post</small>
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
                                            <a href="#">Posts</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Create New Post</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                            <div class="portlet light ">
                                                                <div class="portlet-title tabbable-line">
                                                                    <div class="caption caption-md">
                                                                        <i class="icon-globe theme-font hide"></i>
                                                                        <span class="caption-subject font-blue-madison bold uppercase">Post Content</span>
                                                                    </div>
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active">
                                                                            <a href="#tab_1_1" data-toggle="tab">Post Content</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_2" data-toggle="tab">Post Image</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_3" data-toggle="tab">Post Seo</a>
                                                                        </li>
                                                                   </ul>
                                                                </div>
                                                                <div class="portlet-body">
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
                                                                {!! Form::open(array('route' => 'posts.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                                                                           
                                                                       
                                                                    <div class="tab-content">
                                                                        <!-- PERSONAL INFO TAB -->
                                                                          <div class="tab-pane active" id="tab_1_1">
                                                                               <div class="form-group">
                                                                                    <label class="control-label">Title</label>
                                                                                    <input type="text" placeholder="John" name="title" class="form-control" value=""/> </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Description</label>
                                                                                    <input type="text" placeholder="Description" name="description" class="form-control" value=""/> </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Content</label>
                                                                                    <textarea name="content" id="summernote_1"> </textarea></div>
                                                                                <div class="margiv-top-10">
                                                                                    <button type="submit" class="btn green"> Submit </button>
                                                                                </div>
                                                                       </div>
                                                                        <!-- END PERSONAL INFO TAB -->
                                                                        <!-- CHANGE AVATAR TAB -->
                                                                        <div class="tab-pane" id="tab_1_2">
                                                                               <div class="form-group">
                                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                        <div class="fileinput-new thumbnail" style="width: 1100px; height: 300px;">
                                                                                            <img src="" alt="" /> </div>
                                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1100px; max-height: 300px;"> </div>
                                                                                        <div>
                                                                                            <span class="btn default btn-file">
                                                                                                <span class="fileinput-new"> Select image </span>
                                                                                                <span class="fileinput-exists"> Change </span>
                                                                                                <input type="file" name="image" > </span>
                                                                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clearfix margin-top-10">
                                                                                        <span class="label label-danger">NOTE! </span>
                                                                                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="margin-top-10">
                                                                                    <button type="submit" class="btn green"> Submit </button>
                                                                                </div>
                                                                       </div>
                                                                        <!-- END CHANGE AVATAR TAB -->
                                                                        <!-- CHANGE PASSWORD TAB -->
                                                                        <div class="tab-pane" id="tab_1_3">
                                                                                  <div class="form-group">
                                                                                    <label class="control-label">Keyword</label>
                                                                                    <input type="text" placeholder="Keyword" name="keyword" class="form-control" value=""/> </div>
                                                                                 <div class="form-group">
                                                                                    <label class="control-label">Tag</label>
                                                                                    <input type="text" placeholder="Tag 1,Tag 2" name="tag" class="form-control" value=""/> </div>
                                                                                
                                                                                <div class="margin-top-10">
                                                                                    <button type="submit" class="btn green">Submit</button>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                        <!-- END CHANGE PASSWORD TAB -->
                                                                       
                                                                    </div>
                                                                     {!! Form::close() !!}
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
