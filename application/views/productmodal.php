<script type="text/javascript">
    var id;
    $(function()
    {
        $('.products').click(function() {
            var id = $(this).attr('id');
            //$("#product_image").html("<img src = \"images/"+<?php //echo $alldata_desktop[0]->imagename;?>+"\">");
            alert("<img src = \"images/"+<?php echo $alldata_desktop[0]->imagename;?>+"\">");
            
//            window.location.href = "result_view?product_id=" + id;
        });        
    });
    
</script>
<div class="modal fade" id="showProduct">    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $category;?></h4>
            </div>
            <div class="modal-body">
                <div class ="row">
                    <div id ="product_image" class ="col-md-5 col-md-offset-1">
                        
                    </div>
                    <div id ="product-description" class ="col-md-5">
                        
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
