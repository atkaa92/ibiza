@extends('admin.layouts.master')

@section('content')
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">All Slides</li>
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
                            <h3 class="panel-title">All Slides</h3>
                        </div>
                        <div class="panel-body">
                            @foreach($sliders as $image)
                                <div class="col-xs-3">
                                    <img src="{{$image->url}}" width="100%">
                                    <a href="/admin/delete-slide/{{$image->id}}" class="btn btn-danger btn-block rm-image"><i class="fa fa-remove"></i>
                                        Remove
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Add Slide</h3>
                        </div>
                        <div class="panel-body col-xs-6 col-sm-4">
                            <form action="/admin/add-slide" method="post">
                                <a href="{{ asset('/filemanager/dialog.php?type=1&field_id=room_image') }}" class="open-filemanager btn btn-info btn-block">Add Slide</a>
                                <div class="room-albom">
                                    <div class="one-img" >
                                        <img src="/images/no-image.png" width="100%">
                                        <input type="hidden" id="room_image" required>
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <input type="submit" value="Add Slide" class="pull-left btn btn-default">
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="yesOrNo">
            <div class="yesOrNoContent">
                <h3>Are you sure ???</h3>
                <button class="btn btn-default answerYes" >Yes</button>
                <button class="btn btn-danger answerNo">No</button>
            </div>
        </div>

    </section>

    <script>
        var remove_id
        $('.answerYes').click(function () {
            console.log(remove_id)
            $("form[data-id="+remove_id+"]").submit()
        })
    </script>
@endsection