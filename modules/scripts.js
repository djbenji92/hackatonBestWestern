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

	$('#post_assets li').click(function(){
		var symb = $('span', this).attr('class').substring(6),
			form = $(this).closest('.write_forms').find('textarea');
		switch(symb){
			case "italic": form.text(form.text() + "<i> </i>"); break;
			case "bold": form.text(form.text() + "<b> </b>"); break;
			case "underline": form.text(form.text() + "<u> </u>"); break;
			case "header": form.text(form.text() + "<h5> </h5>"); break;
			case "list-ul": form.text(form.text() + "<ul> </ul>"); break;
			case "link": form.text(form.text() + '<a href="#"> </a>'); break;
			case "align-left": form.text(form.text() + '<p style="text-align:left;"> </p>'); break;
			case "align-center": form.text(form.text() + '<p style="text-align:center;"> </p>'); break;
			default: break;
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