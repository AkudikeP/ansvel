
<style>
.active12
{
	background-color:#1fae66 !important;
}
</style>
<link href="<?php echo base_url();?>adminassets/plugins/dataTables/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>adminassets/plugins/dataTables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>adminassets/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css">
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>Notify Me Requests</h1>
             </div>
          </div>
          <div class="vd_content-section clearfix">

            <div class="row">

              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>Notify Me Requests</h3>
                  </div>
                  <div class="panel-body table-responsive">
                    <table class="table table-striped" id="data-tables1">
                      <thead>
                        <tr>
                          <th>S.No.</th>
													<th>Date</th>
													<th>Product ID</th>
                          <th>Product Name</th>
                          <th>User Email</th>

													<th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                         <?php $i=$k=1;foreach($fab as $fab){?>
                        <tr class="gradeA">
                          <td class="center"><?php echo $i;?></td>
													<td><?php echo $fab->date;?></td>
													<td><?php if($fab->product_type=='accessories'){echo "PAMD-".$fab->p_id; }
                          else if($fab->product_type=='fabrics'){echo "PFMD-".$fab->p_id; }
                          else if($fab->product_type=='uniform'){echo "PUMD-".$fab->p_id; }
                          else if($fab->product_type=='online_boutique'){echo "POMD-".$fab->p_id; }?></td>
                          <td><?php echo $fab->p_name;?>

                          <td><?php echo $fab->email;
                          if($fab->product_type=='fabrics'){
                          $data = $this->db->get_where('fabric', array('id'=>$fab->p_id,'title'=>$fab->p_name))->row();
                          if($data->quantity>0){
                            $k=2;
                          }}if($fab->product_type=='uniform'){
                          $data = $this->db->get_where('uniform', array('uniform_id'=>$fab->p_id,'school_name'=>$fab->p_name))->row();
                          if($data->quantity>0){
                            $k=2;
                          }}if($fab->product_type=='online_boutique'){
                          $data = $this->db->get_where('online_boutique', array('id'=>$fab->p_id,'brand'=>$fab->p_name))->row();
                          if($data->quantity>0){
                            $k=2;
                          }}if($fab->product_type=='accessories'){
                          $data = $this->db->get_where('accessories', array('acc_id'=>$fab->p_id,'brand'=>$fab->p_name))->row();
                          if($data->quantity>0){
                            $k=2;
                          }}

                          if($k==2){
                            ?>
                            <td>
                              <a data-toggle="tooltip" title="View"  class="btn btn-xs btn-success" href="<?php echo base_url();?>index.php/product/send_notify_mail/<?php echo $fab->id;?>">send mail</a>
                              <button data-toggle="tooltip" title="Delete" class="btn btn-xs vd_btn vd_bg-red del_fabric" id="<?php echo $fab->id;?>" type="button"><i class="fa fa-trash-o"></i></button>

</td>
<?php
                          }else{ ?>

															  <td>
																	<a data-toggle="tooltip" title="View" disabled="disabled" class="btn btn-xs btn-success" href="<?php echo base_url();?>index.php/product/bridal_appoinment_detail/<?php echo $fab->id;?>">send mail</a>
																	<button data-toggle="tooltip" title="Delete" class="btn btn-xs vd_btn vd_bg-red del_fabric" id="<?php echo $fab->id;?>" type="button"><i class="fa fa-trash-o"></i></button>

</td>
    <?php } ?>                    </tr>
                        <?php $i++;}?>

                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Panel Widget -->
              </div>
              <!-- col-md-12 -->
            </div>
            <!-- row -->
          </div>
          <!-- .vd_content-section -->

        </div>
        <!-- .vd_content -->
      </div>
      <!-- .vd_container -->
    </div>
    <!-- .vd_content-wrapper -->

    <!-- Middle Content End -->

  </div>
  <!-- .container -->
</div>
<!-- .content -->


</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/jquery.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>adminassets/css/bundled.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/jquery-confirm.css"/>
    <script src="<?php echo base_url();?>adminassets/js/bundled.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>adminassets/js/jquery-confirm.js"></script>
<script>
					$(document).ready(function(){
						$(".del_fabric").click(function(){

var thisvari = $(this);
		$.confirm({
						title: 'Confirmation',
						 content: 'Are you sure want to delete this?',
						 icon: 'fa fa-question-circle',
						 animation: 'scale',
						 closeAnimation: 'scale',
						 opacity: 0.5,
						 buttons: {
								 'confirm': {
										 text: 'Yes',
										 btnClass: 'btn-info',
										 action: function () {
												var sid=thisvari.attr('id');
												console.log(sid);
thisvari.closest("tr").remove();
$.ajax({
type: "POST",
url: '<?php echo base_url();?>index.php/product/del_notifyme',
data: {sid:sid},
success: function(response){
	console.log(response);
}
});
												 }
								 },
								 cancel: function () {
										 //$.alert('you clicked on <strong>cancel</strong>');
								 },
								}

				 });


});

					});
				</script>
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/bootstrap.min.js"></script>
<script type="text/javascript" src='<?php echo base_url();?>adminassets/plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/caroufredsel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/plugins.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/theme.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/custom/custom.js"></script>

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-43329142-3']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
       var jqNew = jQuery.noConflict();
    jqNew(document).ready(function() {

        "use strict";
        jqNew("#data-tables1").dataTable();
    } );
</script>
