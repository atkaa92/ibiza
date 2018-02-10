@if(isset($errors) && count($errors) > 0)
    <div class="validErrorPop">
        <i class="fa fa-close pull-right close_error"></i>
        <h3>Message</h3><br>
        @foreach($errors->all() as $error)
                {{$error}}<br><br>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="successPop mes">
        <i class="fa fa-close pull-right close_error"></i>
        <h3>Message</h3>
        <span>{{session('success')}}</span>
    </div>
@endif

@if(session('error'))
    <div class="errorPop mes">
        <i class="fa fa-close pull-right close_error"></i>
        <h3>Message</h3>
        <span>{{session('error')}}</span>
    </div>
@endif

<div class="successPop mes" style="display: none">
    <i class="fa fa-close pull-right close_error"></i>
    <h3>Message</h3>
    <span>{{session('success')}}</span>
</div>

<div class="errorPop mes" style="display: none">
    <i class="fa fa-close pull-right close_error"></i>
    <h3>Message</h3>
    <span>{{session('error')}}</span>
</div>