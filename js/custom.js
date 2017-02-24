;
/*
|------------------------------------------------------------
| DOCUMENT READY
|------------------------------------------------------------
*/

$(document).ready(function() {

	popup.init();


	var $element = $('input[type="range"]');
	var $output = $('output');

	function updateOutput(el, val) {
	  el.textContent = val;
	}


	$element
	  .rangeslider({
	    polyfill: false,
	    onInit: function() {
	      updateOutput($output[0], this.value);

	    },
			onSlide: function(position, value) {
				$('.ex_item').removeClass('active');
				$('#ex_item_'+value).toggleClass('active');

			},
	  })
	  .on('input', function() {
	    updateOutput($output[0], this.value);
	  });

		$(document).on('click','.ex_item',function(e){
			e.preventDefault();
			var it = $(this).data('pos');
			$('#range1').val(it).change();
		});

		$('.design_wrap').slick({
			infinite: true,
			centerMode: true,
			centerPadding: '20px',
			slidesToShow: 3,
			prevArrow:'<button class="slick-prev">‹</button>',
			nextArrow:'<button class="slick-next">›</button>',
			responsive: [
				{
				  breakpoint: 996,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					centerMode:false
				  }
				},
				{
				  breakpoint: 776,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					centerMode:false
				  }
				}
			]
		});

		$('.post_wrap').slick({
			infinite: true,
			slidesToShow: 1,
			prevArrow:'<button class="slick-prev aerrow">➜</button>',
			nextArrow:'<button class="slick-next">➜</button>'
		});
		$('.point').slick({
		  dots: true,
		  infinite: true,
		  arrows:false
		});
});

$(document).on('click','.rangeslider',function(e){
	$('.ex_item').removeClass('active');
	$('#ex_item_'+$('#range1').val()).toggleClass('active');
});

$(document).on('click','.ex_item',function(){
    $this = $(this);
    $this.toggleClass('active');
    $('.ex_item').not($this).removeClass('active');
		$this.parent().siblings().removeClass('active');
});

/*
|------------------------------------------------------------
| SIDEBAR
|------------------------------------------------------------
*/
$(function(){
  $(document).on('click','.s_nav_list li.has_sub_nav',function(){
      $(this).siblings().removeClass('open').find('.s_sub_nav_list').slideUp('fast');
      $(this).toggleClass('open').find('.s_sub_nav_list').slideToggle('fast');
  });
});


/*
|------------------------------------------------------------
| POPUP
|------------------------------------------------------------
*/
/*
|------------------------------------------------------------
| POPUP
|------------------------------------------------------------
*/
var popup = {
	el:{
  },
  data:{
		currentPopup:[],
		settings:''
  },
  init:function(settings){
    popup.bindUIActions();
		popup.data.settings = settings;
  },
  bindUIActions:function(){
    $(document).on("click",'.popup_open',function(){
			popup.open($(this).data('popup'));
		});
    $(document).on("click",'.popup_close',function(){
			popup.close($(this).parents('.popup').attr('id'));
		});
		$(document).mouseup(function(e){
		    var container = $('.popup_overlay');
		    if(container.is(e.target)){
		        popup.close(popup.data.currentPopup[popup.data.currentPopup.length-1]);
		    }
		});
		$(document).keyup(function(e){
		    if(e.keyCode==27){
					popup.close(popup.data.currentPopup[popup.data.currentPopup.length-1]);
				}
		});
  },
	open:function(popupID){
		//popup.close(popup.data.currentPopup);
		popup.data.currentPopup.push(popupID);
		$('body').addClass('oh');
		$('#'+popupID).parents('.popup_overlay').css('z-index',99 + popup.data.currentPopup.length).addClass('open');
		$('#'+popupID).addClass('open');
		$('#'+popupID).find('.popup_focus').focus();
		if(popup.data.settings.afterOpen){
			popup.data.settings.afterOpen(popupID);
		}
	},
	close:function(popupID){
		var popupIndex = popup.data.currentPopup.indexOf(popupID);
		popup.data.currentPopup.splice(popupIndex, 1);
		$('#'+popupID).parents('.popup_overlay').removeClass('open').css('z-index',-1);
		$('#'+popupID).removeClass('open');
		$('body').removeClass('oh').focus();
		if(popup.data.settings.afterClose){
			popup.data.settings.afterClose(popupID);
		}
	},
};


/*
|------------------------------------------------------------
| PAGE LOADED
|------------------------------------------------------------
*/

$(window).bind("load", function() {

});


/*
|------------------------------------------------------------
| DOCUMENT MOUSE UP
|------------------------------------------------------------
*/
$(document).mouseup(function(e){
    var container = $('.auto_close');
    var opener = $('.opener');

	container.each(function(){
		var _this = $(this);
		if (!_this.is(e.target) && _this.has(e.target).length === 0){
	        _this.removeClass('open');
	    }
	});

	opener.each(function(){
		var _this = $(this);
		var toOpen = $('.'+_this.data('open'));

		if (!_this.is(e.target) && _this.has(e.target).length === 0 && !toOpen.is(e.target) && toOpen.has(e.target).length === 0){
			if(toOpen.hasClass('auto_close')){
				_this.removeClass('active');
			}
    }
	});

  $('body').removeClass('oh');


});


/*
|------------------------------------------------------------
| OPENER
|------------------------------------------------------------
*/

$(document).on('click','.opener',function(){
    $this = $(this);

		var toOpen = $('.'+$this.data('open'));

		if($this.hasClass('active')){
			$this.removeClass('active');
			toOpen.removeClass('open').find('.open_focus').blur();
      if($this.data('oh')){
	    	$('body').removeClass('oh');
	    }
			if($this.data('overlay')){
	    	$('.overlay').removeClass('open');
	    }
		}
		else{
			$('.opener').not($this).removeClass('active');
			toOpen.addClass('open').find('.open_focus').focus();
			$('.auto_close').not(toOpen).removeClass('open');
      if($this.data('oh')){
        $('body').addClass('oh');
      }
			if($this.data('overlay')){
	    	$('.overlay').addClass('open');
	    }
			$this.addClass('active');
		}

});
/*
|------------------------------------------------------------
| LOG
|------------------------------------------------------------
*/
function log(input){
    console.log(input);
}

/*
|------------------------------------------------------------
| SMOOTH SCROLL
|------------------------------------------------------------
*/
$(function(){
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
});

$(function(){
  $('.ss_tabs').ssTabs({
    full_tabs:false
  });
});

(function ($, window, document, undefined) {
    var pluginName = "ssTabs",
        dataKey = "plugin_" + pluginName;

    var Plugin = function (element, options) {

        this.element = element;

        //------DEFAULT OPTIONS-------//
        this.options = {
          full_tabs:false,
          callback:function(){}
        };

        this.init(options);
    };

    Plugin.prototype = {
        init: function (options) {
            $.extend(this.options, options);
            //------DO THE THINGS-------//
            this.set();
            this.bindUIActions();
            this.options.callback.call(this.element);
        },

        bindUIActions:function(){
          var _this = this;

          _this.element.find('.sstl_button').on('click',function(){
            var tabNo = $(this).parent().index();
            _this.tabToggle(tabNo);
          });

          _this.element.find('.sstc_button').on('click',function(){
            var tabNo = $(this).parent().index();
            _this.tabToggleMobile(tabNo);
          });

        },

        set:function(){
          var _this = this;
          _this.tabToggle(0);
          if(_this.options.full_tabs){
            _this.element.addClass('sst_full');
          }
        },

        tabToggle:function(tabNo){
          var _this = this;
          _this.element.find('.sst_list > li').eq(tabNo).addClass('active').siblings().removeClass('active');
          _this.element.find('.sst_content > li').eq(tabNo).show().siblings().hide();
        },

        tabToggleMobile:function(tabNo){
          var _this = this;
          //_this.element.find('.sst_content > li .sstc_button').removeClass('active');
          _this.element.find('.sst_content > li').eq(tabNo).find('.sstc_button').toggleClass('active');
          _this.element.find('.sst_content > li').eq(tabNo).toggleClass('active').find('.sstc_data').slideToggle(200);
        },
    };

    /*
     * Plugin wrapper, preventing against multiple instantiations and
     * return plugin instance.
     */
    $.fn[pluginName] = function (options) {
        var plugin = this.data(dataKey);
        if (plugin instanceof Plugin) {
            // if have options arguments, call plugin.init() again
            if (typeof options !== 'undefined') {
                plugin.init(options);
            }
        } else {
            plugin = new Plugin(this, options);
            this.data(dataKey, plugin);
        }
       return plugin;
    };
}(jQuery, window, document, undefined));
