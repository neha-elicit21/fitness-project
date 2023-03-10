

<div class="site-content">

<div class="content-area py-1">

<div class="container-fluid">

	<div class="container-fluid">

    <div class="row-fluid">

      <div class="span12">

        <div class="widget-box">

           <?php
             if (!empty($this->session->flashdata('success_message'))) {
               echo $this->session->flashdata('success_message');
             }
             if (!empty($this->session->flashdata('error_message'))) {
               echo $this->session->flashdata('error_message');
             }
             ?>
        <div class="page-title" > 

          <h2>Workout</h2>

        </div>
  <div class="widget-content nopadding">
          <div class="col-xl-4 col-lg-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create Workout </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php //echo validation_errors(); ?>
            <form role="form" method="post" name="form" action="<?= base_url('index.php/trainers/workout_submit') ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Workout Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter Workout Name">
                  <div class="error"><?=form_error('name')?></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                 <textarea class="form-control" id="description" value="" name="description" rows="3"></textarea>
                     <div class="error"><?=form_error('description')?></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                   <input type='file' onchange="readURL(this);" name="img" id="exampleInputFile" />
                       <div class="error"><?=form_error('img')?></div>
                      <div class="select-img"> <img src="" id="blah" width="70" hieght="80"></div>
                </div>             
                <div class="box-footer">
                <button type="submit" class="btn ">Save</button>
              </div>
              </div>
              <!-- /.box-body -->

              
            </form>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-xl-8 col-lg-8">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Workout </h3>
            </div>             
            <div class="box-body workout-table">
              <table id="example2" class="table table-bordered table-hover text-center">
                <thead>
                  <tr>
                    <th>S No</th>
                    <th>Workout</th>
                    <th>Image</th>
                    <th>Desc</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                  $num=1;
                  foreach ($data as $key => $value) {
                  ?>
                  <tr>
                    <td><?= $num ?></td>
                    <td><?= $value['name'] ?></td>
                    <td> <img src="<?php echo base_url('img').'/'.$value['img']; ?>" id="blah" width="70" hieght="80"></td>
                    <td><?= $value['description'] ?></td>
                    <td><a href="<?php echo base_url("index.php/trainers/edit_workout").'/'.$value['id']; ?>" title="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="<?php echo base_url("index.php/trainers/delete_workout").'/'.$value['id']; ?>" title="edit"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php
                    $num++;
                  }
                    ?>
                  
                </tbody>
              </table>
            </div>
          </div>  
       </div>
                 <!--  <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Workout Name</label>
                      <input type="text" class="form-control" name="name" value="" id="name" placeholder="Workout name">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="descriptiobn" rows="3"></textarea>
                    </div>
                    <input type="submit" name="submit" value="Add">
                  </form> -->

                    

                    </div>

        </div>

      </div>

    </div>

  </div>

	

</div>

</div>

</div>
  <script type="text/javascript">
    function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#blah')
                      .attr('src', e.target.result)
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
  </script>