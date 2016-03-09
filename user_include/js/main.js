var scrollingElements = {};
var cloudSpeed = 5;
var siteHeight;
	var siteWidth;
	var maxSpeed = 100;
	
function themightyscroller(speed){
	this.scrollspeed = speed;
	this.isScrolling = false;
	this.scrollnow = function($linkhref){
		if(!this.isScrolling)
			this.isScrolling = true;
			var divid = $linkhref.split('#')[1];
			//alert(divid);
			//console.log(scrollingElements);
			//alert(scrollingElements[divid].top);
			$("html,body").animate({
				'scrollTop':parseInt(scrollingElements[divid].top)+'px'
				},this.scrollspeed,function(){
									this.isScrolling = false;
									});
		}
	}
var bg = [];
function bgmanager(x,y,directionX,directionY,speedX,speedY){
	this.posX=x;
	this.posY=y;
	this.directionX=directionX;
	this.directionY = directionY;
	this.speedX = speedX;
	this.speedY = speedY;
	}
$(function(){
	siteHeight = $(document).outerHeight(true);
	siteWidth = $(document).outerWidth(true);
	//alert(siteWidth);
	$(".scrollDiv").each(function(index, element) {
		//console.log(element);
        var id = $(element).attr('id');
		scrollingElements[id]={
			top:$(element).offset().top
			}
    	});
	var sc = new themightyscroller(1000);	
	$(".nav li a").click(function(e) {
		sc.scrollnow($(this).attr('href'));
		return false;
		//console.log(sc);
        //alert($(this).attr("href").split('#')[1]);
    });
	//alert(siteWidth);
	//alert(siteHeight);
	//bg.push(0,1);
	if(outerWidth > '767'){	
		for(var i=0;i<10;i++){
			var randHeight = Math.floor(Math.random() * (siteHeight - 800)) + 1;
			var randWidth = Math.floor(Math.random() * (siteWidth - 300)) + 1;
			var randSpeedX = Math.floor(Math.random() * (cloudSpeed+5))+ 1;
			var randSpeedY = Math.floor(Math.random() * (cloudSpeed+5))+ 1;
			//var backgroundDiv = $(".bg").clone(true);
			var newDiv = $('.bg1:first').clone(true);
			//$('.bg1:first').remove();
			newDiv.css({
				position:'absolute',
				top:randHeight+'px',
				left:randWidth+'px',
				display:'block'
				})
			$("#bgWrapper").append(newDiv);
			var dx = Math.pow(-1,i);
			bg.push(new bgmanager(randWidth,randHeight,dx,dx,randSpeedX,randSpeedY));
			}
		$('.bg1:first').remove();
	
	/*$(document).scroll(function(e) {
        //alert($(this).scrollTop());
    });	*/
	//now i have added all the divs to the array list
	
	//lets get them to their respective position
		setInterval(moveClouds,100);
	}
	//console.log(bg);
	});
	function moveClouds(){
		var i=0;
		$(".bg1").each(function(index, element) {
			var leftt = parseInt($(this).css('left'));
			var topp = parseInt($(this).css('top'));
			bg[i].posX = leftt;
			bg[i].posY = topp;
			//alert(bg[i+1].posX);
			if(bg[i].posX <= 0)
				bg[i].directionX = 1;
			else if(bg[i].posX >= siteWidth - 410)
				bg[i].directionX = -1;
				
			if(bg[i].posY <= -100)
				bg[i].directionY = 1;
			else if(bg[i].posY >= (siteHeight-510))
				bg[i].directionY = -1;	
			
			$(this).css({
				'left':parseInt(bg[i].posX+(bg[i].speedX*bg[i].directionX))+'px',
				'top':parseInt(bg[i].posY+(bg[i].speedY*bg[i].directionY))+'px',
				});
			i++;	
        	});
			}