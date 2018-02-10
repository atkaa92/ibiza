// loader
jQuery(window).load(function() {
       jQuery(".spinner-wrap").fadeOut();
       jQuery(".spinner").delay(1000).fadeOut("slow"); 
       $('body').css('overflow', 'visible');
});

$(document).ready(function(){

	// search form collapsing
	(function(){
		var btn = $('.search-form__icon'),
			form = $('.search-form'),
			input = $('.search-form__fild');

		btn.click(function(){
			$(this).hide();
			form.fadeIn();
		});

		form.add(btn).click(function(e){
			e.stopPropagation();
		});
		$('body').click(function(){
			if (form.is(':visible')) {
				form.hide(100, function(){
					btn.fadeIn();
				});
			};
		});
	}());

	// custom select
	(function(){
		var holder = $('.select__holder'),
			list = $('.select__options'),
			select = $('.select').find('select');

		list.each(function(){
			var $this = $(this),
				option = $this.next(select).find('option');
			for(var i = 0; i < option.length; i++){
				$this.append('<li class="select__options-item">'+ option.eq(i).text() +'</li>');
			}
		});

		holder.click(function(e){
			e.stopPropagation();
			list.not($(this).next(list)).hide();

			if ($(this).next(list).is(':hidden')) {
				$(this).next(list).fadeIn(100);
			} else {
				$(this).next(list).fadeOut(100);
			}
		});


		$('.select__options-item').on('click', function(){
			var text = $(this).text(),
				index = $(this).index(),
				option = $(this).parent().next(select).find('option');

			$(this).parent().prev(holder).find('span').text(text);
			option.removeAttr('selected');
			option.eq(index).attr('selected', 'selected');

			// holder letter cutting
			var holder_txt = holder.find('span').text();

			if (holder.outerWidth() < 168 && holder_txt.length > 9) {
				holder.find('span').text(holder.find('span').text().substring(0,9) + '...');
			} else {
				holder.find('span').text(holder_txt);
			}

			$(window).resize(function() {
				if (holder.outerWidth() < 168 ) {
					holder.find('span').text(holder.find('span').text().substring(0,9) + '...');
				} else {
					holder.find('span').text(holder_txt);
				}
			});
		});
		$('body').click(function(){
			list.hide();
		});
		
	}());

	

	// parallax
	(function(){
		var bg = $('.section--bg');

		$(window).scroll(function(){
			var pos = $(window).scrollTop() / 10,
				coords = 'center'+ -pos + 'px';
			bg.css('background-position', coords);
		});

	}());

	// map overlay wrapper width
	(function(){
		function overlay(){
			var width = $(window).width();
			$('.footer__overlay-wrap').width(width);
		};
		$(window).resize(function(){
			overlay();
		});
		overlay();
	}());

	// inner slider
	(function(){
		var li = $('.slider-inner__thumbs-item'),
			thumb = $('.slider-inner__thumbs-item'),
			mainImg = $('.slider-inner__bg'),
			active = $('.thumb-active'),
			src = active.find('img').attr('src');

		mainImg.css('background-image', 'url(' + src + ')');


		li.each(function(){
			var src = $(this).find('img').attr('src');

			$(this).append('<div class="slider-inner__img"></div>');
			$(this).find('.slider-inner__img').css('background-image', 'url('+ src +')');
		}).find('img').remove();


		thumb.click(function(){
			var src = $(this).find('.slider-inner__img').css('background-image');

			thumb.removeClass('thumb-active');
			$(this).addClass('thumb-active');


			mainImg.animate({'opacity': 0}, 100,  function() {
        	$(this)
	            .css({'background-image': src})
	            .animate({'opacity': 1});
    		});
		});
	}());

	// gallery
	(function(){
                $('.gallery').imagesLoaded( function() {
                    var item = $('.gallery__item'),
			item2 = $('.gallery__item:nth-child(2)'),
			height = item2.height(),
			itemBig = $('.gallery__item:nth-child(9n+1)');

		    itemBig.addClass('gallery__item--big');

		    $(window).resize(function(){
			height = item2.height();
		    });
		    itemBig.height(height * 2 + parseInt(item2.css('margin-bottom')) - 1);

		    $('.gallery__item--big:nth-child(odd)').css({
			'float': 'left'
		    });

		    $('.gallery__item--big:nth-child(even)').css({
			'float': 'right'
		    });


		    $('.gallery__item--big').each(function() {
			var indx = $(this).index();

		    });
                });
	}());

	// affers blocks
	/*(function(){
		setTimeout(function(){
			var offersCol = $('.offers__col'),
				inner = offersCol.find('.media--bordered');

			inner.height(inner.height());
		},2500);
	}());*/

	// modal
	(function(){
		var form = $('.form--reserv');

		$('.js-submit').click(function(){

			var input = $('.form--reserv').find('.form__fild'),
				select = $('.select__holder').find('span');

				var empty = false;

				input.each(function() {
		            if (!select) {
			            if ($(this).val() == '' || select.text().length == 0) {
			                empty = true;
			            }
					} else if($(this).val() == '') {
		            	empty = true;
		            }
		        });

		        if (empty) {
		            $('.js-submit').attr('type', 'button');
		        } else {
		        	$('.js-submit').attr('type', 'submit');
					form.submit(function(){
						$('#myModal').modal('show');
						return false;
					});
		        }
		});
	}());
});
