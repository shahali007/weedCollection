@extends('backend.app')

@section('title', 'Edit Event')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-8">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-col-pink">
                            <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">event</i> Event</a></li>
                            <li class="active"><i class="material-icons">border_color</i> Edit Event</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-right">
                        <a href="{{ url('record') }}" class="btn btn-default waves-effect waves-float">
                            <span>All Event</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ action('EventController@update', $event->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="row clearfix">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="caption">Caption</label>
                                                <input type="text" class="form-control" name="caption" id="caption" value="{{ $event->caption }}">
                                            </div>
                                            @if($errors->has('caption'))
                                                <p class="col-red">{{ $errors->first('caption') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <img src="{{ asset(config('apppath-config.eventPath').$event->img) }}" alt="Event" style="width:100%;">
                                                <label for="imgpath">Event Image</label>
                                                <input type="file" class="form-control" name="imgpath" id="imgpath">
                                            </div>
                                            @if($errors->has('imgpath'))
                                                <p class="col-red">{{ $errors->first('imgpath') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <div class="switch m-b-125">
                                                <div class="demo-switch-title">Status</div>
                                                <label>
                                                    Inactive
                                                    <input type="checkbox" {{ $event->status === 1 ? 'checked' : '' }} name="status" id="status" value="1">
                                                    <span class="lever switch-col-blue"></span>
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary btn-lg waves-effect">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection