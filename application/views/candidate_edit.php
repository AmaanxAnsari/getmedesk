<header>  
  <title>Edit Candidate</title>
</header>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Edit Candidates</strong></h1>
                    <small>Candidates List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Candidates</li>
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
                            <h3 class="card-title">Edit Candidates</h3>
                        </div>
                        <div class="card-header">
                        
                            <form action="<?php echo base_url('update_candidate') ?>" method="POST" enctype="multipart/form-data">
                                <?php foreach ($re as $object) { ?>
                                    <div class="form-group">
                                        <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name" value="<?php echo $object->id; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleFormControlInput1">Name *</label>
                                    <input name="candidate_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Name" value="<?php echo $object->name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email *</label>
                                    <input name="candidate_email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Email ID" value="<?php echo $object->email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Mobile No *</label>
                                    <input name="candidate_mobile" type="num" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Mobile" value="<?php echo $object->mobile; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Company *</label>
                                    <input name="candidate_company" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Company" value="<?php echo $object->company; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Current CTC *</label>
                                    <input name="current_ctc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Current CTC" value="<?php echo $object->current_ctc; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected CTC *</label>
                                    <input name="expected_ctc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Expected CTC" value="<?php echo $object->expected_ctc; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Skills *</label>
                                    <input name="skills" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Skills" value="<?php echo $object->skills; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Experience *</label>
                                    <input name="experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Experience" value="<?php echo $object->experience; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Current Location *</label>
                                    <select name="current_loc" class="form-control select2" id="">
                                        <?php
                                        $get = $this->User_model->get_full_data_by_table_name('cities');
                                        foreach ($get as $o) {
                                        ?>
                                            <option><?php echo $o->city; ?></option>
                                        <?php
                                        }
                                        ?>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected Locations *</label>
                                    <select multiple="multiple" name="loc_1[]" class="form-control select2" id="">
                                        <option>None</option>
                                        <?php
                                        $data = array(
                                            'deleted_time' => NULL
                                        );
                                        
                                        $get = $this->User_model->read_data_where('cities', $data);
                                        foreach ($get as $o) {
                                        ?>
                                            <option value="<?php echo $o->id ?>"><?php echo $o->city; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <!-- <div id="myDropdown" class="form-group">
                                    <label for="exampleFormControlInput1">Expected Location 2 *</label>
                                    <select name="loc_2" class="form-control select" id="exampleFormControlSelect1">
                                        <option>None</option>
                                        <?php
                                        $get = $this->User_model->get_full_data_by_table_name('cities');
                                        foreach ($get as $o) {
                                        ?>
                                            <option value="<?php echo $o->id ?>"><?php echo $o->city; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected Location 3 *</label>
                                    <select name="loc_3" class="form-control" id="exampleFormControlSelect1">
                                        <option>None</option>
                                        <?php
                                        $get = $this->User_model->get_full_data_by_table_name('cities');
                                        foreach ($get as $o) {
                                        ?>
                                            <option value="<?php echo $o->id ?>"><?php echo $o->city; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Offer *</label>
                                    <input name="offer" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Offer" value="<?php echo $object->offer; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Notice Period *</label>
                                    <input name="notice_period" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Notice Period" value="<?php echo $object->notice_period; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Notice Period Negotiable? *</label>
                                    <input name="notice_negotiable" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter if notice period is negotiable or not" value="<?php echo $object->notice_negotiable; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Last Working Day *</label>
                                    <input name="last_working_day" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Last Working Day" value="<?php echo $object->last_working_day; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Resume *</label>
                                    <input name="uploading_document" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Upload Candidate Resume" value="<?php echo $object->resume; ?>">
                                </div>
                                    <button name="submit" type="submit" class="btn btn-danger mb-2">Edit Candidate</button>
                                <?php } ?>
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