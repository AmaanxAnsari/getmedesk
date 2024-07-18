<header>
    <title>Allot Job</title>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Allot Job</strong></h1>
                    <small>Candidates List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Allot Job</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                    <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="">Name:</label>
                                                <p style="background-color: white ;" type="text" readonly value="" class="form-control"><?php echo $candidate_data[0]->name;?></p>
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                    <div class="col-lg-3">
                                    <form action="<?php echo base_url('add_candidate_job') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                    <label for="exampleFormControlInput1">Select Job *</label>
                                    <select name="job_id" required class="form-control select2" id="">
                                        <option>None</option>
                                        <?php
                                        $data = array(
                                            'deleted_time' => NULL
                                        );
                                        
                                        $get= $this->User_model->read_data_where('jobs', $data);
                                        foreach ($get as $o) {
                                        ?>
                                            <option value="<?php echo $o->id ?>"><?php echo $o->title; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                    </div>
                            </div>
                            <!-- <a href="<?php echo base_url('add_candidate'); ?>" class="btn btn-info">Add Candidate</a>-->
                            
                                <input type="hidden" required name="candidate_id" value="<?php echo $candidate_id;?>" class="form-control">
                                <button name="submit" type="submit" class="btn btn-info mb-2">Allot Job</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                  <tr>
                    <th style="width: 10px ;">Sr.No.</th>
                    <th style="width: 35px ; display:none;">Job ID</th>
                    <th style="width: 250px ;">Job Alloted</th>
                    <th style="width: 250px ;">Delete</th>

                     </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  if ($candidate_job) {
                  foreach ($candidate_job as $o) {
                    $jobs_data = $this->User_model->get_data_by_id("jobs", $o->job_id, "id");
                        ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><input  style="display:none;" name="job_delete" value="<?php echo $o->job_id; ?>"><?php echo $o->job_id; ?></td>
                        <!-- <td><?php echo $candidate_data[0]->name; ?></td> -->
                        <td><?php echo $jobs_data[0]->title; ?></td>
                        <td><a class="btn btn-danger" href="<?php echo base_url('allot_job_delete/' . $o->job_id . '/'. $candidate_id) ?>">Delete</a></td>
                    </tr>
                    <?php
                    $i++;
                }
                }else {
                    echo "";
                }
                  ?>
                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>ID</th>
                                        <th>Candidate Name</th>
                                        <th>Job Profile</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>