<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Product Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Product Page</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="#">
                            <div class="row">
                                <div class="col-6">
                                
                                <input type="hidden" class="form-control" id="update_id"
                                                placeholder="" value="<?= $Edit_Product->ID; ?>">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control" id="update_product_name"
                                                placeholder="" value="<?= $Edit_Product->Product_Name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Quantity</label>
                                            <input type="number" class="form-control" id="update_product_quantity"
                                                placeholder="" value="<?= $Edit_Product->Product_Quantity; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pt-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Offer Price</label>
                                        <input type="text" class="form-control" id="update_product_offer_price"
                                            placeholder="" value="<?= $Edit_Product->Product_Offer_Price; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Without Offer Price</label>
                                        <input type="text" class="form-control" id="update_product_without_offer"
                                            placeholder="" value="<?= $Edit_Product->Product_Price_Without_Offer; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 p-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Product Image 1</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="files[]" onchange=""  class="custom-file-input update_product_image" id="">
                                                <?php 
                                                    $array_image = explode(",",$Edit_Product->Product_Image);
                                                ?>
                                                <input type="hidden" class="hidden_image" value="<?= $array_image[0] ?>">
                                                <label class="custom-file-label" for="update_product_image">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <!-- <img width="200" />	 -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Product Image 2</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="files[]" onchange=""  class="custom-file-input update_product_image" id="">
                                                <input type="hidden" class="hidden_image" value="<?= $array_image[1] ?>">
                                                <label class="custom-file-label" for="update_product_image">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pt-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Url</label>
                                        <input type="text" class="form-control" id="update_product_url"
                                            placeholder="" value="<?= $Edit_Product->Product_Url; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Category</label>

                                        <select class="form-control" id="update_product_category">
                                            <?php if($category_list->num_rows() > 0 ) { foreach($category_list->result() as $list)  { 
                                                $value = "";
                                                if($list->Category_Name == $Edit_Product->Product_Category){
                                                    $value = "selected";
                                                }?> 
                                            <option value="<?= $list->Category_Name; ?>" <?= $value ?>><?= $list->Category_Name; ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Product Description
                                                </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body p-0">
                                                <textarea id="update_product_description" class="p-3 product_description"><?= $Edit_Product->Product_Description; ?></textarea>
                                            </div>
                                            <div class="card-footer">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- ./row -->
                            </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" id="btn_update_product" class="btn btn-primary">Update Product</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.card -->
</div><!-- /.container-fluid -->
</section>
</div>

