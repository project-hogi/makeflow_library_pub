"use strict";

(function($) {

	$(document).on('appinit', function() {
		$('.search4 .s4-menu ul li a').on('click', function() {
			$(this).next('ul').toggleClass('on');
		})
	});

	$(document).on('ready', function() {
		var $lnb = $('.lnb');
		$lnb.each(function(){
			var $ul = $lnb.find('>ul');
			var $li = $ul.find('>li');

			$li.on('mouseenter',function(){
				$li.removeClass('on');
				$(this).addClass('on');
			});


		});
		var $listSearchbox = $('.list-search-box');
		$listSearchbox.each(function(){
			var $ul = $listSearchbox.find('>ul');
			var $li = $ul.find('>li');
			var $listSearch = $li.find('>.list-search');
			var $listSearchUl = $listSearch.find('>ul');
			var $listSearchLi = $listSearchUl.find('>li');
			var $listSearch2 = $listSearchLi.find('>.list-search2');

			$li.on('mouseenter',function(){
				$li.removeClass('on');
				$(this).addClass('on');
			});
			$listSearchLi.on('mouseenter',function(){
				$listSearchLi.removeClass('on');
				$(this).addClass('on');
			});
			$listSearch2.on('mouseleave',function(){
				$listSearchLi.removeClass('on');
			});

		});

		var $qna = $('.qna');
		$qna.each(function(){
			var $dt = $qna.find('>dt');
			var $dd = $qna.find('>dd');
			$dt.on('click',function(){
				$dd.stop().slideUp();
				$(this).next('dd').stop().slideToggle();
				// $dd.removeClass('on');
				// $(this).next('dd').addClass('on');
			});
		});

		var $changePw_btn = $('.change_pw');
		var $changePw_box = $('.change_pw-box');
		var $btn_detail_cancel = $('.btn-detail-cancel');
		$changePw_btn.on('click',function(e){
			event.preventDefault();
			$changePw_box.stop().fadeIn();
		});
		$changePw_box.each(function(){
			$btn_detail_cancel.on('click',function(){
				$changePw_box.stop().fadeOut();
			});
		});

		var $snb = $('.snb');
		var $account = $('.account');
		var $accountLogon = $('.account-logon');
		$snb.each(function(){

			$account.each(function(){
				var $submit = $account.find('.submit');
				$submit.on('click',function(e){
					e.preventDefault();
					$account.css('display','none');
					$accountLogon.css('display','block');
				});
			});
			$accountLogon.each(function(){
				var $btnLogout = $('.btn-logout');
				$btnLogout.on('click',function(e){
					e.preventDefault();
					$accountLogon.css('display','none');
					$account.css('display','block');
				});
			});
		});

		var $btnGreenRewrite = $('.btn-green-rewrite');
		var $btnGreenReport = $('.btn-green-report');
		var $btnGreenReview = $('.btn-green-review');
		var $btnGreenMarc = $('.btn-green-marc');
		var $popGreen = $('.pop-green');
		var $popGreenClose = $popGreen.find('.btn-detail-close2');
		var $popGreenRewrite = $('.pop-green-rewrite');
		var $popGreenReport = $('.pop-green-report');
		var $popGreenReview = $('.pop-green-review');
		var $popGreenMarc = $('.pop-green-marc');

		$popGreen.each(function(){
			$popGreenClose.on('click',function(){
				$popGreen.removeClass('on');
			});

			$btnGreenRewrite.on('click',function(){
				$popGreen.removeClass('on');
				$popGreenRewrite.addClass('on');
			});
			$btnGreenReport.on('click',function(){
				$popGreen.removeClass('on');
				$popGreenReport.addClass('on');
			});
			$btnGreenReview.on('click',function(){
				$popGreen.removeClass('on');
				$popGreenReview.addClass('on');
			});
			$btnGreenMarc.on('click',function(){
				$popGreen.removeClass('on');
				$popGreenMarc.addClass('on');
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