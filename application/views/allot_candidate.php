<header>
    <title>Allot Candidate</title>
</header>
<div class="content-wrapper" style="width: 2000px; ;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Allot Candidate</strong></h1>
                    <small>Candidates List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Allot Candidate</li>
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
                                        <label for="">Job:</label>
                                        <input style="background-color: white ;" type="text" readonly value="<?php echo $jobs_data[0]->title; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3">
                                    <form action="<?php echo base_url('allot_candidate_to_job') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Select Candidate *</label>
                                            <select name="candidate_id" required class="form-control select2" id="">
                                                <option>None</option>
                                                <?php
                                                $data = array(
                                                    'deleted_time' => NULL
                                                );

                                                $get = $this->User_model->read_data_where('candidates', $data);
                                                foreach ($get as $o) {
                                                ?>
                                                    <option value="<?php echo $o->id ?>"><?php echo $o->name; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <input type="hidden" required name="job_id" value="<?php echo $job_id; ?>" class="form-control">
                            <button name="submit" type="submit" class="btn btn-info mb-2">Allot Candidate</button>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th style=" display:none;">Job ID</th>
                                        <th>Name</th>
                                        <th>Experience (yrs)</th>
                                        <th>Notice Period</th>
                                        <th>Skills</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Current Employer</th>
                                        <th>Current CTC</th>
                                        <th>Expected CTC</th>
                                        <th>Offer (if any)</th>
                                        <th>Current Location</th>
                                        <th>Preferred Locations</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($candidate_job as $o) {
                                        $candidates_data = $this->User_model->get_data_by_id("candidates", $o->candidate_id, "id");

                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td style="display:none;"><?php echo $o->candidate_id; ?></td>
                                            <td><?php echo $candidates_data[0]->name; ?></td>
                                            <td><?php echo $candidates_data[0]->experience; ?></td>
                                            <td><?php echo $candidates_data[0]->notice_period; ?></td>
                                            <td><?php echo $candidates_data[0]->skills; ?></td>
                                            <td><?php echo $candidates_data[0]->mobile; ?></td>
                                            <td><?php echo $candidates_data[0]->email; ?></td>
                                            <td><?php echo $candidates_data[0]->company; ?></td>
                                            <td><?php echo $candidates_data[0]->current_ctc; ?></td>
                                            <td><?php echo $candidates_data[0]->expected_ctc; ?></td>
                                            <td><?php echo $candidates_data[0]->offer; ?></td>
                                            <td><?php echo $candidates_data[0]->current_loc; ?></td>
                                            <td><?php
                                                $expected_locations = $this->User_model->get_data_by_id("expected_locations", $candidates_data[0]->id , "candidate_id");
                                                if ($expected_locations) {
                                                    $len = count($expected_locations);
                                                    $i = 1;
                                                    foreach ($expected_locations as $p) {
                                                        $city_data = $this->User_model->get_data_by_id("cities", $p->city_id, "id");
                                                        echo $city_data[0]->city;
                                                        if ($i < $len) {
                                                            echo ", ";
                                                        }
                                                        
                                                        $i++;
                                                    }
                                                }else {
                                                    echo "";
                                                } ?></td>
                                                <td><a class="btn btn-danger" href="<?php echo base_url('allot_candidate_delete/' . $job_id . '/'. $o->candidate_id) ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                        $i++;
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