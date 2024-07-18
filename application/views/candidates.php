<header>
  <title>Candidates</title>
</header>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Candidates</strong></h1>
          <small>Candidates List</small>
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
            <div class="card-header">
              <h3 class="card-title">Candidates</h3>
            </div>
            <!-- <div class="card-header">
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
                  foreach ($candidates as $object) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $i; ?>
                      </td>

                      <td>
                        <?php echo $object->candidate_fname . " " . $object->candidate_lname; ?>
                      </td>
                      <td><a href="mailto:<?php echo $object->candidate_email; ?>">
                          <?php echo $object->candidate_email; ?>
                        </a></td>
                      <td><a href="tel:+<?php echo $object->candidate_phone; ?>">
                          <?php echo $object->candidate_phone; ?>
                        </a></td>


                      <td>
                        <?php if ($object->candidate_resume != "") {

                          ?><a class="btn btn-primary"
                            href="<?php echo base_url('uploads/resume/') . $object->candidate_resume ?>"
                            target="_parent">View</a>
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