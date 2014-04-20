<html>
    <head>
        <title>CTL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo base_url() . "assets/bootstrap3/css/custom_styles.css"; ?>>
        <script src=<?php echo base_url() . "assets/js/jquery-1.6.0.min.js"; ?>></script>
    </head>
    <body>

        <div class ="row">
            <div class ="col-md-12">
                <div class ="row btn-primary">
                    <div class ="col-md-4 col-md-offset-4 "><h3>Upload Product Details for Website.</h3></div>
                </div>
                <div class ="row ">
                              
                </div>
                <div class ="row">
                    <div class ="col-md-4 col-md-offset-4 "><?php echo $SuccessMessage; ?></div>
                </div>
                <div class ="row">
                    <div class ="col-md-12 form-horizontal form-background">
                        <?php echo form_open("UploadProduct/go", array('id' => 'form_create_product', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
                        <div class="row">
                            <div class ="col-md-5 col-md-offset-2 margin-top-bottom">
                                <div class ="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"></div>
                                </div>
                                <div class="form-group">
                                    <label for="product" class="col-md-6 control-label requiredField">
                                        Product Name
                                    </label>
                                    <div class ="col-md-6">
                                        <?php echo form_input($pname + array('class' => 'form-control')); ?>
                                    </div> 
                                </div>      
                                <div class="form-group">
                                    <label for="pdesc" class="col-md-6 control-label requiredField">
                                        Product Description
                                    </label>
                                    <div class ="col-md-6">
                                        <?php echo form_input($pdesc + array('class' => 'form-control')); ?>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label for="ptype" class="col-md-6 control-label requiredField">
                                        Product Type
                                    </label>
                                    <div class ="col-md-6">
                                        <?php echo form_dropdown('products', $options,'class="form-control"'); ?>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label for="pprice" class="col-md-6 control-label requiredField">
                                        Product Price
                                    </label>
                                    <div class ="col-md-6">
                                        <?php echo form_input($pprice + array('class' => 'form-control')); ?>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label for="pprice" class="col-md-6 control-label requiredField">
                                        Product Image
                                    </label>
                                    <div class ="col-md-6">
                                        <?php echo form_input($pimage + array('class' => 'form-control')); ?>
                                    </div> 
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-md-6 control-label requiredField">

                                    </label>
                                    <div class ="col-md-6">
                                        <?php echo form_input($submit_create_product + array('class' => 'form-control btn-success')); ?>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>    
        </div>

    </body>
</html>

