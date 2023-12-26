const wpcf7Els = document.querySelectorAll( '.wpcf7' );

wpcf7Els.forEach(form => {
    form.addEventListener( 'wpcf7submit', function( event ) {
        // alert( "Fire!" );
    }, false );
})


// wpcf7invalid — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because there are fields with invalid input.
//
// wpcf7spam — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because a possible spam activity has been detected.
//
// wpcf7mailsent — Fires when an Ajax form submission has completed successfully, and mail has been sent.
//
// wpcf7mailfailed — Fires when an Ajax form submission has completed successfully, but it has failed in sending mail.
//
// wpcf7submit — Fires when an Ajax form submission has completed successfully, regardless of other incidents.
