
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Category Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Category Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->

                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" class="form-horizontal">
                            <input type="hidden" id="update_id">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-form-label">Category
                                                Name</label>
                                            <input type="text" class="form-control" id="category_name"
                                                placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-form-label">Category
                                                Url</label>
                                            <input type="text" class="form-control" id="category_url"
                                                placeholder="Category Url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="button" class="btn btn-info" id="add_category">Add Category</button>
                                <button type="button" class="btn btn-danger" id="back_button" style="display:none"><i class="fas fa-arrow-circle-left"></i> Back to Add</button>

                                <button type="button" class="btn btn-info" id="update_category" style="display:none">Update Category</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php if($category_list->num_rows() > 0) { foreach($category_list->result() as $list) { ?>
                                    <tr>
                                        <td><?= $list->ID; ?></td>
                                        <td><?= $list->Category_Name; ?></td>
                                        <td><?= $list->Category_Url; ?></td>
                                        <td><button class="btn btn-info edit_category" data-edit-id="<?= $list->ID; ?>"><i class="fa fa-edit"></i></button><button class="btn btn-danger delete_category" data-delete-id="<?= $list->ID; ?>"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                  <?php }  } ?> 
                                </tbody>
                            </table> 
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>