jQuery( '.cmsmasters-demos-preview__toggle' ).on( 'click', function() {
	const $html = jQuery( 'html' );

	if ( $html.hasClass( 'cmsmasters-demos-preview-opened' ) ) {
		$html.removeClass( 'cmsmasters-demos-preview-opened' );

		return;
	}

	$html.addClass( 'cmsmasters-demos-preview-opened' );
} );

jQuery( '.cmsmasters-demos-preview__close' ).on( 'click', function() {
	const $html = jQuery( 'html' );

	$html.removeClass( 'cmsmasters-demos-preview-opened' );
} );