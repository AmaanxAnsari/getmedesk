<header>  
  <title>Companies</title>
</header>

<div class="content-wrapper" style="width: 1500px; ;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Companies</strong></h1>
                    <small>Companies List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Companies</li>
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
                            <h3 class="card-title">Companies</h3>
                        </div>
                        <div class="card-header">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Company
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Add Company</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="<?php echo base_url('create_company') ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                     <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Name</label>
                                                    <input name="company_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Website</label>
                                                    <input name="website" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Website"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Description</label>
                                                    <textarea name="description" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Linked In</label>
                                                    <input name="linkedin" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Linked In"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's FaceBook</label>
                                                    <input name="facebook" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter FaceBook"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Instagram</label>
                                                    <input name="instagram" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Instagram"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Twitter</label>
                                                    <input name="twitter" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Twitter"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Glassdoor</label>
                                                    <input name="glassdoor" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Glassdoor"></input>
                                                </div>
                                            </div>
                                             <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Email</label>
                                                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company Email"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Phone</label>
                                                    <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Company Phone"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Person Designation</label>
                                                    <input name="primary_contact_person_designation" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Person Designation"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                               <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Person Name</label>
                                                    <input name="primary_contact_person_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter  Person Name"></input>
                                                </div> 
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Person Phone</label>
                                                    <input name="primary_contact_person_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter  Person Phone"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Person Email</label>
                                                    <input name="primary_contact_person_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter  Person Email"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Logo</label>
                                                    <input name="logo" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter Logo"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Location</label>
                                                    <input name="location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Location"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company Established In</label>
                                                    <input name="establishedin" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Enter Established"></input>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlInput1">Company's Employee Size</label>
                                                    <input name="employee_size" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Employee Size"></input>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Save changes</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 50px ;">Sr.No.</th>
                                        <!-- <th style="width: 50px ;">ID</th> -->
                                        <th>Name</th>
                                        <!-- <th>Description</th>
                                        <th>Website</th>
                                        <th>Linked Inr</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Twitter</th>
                                        <th>Glassdoor</th>
                                        <th>Logo</th>
                                        <th>Location</th> -->
                                        <!-- <th>Established In</th>
                                        <th>Employee Size</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>PCP Designation</th> -->
                                        <th>PCP Name</th>
                                        <th>PCP Phone</th>
                                        <th >PCP Email</th>
                                        <th>Edit</th>
                                        <!-- <th>Delete</th> -->

                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($results as $object) { ?>
                                                                                                        <tr>
                                                                                                            <td><?php echo $i; ?></td>
                                                                                                            <td><?php echo $object->company_name; ?></td>
                                                                                                            <td><?php echo $object->primary_contact_person_name; ?></td>
                                                                                                            <td><?php echo $object->primary_contact_person_number; ?></td>
                                                                                                            <td><?php echo $object->primary_contact_person_email; ?></td>
                                                                                            <!-- <td><?php echo $object->id; ?></td> 
                                                                                    <td><?php echo $object->description; ?></td>
                                                                                    <td><?php echo $object->website; ?></td>
                                                                                    <td><?php echo $object->linkedin; ?></td>
                                                                                    <td><?php echo $object->facebook; ?></td>
                                                                                    <td><?php echo $object->instagram; ?></td>
                                                                                    <td><?php echo $object->twitter; ?></td>
                                                                                    <td><?php echo $object->glassdoor; ?></td>
                                                                                    <td><?php echo $object->logo; ?></td> 
                                                                                    <td><?php echo $object->location; ?></td> 
                                                                                    <td><?php echo $object->establishedin; ?></td>
                                                                                    <td><?php echo $object->employee_size; ?></td>
                                                                                    <td><?php echo $object->email; ?></td>
                                                                                    <td><?php echo $object->phone; ?></td> 
                                                                                    <td><?php echo $object->primary_contact_person_designation; ?></td> -->
                                                
                                                                                                            <td><a class="btn btn-primary" type="button"  data-toggle="modal" data-target="#updateCompany<?= $object->id ?>">Edit</a>
                                                                                                                        <!--Update Modal -->
                                                                                                            <div class="modal fade" id="updateCompany<?= $object->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h5 class="modal-title" id="exampleModalLongTitle">Update Company</h5>
                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <form action="<?php echo base_url('update_company/') . $object->id ?>" method="POST" enctype="multipart/form-data">
                                                                                                            <div class="row">
                                                                                                                <div class="col-lg-6 col-md-6">
                                                                                                                     <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Name</label>
                                                                                                                    <input name="company_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Company Name" value="<?php echo $object->company_name; ?>">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6 col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Website</label>
                                                                                                                    <input name="website" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Website" value="<?php echo $object->website; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-12">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Description</label>
                                                                                                                    <textarea name="description" type="text"  class="form-control" row="3"  placeholder=" Company Description"> <?php echo $object->description; ?></textarea>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="col-lg-6 col-md-6">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="exampleFormControlInput1">Company's Linked In</label>
                                                                                                                        <input name="linkedin" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Linked In" value="<?php echo $object->linkedin; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6 col-md-6">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's FaceBook</label>
                                                                                                                    <input name="facebook" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" FaceBook"value="<?php echo $object->facebook; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6 col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Instagram</label>
                                                                                                                    <input name="instagram" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Instagram"value="<?php echo $object->instagram; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6 col-md-6">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Twitter</label>
                                                                                                                    <input name="twitter" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Twitter" value="<?php echo $object->twitter; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6 col-md-6">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Glassdoor</label>
                                                                                                                    <input name="glassdoor" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Glassdoor" value="<?php echo $object->glassdoor; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                             <div class="col-lg-6 col-md-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Email</label>
                                                                                                                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Company Email" value="<?php echo $object->email; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Phone</label>
                                                                                                                    <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Company Phone" value="<?php echo $object->phone; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Person Designation</label>
                                                                                                                    <input name="primary_contact_person_designation" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Person Designation" value="<?php echo $object->primary_contact_person_designation; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                               <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Person Name</label>
                                                                                                                    <input name="primary_contact_person_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="  Person Name" value="<?php echo $object->primary_contact_person_name; ?>"></input>
                                                                                                                </div> 
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Person Phone</label>
                                                                                                                    <input name="primary_contact_person_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="  Person Phone" value="<?php echo $object->primary_contact_person_number; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Person Email</label>
                                                                                                                    <input name="primary_contact_person_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="  Person Email" value="<?php echo $object->primary_contact_person_email; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Logo</label>
                                                                                                                    <input name="logo_existing" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder=" Logo" value="<?php echo $object->logo; ?>"></input>
                                                                                                                    <input name="logo" type="file" class="form-control" id="exampleFormControlInput1" placeholder=" Logo" value="<?php echo $object->logo; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Location</label>
                                                                                                                    <input name="location" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Location" value="<?php echo $object->location; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company Established In</label>
                                                                                                                    <input name="establishedin" type="date" class="form-control" id="exampleFormControlInput1" placeholder=" Established" value="<?php echo $object->establishedin; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-4 col-md-4">
                                                                                                                 <div class="form-group">
                                                                                                                    <label for="exampleFormControlInput1">Company's Employee Size</label>
                                                                                                                    <input name="employee_size" type="number" class="form-control" id="exampleFormControlInput1" placeholder=" Employee Size" value="<?php echo $object->employee_size; ?>"></input>
                                                                                                                </div>
                                                                                                            </div>
                                           

                                            

                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                                            <button type="submit" class="btn btn-success">Save changes</button>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div></td>
                                            
                                                                                                            <!-- <td><a href="<?php echo base_url('company_delete/' . $object->id); ?>" class="btn btn-danger">Delete</a></td> -->

                                                                                                        </tr>
                                                                                                    <?php
                                                                                                    $i++;
                                    } ?>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>ID</th>

                                        <th>Name</th>
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