<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
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
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Image</th>
                                        <th>Product Quantity</th>
                                        <th>Product Wh Offer</th>
                                        <th>Product WO Offer</th>
                                        <th>Product Category</th>
                                        <th>Product Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php if($product_list->num_rows() > 0) { foreach($product_list->result() as $list) { ?>
                                    <tr>
                                        <td><?= $list->ID ?></td>
                                        <td><?= $list->Product_Name ?></td>
                                        <td><?php 
                                         $img = explode(",",$list->Product_Image);
                                         echo "<img src='".base_url('public/images/').$img[0]."' height='100' width='100'>";
                                        ?></td>
                                        <td><?= $list->Product_Quantity ?></td>
                                        <td><?= $list->Product_Offer_Price ?></td>
                                        <td><?= $list->Product_Price_Without_Offer ?></td>
                                        <td><?= $list->Product_Category ?></td>
                                        <td><?= $list->Product_Url ?></td>
                                        <td><a href="<?= base_url('admin/get-product-by-id/product-id-'.$list->ID) ?>" class="btn btn-info" data-edit-id="<?= $list->ID; ?>"><i class="fa fa-edit"></i></a><button class="btn btn-danger delete_category" data-delete-id="<?= $list->ID; ?>"><i class="fa fa-trash"></i></button></td>
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

