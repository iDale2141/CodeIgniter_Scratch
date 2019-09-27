
<div id="sidebar" class="sidebar">
	<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
		<div data-scrollbar="true" data-height="100%" data-init="true" style="overflow: hidden; width: auto; height: 100%;">

			<div class="profile-section">
				<div style="padding: 5px;">
                    <div class="profile-image">
                        <img src="public/img/superuser.jpg" class="img-responsive" style="height:100%; width:100%;">
                        <i class="fa fa-user hide"></i>
                    </div>
                    <div class="profile-highlight">
                        <h4><i class="fa fa-user">&nbsp;</i> <b>Ian Dale Blanco</b></h4>
                        <div class="m-t-0">
                            <label><i class="fa fa-user">&nbsp;</i>Show my timezone</label>
                        </div>
                        <div class="m-b-0">
                            <label><i class="fa fa-user">&nbsp;</i>Show i have 14 contacts</label>
                        </div>
                        <div class="m-b-0">
                            <label><i class="fa fa-user">&nbsp;</i>Show i have 14 contacts</label>
                        </div>
                        <div class="m-b-0">
                            <label><i class="fa fa-user">&nbsp;</i>Show i have 14 contacts</label>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 953px;"></div>
		<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
	</div>
</div>


<script>

	$(function(){
		// $("#selected_student").autocomplete({
		// 	source: function(request, response){

		// 		// $.ajax( {
		//   //         url: "../items-search.php",
		//   //         dataType: "jsonp",
		//   //         data: {
		//   //           term: request.term
		//   //         },
		//   //         success: function( data ) {
		//   //           response( data );
		//   //         }
		//   //       } );

		// 	}
			
			
		// });

		var fakedata = ['test1','test2','test3','test4','ietsanders'];
		$("#selected_student").autocomplete({source:fakedata});

	})
	
</script>