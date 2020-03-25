/*Export Table Init*/

"use strict"; 

$(document).ready(function() {
	$('#export').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );