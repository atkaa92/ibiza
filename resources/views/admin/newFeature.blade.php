@extends('admin.layouts.master')

@section('content')
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard / New Feature</li>
        </ol>
    </div>
</section>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('admin.includes.sidebar')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">New Feature</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{ url('admin/add-feature') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Feature En Name *</label>
                                <input name="en_name" class="form-control" placeholder="Page En Name" required>
                            </div>
                            <div class="form-group">
                                <label>Feature Ru Name *</label>
                                <input name="ru_name" class="form-control" placeholder="Page Ru Name" required>
                            </div>
                            <div class="form-group">
                                <label>Feature Hy Name *</label>
                                <input name="hy_name" class="form-control" placeholder="Page Hy Name" required>
                            </div>
                            <button class="btn btn-success btn-block">
                                Add New Feature
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
