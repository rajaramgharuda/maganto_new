<?php require_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	 <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- Latest compiled JavaScript -->

<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
<link href="css/owl.theme.green.css" rel="stylesheet" type="text/css" />
<link href="css/owl.theme.green.min.css" rel="stylesheet" type="text/css" />
 -->



<!-- <script type="text/javascript" src="js/owl.carousel.min.js"></script>-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
<!-- <script type="text/javascript" src="js/jquery.flexisel.js"></script> -->
<style type="text/css">

.clearout {
height:20px;
clear:both;
}

#flexiselDemo1, #flexiselDemo2, #flexiselDemo3 {
display:none;
}

.nbs-flexisel-container {
    position:relative;
    max-width:98%; /*  changed 100 to 98  */
}
.nbs-flexisel-ul {
    position:relative;
    width:99999px;
    margin:0px;
    padding:0px;
    list-style-type:none;   
    text-align:center;  
    overflow: auto;
}

.nbs-flexisel-inner {
    position: relative;
    overflow: hidden;
    float:left;
    width:100%;
    background:#fcfcfc;
    background: #fcfcfc -moz-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* FF3.6+ */
    background: #fcfcfc -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfcfc), color-stop(100%,#eee)); /* Chrome,Safari4+ */
    background: #fcfcfc -webkit-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* Chrome10+,Safari5.1+ */
    background: #fcfcfc -o-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* Opera11.10+ */
    background: #fcfcfc -ms-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* IE10+ */
    background: #fcfcfc linear-gradient(top, #fcfcfc 0%, #eee 100%); /* W3C */
    /*border:1px solid #ccc;*/
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;  
}

.nbs-flexisel-item {
    float:left;
    margin:0px;
    padding:0px;
    cursor:pointer;
    position:relative;
    line-height:0px;
}
.nbs-flexisel-item img {
    max-width: 100%;
    cursor: pointer;
    position: relative;
    margin-top: 10px;
    margin-bottom: 10px;
}

/*** Navigation ***/

.nbs-flexisel-nav-left,
.nbs-flexisel-nav-right {
    padding:5px 10px;
    border-radius:15px;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;      
    position: absolute;
    cursor: pointer;
    z-index: 4;
    top: 50%;
    transform: translateY(-50%);   
    background: rgba(0,0,0,0.5);
    color: #fff;     
}

.nbs-flexisel-nav-left {
    left: 10px;
}

.nbs-flexisel-nav-left:before {
    content: "<"
}

.nbs-flexisel-nav-left.disabled {
    opacity: 0.4;
}

.nbs-flexisel-nav-right {
    right: 5px;    
}

.nbs-flexisel-nav-right:before {
    content: ">"
}

.nbs-flexisel-nav-right.disabled {
    opacity: 0.4;
}
.nbs-flexisel-nav-right {
    right: 5px !important;
}
.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
    padding: 5px 10px !important;
    border-radius: 15px !important;
    -moz-border-radius: 15px !important;
    -webkit-border-radius: 15px !important;
    position: absolute !important;
    cursor: pointer !important;
    z-index: 4 !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    background: rgba(0,0,0,0.5) !important;
    color: #fff !important;
    }
	.text_box_stl{
		border-top-color: #8d8d8d00 !important;border-left-color: #8d8d8d00 !important;border-right-color: #8d8d8d00 !important;border-bottom-color: #4d4d4d !important;
	}
	.tbl_br_styl{
		border-top-style: hidden;
	}
</style>
</head>
<body>
	<div class="" style="background-color: #58b8ff;padding-top: 8px;padding-bottom: 8px;margin-bottom: 5px;padding-left: 10px;padding-right: 10px;">
		<div style="background-color: #adadad;">
		<div class="row" style="width: 101.3%">
			<div class="col-md-3" style="padding: 0;margin:0;text-align: center; ">
			<img src="http://gharuda-001-site6.btempurl.com/skin/frontend/sm_market/default/images/yellow/logo111.png" style="width: 96%;margin-top: 3%;margin-left: 7.5%;">
			</div>
			<div class="col-md-9" style="background-color: #fff;">
		<div class="row">

<!--   Start of main category -->


	<?php 
	$y=1;
	$sql_select_cate = mysqli_query($conn,"select * from tbl_mian_cate where cate_status='active' order by cate_id DESC LIMIT 4");
	while($sql_fetch_cate = mysqli_fetch_assoc($sql_select_cate))
	{

	?>
		<a class="span_clr_change" alt="<?php echo $sql_fetch_cate['cate_id']  ?>" href="#"><div class="col-md-3" style="width: 24.2%;padding-right: 0px;padding-left: 5px;padding-top: 7px;padding-bottom: 1px;">

<div style="background-color: #28b1e7;color: #fff;text-align: center;padding-top: 7px;/*padding-bottom: 19px;*/min-height: 96px;">
	<p style="margin-bottom: 0;"><img src="<?php echo $sql_fetch_cate['cate_image']  ?>" style="width: 20%;"></p>
	<p style="font-size: 22px;margin-bottom: 0;"><?php echo $sql_fetch_cate['cate_name']  ?></p>
<span  class="badge chng<?php echo $sql_fetch_cate['cate_id']  ?>" style="width: 60%;background-color: #f5a33a;display: none;margin-left: 43px;"></span>

</div>
			</div></a>
	
<?php $y++;} ?>

		




	


<!--   End of main category -->



<!--   Start of sub category -->
<div class="row" style="padding-bottom: 7px;">
	<div class="col-md-10" style="width: 75.8%;">
        <input type="radio" name="sim_type" style="margin-top: 10px;" checked> Prepaid
<div style="padding-top: 10px;display: inline-block;">
		 <input type="radio" name="sim_type"> Postpaid 

		</div>
			<br>


		<div class="col-md-4">
		<input type="text" class="text_box_stl" placeholder="Mobile Number" style="width: 105%;" name="txt_mobile">
	</div>
	<div class="col-md-4">
		<input type="text" class="text_box_stl" placeholder="Operator" style="width: 105%;" name="txt_operator">
	</div>
	<div class="col-md-4">
		<input type="text" class="text_box_stl" placeholder="Amount" style="width: 105%;" name="txt_amount">
    </div>
	</div>
	<div class="col-md-2">
		
<input type="checkbox" name="fast_frwd"> Fast Forward <!-- <p>Instant Payment From your CTO Balance</p> --><br>

<button type="button" class="btn btn-info">Proceed To Recharge</button>

	</div>

</div>


<!--   End of sub category -->

<div class="row">
<div class="col-md-12" id="flexid">
	<!-- <table class="table tbl_br_styl"><tr><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td><td><div style="text-align: center;"><img src="menu2.png"><p>Trains</p></div></td></tr></table> -->
	<ul id="flexiselDemo2" style="background-color: white;"> 


			<?php 
	$sql_select_cate = mysqli_query($conn,"select *,cate_name from tbl_sub_cate inner join tbl_mian_cate on tbl_mian_cate.cate_id = tbl_sub_cate.cate_id where  sub_cate_status='active' ");
    //order by sub_cate_name DESC LIMIT 1
	while($sql_fetch_sub_cate = mysqli_fetch_assoc($sql_select_cate))
	{
		$result2 = $sql_fetch_sub_cate['sub_cate_name'];
if(strlen($sql_fetch_sub_cate['sub_cate_name'])>12)
{
	$result = substr($sql_fetch_sub_cate['sub_cate_name'], 0, 9);
	$result = $result."...";

}else{
	$result = $sql_fetch_sub_cate['sub_cate_name'];
}
	?>
	   <li style="margin-bottom: 10px;">
	   	<a title="<?php echo $result2  ?>" style="text-decoration: none;" target="_blank" href="<?php echo $sql_fetch_sub_cate['sub_cate_link']  ?>">
	   		<div style="text-align: center;">
	   			<img src="<?php echo $sql_fetch_sub_cate['sub_cate_image'] ?>">
	   			<p ><?php echo $result  ?></p>
	   		</div> 
	   	</a>
	   </li>  

	
<?php } ?>
 
                                                                          
</ul>
</div>
</div>


<!-- <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
 -->




			</div>
		</div>
	</div>
	</div>
    <script type="text/javascript">
        /*
* File: jquery.flexisel.js
* Version: 2.2.2
* Description: Responsive carousel jQuery plugin
* Author: 9bit Studios
* Copyright 2016, 9bit Studios
* http://www.9bitstudios.com
* Free to use and abuse under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
*/

(function ($) {

    $.fn.flexisel = function (options) {

        var defaults = $.extend({
            visibleItems: 4,
            itemsToScroll: 3,
            animationSpeed: 400,
            infinite: true,
            navigationTargetSelector: null,
            autoPlay: {
                enable: false,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 1,
                    itemsToScroll: 1
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3,
                    itemsToScroll: 3
                }
            },
            loaded: function(){ },
            before: function(){ },
            after: function(){ },
            resize: function(){ }
        }, options);
        
        /******************************
        Private Variables
        *******************************/         
        
        var object = $(this);
        var settings = $.extend(defaults, options);        
        var itemsWidth;
        var canNavigate = true; 
        var itemCount; 
        var itemsVisible = settings.visibleItems; 
        var itemsToScroll = settings.itemsToScroll;
        var responsivePoints = [];
        var resizeTimeout;
        var autoPlayInterval;        
        
        /******************************
        Public Methods
        *******************************/        
        
        var methods = {
                
            init: function() {
                return this.each(function () {
                    methods.appendHTML();
                    methods.setEventHandlers();                  
                    methods.initializeItems();                    
                });
            },

            /******************************
            Initialize Items
            *******************************/            
            
            initializeItems: function() {
                
                var obj = settings.responsiveBreakpoints;
                for(var i in obj) { responsivePoints.push(obj[i]); }
                responsivePoints.sort(function(a, b) { return a.changePoint - b.changePoint; });
                var childSet = object.children();
                childSet.first().addClass("index");
                itemsWidth = methods.getCurrentItemWidth();
                itemCount = childSet.length;
                childSet.width(itemsWidth);
                if(settings.infinite) {
                    methods.offsetItemsToBeginning(Math.floor(childSet.length / 2)); 
                    object.css({
                        'left': -itemsWidth * Math.floor(childSet.length / 2)
                    }); 
                }
                $(window).trigger('resize');              
                object.fadeIn();
                settings.loaded.call(this, object);
                
            },
            
            /******************************
            Append HTML
            *******************************/            
            
            appendHTML: function() {
                
                object.addClass("nbs-flexisel-ul");
                object.wrap("<div class='nbs-flexisel-container'><div class='nbs-flexisel-inner'></div></div>");
                object.find("li").addClass("nbs-flexisel-item");
                
                if(settings.navigationTargetSelector && $(settings.navigationTargetSelector).length > 0) {
                    $("<div class='nbs-flexisel-nav-left'></div><div class='nbs-flexisel-nav-right'></div>").appendTo(settings.navigationTargetSelector);
                } else {
                    settings.navigationTargetSelector = object.parent();
                    $("<div class='nbs-flexisel-nav-left'></div><div class='nbs-flexisel-nav-right'></div>").insertAfter(object);    
                }
                    
                if(settings.infinite) {    
                    var childSet = object.children();
                    var cloneContentBefore = childSet.clone();
                    var cloneContentAfter = childSet.clone();
                    object.prepend(cloneContentBefore);
                    object.append(cloneContentAfter);
                }
                
            },
                    
            
            /******************************
            Set Event Handlers
            *******************************/
            setEventHandlers: function() {
                var self = this;
                var childSet = object.children();
                
                $(window).on("resize", function(event){
                    canNavigate = false;
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(function(){
                        canNavigate = true;
                        methods.calculateDisplay();
                        itemsWidth = methods.getCurrentItemWidth();
                        childSet.width(itemsWidth);
                        
                        if(settings.infinite) {
                            object.css({
                                'left': -itemsWidth * Math.floor(childSet.length / 2)
                            });        
                        } else {
                            methods.clearDisabled();
                            $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-left").addClass('disabled');
                            object.css({
                                'left': 0
                            });
                        }
                        
                        settings.resize.call(self, object);

                    }, 100);
                    
                });                    
                
                $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-left").on("click", function (event) {
                    methods.scroll(true);
                });
                
                $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-right").on("click", function (event) {
                    methods.scroll(false);
                });
                
                if(settings.autoPlay.enable) {

                    methods.setAutoplayInterval();

                    if (settings.autoPlay.pauseOnHover === true) {
                        object.on({
                            mouseenter : function() {
                                canNavigate = false;
                            },
                            mouseleave : function() {
                                canNavigate = true;
                            }
                        });        
                    }            
                    
                }
                
                object[0].addEventListener('touchstart', methods.touchHandler.handleTouchStart, false);        
                object[0].addEventListener('touchmove', methods.touchHandler.handleTouchMove, false);                
                
            },        
            
            /******************************
            Calculate Display
            *******************************/            
            
            calculateDisplay: function() {
                var contentWidth = $('html').width();
                var largestCustom = responsivePoints[responsivePoints.length-1].changePoint; // sorted array 
                
                for(var i in responsivePoints) {
                    
                    if(contentWidth >= largestCustom) { // set to default if width greater than largest custom responsiveBreakpoint 
                        itemsVisible = settings.visibleItems;
                        itemsToScroll = settings.itemsToScroll;
                        break;
                    }
                    else { // determine custom responsiveBreakpoint to use
                    
                        if(contentWidth < responsivePoints[i].changePoint) {
                            itemsVisible = responsivePoints[i].visibleItems;
                            itemsToScroll = responsivePoints[i].itemsToScroll;
                            break;
                        }
                        else {
                            continue;
                        }
                    }
                }
                
            },                
            
            /******************************
            Scroll
            *******************************/                
            
            scroll: function(reverse) {

                if(typeof reverse === 'undefined') { reverse = true }

                if(canNavigate == true) {
                    canNavigate = false;
                    settings.before.call(this, object);
                    itemsWidth = methods.getCurrentItemWidth();
                    
                    if(settings.autoPlay.enable) {
                        clearInterval(autoPlayInterval);
                    }
                    
                    if(!settings.infinite) {
                        
                        var scrollDistance = itemsWidth * itemsToScroll;
                        
                        if(reverse) {                            
                            object.animate({
                                'left': methods.calculateNonInfiniteLeftScroll(scrollDistance)
                            }, settings.animationSpeed, function(){
                                settings.after.call(this, object);
                                canNavigate = true;
                            });                            
                            
                        } else {
                            object.animate({
                                'left': methods.calculateNonInfiniteRightScroll(scrollDistance)
                            },settings.animationSpeed, function(){
                                settings.after.call(this, object);
                                canNavigate = true;
                            });                                    
                        }
                        
                        
                        
                    } else {                    
                        object.animate({
                            'left' : reverse ? "+=" + itemsWidth * itemsToScroll : "-=" + itemsWidth * itemsToScroll
                        }, settings.animationSpeed, function() {
                            settings.after.call(this, object);
                            canNavigate = true;
                            
                            if(reverse) { 
                                methods.offsetItemsToBeginning(itemsToScroll); 
                            } else {
                                methods.offsetItemsToEnd(itemsToScroll);
                            }
                            methods.offsetSliderPosition(reverse); 
                            
                        });
                    }
                    
                    if(settings.autoPlay.enable) {
                        methods.setAutoplayInterval();
                    }
                    
                }
            },
            
            touchHandler: {

                xDown: null,
                yDown: null,
                handleTouchStart: function(evt) {                                         
                    this.xDown = evt.touches[0].clientX;                                      
                    this.yDown = evt.touches[0].clientY;
                }, 
                handleTouchMove: function (evt) {
                    if (!this.xDown || !this.yDown) {
                        return;
                    }

                    var xUp = evt.touches[0].clientX;                                    
                    var yUp = evt.touches[0].clientY;

                    var xDiff = this.xDown - xUp;
                    var yDiff = this.yDown - yUp;
                    
                    // only comparing xDiff
                    // compare which is greater against yDiff to determine whether left/right or up/down  e.g. if (Math.abs( xDiff ) > Math.abs( yDiff ))
                    if (Math.abs( xDiff ) > 0) {
                        if ( xDiff > 0 ) {
                            // swipe left
                            methods.scroll(false);
                        } else {
                            //swipe right
                            methods.scroll(true);
                        }                       
                    }
                    
                    /* reset values */
                    this.xDown = null;
                    this.yDown = null;
                    canNavigate = true;
                }
            },            
            
            /******************************
            Utility Functions
            *******************************/
            
            getCurrentItemWidth: function() {
                return (object.parent().width())/itemsVisible;
            },            
            
            offsetItemsToBeginning: function(number) {
                if(typeof number === 'undefined') { number = 1 }
                for(var i = 0; i < number; i++) {
                    object.children().last().insertBefore(object.children().first());
                }    
            },                
            
            offsetItemsToEnd: function(number) {
                if(typeof number === 'undefined') { number = 1 }
                for(var i = 0; i < number; i++) {
                    object.children().first().insertAfter(object.children().last());    
                }
            },            
            
            offsetSliderPosition: function(reverse) {
                var left = parseInt(object.css('left').replace('px', ''));
                if (reverse) { 
                    left = left - itemsWidth * itemsToScroll; 
                } else {
                    left = left + itemsWidth * itemsToScroll;
                }
                object.css({
                    'left': left
                });
            },

            getOffsetPosition: function() {
                return parseInt(object.css('left').replace('px', ''));    
            },
            
            calculateNonInfiniteLeftScroll: function(toScroll) {
                
                methods.clearDisabled();
                if(methods.getOffsetPosition() + toScroll >= 0) {
                    $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-left").addClass('disabled');
                    return 0;
                } else {
                    return methods.getOffsetPosition() + toScroll;
                }
            },
            
            calculateNonInfiniteRightScroll: function(toScroll){
                
                methods.clearDisabled();
                var negativeOffsetLimit = (itemCount * itemsWidth) - (itemsVisible * itemsWidth);
                
                if(methods.getOffsetPosition() - toScroll <= -negativeOffsetLimit) {
                    $(settings.navigationTargetSelector).find(".nbs-flexisel-nav-right").addClass('disabled');
                    return -negativeOffsetLimit;        
                } else {
                    return methods.getOffsetPosition() - toScroll;
                }
            },
            
            setAutoplayInterval: function(){
                autoPlayInterval = setInterval(function() {
                    if (canNavigate) {
                        methods.scroll(false);
                    }
                }, settings.autoPlay.interval);                    
            },
            
            clearDisabled: function() {
                var parent = $(settings.navigationTargetSelector);
                parent.find(".nbs-flexisel-nav-left").removeClass('disabled');
                parent.find(".nbs-flexisel-nav-right").removeClass('disabled');
            }                        
            
        };

        if (methods[options]) {     // $("#element").pluginName('methodName', 'arg1', 'arg2');
            return methods[options].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof options === 'object' || !options) {     // $("#element").pluginName({ option: 1, option:2 });
            return methods.init.apply(this);  
        } else {
            $.error( 'Method "' +  method + '" does not exist in flexisel plugin!');
        }        
};

})(jQuery);

    </script>
<script type="text/javascript">




	   $("#flexiselDemo2").flexisel({
        visibleItems: 5,
        itemsToScroll: 3,
        animationSpeed: 200,
        infinite: false,
        navigationTargetSelector: null,
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        },
        loaded: function(object) {
            console.log('Slider loaded...');
        },
        before: function(object){
            console.log('Before transition...');
        },
        after: function(object) {
            console.log('After transition...');
        },
        resize: function(object){
            console.log('After resize...');
        }
    });


// 	   $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:5
//         }
//     }
// });
    
$(".nbs-flexisel-nav-left").hide();
$(document).on('click',".nbs-flexisel-nav-right",function(){

$(".nbs-flexisel-nav-left").show();

});


$(".span_clr_change").on('click',function(){

	$(".badge").css({"display": "none"});
	var a_l = $(this).attr('alt');
	$(".chng"+a_l).css({"display": "block"});
$.ajax({
url: "functions.php", 
type: "POST",             
data: {  al_id:a_l }, 
 dataType: 'html',
success: function(data)  
{
	$("#flexid").empty();
	$("#flexid").html(data);
	   $("#flexiselDemo2").flexisel({
        visibleItems: 6,
        itemsToScroll: 3,
        animationSpeed: 200,
        infinite: false,
        navigationTargetSelector: null,
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        },
        loaded: function(object) {
            console.log('Slider loaded...');
        },
        before: function(object){
            console.log('Before transition...');
        },
        after: function(object) {
            console.log('After transition...');
        },
        resize: function(object){
            console.log('After resize...');
        }
    });
}
});

});

</script>
</body>
</html>