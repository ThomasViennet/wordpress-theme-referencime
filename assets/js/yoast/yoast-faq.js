;(function($) {
    var a = setInterval( function() {

        if ( document.readyState !== "complete" && document.readyState !== "interactive" ) {
            return;
        }
   
        if ( typeof window.jQuery === 'undefined' ) {
            return;
        }
        clearInterval( a );


        $( '.wp-block-yoast-faq-block' ).addClass( 'fcp-faq' );
        $( '.wp-block-yoast-faq-block .schema-faq-question' ).click( function() {
            $( this ).parent().toggleClass( 'fcp-opened' );
        });
        
        // change the Gutenberg plugin layout to common
        $( '.wp-block-yoast-faq-block p:empty' ).remove();
        $( '.wp-block-yoast-faq-block .schema-faq-answer ~ p' ).each( function() {
            var $self = $( this ),
                $answer = $self.parent().children( '.schema-faq-answer' );
            
            $answer.html( $answer.html() + '<br><br>' + $self.html() );
            $self.remove();
        });
        
        // change the WPBakery layout to common
        $( '.wp-block-yoast-faq-block p > .schema-faq-question' ).parent().replaceWith( function() {
            return $( '.schema-faq-question', this );
        });


    }, 500 );
})( jQuery );
