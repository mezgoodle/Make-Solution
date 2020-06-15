document.body.onload = function () {
	
setTimeout(function() {
		var preloader = document.getElementById('preloader');
		if ( !preloader.classList.contains('done')) {
			preloader.classList.add('done');
		}
	}, 1000);
}

jQuery(function() {
	document.getElementById('language').onchange = setLanguage;
})

function setLanguage() {
	var languageName = $('#language').val();

	if (languageName == 'C++') {
		$('td[name="C++"]').show();
		$('td[name="C"]').hide();
		$('td[name="C#"]').hide();
		$('td[name="Python"]').hide();
		$('td[name="Java"]').hide();
		$('td[name="Інше"]').hide();
		$('td[name="Go"]').hide();
	} else if (languageName == 'C') {
		$('td[name="C"]').show();
		$('td[name="C++"]').hide();
		$('td[name="C#"]').hide();
		$('td[name="Python"]').hide();
		$('td[name="Java"]').hide();
		$('td[name="Інше"]').hide();
		$('td[name="Go"]').hide();
	} else if (languageName == 'C#') {
		$('td[name="C"]').hide();
		$('td[name="C++"]').hide();
		$('td[name="C#"]').show();
		$('td[name="Python"]').hide();
		$('td[name="Java"]').hide();
		$('td[name="Інше"]').hide();
		$('td[name="Go"]').hide();
	} else if (languageName == 'Python') {
		$('td[name="C"]').hide();
		$('td[name="C++"]').hide();
		$('td[name="C#"]').hide();
		$('td[name="Python"]').show();
		$('td[name="Java"]').hide();
		$('td[name="Інше"]').hide();
		$('td[name="Go"]').hide();
	} else if (languageName == 'Java') {
		$('td[name="C"]').hide();
		$('td[name="C++"]').hide();
		$('td[name="C#"]').hide();
		$('td[name="Python"]').hide();
		$('td[name="Java"]').show();
		$('td[name="Інше"]').hide();
		$('td[name="Go"]').hide();
	} else if (languageName == 'Інше') {
		$('td[name="C"]').hide();
		$('td[name="C++"]').hide();
		$('td[name="C#"]').hide();
		$('td[name="Python"]').hide();
		$('td[name="Java"]').hide();
		$('td[name="Інше"]').show();
		$('td[name="Go"]').hide();
	} else if (languageName == 'Усі') {
		$('td[name="C"]').show();
		$('td[name="C++"]').show();
		$('td[name="C#"]').show();
		$('td[name="Python"]').show();
		$('td[name="Java"]').show();
		$('td[name="Інше"]').show();
	} else if (languageName == 'Go') {
		$('td[name="C"]').hide();
		$('td[name="C++"]').hide();
		$('td[name="C#"]').hide();
		$('td[name="Python"]').hide();
		$('td[name="Java"]').hide();
		$('td[name="Інше"]').hide();
		$('td[name="Go"]').show();
	}
}