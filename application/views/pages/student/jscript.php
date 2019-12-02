<script>


	var sa = new Vue({
		el:"#content",
		data: {
			has_selected: false,
		},
		created: function(){
			console.log($("#selected_student"))
			this.autocomplete();
		},
		methods: {
			autocomplete: function(){
				$("#selected_student").autocomplete({
					source: function(request, response){
						$.ajax( {
				          	url: '<?= base_url("home/retrieve") ?>',
							type: 'GET',
							dataType: 'JSON',
			         	 	data: {
			            		// term: request.term
			          		},
				          	success: function( data ) {
				          		console.log('adasd')
				            	// response(data);
				          	}
				        } );
					},
					select: function( event, ui ) {
						
					},	
			        focus: function() {
			            return false;
			        },
				});	
			}
		}
	});


</script>