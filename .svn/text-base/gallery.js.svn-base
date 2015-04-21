	
$(document).ready(function() {

	//Speed of the slideshow
	//var speed = 5000;
	
	//You have to specify width and height in #slider CSS properties
	//After that, the following script will set the width and height accordingly
	//$('#mask-gallery, #gallery li').width($('#slider').width());
		var lenLi = $('#gallery li').length;
		var numSlide;
		if(lenLi%4){
			numSlide = parseInt(lenLi/4+1);
		}
		else{
			numSlide = parseInt(lenLi/4);
		}
		//document.write($('#slider').width());
	$('#gallery').width($('#slider').width() * numSlide);
	$('#mask-gallery, #gallery li, #mask-excerpt, #excerpt li').height($('#slider').height());
	
	//Assign a timer, so it will run periodically
	//var run = setInterval('newsslider(0)', speed);	
	
	$('#gallery li:first, #excerpt li:first').addClass('selected');

	//Pause the slidershow with clearInterval
	/*$('#btn-pause').click(function () {
		clearInterval(run);
		return false;
	});*/

	//Continue the slideshow with setInterval
	/*$('#btn-play').click(function () {
		run = setInterval('newsslider(0)', speed);	
		return false;
	});*/
	
	//Next Slide by calling the function
	$('#btn-next').click(function () {
		$('#mask-gallery').scrollTo("+=520px","800");
		return false;
	});	

	//Previous slide by passing prev=1
	$('#btn-prev').click(function () {
		$('#mask-gallery').scrollTo("-=520px","800");	
		return false;
	});	
	
	$('#1').click(function(){
		$('#mask-gallery').scrollTo("0","800");
		return false;
		}
	)
	$('#2').click(function(){
		$('#mask-gallery').scrollTo(520*1+'px',"800");
		return false;
		}
	)
	$('#3').click(function(){
		$('#mask-gallery').scrollTo(520*2+'px',"800");
		return false;
		}
	)
	$('#4').click(function(){
		$('#mask-gallery').scrollTo(520*3+'px',"800");
		return false;
		}
	)
	$('#5').click(function(){
		$('#mask-gallery').scrollTo(520*4+'px',"800");
		return false;
		}
	)
	
	//Mouse over, pause it, on mouse out, resume the slider show
	/*$('#slider').hover(
	
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('newsslider(0)', speed);	
		}
	); 	*/
	
});


