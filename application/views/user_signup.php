<header>
    <title>Users</title>
</header>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Users</strong></h1>
                    <small>Users List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                            <h3 class="card-title">Users</h3>
                        </div>
                        <div class="card-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Users
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">User Sign-up</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url("signup"); ?>" method="post">
                                                <div class="label">
                                                    <label for="name">Name:</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input required type="text" id="username" name="username" class="form-control" placeholder="Enter Name">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label">
                                                    <label for="email">Email:</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input required type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label">
                                                    <label for="password">Password:</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input required type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label">
                                                    <label for="confirm_pass">Confirm Password:</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input required type="password" id="confirm_pass" name="confirm_pass" class="form-control" placeholder="Enter Password Again">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!-- /.col -->
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                            </form>
                                            <?php if ($this->session->flashdata('errors')) {
                                            ?>
                                                <br>
                                                <br>

                                                <div class="login-details text-left mb-25">
                                                    <div class='alert alert-danger'>
                                                        <?php echo $this->session->flashdata('errors');  ?>
                                                    </div>
                                                </div>

                                            <?php }
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">Sr.No.</th>
                                        <th style="width: 100px;">ID</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($user as $o) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $o->id; ?></td>
                                            <td><?php echo $o->username; ?></td>
                                            <td><?php echo $o->email; ?></td>
                                            <td><a href="<?php echo base_url('user_delete/' . $o->id); ?>" class="btn btn-danger">Delete</a></td>
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