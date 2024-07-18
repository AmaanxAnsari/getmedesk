<header>
    <title>Candidate Details</title>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>DETAILS</strong></h1>
                    <small>Candidate details</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Candidate Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Candidate Details</h3>
                        </div>
                        <div class="card-header">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name *</label>
                                    <p style="width: 30%; padding: 5px;" class="border border-secondary"><?php echo $candidate_data[0]->name; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlInput1"><?php echo $candidate_data[0]->email; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Mobile No *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlSelect1"><?php echo $candidate_data[0]->mobile; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Current Company *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlSelect1"><?php echo $candidate_data[0]->company; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Current CTC *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->current_ctc; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Expected CTC *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->expected_ctc; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Skills *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->skills; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Experience *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->experience; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Current Location *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->current_loc; ?></p>
                                </div>
                                <label for="exampleFormControlTextarea1">Preferred Locations *</label>
                                <div class="form-group">
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1">
                                        <?php
                                        if ($expected_locations) {
                                            $len = count($expected_locations);
                                            $i = 1;
                                            foreach ($expected_locations as $o) {
                                                $city_data = $this->User_model->get_data_by_id("cities", $o->city_id, "id");
                                                // if ($i <  $len) {
                                                //     echo $city_data[0]->city . ",";
                                                // } else {
                                                //     echo $city_data[0]->city;
                                                // }
                                                echo $city_data[0]->city;
                                                if ($i < $len) {
                                                    echo ", ";
                                                }
                                                $i++;
                                            }
                                        }else {
                                            echo "";
                                          } ?>
                                    </p>
                                </div>
                                <!-- <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Expected Location2 *</label>
                                        <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $object->loc_2; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Expected Location3 *</label>
                                        <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $object->loc_3; ?></p>
                                    </div> -->
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Offer *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->offer; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Notice Period *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->notice_period; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Last Working Day *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php echo $candidate_data[0]->last_working_day; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Is Notice Period Negotiable? *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1">
                                        <?php if ($candidate_data[0]->notice_negotiable == 1) {
                                            echo "YES";
                                        } else {
                                            echo "NO";
                                        } ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Resume *</label>
                                    <p style="width: 30% ; padding: 5px;" class="border border-secondary" for="exampleFormControlTextarea1"><?php if ($candidate_data[0]->resume != "") { ?>
                                            <a href="<?php echo base_url('uploads/') . $candidate_data[0]->resume ?>">View -</a>
                                            <a href="<?php echo base_url('uploads/') . $candidate_data[0]->resume ?>" download="">Download</a>
                                        <?php } ?>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

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