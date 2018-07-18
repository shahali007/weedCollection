@extends('backend.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect hover-expand-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">photo_library</i>
                        </div>
                        <div class="content">
                            <div class="text">People</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">654</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-indigo">
                            <i class="material-icons">dollar</i>
                        </div>
                        <div class="content">
                            <div class="text">Tk.</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">200000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection