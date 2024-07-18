<header>
    <title>Cities</title>
</header>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Cities</strong></h1>
                    <small>Cities List</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Cities</li>
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
                            <h3 class="card-title">Cities</h3>
                        </div>
                        <div class="card-header">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
                                Add City
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Add City</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="<?php echo base_url('add_city') ?>">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Add City</label>
                                                    <input name="city" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter City Name">
                                                </div>

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
                                        <th style="width: 50px ;">Sr.No.</th>
                                        <th style="width: 50px ;">ID</th>
                                        <th>City</th>
                                        <!-- <th>Delete</th> -->

                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($results as $object) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $object->id; ?></td>
                                            <td><?php echo $object->city; ?></td>
                                            <!-- <td><a href="<?php echo base_url('city_delete/' . $object->id); ?>" class="btn btn-danger">Delete</a></td> -->

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