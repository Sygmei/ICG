$('#form-without-immat').hide();
$(".required_immat").attr("required", "true");

$('.with-immat').click(function() {
	$('#form-immat').show();
	$(".required_immat").attr("required", "true");
	$('#form-without-immat').hide();
});

$('.no-immat').click(function() {
	$('#form-immat').hide();
	$('.required_immat').removeAttr('required');
	$('#form-without-immat').show();
});
