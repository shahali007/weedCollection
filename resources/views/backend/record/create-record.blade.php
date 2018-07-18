@extends('backend.app')
@section('title', 'Add New Record')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if(session()->has('successMsg'))
                <div class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> {{ session('successMsg') }}
                </div>
            @endif
            <div class="row clearfix">
                <div class="col-sm-8">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-col-grey">
                            <li><a href="javascript:void(0);">Add New Record</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-right">
                        <a href="{{ url('record') }}" class="btn btn-default waves-effect waves-float">
                            <span>All Record</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Record
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ action('RecordController@store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-8">
                                        <div class="form-group form-float">
                                            <div class="form-line focused">
                                                <label class="form-label" for="title">Name</label>
                                                <input type="text" class="form-control" name="name" id="name" autofocus value="{{ old('name') }}">
                                            </div>
                                            @if($errors->has('name'))
                                                <p class="col-red">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label" for="title">Address</label>
                                                <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                                            </div>
                                            @if($errors->has('address'))
                                                <p class="col-red">{{ $errors->first('address') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label class="form-label" for="title">Amount</label>
                                                <input type="text" class="form-control" name="amount" id="amount" value="{{ old('amount') }}">
                                            </div>
                                            @if($errors->has('amount'))
                                                <p class="col-red">{{ $errors->first('amount') }}</p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary  btn-lg btn-block waves-effect">
                                            Submit
                                        </button>
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