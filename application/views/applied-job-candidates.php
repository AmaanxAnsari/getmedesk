<header>
    <title>Applied Job Candidates</title>
</header>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Candidates</strong></h1>
                    <small>
                        <?php echo ($job_details[0]->title); ?>
                    </small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Candidates</li>
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
                        <!--  <div class="card-header">

                            <h3 class="card-title">
                                Candidates:
                                <?php echo ($job_details[0]->title); ?>
                            </h3>

                        </div>
                         <div class="card-header">
              <a href="<?php echo base_url('add_candidate'); ?>" class="btn btn-info">Add Candidate</a>
            </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th>Resume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($applied_job_details as $object) {
                                        $candidate_details = $this->User_model->get_candidate_by_id("candidate", $object->candidate_id, "candidate_id");
                                        // print_r($candidate_details)
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>

                                            <td>
                                                <?php echo $candidate_details[0]->candidate_fname . " " . $candidate_details[0]->candidate_lname; ?>
                                            </td>
                                            <td><a href="mailto:<?php echo $candidate_details[0]->candidate_email; ?>">
                                                    <?php echo $candidate_details[0]->candidate_email; ?>
                                                </a></td>
                                            <td><a href="tel:+<?php echo $candidate_details[0]->candidate_phone; ?>">
                                                    <?php echo $candidate_details[0]->candidate_phone; ?>
                                                </a></td>


                                            <td>
                                                <?php if ($candidate_details[0]->candidate_resume != "") {

                                                    ?><a class="btn btn-primary"
                                                        href="<?php echo base_url('uploads/resume/') . $candidate_details[0]->candidate_resume ?>">View</a>
                                                <?php } ?>

                                            </td>

                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>

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