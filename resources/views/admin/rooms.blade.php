@extends('admin.layouts.master')

@section('content')
    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">All Rooms</li>
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
                            <h3 class="panel-title">All Rooms</h3>
                        </div>
                        <div class="panel-body">
                            @foreach($rooms as $index => $room)
                                @php $index++ @endphp
                                <div class="col-xs-4">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="text-center">{{ $room->en_name }}</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div>
                                                <img src="{{ unserialize($room->images)[0] }}" width="100%">
                                            </div>
                                        </div>
                                        <form action="{{ url('admin/remove-room/'.$room->id) }}" method="post" data-id="{{ $room->id }}" class="panel-footer" style="overflow: hidden">
                                            <a href='{{ url("admin/some-room/$room->id") }}' class="btn btn-success pull-left">Edit</a>
                                            {{csrf_field()}}
                                            <button type="button" class="btn btn-danger pull-right deleteFeature delete-room">Remove</button>
                                        </form>
                                    </div>
                                </div>
                                @if($index/3 == 1 && $index != 0)
                                    <div class="clearfix"></div>
                                @endif
                            @endforeach
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