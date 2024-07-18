<header>
  <title>Job</title>

</header>

<div class="content-wrapper" style="width: 130rem ;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Jobs</strong></h1>
          <small>Jobs List</small>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
            <li class="breadcrumb-item active">Jobs</li>
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
              <h3 class="card-title">Jobs</h3>
            </div>
            <div class="card-header">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                Add Job
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Add Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">


                      <form action="<?php echo base_url('create_jobs') ?>" method="POST">
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Title *</label>
                              <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Job Title">
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Description *</label>
                              <textarea name="description" type="text" class="form-control summernote" id="" rows="3"
                                placeholder="Enter Job Description"></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12">

                            <div class="form-group">
                              <label for="skillsControlSelect1">Skills *</label>
                              <!-- <input name="skills" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Job Skills"> -->
                              <select name="skills[]" class="form-control select2" id="skillsControlSelect1" multiple>
                                <option value="React"></option>React</option>
                                <option value="Javascript">Javascript</option>
                                <option value="Html">Html</option>
                                <option value="Css">Css</option>
                                <option value="Angular">Angular</option>
                                <option value="Python">Python</option>
                                <option value="Bootstrap">Bootstrap</option>
                                <option value="MongoDB">MongoDB</option>
                                <option value="NodeJS">NodeJS</option>
                                <option value="Flutter">Flutter</option>
                                <option value="Linux">Linux</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Min Experience (Years)*</label>
                              <!-- <input name="min_experience" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Min Experience"> -->
                              <select name="min_experience" class="form-control" id="exampleFormControlSelect1">
                                <?php for ($e = 0; $e <= 25; $e++): ?>
                                  <option value="<?php echo $e; ?>">
                                    <?php echo $e; ?>
                                  </option>
                                <?php endfor; ?>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Max Experience (Years)*</label>
                              <!-- <input name="max_experience" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Max Experience"> -->
                              <select name="max_experience" class="form-control" id="exampleFormControlSelect1">
                                <?php for ($e = 0; $e <= 25; $e++): ?>
                                  <option value="<?php echo $e; ?>">
                                    <?php echo $e; ?>
                                  </option>
                                <?php endfor; ?>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Min Salary (LPA)*</label>
                              <!-- <input name="min_salary" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Job Min Salary"> -->
                              <select name="min_salary" class="form-control" id="exampleFormControlSelect1">
                                <?php for ($s = 0; $s <= 26; $s += 0.5): ?>
                                  <option value="<?php echo $s; ?>">
                                    <?php echo $s; ?>
                                  </option>
                                <?php endfor; ?>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Max Salary (LPA)*</label>
                              <!-- <input name="max_salary" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Job Max Salary"> -->
                              <select name="max_salary" class="form-control" id="exampleFormControlSelect1">
                                <?php for ($s = 0; $s <= 26; $s += 0.5): ?>
                                  <option value="<?php echo $s; ?>">
                                    <?php echo $s; ?>
                                  </option>
                                <?php endfor; ?>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Notice Period (Days)*</label>
                              <!-- <input name="notice_period" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Job Notice Period"> -->
                              <select name="notice_period" class="form-control" id="exampleFormControlSelect1">
                                <option>Immedidate joiner</option>
                                <option>15</option>
                                <option>30</option>
                                <option>45</option>
                                <option>60</option>
                                <option>75</option>
                                <option>90</option>
                              </select>

                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">



                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Qualification*</label>
                              <input name="qualification" type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter Qualification">
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Job Type*</label>
                              <select name="job_type" class="form-control" id="exampleFormControlSelect1">
                                <option>Internship</option>
                                <option>Full Time</option>
                                <option>Remote</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Role *</label>
                              <select name="role" class="form-control" id="exampleFormControlSelect1">
                                <option>Developer</option>
                                <option>Support</option>
                                <option>Tester</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Category*</label>
                              <select name="category" class="form-control" id="exampleFormControlSelect1">
                                <option>Development</option>
                                <option>Consultancy</option>
                                <option>Testing</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Gender*</label>
                              <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                <option>Any</option>
                                <option>Male</option>
                                <option>Female</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Short Description *</label>
                              <textarea name="short_desc" type="text" class="form-control summernote" id="" rows="2"
                                placeholder="Enter Short Description"></textarea>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Company Name*</label>
                              <!-- <input name="company_id" class="form-control" id="exampleFormControlTextarea1"></input> -->
                              <select name="company_id" class="form-control" id="exampleFormControlSelect1">
                                <?php foreach ($company as $company): ?>
                                  <option value="<?php echo $company->id; ?>">
                                    <?php echo $company->company_name; ?>
                                  </option>
                                <?php endforeach; ?>
                              </select>

                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6">

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Location*</label>
                              <!-- <input name="location" class="form-control" id="exampleFormControlTextarea1"></input> -->
                              <select name="location" class="form-control" id="exampleFormControlSelect1">
                                <option>Bangalore</option>
                                <option>Chennai</option>
                                <option>Mangalore</option>
                                <option>Hyderabad</option>
                                <option>Mumbai</option>
                                <option>Pune</option>
                                <option>Kolkata</option>
                                <option>Chandigarh</option>
                                <option>Ahmedabad</option>
                                <option>Visakhapatnam</option>
                              </select>
                            </div>
                          </div>


                          <div class="col-lg-4 col-md-4">

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">No of Opening*</label>
                              <input name="no_of_openings" class="form-control"
                                id="exampleFormControlTextarea1"></input>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">


                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Work Mode *</label>
                              <select name="work_mode" class="form-control" id="exampleFormControlSelect1">
                                <option>On-site</option>
                                <option>Remote</option>
                                <option>Hybrid</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">


                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Deadline*</label>
                              <input type="date" name="deadline" class="form-control"
                                id="exampleFormControlTextarea1"></input>
                            </div>
                          </div>
                          <!-- <div class="form-group">
                          <label for="exampleFormControlTextarea1">Company Logo *</label>
                          <input name="company_logo" type="file" class="form-control"
                            id="exampleFormControlTextarea1"></input>
                        </div> -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save changes</button>
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
                      <th>Sr.No.</th>
                      <th>Title</th>
                      <th>Skills</th>
                      <th>Location</th>
                      <th>Company</th>
                      <th>View Candidates</th>
                      <th>Edit</th>
                      <!-- <th>Delete</th> -->
                      <!-- <th>Details</th> -->
                      <!-- <th>Description</th>
                    <th>Min Experience</th>
                    <th>Max Experience</th>
                    <th>Min Salary</th>
                    <th>Max Salary</th>
                    <th>Notice Period</th> -->
                      <!-- <th>Delete</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($job as $object) {
                      ?>
                      <tr>
                        <td>
                          <?php echo $i; ?>
                        </td>

                        <td>
                          <?php echo $object->title; ?>
                        </td>
                        <td>
                          <?php echo $object->skills; ?>
                        </td>
                        <!-- <td><?php echo $object->description; ?></td>
                      <td><?php echo $object->min_experience; ?></td>
                      <td><?php echo $object->max_experience; ?></td>
                      <td><?php echo $object->min_salary; ?></td>
                      <td><?php echo $object->max_salary; ?></td>
                      <td><?php echo $object->notice_period; ?></td> -->
                        <td>
                          <?php echo $object->location; ?>
                        </td>

                        <?php $company_data = $this->User_model->get_data_by_id("company", $object->company_id, "id"); ?>
                        <td>
                          <?php echo $company_data[0]->company_name; ?>
                        </td>
                        <td><a href="<?php echo base_url('applied_job_candidates/' . $object->id); ?>"
                            class="btn btn-warning">Candidate</a></td>
                        <!-- <td><a href="<?php echo base_url('job_details/' . $object->id); ?>"
                            class="btn btn-success">Details</a></td> -->
                        <td><a class="btn btn-primary" type="button" data-toggle="modal"
                            data-target="#updateJob<?= $object->id ?>">Edit</a>
                          <!--Update Modal -->
                          <div class="modal fade" id="updateJob<?= $object->id ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Update Job</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="<?php echo base_url('update_job/') . $object->id ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">



                                      <div class="form-group">
                                        <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1"
                                          placeholder="Enter Product Name" value="<?php echo $object->id; ?>">
                                      </div>
                                      <div class="col-lg-12 col-md-12">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Title *</label>
                                          <input name="title" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Enter Job Title"
                                            value="<?php echo $object->title; ?>">
                                        </div>
                                      </div>
                                      <div class="col-lg-12 col-md-12">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Description *</label>
                                          <textarea name="description" type="text" class="form-control summernote" id=""
                                            rows="3"
                                            placeholder="Enter Job Description"><?php echo $object->description; ?></textarea>
                                        </div>
                                      </div>
                                      <div class="col-lg-12 col-md-12">

                                        <div class="form-group">
                                          <label for="skillsControlSelect1">Skills *</label>

                                          <select name="skills[]" class="form-control select2"
                                            id="exampleFormControlInput1" multiple>

                                            <option value="React">React</option>
                                            <option value="Javascript">Javascript</option>
                                            <option value="Html">Html</option>
                                            <option value="Css">Css</option>
                                            <option value="Angular">Angular</option>
                                            <option value="Python">Python</option>
                                            <option value="Bootstrap">Bootstrap</option>
                                            <option value="MongoDB">MongoDB</option>
                                            <option value="NodeJS">NodeJS</option>
                                            <option value="Flutter">Flutter</option>
                                            <option value="Linux">Linux</option>

                                            <?php
                                            $skillsArray = explode(', ', $object->skills);
                                            foreach ($skillsArray as $skill) {
                                              echo '<option value="' . $skill . '" ' . (strpos($object->skills, $skill) !== false ? 'selected' : '') . '>';
                                              echo $skill;
                                              echo '</option>';
                                            }
                                            ?>


                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Min Experience (Years)*</label>
                                          <!-- <input name="min_experience" type="num" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Enter Min Experience"
                                        value="<?php echo $object->min_experience; ?>"> -->
                                          <select name="min_experience" class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option>
                                              <?php echo $object->min_experience; ?>
                                            </option>
                                            <?php for ($e = 0; $e <= 25; $e++): ?>
                                              <option value="<?php echo $e; ?>">
                                                <?php echo $e; ?>
                                              </option>
                                            <?php endfor; ?>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Max Experience (Years)*</label>
                                          <!-- <input name="max_experience" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Enter Max Experience"
                                        value="<?php echo $object->max_experience; ?>"> -->
                                          <select name="max_experience" class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option>
                                              <?php echo $object->max_experience; ?>
                                            </option>
                                            <?php for ($e = 0; $e <= 25; $e++): ?>
                                              <option value="<?php echo $e; ?>">
                                                <?php echo $e; ?>
                                              </option>
                                            <?php endfor; ?>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Min Salary (LPA)*</label>
                                          <!-- <input name="min_salary" type="text" class="form-control"
                                          id="exampleFormControlInput1" placeholder="Enter Job Min Salary"
                                          value="<?php echo $object->min_salary; ?>"> -->
                                          <select name="min_salary" class="form-control" id="exampleFormControlSelect1">
                                            <option>
                                              <?php echo $object->min_salary; ?>
                                            </option>
                                            <?php for ($s = 0; $s <= 26; $s += 0.5): ?>
                                              <option value="<?php echo $s; ?>">
                                                <?php echo $s; ?>
                                              </option>
                                            <?php endfor; ?>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Max Salary (LPA)*</label>
                                          <!-- <input name="max_salary" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Enter Job Max Salary"
                                        value="<?php echo $object->max_salary; ?>"> -->
                                          <select name="max_salary" class="form-control" id="exampleFormControlSelect1">
                                            <option>
                                              <?php echo $object->max_salary; ?>
                                            </option>
                                            <?php for ($s = 0; $s <= 26; $s += 0.5): ?>
                                              <option value="<?php echo $s; ?>">
                                                <?php echo $s; ?>
                                              </option>
                                            <?php endfor; ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Notice Period (Days)*</label>
                                          <!-- <input name="notice_period" type="text" class="form-control"
                                          id="exampleFormControlInput1" placeholder="Enter Job Notice Period"
                                          value="<?php echo $object->notice_period; ?>"> -->
                                          <select name="notice_period" class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option>
                                              <?php echo $object->notice_period; ?>
                                            </option>
                                            <option>Immedidate joiner</option>
                                            <option>15</option>
                                            <option>30</option>
                                            <option>45</option>
                                            <option>60</option>
                                            <option>75</option>
                                            <option>90</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Qualification *</label>
                                          <input name="qualification" type="text" class="form-control"
                                            id="exampleFormControlInput1" value="<?php echo $object->qualification; ?>">

                                          <!-- <select name="qualification" class="form-control" id="exampleFormControlSelect1">
                                        <option>Under Graduate</option>
                                        <option>Graduate</option>
                                        <option>Post Graduate</option>
                                      </select> -->
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Job Type *</label>
                                          <select name="job_type" class="form-control" id="exampleFormControlSelect1">
                                            <option>Internship</option>
                                            <option>Full Time</option>
                                            <option>Remote</option>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Role *</label>
                                          <select name="role" class="form-control" id="exampleFormControlSelect1">
                                            <option>Developer</option>
                                            <option>Support</option>
                                            <option>Tester</option>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Category*</label>
                                          <select name="category" class="form-control" id="exampleFormControlSelect1">
                                            <option>Development</option>
                                            <option>Consultancy</option>
                                            <option>Testing</option>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Gender*</label>
                                          <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                            <option>Any</option>
                                            <option>Male</option>
                                            <option>Female</option>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-12 col-md-12">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Short Description *</label>
                                          <textarea name="short_desc" type="text" class="summernote form-control" id=""
                                            rows="2"
                                            placeholder="Enter Short Description"><?php echo $object->short_desc; ?></textarea>
                                        </div>
                                      </div>

                                      <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Company Name *</label>
                                          <!-- <input name="company_id" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Enter Company ID"
                                        value="<?php echo $object->company_id; ?>"> -->
                                          <select name="company_id" class="form-control" id="exampleFormControlSelect1">
                                            <?php $company_details = $this->User_model->get_data("company"); ?>

                                            <?php foreach ($company_details as $comp): ?>
                                              <option value="<?php echo $comp->id; ?>">
                                                <?php echo $comp->company_name; ?>
                                              </option>
                                            <?php endforeach; ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Location *</label>
                                          <!-- <input name="location" type="text" class="form-control"
                                        id="exampleFormControlInput1" placeholder="Enter Location"
                                        value="<?php echo $object->location; ?>"> -->
                                          <select name="location" class="form-control" id="exampleFormControlSelect1">
                                            <option>Bangalore</option>
                                            <option>Chennai</option>
                                            <option>Mangalore</option>
                                            <option>Hyderabad</option>
                                            <option>Mumbai</option>
                                            <option>Pune</option>
                                            <option>Kolkata</option>
                                            <option>Chandigarh</option>
                                            <option>Ahmedabad</option>
                                            <option>Visakhapatnam</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-lg-4 col-md-4">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">No of Opening *</label>
                                          <input name="no_of_openings" type="text" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Enter No of Opening"
                                            value="<?php echo $object->no_of_openings; ?>">
                                        </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4">

                                        <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Work Mode *</label>
                                          <select name="work_mode" class="form-control" id="exampleFormControlSelect1">
                                            <option>On-site</option>
                                            <option>Remote</option>
                                            <option>Hybrid</option>

                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-4 col-md-4">

                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Deadline *</label>
                                          <input name="deadline" type="date" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Enter Deadline"
                                            value="<?php echo $object->deadline; ?>">
                                        </div>
                                      </div>
                                      <!-- <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Company Logo *</label>
                                      <input name="company_logo" type="file" class="form-control"
                                        id="exampleFormControlTextarea1"
                                        value="<?php echo $object->company_logo; ?>"></input>
                                    </div> -->

                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                  </form>

                                </div>
                              </div>
                            </div>
                        </td>
                        <!-- <td><a href="<?php echo site_url('job_delete/' . $object->id); ?>"
                            class="btn btn-danger">Delete</a></td> -->
                      </tr>
                      <?php
                      $i++;
                    }
                    ?>
                  </tbody>
                  <!-- <tfoot>
                <tr>
                    <th>Sr.No.</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Min Exp</th>
                    <th>Max Exp</th>
                    <th>Min Salary</th>
                    <th>Max Salary</th>
                    <th>Notice Period</th>
                    <th>Location</th>
                    <th>Company ID</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
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