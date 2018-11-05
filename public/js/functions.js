$( '#topmenu .navbar-nav a' ).on( 'click', function () {
	$( '#topmenu .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});