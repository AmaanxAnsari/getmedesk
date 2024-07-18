<header>  
  <title>Add Candidates</title>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add Candidate</strong></h1>
                    <small>Candidate List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Add Candidate</li>
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
                            <h3 class="card-title">Add Candidate</h3>
                        </div>
                        <div class="card-header">
                            <form action="<?php echo base_url('add_candidates') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name *</label>
                                    <input name="candidate_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email *</label>
                                    <input name="candidate_email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Email ID">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Mobile No *</label>
                                    <input name="candidate_mobile" type="num" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Mobile">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Company *</label>
                                    <input name="candidate_company" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Company">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Current CTC *</label>
                                    <input name="current_ctc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Current CTC">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected CTC *</label>
                                    <input name="expected_ctc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Expected CTC">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Skills *</label>
                                    <input name="skills" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Skills">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Experience *</label>
                                    <input name="experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Experience">
                                </div>
                                <div class="form-group">
                                    <label>Current Location *</label>
                                    <select name="current_loc" class="form-control select2" id="">
                                        <option>None</option>
                                        <?php
                                        $data = array(
                                            'deleted_time' => NULL
                                        );
                                        
                                        $get = $this->User_model->read_data_where('cities', $data);
                                        foreach ($get as $o) {
                                        ?>
                                            <option><?php echo $o->city; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <!-- <label style="display:none;">Enter your Name
                                        <input></input>
                                    </label>
                                    <script>
                                        $(document).ready(function() {
                                            $('select').change(function() {
                                                if ($('select option:selected').text() == "Other") {
                                                    $('label').show();
                                                } else {
                                                    $('label').hide();
                                                }
                                            })
                                        });
                                    </script> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected Locations *</label>
                                    <select multiple="multiple" name="loc_1[]" class="form-control select2" >
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
                                    <label for="exampleFormControlInput1">Expected Location 2</label>
                                    <select name="loc_2" class="form-control select2" id="">
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
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected Location 3</label>
                                    <select name="loc_3" class="form-control select2" id="exampleFormControlSelect1">
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
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Offer *</label>
                                    <input name="offer" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Offer">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Notice Period *</label>
                                    <input name="notice_period" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Notice Period">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlInput1">Notice Period Negotiable? *</label>
                                    <input name="notice_negotiable" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter if notice period is negotiable or not">
                                </div> -->
                                <label for="exampleFormControlSelect1">Notice Period Negotiable? *</label>
                                    <select name="notice_negotiable" class="form-control" id="exampleFormControlSelect1">
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                    </select>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Last Working Day *</label>
                                    <input name="last_working_day" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Candidate Last Working Day">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Resume *</label>
                                    <input name="uploading_document" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Upload Candidate Resume">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlSelect1">Candidate Category *</label>
                                    <select name="candidate_category" class="form-control" id="exampleFormControlSelect1">
                                        <option>Travel Gear</option>
                                        <option>Travel Companion</option>
                                        <option>Travel Utility</option>
                                        <option>Home appliance</option>
                                        <option>Healthcare</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">candidate Brand *</label>
                                    <select name="candidate_brand" class="form-control" id="exampleFormControlSelect1">
                                        <option>Glenn</option>
                                        <option>VIP</option>
                                        <option>Swiss Military</option>
                                        <option>Trident</option>
                                        <option>Amazon</option>
                                    </select>
                                </div> -->
                                <!-- 
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Short Description *</label>
                                    <textarea name="candidate_short_desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Long Description *</label>
                                    <textarea name="candidate_long_desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> -->
                                <button name="submit" type="submit" class="btn btn-danger mb-2">Add Candidate</button>
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
<!-- Page specific script -->