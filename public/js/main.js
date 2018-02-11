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
    href = $(this).attr("href");
    $(".yesOrNo").show();
    $(".yesOrNo form").attr('action', href);
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
