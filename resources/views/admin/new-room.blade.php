@extends('admin.layouts.master')

@section('content')
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">New Room</li>
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
                            <h3 class="panel-title">New Room</h3>
                        </div>
                        <div class="panel-body">
                            <div>
                                <form action="/admin/add-room" method="post">
                                    {{ csrf_field() }}
                                    <div style="overflow: hidden">
                                        <div class="col-xs-10">
                                            <div class="form-inline">
                                                <input name="en_name" required placeholder="English name" class="form-control room-name">
                                                <input name="ru_name" required placeholder="Russian name" class="form-control room-name">
                                                <input name="hy_name" required placeholder="Armenian name" class="form-control room-name">
                                            </div>
                                            <hr class="clearfix">
                                            <div class="form-inline">
                                                <textarea name="en_desc" required placeholder="English description" class="form-control"></textarea>
                                                <textarea name="ru_desc" required placeholder="Russian description" class="form-control"></textarea>
                                                <textarea name="hy_desc" required placeholder="Armenian description" class="form-control"></textarea>
                                            </div>
                                            <hr class="clearfix">
                                            <div class="form-inline">
                                                <label>Duration</label>
                                                <input type="number" required name="duration" placeholder="1 hour">
                                                <input type="number"  required name="price" placeholder="12.000 AMD">
                                                <label>Price</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <a href="{{ asset('/filemanager/dialog.php?type=1&field_id=room_image') }}" class="open-filemanager btn btn-info btn-block">Add Image</a>
                                            <hr class="clearfix">
                                            <div class="room-albom">
                                                <div class="one-img">
                                                    <img src="/images/no-image.png" width="100%">
                                                    <input type="hidden" id="room_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-9">
                                        @foreach($features as $feature)
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    <input type="checkbox" name="features[]" value="{{ $feature->id }}">
                                                    <label>{{$feature->en_name}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-xs-offset-10 col-xs-2">
                                        <button class="btn btn-lg btn-success">Save Room</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection