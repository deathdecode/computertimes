<script type="text/javascript">
    var id;
    $(function()
    {
        $('.products').click(function() {
            var id = $(this).attr('id');
            var alldata_desktop = <?php echo json_encode($alldata_desktop); ?>;
                    //console.log(alldata_desktop);
                    console.log(alldata_desktop[id]);
            $("#product_image").html('<img class="img-responsive" src = "<?php echo base_url();?>images/'+alldata_desktop[id].imagename+'"/>');
            $("#product-description").html(alldata_desktop[id].pdesc);
            $("#product_name").html(alldata_desktop[id].pname);
            //alert("<img src = \"images/"+<?php ?>+"\">");
            
//            window.location.href = "result_view?product_id=" + id;
        });        
    });
    
</script>
<div class="modal fade" id="showProduct">    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><div id ="product_name"></div></h4>
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
