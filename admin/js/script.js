$(document).ready(function(){

	$('#selectAllcheckboxes').click(function(event){

    if (this.checked) {

    	$('.checkboxes').each(function(){

    		this.checked =true;

    	});

    }else{

    	$('.checkboxes').each(function(){

    		this.checked =false;

    	});
    }

	});
});

//users online script for javascript

function loadUsersonline(){

$.get("./inc/function.php?onlineusers=result", function(data){

$(".usersonline").text(data);

});

}

setInterval(function(){

loadUsersonline(); 

},1000);



//the loader

var div_box = "<div id='load-screen'><div id='loading'></div></div>";

$("body").prepend(div_box);

$('#load-screen').delay(700).fadeOut(700, function(){
   
   $(this).remove();

});

 



