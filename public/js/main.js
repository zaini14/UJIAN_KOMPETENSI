$('#btn-login').on('click', function() {
	if ($('#dropdown').hasClass('hidden')) {
		$( "#dropdown" ).slideDown( "slow", function() {
    		$('#dropdown').removeClass('hidden');
  		});
	} else {
		$( "#dropdown" ).slideUp( "slow", function() {
    		$('#dropdown').addClass('hidden');
  		});
	}
  	
});

$(window).on('scroll', function() {
	if (window.scrollY > 0) {
		$('#scroll-top').fadeIn("fast", function() {
			$('#scroll-top').removeClass('hidden');
			$('#scroll-top').addClass('block');
		});
	} else {
		$('#scroll-top').fadeOut("fast", function() {
			$('#scroll-top').removeClass('block');
			$('#scroll-top').addClass('hidden');
		});
	}
});

$('.dash-link').on('click', function() {
	$('.dash-link').removeClass('active');
	$(this).addClass('active');
});

$('#data').on('click', function() {
	if ($('#drop-data').hasClass('hidden')) {
		$( "#drop-data" ).slideDown( "slow", function() {
    		$('#drop-data').removeClass('hidden');
    		$('#drop-data').addClass('block');
  		});
	} else {
		$( "#drop-data" ).slideUp( "slow", function() {
			$('#drop-data').removeClass('block');
    		$('#drop-data').addClass('hidden');
  		});
	}
});

$('#btn-user').on('click', function() {
	if ($('#drop-user').hasClass('hidden')) {
		$("#drop-user").slideDown("slow", function() {
			$('#drop-user').removeClass('hidden');
			$('#drop-user').addClass('block');
		});
	} else {
		$("#drop-user").slideUp("slow", function() {
			$('#drop-user').removeClass('block');
			$('#drop-user').addClass('hidden');
		});
	}	
});
