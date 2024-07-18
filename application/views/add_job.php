<header>  
  <title>Add Job</title>
</header>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add Job</strong></h1>
                    <small>Job Form</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Add Job</li>
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
                            <h3 class="card-title">Add Job</h3>
                        </div>
                        <div class="card-header">
                            <form action="<?php echo base_url('create_jobs') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title *</label>
                                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description *</label>
                                    <textarea  name="description" type="text" class="form-control" rows="3" placeholder="Enter Job Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Skills *</label>
                                    <input name="skills" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Skills">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Min Experience *</label>
                                    <input name="min_experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Min Experience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Max Experience *</label>
                                    <input name="max_experience" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Max Experience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Min Salary *</label>
                                    <input name="min_salary" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Min Salary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Max Salary *</label>
                                    <input name="max_salary" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Max Salary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Notice Period *</label>
                                    <input name="notice_period" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job Notice Period">
                                </div>
                        
                           
                               <div class="form-group">
                                    <label for="exampleFormControlSelect1">Qualification*</label>
                                    <select name="qualification" class="form-control" id="exampleFormControlSelect1">
                                        <option>Under Graduate</option>
                                        <option>Graduate</option>
                                        <option>Post Graduate</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job Type*</label>
                                    <select name="job_type" class="form-control" id="exampleFormControlSelect1">
                                        <option>Internship</option>
                                        <option>Full Time</option>
                                        <option>Remote</option>
                                        
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Role *</label>
                                    <select name="role" class="form-control" id="exampleFormControlSelect1">
                                        <option>Developer</option>
                                        <option>Support</option>
                                        <option>Tester</option>
                                        
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category*</label>
                                    <select name="category" class="form-control" id="exampleFormControlSelect1">
                                        <option>Development</option>
                                        <option>Consultancy</option>
                                        <option>Testing</option>
                                        
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Gender*</label>
                                    <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                        <option>Any</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Short Description *</label>
                                    <textarea name="short_desc" type="text" class="form-control" rows="2" placeholder="Enter Short Description"></textarea>
                                </div>

                                 <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deadline*</label>
                                    <input type="date" name="deadline" class="form-control" id="exampleFormControlTextarea1"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Location*</label>
                                    <input name="location" class="form-control" id="exampleFormControlTextarea1"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Company ID*</label>
                                    <input name="company_id" class="form-control" id="exampleFormControlTextarea1"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">No of Opening*</label>
                                    <input name="no_of_openings" class="form-control" id="exampleFormControlTextarea1"></input>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Work Mode *</label>
                                    <select name="work_mode" class="form-control" id="exampleFormControlSelect1">
                                        <option>On-site</option>
                                        <option>Remote</option>
                                        <option>Hybrid</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Company Logo *</label>
                                    <input name="company_logo" type="file" class="form-control" id="exampleFormControlTextarea1"></input>
                                </div>
                                <button name="submit" type="submit" class="btn btn-danger mb-2">Add Job</button>
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