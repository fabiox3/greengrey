$(document).on('click', 'li.menu-item a', function(){
    var url = (window.location.href).split("/").pop();
    //$('li.menu-item').removeClass('current-menu-item');
   	$('.menu-item li a[href="'+url+'"]').addClass('current-menu-item');
});

$(document).on('click', '.show-form-task', function(){
	if( $('.new-comment').hasClass('hidden') ) {
		$('.new-comment').removeClass('hidden');
	} else {
		$('.new-comment').addClass('hidden');
	}
	
});