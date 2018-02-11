@extends('admin.layouts.master')

@section('content')
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard / Features</li>
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
                        <h3 class="panel-title">Features</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($features as $f)
                            <div class="row"> 
                                <form method="post" action="{{ url('admin/edit-feature/'.$f->id) }}">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Feature En Name *</label>
                                            <input name="en_name" value =" {{ $f->en_name }}" class="form-control" placeholder="Page En Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Feature Ru Name *</label>
                                            <input name="ru_name" value =" {{ $f->ru_name }}" class="form-control" placeholder="Page Ru Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Feature Hy Name *</label>
                                            <input name="hy_name" value =" {{ $f->hy_name }}" class="form-control" placeholder="Page Hy Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>
                                            <input type="submit" name="submit"  class="btn btn-success margin-top-3" value="Edit" >
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>
                                            <a type="button" href="{{ url('admin/delete-feature/'.$f->id) }}"  class="btn btn-danger margin-top-3 deleteFeature" > Delete </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix green-border"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
