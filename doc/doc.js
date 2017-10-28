if (
	navigator.userAgent.indexOf('Safari') != -1 &&
	navigator.userAgent.indexOf('Chrome') == -1
) {
	$('#main-accordion').hide()
} else {
	$('#main-simple').hide()
}

$('#show-version-text').click(function() {
	$('#main-accordion').hide()
	$('#main-simple').show()
})
