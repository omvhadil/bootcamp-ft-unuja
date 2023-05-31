jQuery(window).on("load",function() {
	"use strict";
	// bootstrap wysihtml5
	$('.textarea_editor').wysihtml5({
		html: true
	});
});
jQuery(window).on("load resize", function () {
	// custom scrollbar
	$(".customscroll").mCustomScrollbar({
		theme:"dark-2",
		scrollInertia: 300,
		autoExpandScrollbar: true,
		advanced: { autoExpandHorizontalScroll: true }
	});
});
jQuery(document).ready(function(){
	"use strict";
	// Background Image
	jQuery(".bg_img").each( function ( i, elem ) {
		var img = jQuery( elem );
		jQuery(this).hide();
		jQuery(this).parent().css( {
			background: "url(" + img.attr( "src" ) + ") no-repeat center center",
		});
	});

	/*==============================================================*/
	// Image to svg convert start
	/*==============================================================*/
	jQuery('img.svg').each(function() {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		jQuery.get(imgURL, function(data) {
			var $svg = jQuery(data).find('svg');
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			$svg = $svg.removeAttr('xmlns:a');
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}
			$img.replaceWith($svg);
		}, 'xml');
	});
	/*==============================================================*/
	// Image to svg convert end
	/*==============================================================*/

	// click to scroll
	// $('.collapse-box').on('shown.bs.collapse', function () {
	// 	$(".customscroll").mCustomScrollbar("scrollTo",$(this));
	// });

	// code split
	var entityMap = {
		"&": "&amp;",
		"<": "&lt;",
		">": "&gt;",
		'"': '&quot;',
		"'": '&#39;',
		"/": '&#x2F;'
	};
	function escapeHtml(string) {
		return String(string).replace(/[&<>"'\/]/g, function (s) {
			return entityMap[s];
		});
	}
	//document.addEventListener("DOMContentLoaded", init, false);
	window.onload = function init()
	{
		var codeblock = document.querySelectorAll("pre code");
		if(codeblock.length)
		{
			for(var i=0, len=codeblock.length; i<len; i++)
			{
				var dom = codeblock[i];
				var html = dom.innerHTML;
				html = escapeHtml(html);
				dom.innerHTML = html;
			}
			$('pre code').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		}
	}

	// Search Icon
	$("#filter_input").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#filter_list .fa-hover").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});

	// custom select 2 init
	$('.custom-select2').select2();

	// Bootstrap Select
	//$('.selectpicker').selectpicker();

	// tooltip init
	$('[data-toggle="tooltip"]').tooltip()

	// popover init
	$('[data-toggle="popover"]').popover()

	// form-control on focus add class
	$(".form-control").on('focus',function(){
		$(this).parent().addClass("focus");
	})
	$(".form-control").on('focusout',function(){
		$(this).parent().removeClass("focus");
	})

	// date picker
	$('.date-picker').datepicker({
		language: 'en',
		autoClose: true,
		dateFormat: 'dd MM yyyy',
	});
	$('.month-picker').datepicker({
		language: 'en',
		minView: 'months',
		view: 'months',
		autoClose: true,
		dateFormat: 'MM yyyy',
	});
