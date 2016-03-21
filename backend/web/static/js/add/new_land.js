// JavaScript Document

$(function(){
	//iframe高度的设置
	initialHeight();

	$(window).resize(function() {
		initialHeight();
	});

	function initialHeight(){
		var viewHeight = $(window).height() - $(".navbar").height();
		$(".main-content").height(viewHeight);	
	}


	//mini聊天记录滚动条
	$('#inner-content-div').slimScroll({
        height: '234px'
    });

    $("#small-chat").click(function() {
    	$(".small-chat-box").toggle();
    	$(".open-small-chat i").toggleClass("fa-remove");
    });

})

