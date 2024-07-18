<header>  
  <title>Edit Company</title>
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

                            <form action="<?php echo base_url('update_company') ?>" method="POST" enctype="multipart/form-data">
                                <?php foreach ($resu as $object) { ?>
                                    <div class="form-group">
                                        <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name" value="<?php echo $object->id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's Name</label>
                                        <input name="company_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company Name" value="<?php echo $object->name; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's Address</label>
                                        <textarea name="company_address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company Address"> <?php echo $object->address; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's PAN Number</label>
                                        <input name="pan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter PAN Number" value="<?php echo $object->pan; ?>"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's GST Number</label>
                                        <input name="gst" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter GST Number" value="<?php echo $object->gst; ?>"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's Contract Start Date</label>
                                        <input name="contract_start" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contract Start Date" value="<?php echo $object->contract_start; ?>"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's Contract End Date</label>
                                        <input name="contract_end" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Contract End Date" value="<?php echo $object->contract_end; ?>"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Add Company's Commission Rate</label>
                                        <input name="commission_rate" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Commission Rate" value="<?php echo $object->commission_rate; ?>"></input>
                                    </div>
                                    <button name="submit" type="submit" class="btn btn-danger mb-2">Edit Company</button>
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