<footer class="footer">

	<div class="container-fluid">

		<div class="row text-xs-center">

			<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">

				2018 © AutoCopain

			</div>

		</div>

	</div>

</footer>

				</div>



		</div>



			<!-- Vendor JS -->

			
			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery-1.12.3.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/tether.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/bootstrap.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/detectmobilebrowser.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery.mousewheel.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>js1/Chart.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/mwheelIntent.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery.jscrollpane.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery.fullscreen-min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/waves.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery.dataTables.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/dataTables.bootstrap4.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/dataTables.responsive.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/responsive.bootstrap4.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/dataTables.buttons.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/buttons.bootstrap4.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/jszip.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/pdfmake.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/vfs_fonts.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/buttons.html5.min.js"></script>



			<script type="text/javascript" src="<?php echo base_url(); ?>js1/buttons.print.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/buttons.colVis.min.js"></script>



			<script type="text/javascript" src="<?php echo base_url(); ?>js1/switchery.min.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/dropify.min.js"></script>



			<!-- Neptune JS -->

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/app.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/demo.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/tables-datatable.js"></script>

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/forms-upload.js"></script>

             



				<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery-jvectormap-2.0.3.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>js1/jquery-jvectormap-world-mill.js"></script>



	<script type="text/javascript">

		$(document).ready(function(){



		        /* Vector Map */

		    $('#world').vectorMap({

		        zoomOnScroll: false,

		        map: 'world_mill',

		        markers: [

		        

		        ],

		        normalizeFunction: 'polynomial',

		        backgroundColor: 'transparent',

		        regionsSelectable: true,

		        markersSelectable: true,

		        regionStyle: {

		            initial: {

		                fill: 'rgba(0,0,0,0.15)'

		            },

		            hover: {

		                fill: 'rgba(0,0,0,0.15)',

		            stroke: '#fff'

		            },

		        },

		        markerStyle: {

		            initial: {

		                fill: '#43b968',

		                stroke: '#fff'

		            },

		            hover: {

		                fill: '#3e70c9',

		                stroke: '#fff'

		            }

		        },

		        series: {

		            markers: [{

		                attribute: 'fill',

		                scale: ['#43b968','#a567e2', '#f44236'],

		                values: [200, 300, 600, 1000, 150, 250, 450, 500, 800, 900, 750, 650]

		            },{

		                attribute: 'r',

		                scale: [5, 15],

		                values: [200, 300, 600, 1000, 150, 250, 450, 500, 800, 900, 750, 650]

		            }]

		        }

		    });

		});

	</script>

            <script type="text/javascript">

            	function approveAccount(arg) {

            		

            		var var1 = confirm('Do you really want to approve this Account ' );

            		if (var1 == true) {

            			window.location.href = "http://bwsproduction.com/volveGym/adminDashboard/index.php/account/unapprove/"+arg;

            		}

            	}

            </script>

            <script type="text/javascript">

            	function releasePayment(arg1, arg2, arg3) {

            		

            		/*alert('Release ID is '+arg1+ 'tid is' +arg2+ 'amnt is' +arg3 );*/

            		

            			window.location.href = "http://bwsproduction.com/volveGym/adminDashboard/index.php/statement/releasePayment/"+arg1+'/'+arg2+ '/'+arg3;

            		

            	}

            </script>

            <script type="text/javascript">

            	$(document).ready( function () {

				    $('#tainertable').DataTable();

				} );

            </script>



			  <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>

             <script>

			  $( function() {

			    $( "#datepicker" ).datepicker();

			  } );

			  </script>



			<script type="text/javascript" src="<?php echo base_url(); ?>js1/rating.js"></script>    

			<script type="text/javascript">

				$('.rating').rating();

			</script>

			<!-- How many add more functional of owrkout plan -->
			<script type="text/javascript">
			    $(window).load(function() {
			      $(".add_how_many").click(function(){ 
			          $(".how_many_row").after($("#how_many_row").html());
			      });
			      $("body").on("click",".h_many_row_r_btn",function(){ 
			          $(this).parents(".how_many_row_remove").remove();
			      });
			    });
			</script>
			<!-- How many add more functional of owrkout plan -->

		</body>



</html>