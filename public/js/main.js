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
// if ($("body").height() < $(window).height()){
//     $("footer").css("margin-top",  $(window).height() - $('body').height());
// }

//                                    Message pop
// ========================================================================================================
$(document).on('click', '.close_error', function(){
    $(this).parent().fadeOut('slow');
});

//                                    Config functional
// ========================================================================================================
$(document).on('click', '.saveNumberChanges', function(){
    var en_desc = $(this).siblings('#confNumber').val();
    title = 'number';
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.post("/admin/setConfigs", {en_desc, title }, function(data, status){
	})
})

$(document).on('click', '.saveSupportChanges', function(){
    var en_desc = $(this).siblings('#confSupport').val();
    title = 'support';
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.post("/admin/setConfigs", {en_desc, title }, function(data, status){
	})
})

$(document).on('click', '.saveEmailChanges', function(){
    var en_desc = $(this).siblings('#confEmail').val();
    var title = 'email';
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.post("/admin/setConfigs", {en_desc, title}, function(data, status){
	})
})

$(document).on('click', '.saveAddressChanges', function(){
    var en_desc = $(this).parents('.well').find('#confEnAddress').val();
    var am_desc = $(this).parents('.well').find('#confAmAddress').val();
    var ru_desc = $(this).parents('.well').find('#confRuAddress').val();
    var ge_desc = $(this).parents('.well').find('#confGeAddress').val();
    var title = 'address';
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.post("/admin/setConfigs", {title,en_desc, am_desc, ru_desc, ge_desc }, function(data, status){
	})
})

//                                    User functional
// ========================================================================================================

$(document).on('click', '.deleteCurrUser', function(){
    userId = $(this).data("user-id");
    $(".yesOrNo").show();
    $(".yesOrNo form").attr('action', '/admin/deleteUser');
    $(".yesOrNo form input[name=hiddenId]").val(userId);
    $(".yesOrNo form").submit(function(e){e.preventDefault();});
})

$(document).on('click', '.editCurrUser', function(){
    userId = $(this).data("user-id");
    oldUsername = $(this).parent().siblings('.usersTableCurUsername').text();
    oldEmail = $(this).parent().siblings('.usersTableCurEmail').text();
    oldSelect = $(this).parent().siblings('.usersTableCurRole').text();
    $("#editUser").modal('show');
    $("#editUser input[name=userId]").val(userId);
    $("#editUser input[name=username]").val(oldUsername);
    $("#editUser input[name=email]").val(oldEmail);
    $('#editUser option[value=' + oldSelect + ']').attr('selected',true);
})

$(document).on('click', '.answerYes', function(){
    $(".yesOrNo form").unbind().submit();
    $(".yesOrNo").hide();
})

$(document).on('click', '.answerNo', function(){
    $(".yesOrNo").hide();
})

//                                    Services functional
// ========================================================================================================
$(document).on('click', '.editCurrService', function(){
    serviceId = $(this).data("service-id");
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.post("/admin/getCurrService", {serviceId}, function(data, status){
        $(".addService form").attr('action', '/admin/editService');
        $(".addService form .modal-body input[name=id]").remove();
        $(".addService form :submit").text('Edit Service');
        $(".addService form .modal-body").prepend('<input type="hidden" name="id" value="'+serviceId+'">');
        $(".addService form .modal-body input[name=en_title]").val(data.en_title);
        $(".addService form .modal-body input[name=am_title]").val(data.am_title);
        $(".addService form .modal-body input[name=ru_title]").val(data.ru_title);
        $(".addService form .modal-body input[name=ge_title]").val(data.ge_title);
        $(".addService form .modal-body textarea[name=en_desc]").text(data.en_desc);
        $(".addService form .modal-body textarea[name=am_desc]").text(data.am_desc);
        $(".addService form .modal-body textarea[name=ru_desc]").text(data.ru_desc);
        $(".addService form .modal-body textarea[name=ge_desc]").text(data.ge_desc);
        $("#addService").modal('show');
    }, "json")
})

$(document).on('click', '.addNewService', function(){
    $(".addService form").attr('action', '/admin/addService');
    $(".addService form .modal-body input[name=id]").remove();
    $(".addService form :submit").text('Add Service');
    $(".addService form .modal-body input[name=en_title]").val('');
    $(".addService form .modal-body input[name=am_title]").val('');
    $(".addService form .modal-body input[name=ru_title]").val('');
    $(".addService form .modal-body input[name=ge_title]").val('');
    $(".addService form .modal-body input[name=icon]").val('');
    $(".addService form .modal-body textarea[name=en_desc]").text('');
    $(".addService form .modal-body textarea[name=am_desc]").text('');
    $(".addService form .modal-body textarea[name=ru_desc]").text('');
    $(".addService form .modal-body textarea[name=ge_desc]").text('');
    $("#addService").modal('show');
})    

$(document).on('click', '.deleteCurrServise', function(){
    serviceId = $(this).data("service-id");
    $(".yesOrNo").show();
    $(".yesOrNo form").attr('action', '/admin/deleteService');
    $(".yesOrNo form input[name=hiddenId]").val(serviceId);
    $(".yesOrNo form").submit(function(e){e.preventDefault();});
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

/*  Filemanager */
$('.all-images').fancybox({
    'width'		: 900,
    'height'	: 600,
    'type'		: 'iframe',
    'autoScale'    	: false
});

function responsive_filemanager_callback(field_id){
    var url=jQuery('#'+field_id).val();
    $('#'+field_id).prev().attr('src',url);
    if(field_id == 'prod_img_url'){
        var url=jQuery('#'+field_id).attr('id','')
        $('#general_img').append(`
            <div class="single-image">
                <img src="http://gj.dev/images/no-image.png" width="100%">
                <input type="text" class="form-control product-img" name="product-img[]" id="prod_img_url" disabled="">
                <button type="button" data-src="{{ url('/images/no-image.png') }}" class="btn btn-danger btn-block img-rm" style="margin-top: 5px">Remove Image</button>
            </div>
        `)
    }
}
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

$(".animateForm input, .animateForm textarea").focus(function(){
    console.log($(this).siblings("label"))
    $(this).siblings("label").show();
    $(this).siblings("label").addClass('animated fadeInUp');
});

$(".animateForm input, .animateForm textarea").blur(function(){
    $(this).siblings("label").hide();
    $(this).siblings("label").removeClass('animated fadeInUp');
})
