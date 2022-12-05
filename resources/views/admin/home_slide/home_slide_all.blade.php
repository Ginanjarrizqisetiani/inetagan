@extends('admin.amin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Home slide</h4>"
                <form method="post"action="{{ route('home.slide')}}" entype="multipart/form-data">@cdsf

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title" class="form-control" type="text" value="{{ $homeslide->title }}" id="example-text-input">

                        </div>
                    </div>
                   
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ShortTitle</label>
                        <div class="col-sm-10">
                            <input name="short_title" class="form-control" type="text" value="{{ $homeslide->short_title }}" id="example-text-input">

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Video Url</label>
                        <div class="col-sm-10">
                            <input name="video_url" class="form-control" type="text" value="{{ $homeslide->video_url }}" id="example-text-input">

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Home slide</label>
                        <div class="col-sm-10">
                            <input name="home slide" class="form-control" type="text" value="{{ $homeslide->title }}" id="example-text-input">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2
                        col-form-label"> </label>
                        <div class="showimage" class="rounded avatar-Ig" src="{{(empty($homeslide->home_slide))? url('upload/home_slide/'.$homeslide->home_slide):url('upload/gina.png')}}"alt="card image cap">
                            <input type="submit" class="btn btn-info waves-effect waves-light"value="update slide">
                        
                    </div>
            </div>
        </div>
    </div>
</div>
