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

			<script type="text/javascript" src="<?php echo base_url(); ?>js1/bootstrap3.min.js"></script>

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

            <!-- js for validation  -->
            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
            <!-- js validatoion end  -->


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



			<!--   <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>

             <script>

			  $( function() {

			    $( "#datepicker" ).datepicker();

			  } );

			  </script> -->



			<script type="text/javascript" src="<?php echo base_url(); ?>js1/rating.js"></script>    

			<script type="text/javascript">

				$('.rating').rating();

			</script>
					<script type="text/javascript">

			$(function() {

    $( "#datepicker" ).datepicker({format: 'yyyy'});

    });

		</script>
<script type="text/javascript">
        $('.add').on('click', add);
       $('.remove').on('click', remove);

function add() {
  var new_chq_no = parseInt($('#total_chq').val()) + 1;
  // var new_input = "<input type='text' id='new_" + new_chq_no + "'>";
  var new_input ='<div class="row" id="new_'+new_chq_no +'"><div class="col-xs-5"><div class="form-group"><label>Workout</label><select class="form-control" name="workoutID[]"><option>select Workout</option><?php foreach ($workout as $value) {?><option value="<?= $value['id'] ?>"><?= $value['name'] ?></option><?php } ?></select></div></div><div class="col-xs-5"> <div class="form-group"><label for="exampleInputEmail1">How many <small>(repetition did you do ?)</small></label><input type="text" name="how_many[]" class="form-control" placeholder="20"></div></div></div>';

  $('#new_chq').append(new_input);
  
  $('#total_chq').val(new_chq_no);
}

function remove() {
  var last_chq_no = $('#total_chq').val();

  if (last_chq_no > 1) {
    $('#new_' + last_chq_no).remove();
    $('#total_chq').val(last_chq_no - 1);
  }
}
</script>

<script>
$(function () {

            //-------------
            //- LINE CHART -
            //--------------
            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label: 'Electronics',
                        fillColor: 'rgba(210, 214, 222, 1)',
                        strokeColor: 'rgba(210, 214, 222, 1)',
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: 'Digital Goods',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            }

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            }
           
            var lineChartCanvas = $('#oltmsVoltageChart').get(0).getContext('2d')
            var lineChart = new Chart(lineChartCanvas,{
                type: 'line',
                data: areaChartData,
                options: lineChartOptions
            })
            var lineChartOptions = areaChartOptions
            lineChartOptions.datasetFill = false
           // lineChart.Line(areaChartData, lineChartOptions)
        })
      

</script>

<!-- getTrainerTranees starts -->
  
  <script type="text/javascript">
      // it to be called on selecting 
      // the trainers 
      function getTrainerTranees(e){
         getTarnees(e.value);
      }
      // fetch the tranee 
      // by pasing the tranersId 
      function getTarnees(trainersID){
           // it will be passed onto edit mode
           var workout_plan_id = "<?=isset($workout_plan_id)?$workout_plan_id:''?>"; 
           $.post("<?=base_url('/workout/getTrainerTranees/');?>",{'trainersID':trainersID,'workout_plan_id':workout_plan_id},function(response){
                 $('#traineeID').html(response);
           });
      }
      // we gotta invoke this, 
      //for fetching the tranees 
      //of the selcetd traner
      $(window).load(function() {
         $("select#trainersID").change();
         console.log("hello");
      });
  </script>

<!-- getTrainerTranees ends -->

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

<!-- sweet alert functions start for workout plan -->
<script type="text/javascript">

    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel !",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?=base_url("workout/soft_delete_workout_plan");?>'+'/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                console.log('data:'+data);
                  $("#"+id).remove();
                  swal("Deleted!", "Your Workout Plan Record  has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your Workout Plan Record is safe :)", "error");
        }
      return false;
      });
      return false;
    });
//
 $(".remove_workout").click(function(){
        var id = $(this).parents("tr").attr("id");
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel !",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?=base_url("workout/soft_delete_workout");?>'+'/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                console.log('data:'+data);
                  $("#"+id).remove();
                  swal("Deleted!", "Your Workout Record  has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your Workout Record is safe :)", "error");
        }
      return false;
      });
      return false;
    });
// soft delete for trainee function 
 $(".remove_trainee").click(function(){
        var id = $(this).parents("tr").attr("id");
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel !",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?=base_url("users/soft_delete_trainee");?>'+'/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                console.log('data:'+data);
                  $("#"+id).remove();
                  swal("Deleted!", "Your Trainee Record  has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your Trainee Record is safe :)", "error");
        }
      return false;
      });
      return false;
    });
 // soft delete for trainer function 
 $(".remove_trainer").click(function(){
        var id = $(this).parents("tr").attr("id");
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel !",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?=base_url("users/soft_delete_trainer");?>'+'/'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                console.log('data:'+data);
                  $("#"+id).remove();
                  swal("Deleted!", "Your Trainer Record  has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your Trainer Record is safe :)", "error");
        }
      return false;
      });
      return false;
    });
</script>
<!-- sweet alert functions end -->

<!--form Validation for workout form-->

<script type="text/javascript">
     if ($("#workout_form").length > 0) {
            $("#workout_form").validate({
               rules: {
                    name: {
                        required : true,
                        minlength: 3,
                        maxlength:50
                    },
                    description: {
                        required : true,
                        maxlength: 120,
                    },
                    img: {
                        required: false,
                        extension: "png|jpeg|jpg"
                    }
                },
            // set validation messages for the rules are set previously
                messages: {
                    name: {
                        required : "Workout name is required",
                        minlength: "Workoutname must contain at least 5 characters",
                        maxlength: "Workoutname maxlength  100 characters"
                    },
                    description: {
                        required : "Description  is required"
                    },
                    img: {
                        required : "Please enter a value with a valid extension."
                    }

                }
            })
        }
        //validation for edit form 

          if ($("#workout_form_edit").length > 0) {
            $("#workout_form_edit").validate({
               rules: {
                    name: {
                        required : true,
                        minlength: 3,
                        maxlength:50
                    },
                    description: {
                        required : true,
                        maxlength: 120,
                    },
                    img: {
                        required: false,
                        extension: "png|jpeg|jpg"
                    }
                },
            // set validation messages for the rules are set previously
                messages: {
                    name: {
                        required : "Workout name is required",
                        minlength: "Workoutname must contain at least 5 characters",
                        maxlength: "Workoutname maxlength  100 characters"
                    },
                    description: {
                        required : "Description  is required"
                    },
                    img: {
                        required : "Please enter a value with a valid extension."
                    }

                }
            })
        }
        
        //workout plan form validations workout_plan_form
         if ($("#workout_plan_form").length > 0) {
            $("#workout_plan_form").validate({
               rules: {
                    trainersID[]: {
                        required : true,
                    },
                    traineeID[]: {
                        required : true,
                    },
                    workoutID[]: {
                        required: true,
                    },
                    repetition[]:{
                        required:true,
                    }
                },
            // set validation messages for the rules are set previously
                messages: {
                    trainersID[]: {
                        required : "Please select Trainer  is required",
                    },
                    traineeID[]: {
                        required : "Please select trainee "
                    },
                    workoutID[]: {
                        required : "Please Select workout."
                    },
                    repetition[]:{
                        required : "Repetition is required."
                    }

                }
            })
        }

  </script>


		</body>



</html>