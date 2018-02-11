//                                    Preloader
// ========================================================================================================
$(window).on('load', function(){ 
    $('#preloader').fadeOut();
})
$(document).ajaxStart(function () {
    $('#preloader').fadeIn();
})
$(document).ajaxStop(function () {
    $( "#preloader" ).fadeOut();
})

$('body').click(function () {
    setTimeout(function () {
        $('.mes').hide();
    },3000)
})

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//                                    Footer position
// ========================================================================================================
if ($("body").height() < $(window).height()){
    $("footer").css("margin-top",  $(window).height() - $('body').height());
}

//                                    Message pop
// ========================================================================================================
$(document).on('click', '.close_error', function(){
    $(this).parent().fadeOut('slow');
});

//                                    Feature functional
// ========================================================================================================
$(document).on('click', '.deleteFeature', function(event){
    event.preventDefault();
    id = $(this).data("id");
    action = $(".yesOrNo form").attr('action');
    $(".yesOrNo").show();
    $(".yesOrNo form").attr('action', action +'/delete-feature/'+id );
    $(".yesOrNo form").submit(function(e){e.preventDefault();});
})

$(document).on('click', '.answerYes', function(){
    $(".yesOrNo form").unbind().submit();
    $(".yesOrNo").hide();
})

$(document).on('click', '.answerNo', function(){
    $(".yesOrNo").hide();
})


//=======================================================================================
$(document).on('click','.open-collapse',function(){
    if(!$(this).hasClass('open')){
        $(this).addClass('open')
        var selector = $(this).attr('href');
        $(selector).load(this_func_url+"/"+$(this).data('slug'))
    }
})
$(document).on('click','.deleteBanner',function () {
    var form = $(this).closest('form')
    form.attr('action',"/admin/deleteBanner")
    form.submit()
})
$(document).on('click','.addBanner',function () {
    var form = $(this).closest('form')
    form.attr('action',"/admin/addBanner/"+$(this).data('slug'))
    form.submit()
})
$(document).on('click','.addBlack',function () {
    var form = $(this).closest('form')
    form.attr('action',"/admin/addBlack/"+$(this).data('slug'))
    form.submit()
})
$(document).on('click','.addWhite',function () {
    var form = $(this).closest('form')
    form.attr('action',"/admin/addWhite/"+$(this).data('slug'))
    form.submit()
})

//=======================================================================================

$('.list-parent').click(function () {
    $(this).next().slideToggle(400)
    var tip  = $(this).find('.pull-right')
    if (tip.hasClass('fa-angle-double-right')) {
        tip.removeClass('fa-angle-double-right');
        tip.addClass('fa-angle-double-down')
    }else{
        tip.removeClass('fa-angle-double-down');
        tip.addClass('fa-angle-double-right')
    }
})


$('.open-filemanager').fancybox({
    'width'		: 900,
    'height'	: 600,
    'type'		: 'iframe',
    'autoScale'    	: false
});

function responsive_filemanager_callback(field_id){
    $('#'+field_id).attr('name','images[]')
    $('#'+field_id).prev().attr('src',$('#'+field_id).val());
    $('#'+field_id).parent().append(`
        <button class="btn btn-danger btn-block rm-image">
        <i class="fa fa-remove"></i>
        Remove
        </button>
    `)
    $('#'+field_id).attr('id','');
    $('.room-albom').prepend(`
        <div class="one-img">
            <img src="/images/no-image.png" width="100%">
            <input type="hidden" id="room_image">
        </div>
    `)
}

$(document).on('click','.rm-image',function () {
    $(this).parent().remove()
})