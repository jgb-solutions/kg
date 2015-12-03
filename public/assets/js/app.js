$(function()
{
	$nSection				= $('#notice-section');
	$kgSearchModalForm 		= $('#kgSearchModalForm');
	$searchInput 			= $kgSearchModalForm.find('#query');
	$kgSearchModal 			= $('#checheModal');
	$checheModalToggle		= $('.checheModalToggle');

	$kgContactModalForm 	= $('#kgContactModalForm');
	$kontakInput 			= $kgContactModalForm.find('#name');
	$kgContactModal 		= $('#kontakModal');
	$kontakModalToggle		= $('.kontakModalToggle');

	$form 					= $('#downloadForm');
	$input 					= $form.find('#url');
	$downloadNew 			= $('#download-new');
	$downloadButton 		= $('#download-button');
	$main 					= $('#main');
	$sMain 					= $('#second-main');
	$submitButton			= $('#submit-button');
	$submitButtonHTML		= $submitButton.html();
	$ajaxLoaderImg			= '<img src="/assets/images/ajax-loader.gif">';

	$notice = 0;
	$response = $('#response');
	$sucFail = '';
	$voye = '<span class="glyphicon glyphicon-send"></span>';

	$form.on('submit', function(event)
	{
		event.preventDefault();

		$url = $input.val();
		// console.log( $url.val() );

		if ( $url.length > 0 )
		{
			$submitButton.html( $ajaxLoaderImg );
			$nSection.slideUp();
			sendUrl( $url );
		} else {
			// console.log('can\'t been empty dude');
			// alert('Fòk ou antre yon lyen oubyen adrès nan chan an avan ou peze bouton Telechaje a.');
			$nSection.find('.errors').html('<h3>Fòk ou antre yon lyen oubyen adrès nan chan an avan ou peze bouton Telechaje a.</h3>');
			$nSection.slideDown();
		}
	});

	$downloadNew.on('click', function( event )
	{
		event.preventDefault();
		// console.log('clicked');
		$submitButton.html( $submitButtonHTML );

		$input.val('');
		$main.slideDown(function()
		{
			$input.focus();
		});
		$sMain.slideUp();
	});

	$checheModalToggle.on('click', function( e )
	{
		// console.log( $(this) );
		e.preventDefault();

		$kgSearchModal
			.modal()
			.on('shown.bs.modal', function()
			{
				$searchInput.focus();
			});
	});

	$kontakModalToggle.on('click', function( e )
	{
		// console.log( $(this) );
		e.preventDefault();

		$kgContactModal
			.modal()
			.on('shown.bs.modal', function()
			{
				$kontakInput.focus();
			});
	});

	$(document).on('submit', '#kgContactModalForm', function( event )
	{
		event.preventDefault();

		var $this 		= $(this),
			$name 		= $this.find('#name'),
			$email 		= $this.find('#email'),
			$message 	= $this.find('textarea#message');

		if ( $.trim( $name.val() ) === '' )
		{
			$notice = 1;
			$name.next().show();
		} else
		{
			$name.next().hide();
		}

		if ( $.trim( $email.val() ) === '' )
		{
			$notice = 1;
			$email.next().show();
		} else
		{
			$email.next().hide();
		}

		if ( $.trim( $message.val() ) === '' )
		{
			$notice = 1;
			$message.next().show();
		} else
		{
			$message.next().hide();
		}

		if ( $notice === 0 )
		{
			$('span.error').hide();

			$response.html('');

			$this.find('button[type=submit]').html( $ajaxLoaderImg );

			var $data = $this.serialize();

			$.post( '/ajax?action=sendMail', $data, function( $data )
			{

				$this.slideUp('slow');

				var anchor = $('<button></button>',
				{
					'class': 'btn btn-success btn-lg',
					'id'	 : 'resetForm',
					'text' : 'Voye yon lòt mesaj'
				});

				anchor.prepend( $voye + ' ');

				if ( 1 === parseInt( $data ) ) {
					$data = '<h4>Nou resevwa mesaj ou a avèk siskè!</h4>';
					$sucFail = '<div class="bg-success col-sm-12 text-center padding1"></div>&nbsp;';
				}
				else if ( 0 === parseInt( $data ) )
				{
					$data = '<h4>Nou pa ka resevwa mesaj ou a kounye a. Eseye ankò.</h4>';
					$sucFail = '<div class="bg-danger col-sm-12 text-center padding1"></div>&nbsp;';
				}

				$pSuc = $( $sucFail ).html( $data ).append( anchor );
				$response.html( $pSuc ).fadeIn();

				$this.find('button[type=submit]').text(' Voye mesaj la').prepend( $voye );

			});
		} else {
			// $response.html( '<p class="text-danger">' + notice + '</p>' );
			// $('span.error').show();
			$notice = 0;
		}
	});


	$(document).on('click', '#resetForm', function( event )
	{
		event.preventDefault();

		$kgContactModalForm[0].reset();
		$kgContactModalForm.slideDown('slow', function() {
			$response.fadeOut();
			$(this).find('input')[0].focus();
		});

	});
});

function sendUrl()
{
	$.ajax({
		url: '/ajax',
		type: 'POST',
		data: { url:  $url, action: 'download' },
	})
	.success(function( $data )
	{
		if ( $data.success )
		{
			// console.log( $data );

			$downloadButton
					.attr({
						href: $data.link,
						download: $data.title + '.mp3',
						title: $data.title
					});
			$('#songTitle').text( $data.title );
			$('.count').text( $data.count );

			$main.slideUp();
			$sMain.slideDown();
		} else
		{
			$submitButton.html( $submitButtonHTML );
			$nSection.find('.errors').html('<h3>Nou pa reyisi telechaje mizik ou vle a nan lyen ou mete a. Itilize yon lòt lyen Keeng.</h3>');
			$nSection.slideDown();
		}
	});
}