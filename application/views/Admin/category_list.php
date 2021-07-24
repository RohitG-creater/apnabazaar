<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
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

