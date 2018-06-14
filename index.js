$(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    
        //Animation:
        // var animationName = 'animated swing';
        // var aniamtionEnd = 'webkitAnimationEnd animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';

        // $('#subscribeForm button').on('click',function(){
        // 	$('#subscribeForm button').addClass(animationName).one(animationend,function(){
        // 		$(this).removeClass(animationName);
        // 	});
        // });
    });
