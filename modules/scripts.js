$(function(){
	//back to top button (footer)
	$('#back_top a').click(function(e){
		e.preventDefault();
		$('body').animate({scrollTop : 0}, 800);
	});

	//
	$('.toggle_links').click(function(e){
		e.preventDefault();
		if($('span', this).hasClass('active')){
			$('span', this).removeClass('active');
		}else{
			$('span', this).addClass('active');
		}
	});

	//slideshows
	function slides(){
		$('.slideshow_container').animate({
			'left': '-100%'
		}, function(){
			$('.slide:last').after($('.slide:first'));
			$('.slideshow_container').css('left', 0);
		});
	}
	var slideshow =	setInterval(function(){ slides(); }, 3000);
	$('.slideshow').hover(function(){
		clearInterval(slideshow);
	},function(){
		slideshow = setInterval(function(){ slides(); }, 3000);
	});
});