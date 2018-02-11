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
                                <form action="/admin/add-room{{ $some ? '/'.$some->id : '' }}" method="post">
                                    {{ csrf_field() }}
                                    <div style="overflow: hidden">
                                        <div class="col-xs-10">
                                            <div style="overflow: hidden">
                                                <div class="col-xs-4">
                                                    <label>English name</label>
                                                    <input value="{{ $some ? $some->en_name : ''}}" name="en_name" required placeholder="English name" class="form-control room-name">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Russian name</label>
                                                    <input value="{{ $some ? $some->ru_name : ''}}" name="ru_name" required placeholder="Russian name" class="form-control room-name">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Armenian name</label>
                                                    <input value="{{ $some ? $some->hy_name : ''}}" name="hy_name" required placeholder="Armenian name" class="form-control room-name">
                                                </div>
                                            </div>
                                            <hr class="clearfix">
                                            <div style="overflow: hidden">
                                                <div class="col-xs-4">
                                                    <label>English name</label>
                                                    <textarea name="en_desc" required placeholder="English description" class="form-control">{{ $some ? $some->en_desc : ''}}</textarea>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Russian name</label>
                                                    <textarea name="ru_desc" required placeholder="Russian description" class="form-control">{{ $some ? $some->ru_desc : ''}}</textarea>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Armenian name</label>
                                                    <textarea name="hy_desc" required placeholder="Armenian description" class="form-control">{{ $some ? $some->hy_desc : ''}}</textarea>
                                                </div>
                                            </div>
                                            <hr class="clearfix">
                                            <div style="overflow: hidden">
                                                <div class="col-xs-6">
                                                    <label>Duration</label>
                                                    <input value="{{ $some ? $some->duration : ''}}" type="number" required name="duration" placeholder="1 hour">
                                                </div>
                                                <div class="col-xs-6">
                                                    <input type="number" value="{{ $some ? $some->price : ''}}" name="price" placeholder="12.000 AMD">
                                                    <label>Price</label>
                                                </div>
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
                                                @if($some)
                                                    @foreach(unserialize($some->images) as $image)
                                                        <div class="one-img">
                                                            <img src="{{$image}}" width="100%">
                                                            <input type="hidden" value="{{ $image }}" name="images[]">
                                                            <button class="btn btn-danger btn-block rm-image"><i class="fa fa-remove"></i>
                                                                Remove
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-xs-9">
                                        @foreach($features as $feature)
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    <input type="checkbox" {{ ($some && in_array($feature->id, unserialize($some->features))) ? 'checked' : ''}} name="features[]" value="{{ $feature->id }}">
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