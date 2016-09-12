"use strict";

(function($) {

	$(document).on('appinit', function() {
		$('.search4 .s4-menu ul li a').on('click', function() {
			$(this).next('ul').toggleClass('on');
		})
	});

	$(document).on('ready', function() {
		$('.lnb').each(function(){
			var $lnb = $(this);
			var $ul = $lnb.find('>ul');
			var $li = $ul.find('>li');

			$li.on('mouseover',function(){
				$li.removeClass('on');
				$(this).addClass('on');
			});


		});

		$('.list-search-box').each(function(){
			var $listSearchbox = $(this);
			var $ul = $listSearchbox.find('>ul');
			var $li = $ul.find('>li');
			$li.find('>a').on('click',function(){
				$li.removeClass('on');
				$(this).parent('li').addClass('on');
			});

		});

		$('.qna').each(function(){
			var $qna = $(this);
			var $dt = $qna.find('>dt');
			var $dd = $qna.find('>dd');
			$dt.on('click',function(){
				$dd.removeClass('on');
				$(this).next('dd').addClass('on');
			});

		});


		/*
		$('.search4').each(function(){
			$('.search4 th:first-child').remove();
			$('.search4 td:first-child').remove();
		});
		*/

		
	});

})(jQuery);