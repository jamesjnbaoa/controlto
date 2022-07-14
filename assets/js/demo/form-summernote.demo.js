/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/

var handleSummernote = function() {
	$('.summernote').summernote({
		placeholder: 'Hi, this is summernote. Please, write text here! Super simple WYSIWYG editor on Bootstrap',
		height: $(window).height() - $('.summernote').offset().top - 80
	});
};

var FormSummernote = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleSummernote();
		}
	};
}();