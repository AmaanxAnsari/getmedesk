<header>  
  <title>Edit Job</title>
</header>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Edit Candidates</strong></h1>
                    <small>Jobs List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Jobs</li>
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
                            <h3 class="card-title">Edit Jobs</h3>
                        </div>
                        <div class="card-header">
                        
                            <form action="<?php echo base_url('update_job') ?>" method="POST" enctype="multipart/form-data">
                                <?php foreach ($resu as $object) { ?>
                                    <div class="form-group">
                                        <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name" value="<?php echo $object->id; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleFormControlInput1">Title *</label>
                                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Title" value="<?php echo $object->title; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description *</label>
                                    <textarea name="description" type="text" class="form-control" id="summernote" rows="3" placeholder="Enter Job Description"><?php echo $object->description; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Skills *</label>
                                    <input name="skills" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Skills" value="<?php echo $object->skills; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Min Experience *</label>
                                    <input name="min_experience" type="num" class="form-control" id="exampleFormControlInput1" placeholder="Enter Min Experience" value="<?php echo $object->min_experience; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Max Experience *</label>
                                    <input name="max_experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Max Experience" value="<?php echo $object->max_experience; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Min Salary *</label>
                                    <input name="min_salary" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Min Salary" value="<?php echo $object->min_salary; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Max Salary *</label>
                                    <input name="max_salary" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Max Salary" value="<?php echo $object->max_salary; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Notice Period *</label>
                                    <input name="notice_period" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Notice Period" value="<?php echo $object->notice_period; ?>">
                                </div>
                               
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlInput1">Company ID *</label>
                                    <input name="company_id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company ID" value="<?php echo $object->company_id; ?>">
                                </div> -->
                                    <button name="submit" type="submit" class="btn btn-danger mb-2">Edit Job</button>
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