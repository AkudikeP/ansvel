<?php 
if($this->session->userdata('vn_id')=='')
  {
    redirect('Vendor');
  }
?>


<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html><!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Ansvel | Vendor</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Login Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="<?php echo base_url();?>adminassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/font-awesome-ie7.min.css"><![endif]-->
    <link href="<?php echo base_url();?>adminassets/css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="<?php echo base_url();?>adminassets/css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>adminassets/plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url();?>adminassets/plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
  <link href="<?php echo base_url();?>adminassets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="<?php echo base_url();?>adminassets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url();?>adminassets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url();?>adminassets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>adminassets/plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

  <!-- Specific CSS -->
      
     
    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>adminassets/css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="<?php echo base_url();?>adminassets/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
          <link href="<?php echo base_url();?>adminassets/css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

    
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>adminassets/custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url();?>adminassets/js/modernizr.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>adminassets/js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>adminassets/js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    <style>
    body
    {
        overflow-y: hidden;
    }
.vd_content-section

{
    background-image:url(<?php echo base_url(); ?>assets/images/kingsleytailors.com_1446448826_31.jpg) !important;
}
.vd_content-wrapper
{
    background-image:url(<?php echo base_url(); ?>assets/images/kingsleytailors.com_1446448826_31.jpg) !important;
}
</style>
    
</head>    

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body" >
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix" >
            <div class="vd_login-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">Create New Password</h4>
              </div>
              <div class="panel widget">
              
                <div class="panel-body">
                 <div class="login-icon entypo-icon"> <img src="<?=base_url();?>assets/images/ansvellogo.png" alt="logo" width="80%"> </div>
                    <div id="hide_div">                
                    <div class="form-group  mgbt-xs-20">
                      <div class="col-md-12">
                        <div class="label-wrapper sr-only">
                          <label class="control-label" for="npassword">Password</label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="password" placeholder="Password" id="npassword" name="password" class="required" required>
                        </div>
                        <div class="label-wrapper">
                          <label class="control-label sr-only" for="cpassword">Confirm Password</label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" class="required" required>
                        </div>
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field 
                    </div>
                    <span class="error text-danger" id="error"></span>
                    <div class="form-group">
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="newpassword">Submit</button>
                      </div>
                </div>
              </div>
                </div>
            </div>
            <!-- vd_login-page --> 
            
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

<!-- Footer Start -->
  <footer class="footer-2"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                    Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->

</div>
</div>
<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src='<?php echo base_url();?>adminassets/plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/caroufredsel.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/plugins.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>adminassets/js/theme.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript">
$(document).ready(function() {
  
    "use strict";
  
        var form_register_2 = $('#login-form');
        var error_register_2 = $('.alert-danger', form_register_2);
        var success_register_2 = $('.alert-success', form_register_2);

        form_register_2.validate({
            errorElement: 'div', //default input error message container
            errorClass: 'vd_red', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
        
                email: {
                    required: true,
                    email: true
                },        
                password: {
                    required: true,
          minlength: 6
                },
        
            },
      
      errorPlacement: function(error, element) {
        if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
          element.parent().append(error);
        } else if (element.parent().hasClass("vd_input-wrapper")){
          error.insertAfter(element.parent());
        }else {
          error.insertAfter(element);
        }
      }, 
      
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success_register_2.hide();
                error_register_2.show();
            },

            highlight: function (element) { // hightlight error inputs
    
        $(element).addClass('vd_bd-red');
        $(element).parent().siblings('.help-inline').removeClass('help-inline hidden');
        if ($(element).parent().hasClass("vd_checkbox") || $(element).parent().hasClass("vd_radio")) {
          $(element).siblings('.help-inline').removeClass('help-inline hidden');
        }

            },

            unhighlight: function (element) { // revert the change dony by hightlight
                $(element)
                    .closest('.control-group').removeClass('error'); // set error class to the control group
            },

            success: function (label, element) {
                label
                    .addClass('valid').addClass('help-inline hidden') // mark the current input as valid and display OK icon
                  .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
        $(element).removeClass('vd_bd-red');

          
            },

            submitHandler: function (form) {
        $(form).find('#login-submit').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>')/*.addClass('disabled').attr('disabled')*/;          
                success_register_2.show();
                error_register_2.hide();        
        setTimeout(function(){window.location.href = "index.php"},2000)  ;        
            }
        }); 
  
  
});
</script>
<!-- Specific Page Scripts END -->

<script>
          $(document).ready(function(){//alert("sadf");

            $("#newpassword").click(function(e){e.preventDefault();
            var np=$("#npassword").val();
            var cp=$("#cpassword").val();
            if(np=='')
            {
              $("#error").html("Please enter password");
              return false;
            }

            else if(cp=='')
            {
              $("#error").html("Please enter confirm password.");
              return false;
            }

            else if(np!=cp)
            {
              $("#error").html("Password Doesnot Match");
              return false;
            }
            $.ajax({
               type: "POST",
               url: '<?php echo base_url();?>index.php/Vendor/changenew_pass',
               data: {cp:cp,np:np},
               success: function(response){
                if(response=='true')
                {
                  alert('Password Changed Successfully.');
                  window.location.href = "<?php echo base_url('Vendor');?>";
                }
                else
                {
                  console.log(response.length);
                  $("#error").html(response);
                }
                 
                 }
               });
          });

          });

</script>


<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

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

<!-- Mirrored from vendroid.venmond.com/pages-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2016 11:26:07 GMT -->
</html>