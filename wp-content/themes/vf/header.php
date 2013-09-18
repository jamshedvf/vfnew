<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
<!--<link href="css/bootstrap.css" rel="stylesheet" media="all">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="all">-->
<link href="<?php echo get_template_directory_uri(); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" />
<!--<script src="js/jquery.js"></script>-->
<!--<script src="js/bootstrap.js"></script>-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.reveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jcarousellite.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.quicksand.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<!-- Optional -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mousewheel.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>

<script type="text/javascript"> 

	$(window).ready(function(){
	$('#phpsubbox3 ul li a img').each(function(){
	//alert('aa');	
		
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});	
$('#phpsubbox4 ul li a img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});	
$('#rorsubbox3 ul li a img').each(function(){
	//alert('aa');	
		
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});	
$('#rorsubbox4 ul li a img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});	
$('#iossubbox1 ul li a img').each(function(){
	//alert('aa');	
		
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});	
$('#iossubbox2 ul li a img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});									
$('#androidsubbox1 ul li a img').each(function(){
	//alert('aa');	
		
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});	
$('#androidsubbox2 ul li a img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":this.width,"height":this.height});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});															
	// Fade image 
		$('#phpsubbox3 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})
	   $('#phpsubbox4 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})	
		$('#rorsubbox3 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})
	   $('#rorsubbox4 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})
		$('#iossubbox1 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})
	   $('#iossubbox2 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})		
		$('#androidsubbox1 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})
	   $('#androidsubbox2 ul li a img').mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 1000);
		})	
		$('.img_grayscale').mouseout(function(){
			$(this).stop().animate({opacity:0}, 1000);
		});		
	});		
	
	// Grayscale w canvas method
	function grayscale(src){
        var canvas = document.createElement('canvas');
		var ctx = canvas.getContext('2d');
        var imgObj = new Image();
		imgObj.src = src;
		canvas.width = imgObj.width;
		canvas.height = imgObj.height; 
		ctx.drawImage(imgObj, 0, 0); 
		var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
		for(var y = 0; y < imgPixels.height; y++){
			for(var x = 0; x < imgPixels.width; x++){
				var i = (y * 4) * imgPixels.width + x * 4;
				var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
				imgPixels.data[i] = avg; 
				imgPixels.data[i + 1] = avg; 
				imgPixels.data[i + 2] = avg;
			}
		}
		ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
		return canvas.toDataURL();
    }
	    
</script> 
  <script>
$(function() {

$( "#accordion" ).accordion({
collapsible: true
});
});
</script>
 <script type="text/javascript">
 $(document).ready(function(e) {
	
    $("#rorlink").click(function(){
	//alert('ror');	
	$("#rorlink").addClass('rorselected');
	$("#phplink").removeClass('phpselected');
		
		});
	$("#phplink").click(function(){
	$("#phplink").addClass('phpselected');
	$("#rorlink").removeClass('rorselected');
		
		});	
	$("#ioslink").click(function(){
	$("#ioslink").addClass('iosselected');
	$("#androidlink").removeClass('androidselected');
	$("#crossplink").removeClass('crossselected');
		
		});		
	$("#androidlink").click(function(){
	$("#androidlink").addClass('androidselected');
	$("#ioslink").removeClass('iosselected');
	$("#crossplink").removeClass('crossselected');
		
		});	
	$("#crossplink").click(function(){
	$("#crossplink").addClass('crossselected');
	$("#ioslink").removeClass('iosselected');
	$("#androidlink").removeClass('androidselected');
		
		});			
});
/*
  $(window).on('scroll',function() {
    var scrolltop = $(this).scrollTop();

    if(scrolltop >= 215) {
      $('.hometopmenu').fadeIn(250);
	   $('.hometopmenu').animate({top: "0px"}, 1500);
	   
	  
    }
    
    else if(scrolltop <= 210) {
	//alert('ok');	
      $('.hometopmenu').fadeOut(250).hide();
    }
  });
});*/
$(window).scroll(function(){
		var previousScroll = 0;
		//opacitys = 0;
		//alert($(this).scrollTop());
		var a = 0;
		var opacitys = 0;
		var currentScroll = $(this).scrollTop();
		if (currentScroll > previousScroll){
			//$('#div').animate({'background-postion': '+=10px 0'}, 500);
		} else { }
		currentScroll = parseFloat(currentScroll);
		if(currentScroll > 662)
		{
			$('.hometopmenu').animate({top:0+'px'}, 0);
		} else {
			currentScrolls = (662 - currentScroll);
			
			if(currentScroll <= 99){
				
				if(currentScroll <= 9)
				{
					opacitys = ('0.0'+parseFloat(currentScroll));
				} else {
					opacitys = ('0.'+parseFloat(currentScroll));
				}
				//console.log('0.'+parseFloat(currentScroll) + 'test:' + currentScroll);
				 //$('.hometopmenu').animate({top: "0px"}, 1500);
			} else {
				opacitys = 1;
				//$('.hometopmenu').animate({top: "0px"}, 500);
				//exit();
			}		
			$('.hometopmenu').animate({top:currentScrolls+'px'}, 0).css({ opacity: opacitys });
		}
		
	});
</script>
<script language="javascript">

$(function() {
	var isrunning=false;
	$('.phpbox > img').mouseover(function() {
	
	  $("#indexheader" ).animate({backgroundColor: "#b0bde0"}, 1000);
	   $(".homeheader" ).animate({backgroundColor: "#b0bde0"}, 1000);
	   //(".homeheader").fadeOut(1500).hide(1500);
	  $(".phpheader").fadeIn(1500).show(1500);
	  
	  $(".homelogobox >img.homelogo").fadeOut(1500).hide(1500);
	  $(".homelogobox >img.phplogo").fadeIn(3500).show(3500);
	  
	  $(".phpbox").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		 $("#rorsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox2").show(1000,"easeInOutCirc").fadeIn(1000); 
	  });
	  
	  $(".androidbox").hide(1000).fadeOut(1000,"easeInOutCirc", function(){
	     $("#rorsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 	  
		$("#phpsubbox4").show(1000,"easeInOutCirc").fadeIn(1000,function(){
		   	
		
	});  
		  
	  });
	
	  
	 $(".iosbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
		  $("#rorsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
	   $("#phpsubbox3").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	   
	   });
		 
	 });
	 
	  $(".rorbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
	    $("#rorsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 	  
		$("#phpsubbox1").show(1000, "easeInOutCirc").fadeIn(1000,function(){
        
		});
	  });
	  $("#phpsubbox2 img").css({"top":'18.0em',"left":'-10.5em', "height":'', "width":''});  
	  $("#phpsubbox2 img").delay(2000).animate({top:'1.0em', left:'5.0em', height:'126',width:'239'},700,'swing',function(){
	  //$("#phpsubbox2 img").delay(100).animate({left:'5.0em'},700,'swing',function(){
		//});
			
	  });
	     $("#phpsubbox1 ul li").css({"right":140,"top":'',"left":''});
		 $("#phpsubbox1 ul li").delay(3500).each(function(i){
         if(i==0)
		 {
			
		$(this).delay(100).animate({top:"-258px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-688px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(600).animate({top:"-258px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-485px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1200).animate({top:"-258px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-285px"},300,'swing'); 	 
		});	
		}
		if(i==3)
		{
		$(this).delay(1800).animate({top:"-150px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-688px"},300,'swing'); 	 
		});	
			} 
		if(i==4)
		{
		$(this).delay(2400).animate({top:"-150px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-488px"},300,'swing'); 	 
		});	
		}
		if(i==5)
		{
		$(this).delay(3000).animate({top:"-150px"},300, function(){
		 $(this).delay(100).animate({left:"-288px"},300,'swing'); 	 
		});	
			} 		 			
		 else{
			// return false;
			 }
           
		 });
	    $("#phpsubbox3 ul li").css({"top":'',"left":''});	
	    $("#phpsubbox3 ul li").delay(7500).each(function(i){
         if(i==0)
		 {
			
		$(this).delay(100).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-400px"},300,'linear'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-250px"},300,'linear'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1700).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-100px"},300,'linear'); 	 
		});	
		}
		
		  
		 });
	 $("#phpsubbox4 ul li").css({"top":'',"left":''});		 	
	 $("#phpsubbox4 ul li").delay(9500).each(function(i){
         if(i==0)
		 {
			
		$(this).delay(100).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"400px"},300); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"250px"},300,'linear'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1900).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"100px"},300,'linear'); 	 
		});	
		}
		
		  
		 });	
	 
	 
	 	return false;
    });
	
	 
	
	$('.rorbox > img').mouseover(function() {	
	 isrunning=false;	
	  isrunning=true;
	   if(isrunning==true){
	  $("#indexheader" ).animate({backgroundColor: "#ce7480"}, 1000);
	  $(".homeheader" ).animate({backgroundColor: "#ce7480"}, 1000);
	  // $(".phpheader").hide(100);  
	   $(".rorheader").fadeIn(1500).show(1500);
	   $(".homelogo").fadeOut(1500).hide(1500);
	  $(".rorlogo").fadeIn(3500).show(3500);
	 
	 
	 $(".rorbox").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		 $("#phpsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#rorsubbox1").show(1000,"easeInOutCirc").fadeIn(1000); 
	  });
	  
	  $(".phpbox").hide(1000).fadeOut(1000,"easeInOutCirc", function(){
		  $("#phpsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		$("#rorsubbox2").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	});		  
	  });
	  
	 $(".iosbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
	     $("#phpsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 	 
	   $("#rorsubbox3").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	   
	   });
		 
	 });
	 
	  $(".androidbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
		$("#phpsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);   
		$("#rorsubbox4").show(1000, "easeInOutCirc").fadeIn(1000,function(){
        
		});
	  });  
	$("#rorsubbox1 img").css({"bottom":'-140px',"right":'-125px', "height":'', "width":''});  
	$("#rorsubbox1 img").delay(2000).animate({bottom:'5.0em', right:'11.0em', height:'160',width:'152'},700,'swing',function(){
	  			
	  });
	$("#rorsubbox2 ul li").css({"top":'',"left":''}); 
    $("#rorsubbox2 ul li").delay(2800).each(function(i){
         if(i==0)
		 {
			
		$(this).delay(100).animate({top:"-258px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"338px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(600).animate({top:"-258px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"238px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1200).animate({top:"-258px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"138px"},300,'swing'); 	 
		});	
		}
	if(i==3)
		{
		$(this).delay(1800).animate({top:"-150px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"338px"},300,'swing'); 	 
		});	
			} 
		if(i==4)
		{
		$(this).delay(2400).animate({top:"-150px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"238px"},300,'swing'); 	 
		});	
		}
		if(i==5)
		{
		$(this).delay(3000).animate({top:"-150px"},300, function(){
		 $(this).delay(100).animate({left:"138px"},300,'swing'); 	 
		});	
			} 		 			
		 else{
			// return false;
			 }
           
		 });
	
	 $("#rorsubbox3 ul li").css({"top":'',"left":''}); 
	  $("#rorsubbox3 ul li").delay(6500).each(function(i){
         if(i==0)
		 {
			
		$(this).delay(100).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-400px"},300,'linear'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-250px"},300,'linear'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1700).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-100px"},300,'linear'); 	 
		});	
		}
		
		
		  
		 });
	$("#rorsubbox4 ul li").css({"top":'',"left":''}); 	 	
	 $("#rorsubbox4 ul li").delay(8500).each(function(i){
         if(i==0)
		 {
			
		$(this).delay(100).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"400px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"250px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1900).animate({top:"144px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"100px"},300,'swing'); 	 
		});	
		}
		
		  
		 });	
	   }
	   else{
		   return false;
		   }
	return false;
    });
	$('.iosbox > img').mouseover(function() {
		isrunning=false;	
	  isrunning=true;
	   if(isrunning==true){
	  $("#indexheader" ).animate({backgroundColor: "#d9d9d9"}, 1000);
	  $(".homeheader" ).animate({backgroundColor: "#d9d9d9"}, 1000);
	  $(".phpheader").hide(100);  
	   $(".rorheader").hide(100);  
	   $(".androidheader").hide(100); 
       $(".iosheader").fadeIn(1500).show(1500);
	   $(".homelogobox >img.homelogo").fadeOut(1500).hide(1500);
	  $(".homelogobox >img.ioslogo").fadeIn(3500).show(3500);
	  
	  $(".rorbox").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		  $("#rorsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox1").show(1000,"easeInOutCirc").fadeIn(1000); 
	  });
	  
	  $(".phpbox").hide(1000).fadeOut(1000,"easeInOutCirc", function(){
		 $("#rorsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000);   
		$("#iossubbox2").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	});		  
	  });
	  
	 $(".iosbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
	 $("#rorsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 	 
	   $("#iossubbox3").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	   
	   });
		 
	 });
	 
	  $(".androidbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
		 $("#rorsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);   
		$("#iossubbox4").show(1000, "easeInOutCirc").fadeIn(1000,function(){
        
		});
	  });  
	$("#iossubbox3 img").css({"top":'-70px',"right":'-53px', "height":'', "width":''});    
	$("#iossubbox3 img").delay(2000).animate({top:'5.0em', right:'12.0em', height:'168',width:'138'},700,'swing',function(){
	  			
});
    $("#iossubbox1 ul li").css({"top":'',"left":''}); 	 	
	$("#iossubbox1 ul li").delay(2800).each(function(i){
       if(i==0)
		 {
			
		$(this).delay(100).animate({top:"-190px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-400px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"-190px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-250px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1500).animate({top:"-190px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-100px"},300,'swing'); 	 
		});	
		}
		
		  
		 });	
	
	  $("#iossubbox2 ul li").css({"top":'',"left":''}); 	 	
	  $("#iossubbox2 ul li").delay(5000).each(function(i){
        if(i==0)
		 {
			
		$(this).delay(100).animate({top:"-220px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"400px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"-220px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"250px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1900).animate({top:"-220px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"100px"},300,'swing'); 	 
		});	
		}
		
		  
		 }); 
		$("#iossubbox4 ul li").css({"top":'',"left":''}); 	 	 	
		$("#iossubbox4 ul li").delay(7800).each(function(i){
          if(i==0)
		 {
			
		$(this).delay(100).animate({top:"258px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"338px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(600).animate({top:"258px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"238px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1200).animate({top:"258px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"138px"},300,'swing'); 	 
		});	
		}
	if(i==3)
		{
		$(this).delay(1800).animate({top:"150px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"338px"},300,'swing'); 	 
		});	
			} 
		if(i==4)
		{
		$(this).delay(2400).animate({top:"150px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"238px"},300,'swing'); 	 
		});	
		}
		if(i==5)
		{
		$(this).delay(3000).animate({top:"150px"},300,'easeOutBounce', function(){
		 $(this).delay(100).animate({left:"138px"},300,'swing'); 	 
		});	
			} 		 			
		 else{
			// return false;
			 }
           
		 });
		 
	   }
	   else{ 
	   return false;
	   }
	return false;
    });
	
	$('.androidbox > img').mouseover(function() {
		isrunning=false;	
	  isrunning=true;
	   if(isrunning==true){
	  $("#indexheader" ).animate({backgroundColor: "#a1b832"}, 1000);
	  $(".homeheader" ).animate({backgroundColor: "#a1b832"}, 1000);
	  
     $(".androidheader").fadeIn(1500).show(1500);
	   $(".homelogo").fadeOut(1500).hide(1500);
	  $(".androidlogo").fadeIn(3500).show(3500);
	  
	 $(".rorbox").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		  $("#rorsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox1").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#androidsubbox1").show(1000,"easeInOutCirc").fadeIn(1000); 
	  });
	  
	  $(".phpbox").hide(1000).fadeOut(1000,"easeInOutCirc", function(){
		   $("#rorsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox2").hide(1000,"easeInOutCirc").fadeOut(1000); 
		$("#androidsubbox2").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	});		  
	  });
	  
	 $(".iosbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
	 $("#rorsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox3").hide(1000,"easeInOutCirc").fadeOut(1000); 	 
	   $("#androidsubbox3").show(1000,"easeInOutCirc").fadeIn(1000,function(){
	   
	   });
		 
	 });
	 
	  $(".androidbox").hide(1000, "easeInOutCirc").fadeOut(1000, function(){
		 $("#rorsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#phpsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000); 
		 $("#iossubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);   
		$("#androidsubbox4").show(1000, "easeInOutCirc").fadeIn(1000,function(){
        
		});
	  });  
	$("#androidsubbox4 img").css({"top":'-123px',"left":'-63px', "height":'', "width":''});    
	$("#androidsubbox4 img").delay(2000).animate({top:'5.0em', left:'11.0em', height:'168',width:'138'},700,'swing',function(){
	  			
});

    $("#androidsubbox3 ul li").css({"top":'',"left":''}); 	 	
    $("#androidsubbox3 ul li").delay(2800).each(function(i){
          if(i==0)
		 {
			
		$(this).delay(100).animate({top:"208px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-380px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(600).animate({top:"208px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-260px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1200).animate({top:"208px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-140px"},300,'swing'); 	 
		});	
		}
	if(i==3)
		{
		$(this).delay(1800).animate({top:"110px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-380px"},300,'swing'); 	 
		});	
			} 
		if(i==4)
		{
		$(this).delay(2400).animate({top:"110px"},300,'easeOutBounce', function(){
		    $(this).delay(100).animate({left:"-260px"},300,'swing'); 	 
		});	
		}
		if(i==5)
		{
		$(this).delay(3000).animate({top:"110px"},300,'easeOutBounce', function(){
		 $(this).delay(100).animate({left:"-140px"},300,'swing'); 	 
		});	
			} 		 			
		 else{
			// return false;
			 }
           
		 });
		 
	$("#androidsubbox1 ul li").css({"top":'',"left":''}); 	 
	$("#androidsubbox1 ul li").delay(6500).each(function(i){
       if(i==0)
		 {
			
		$(this).delay(100).animate({top:"-170px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-400px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"-170px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-250px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1500).animate({top:"-170px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"-100px"},300,'swing'); 	 
		});	
		}
		
		  
		 });	
	
	  $("#androidsubbox2 ul li").css({"top":'',"left":''}); 
	  $("#androidsubbox2 ul li").delay(8500).each(function(i){
        if(i==0)
		 {
			
		$(this).delay(100).animate({top:"-220px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"400px"},300,'swing'); 	 
		});
		
		 }
		if(i==1)
		{
		$(this).delay(1000).animate({top:"-220px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"250px"},300,'swing'); 	 
		});	
		} 
		if(i==2)
		{
		$(this).delay(1900).animate({top:"-220px"},300,'swing', function(){
		    $(this).delay(100).animate({left:"100px"},300,'swing'); 	 
		});	
		}
		
		  
		 }); 
		 	
		
	 
	   }else{
		   return false;
		   }
	 
	return false;
    });
	
$("#indexheader").mouseover(function(e) {
	var pagewidth=$( window ).width();
    var leftwidth=pagewidth-990;
	var halfleftwidth=leftwidth/2;
   // alert(leftwidth);
	if(e.pageX <halfleftwidth || e.pageX>990 + halfleftwidth  )
	{
 $("#indexheader" ).animate({backgroundColor: "#14A8D6"}, 1000);
	 $(".homeheader" ).animate({backgroundColor: "#14A8D6"}, 1000); 
	  
    $(".homeheader").show(100);
	$(".phplogo").fadeOut(500).hide(500);
	$(".ioslogo").fadeOut(500).hide(500);
	$(".androidlogo").fadeOut(500).hide(500);
	$(".rorlogo").fadeOut(500).hide(500);
	$(".homelogo").fadeIn(1500).show(1500);  
	$("#phpsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#rorsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#iossubbox1").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#androidsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000);
	$(".rorbox").delay(100).show(2000,"easeInOutCirc").fadeIn(2000);	
	$("#phpsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#rorsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#iossubbox2").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#androidsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000);
	$(".phpbox").delay(100).show(2000,"easeInOutCirc").fadeIn(2000);
	$("#phpsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#rorsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#iossubbox3").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#androidsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000);
	$(".iosbox").delay(100).show(2000,"easeInOutCirc").fadeIn(2000);	
	$("#phpsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#rorsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#iossubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);	
	$("#androidsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000);
	$(".androidbox").delay(100).show(2000,"easeInOutCirc").fadeIn(2000);	
	//alert(e.pageX);		
		}
 // 
   
 	
			});					
	//////////////////////////PHP  Main logo mouseover////////////////		
	 $(".phplogo").mouseover(function() {
	   
	 $("#indexheader" ).animate({backgroundColor: "#14A8D6"}, 1000);
	 $(".homeheader" ).animate({backgroundColor: "#14A8D6"}, 1000); 
	 
	  //$(".rorheader").hide(100);  
	 // $(".androidheader").hide(100); 
     // $(".iosheader").hide(100);  
	  $(".homeheader").show(100);  
	  
	$(".phplogo").fadeOut(1500).hide(1500);
	$(".homelogo").fadeIn(3500).show(3500); 
	 
	$("#phpsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		$(".rorbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		});	 
	
	
	$("#phpsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".phpbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
	  
		} );	 
    
		
	$("#phpsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".iosbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});	 
	
	
	$("#phpsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".androidbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});
	
	   
			});
			
	//////////////////////////ror logo mouseover////////////////		
	$(".rorlogo").mouseover(function() {
	isrunning=false;	
	  isrunning=true;
	   if(isrunning==true){	 
	 $("#indexheader" ).animate({backgroundColor: "#14A8D6"}, 1000);
	 $(".homeheader" ).animate({backgroundColor: "#14A8D6"}, 1000); 
	 
	  //$(".phpheader").hide(100);  
	  //$(".androidheader").hide(100); 
      //$(".iosheader").hide(100);  
	  $(".homeheader").show(100);  
	  
	$(".rorlogo").fadeOut(1500).hide(1500);
	$(".homelogo").fadeIn(3500).show(3500); 
	  	 
	$("#rorsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		$(".rorbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		});	 
	
	
	$("#rorsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".phpbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
	  
		} );	 
    
		
	$("#rorsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".iosbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});	 
	
	
	$("#rorsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".androidbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});
	
	   }
	   else{
		   return false;
		   }
			});	
			
	//////////////////////////ios logo mouseover////////////////		
	$(".ioslogo").mouseover(function() {
	isrunning=false;	
	  isrunning=true;
	   if(isrunning==true){	 
	 $("#indexheader" ).animate({backgroundColor: "#14A8D6"}, 1000);
	 $(".homeheader" ).animate({backgroundColor: "#14A8D6"}, 1000); 
	  
    //$(".homeheader").show(100);  
	  
	$(".ioslogo").fadeOut(1500).hide(1500);
	$(".homelogo").fadeIn(3500).show(3500); 
	  	 
	$("#iossubbox1").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		$(".rorbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		});	 
	
	
	$("#iossubbox2").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".phpbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
	  
		} );	 
    
		
	$("#iossubbox3").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".iosbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});	 
	
	
	$("#iossubbox4").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".androidbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});
	   }
	   else{
		   return false;
		   }
			});				
	//////////////////////////Android logo mouseover////////////////		
	$(".androidlogo").mouseover(function() {
		isrunning=false;	
	  isrunning=true;
	   if(isrunning==true){ 
	 $("#indexheader" ).animate({backgroundColor: "#14A8D6"}, 1000);
	 $(".homeheader" ).animate({backgroundColor: "#14A8D6"}, 1000); 

	  $(".homeheader").show(100);  
	  
	$(".androidlogo").fadeOut(1500).hide(1500);
	$(".homelogo").fadeIn(3500).show(3500); 
	  	 
	$("#androidsubbox1").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
		$(".rorbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		});	 
	
	
	$("#androidsubbox2").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".phpbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
	  
		} );	 
    
		
	$("#androidsubbox3").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".iosbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});	 
	
	
	$("#androidsubbox4").hide(1000,"easeInOutCirc").fadeOut(1000 , function(){
	$(".androidbox").delay(100).show(1000,"easeInOutCirc").fadeIn(1000); 
		
		});
	
	   }
	   else{
		   return false;
		   }
			});							
	
	});
</script>
<script type="text/ecmascript">

$(function() {
    $(".slide-imagest").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
		mouseWheel: true,
		auto: 5000,
        speed: 500,
		visible: 1
    });
});
$(function() {
    $(".slide-images-2").jCarouselLite({
		btnNext: ".next-client",
        btnPrev: ".prev-client",
		mouseWheel: true,
		auto: 5000,
        speed: 1000,
		visible: 7
    });
});
$(function() {
    $(".pf-slide-images").jCarouselLite({
		btnNext: ".pf-slider-next",
        btnPrev: ".pf-slider-back",
		mouseWheel: true,
		auto: 5000,
        speed: 1000,
		visible: 1
    });
});
$(function() {
$.fn.scrollTo = function( target, options, callback ){
  if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
  var settings = $.extend({
    scrollTarget  : target,
    offsetTop     : 50,
    duration      : 500,
    easing        : 'swing'
  }, options);
  return this.each(function(){
    var scrollPane = $(this);
    var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
    var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - parseInt(settings.offsetTop);
    scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
      if (typeof callback == 'function') { callback.call(this); }
    });
  });
}
	
    $(".pf-detail-slider").jCarouselLite({
		btnNext: ".pf-detail-slider-next",
        btnPrev: ".pf-detail-slider-back",
		mouseWheel: true,
		auto: 5000,
        speed: 1000,
		visible: 1
    });
});
</script>
<script type="text/javascript">
<!--
$(document).ready(function() {

if(document.location=='http://jklabz.com/vfnew/?page_id=6#android')
{
//alert(document.location);	
switch_tabs($('.mtab'));

//alert('');
//$("#android").focus();
$('#androidlink').click();
$('html, body').animate({
	scrollTop: $("#android").offset().top
}, 1000);
	}
else if(document.location=='http://jklabz.com/vfnew/?page_id=6#ios')

  {
  switch_tabs($('.mtab'));	
  $('#ioslink').click();
  $('html, body').animate({
	scrollTop: $("#ios").offset().top
}, 1000);
  }	
  else{
	  switch_tabs($('.defaulttab'));
	  }

	
	$('.tabs a').click(function(){
		switch_tabs($(this));
	});
 
	
 
});
function switch_tabs(obj)
{
	$('.tab-content').hide();
	$('.tabs a').removeClass("selected");
	var id = obj.attr("rel");
 
	$('#'+id).show();
	obj.addClass("selected");
}
//-->
</script>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
if ( is_home() ) {

?>	
<!-- header  Start-->
	
	     
<div id="header">
<div id="indexheader">
<div id="headerinner">

<div class="innerlayout">
<div class="headerinner homeheader">
<div class="rorbox"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-main-icon.png"></div>
<div class="whiteboxtop"></div>
<div class="phpbox"><img src="<?php echo get_template_directory_uri(); ?>/images/php-main-icon.png"></div>
<div class="iosbox"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-main-icon.png"></div>
<div class="whiteboxbottom"></div>
<div class="androidbox"><img src="<?php echo get_template_directory_uri(); ?>/images/android-main-icon.png"></div>

</div>
<div class="headerinner phpheader">
<div id="phpsubbox1">
<ul>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/php-s-1.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/php-s-2.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/php-s-3.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/php-s-4.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/php-s-5.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/php-s-6.png"></a></li>
</ul>
</div>
<div class="whiteboxtop"></div>
<div id="phpsubbox2"><img src="<?php echo get_template_directory_uri(); ?>/images/php-color-logo.png"></div>
<div id="phpsubbox3">
<ul>
  <?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes',
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'php'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>

</div>
<div class="whiteboxbottom"></div>
<div id="phpsubbox4">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes','offset' => 3, 
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'php'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>

</div>

</div>

<div class="headerinner rorheader">
<div id="rorsubbox1"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-main-icon.png"></div>
<div class="whiteboxtop"></div>
<div id="rorsubbox2">
<ul>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ror' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-s-1.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-s-2.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-s-3.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-s-4.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-s-5.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#php' ) ); ?>" class="wordpressclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ror-s-6.png"></a></li>
</ul>
</div>
<div id="rorsubbox3">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes',
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'ror'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>
</div>
<div class="whiteboxbottom"></div>
<div id="rorsubbox4">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes','offset' => 3, 
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'ror'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>
</div>

</div>
<div class="headerinner iosheader">
<div id="iossubbox1">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes', 
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'ios'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>

</div>
<div class="whiteboxtop"></div>
<div id="iossubbox2">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes','offset' => 3, 
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'ios'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>
</div>
<div id="iossubbox3"><img src="<?php echo get_template_directory_uri(); ?>/images/ios_ios-icon.png" ></div>
<div class="whiteboxbottom"></div>
<div id="iossubbox4">
<ul>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ios' ) ); ?>" class="iosclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-s-1.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ios' ) ); ?>" class="iosclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-s-2.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ios' ) ); ?>" class="iosclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-s-3.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ios' ) ); ?>" class="iosclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-s-4.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ios' ) ); ?>" class="iosclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-s-5.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#ios' ) ); ?>" class="iosclick"><img src="<?php echo get_template_directory_uri(); ?>/images/ios-s-6.png"></a></li>
</ul>
</div>

</div>
<div class="headerinner androidheader">
<div id="androidsubbox1">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes', 
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'android'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>
</div>
<div class="whiteboxtop"></div>
<div id="androidsubbox2">
<ul>
<?php

// The Query
$query = new WP_Query( array('post_type'=>'portfolio', 'order'=>'DESC', 'posts_per_page'=>'3','featured'=>'yes','offset' => 3, 
        'tax_query' => array(
            'relation' => 'and',
            array(
                'taxonomy' => 'language',
                'field' => 'slug',
                'terms' => 'android'
                )
        )));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	// $my_list = get('home_image');
    
	
?> 
<li><a href="<?php echo the_permalink();?>"><?php echo get_image('home_image');?></a></li>
         
<?php
	
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>           
</ul>

</div>
<div id="androidsubbox3">
<ul>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#android' ) ); ?>" class="androidclick"><img src="<?php echo get_template_directory_uri(); ?>/images/android-s-1.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#android' ) ); ?>" class="androidclick"><img src="<?php echo get_template_directory_uri(); ?>/images/android-s-2.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#android' ) ); ?>" class="androidclick"><img src="<?php echo get_template_directory_uri(); ?>/images/android-s-3.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#android' ) ); ?>" class="androidclick"><img src="<?php echo get_template_directory_uri(); ?>/images/android-s-4.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#android' ) ); ?>" class="androidclick"><img src="<?php echo get_template_directory_uri(); ?>/images/android-s-5.png"></a></li>
<li><a href="<?php echo esc_url( home_url( '/?page_id=6#android' ) ); ?>" class="androidclick"><img src="<?php echo get_template_directory_uri(); ?>/images/android-s-6.png"></a></li>
</ul>

</div>
<div class="whiteboxbottom"></div>
<div id="androidsubbox4"><img src="<?php echo get_template_directory_uri(); ?>/images/android_android-icon.png"></div>

</div>
</div>
<div class="logoboxouter">
<div class="homelogobox">
<img src="<?php echo get_template_directory_uri(); ?>/images/index_vf_logo.png" class="homelogo">
<img src="<?php echo get_template_directory_uri(); ?>/images/logo-php.png" style="display:none;" class="phplogo">
<img src="<?php echo get_template_directory_uri(); ?>/images/ror_vf_logo.png" style="display:none;" class="rorlogo">
<img src="<?php echo get_template_directory_uri(); ?>/images/android_vf_logo.png" style="display:none;" class="androidlogo">
<img src="<?php echo get_template_directory_uri(); ?>/images/ios_vf_logo.png" style="display:none;" class="ioslogo">
</div>
</div>
</div>
<div id="whiteboxbg">
</div>

</div>
</div>  <!-- header  end-->
<div class="inner-header-wrapper hometopmenu">
  <div class="inner-header">
    <div class="inner-logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/vf-small-logo.png" alt="logo"></a></div>
    <div class="inner-header-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </div>
  </div>
</div>
<?php }else{?>
<div class="inner-header-wrapper">
  <div class="inner-header">
    <div class="inner-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img src="<?php echo get_template_directory_uri(); ?>/images/vf-small-logo.png" alt="logo"></a></div>
    <div class="inner-header-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </div>
  </div>
</div>
<?php }?>