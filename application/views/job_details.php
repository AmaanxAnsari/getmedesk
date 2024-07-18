<header>
    <title>Job Details</title>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>DETAILS</strong></h1>
                    <small>Job details</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Job Details</li>
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
                            <h3 class="card-title">Job Details</h3>
                        </div>
                        <div class="card-header">
                            <form>
                                <?php foreach ($resu as $object) { ?>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Title *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $object->title; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Description *</label>
                                        <textarea name="description" type="text" class="form-control"
                                            id="exampleFormControlInput1" rows="3"
                                            placeholder=""><?php echo $object->description; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Skills *</label>
                                        <p style="width: 100%; padding: 5px;" name="skills" type="text"
                                            class="form-control border border-secondary" id="exampleFormControlInput1"
                                            placeholder="Enter Job Skills">
                                            <?php echo $object->skills; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Min Experience *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $object->min_experience; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Max Experience *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $object->max_experience; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Min Salary *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $object->min_salary; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Max Salary *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $object->max_salary; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Notice Period *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $object->notice_period; ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Location *</label>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php
                                            $job_locations = $this->User_model->get_data_by_id("jobs", $object->id, "id");
                                            if ($job_locations) {

                                                $len = count($job_locations);
                                                $i = 1;
                                                foreach ($job_locations as $o) {
                                                    $city_data = $this->User_model->get_data_by_id("jobs", $o->id, "id");
                                                    echo $city_data[0]->location;
                                                    if ($i < $len) {
                                                        echo ", ";
                                                    }
                                                    $i++;
                                                }
                                            } else {
                                                echo "Not Selected";
                                            } ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Company *</label>
                                        <?php $company_data = $this->User_model->get_data_by_id("company", $object->id, "id"); ?>
                                        <p style="width: 100%; padding: 5px;" class="border border-secondary">
                                            <?php echo $company_data[0]->company_name; ?>
                                        </p>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label for="exampleFormControlInput1">Expected Location *</label>
                                    <select name="expected_location[]" class="form-control" id="exampleFormControlSelect1" multiple>
                                        <?php
                                        $get = $this->User_model->get_full_data_by_table_name('jobs');
                                        foreach ($get as $o) {
                                            ?>
                                            <option><?php echo $o->location; ?></option>
                                        <?php
                                        }
                                        ?>
                                <?php } ?> -->
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