'use strict';

var box = '';

$('#box').on('input', function() {
	box = $('#box').val();

	if (box.length > 9) {
		$('#submit').removeAttr('disabled');
		$('#submit').removeClass('disabled');
	} else {
		$('#submit').attr('disabled', true);
		$('#submit').addClass('disabled');
	}
});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 $('#logo').css('max-width', '150px');
 
 $("#submit").after("<br />");
 
 $('#pas-de-box').css('padding-bottom', '20px');
}

