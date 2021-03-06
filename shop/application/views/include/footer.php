
<div style="clear:both"></div>

<!-- /.main-container -->

<div class="gap"></div>

<footer>
  <div class="footer" style="padding-bottom:10px">
    <div class="container hidden-xs">
      <CENTER>
        <div style="padding-top:10px;" >
          <img height="50" src="<?php echo base_url(); ?>shop/images/button-google-play.png" alt="img"> 

          <img height="50" src="<?php echo base_url(); ?>shop/images/appStore.png" alt="img"> 
        </div>
      </CENTER>
    </div><!--/.container-->
  </div><!--/.footer-->
  

  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; WARRIX SHOP 2017</p>
      
    <!--   <div class="pull-right paymentMethodImg">
        <img height="30" class="pull-right" src="<?php echo base_url(); ?>shop/images/site/payment/master_card.png" alt="img"> 
        <img height="30" class="pull-right" src="<?php echo base_url(); ?>shop/images/site/payment/visa_card.png" alt="img">
        <img height="30" class="pull-right" src="<?php echo base_url(); ?>shop/images/site/payment/paypal.png"
        alt="img">
        <img height="30" class="pull-right" src="<?php echo base_url(); ?>shop/images/site/payment/american_express_card.png" alt="img"> <img
        height="30" class="pull-right" src="<?php echo base_url(); ?>shop/images/site/payment/discover_network_card.png" alt="img">
        <img height="30" class="pull-right" src="<?php echo base_url(); ?>shop/images/site/payment/google_wallet.png" alt="img">
      </div> -->
    </div>
  </div> <!--/.footer-bottom-->
 
</footer>

<div class='modal fade' id='loader' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop="static">
  <div class='modal-dialog' style='width:150px; background-color:transparent; border-radius:10px;' >
    <div class='modal-content'>
      <div class='modal-body'>
        <div style="width:100%; height:100px; padding-top:15px;">
         <div style="width:100%;  text-align:center; margin-bottom:10px;">
           <img src='<?php echo base_url(); ?>shop/assets/img/loading.gif' width="50px">
         </div>
         <div style="width:100%;  text-align:center; margin-top:15px; font-size:12px;">
          <span><strong>Loading....</strong></span>
         </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<!-- Le javascript
  ================================================== -->

  <!-- Placed at the end of the document so the pages load faster -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>shop/assets/js/sweet-alert.js"></script>
  <script src="<?php echo base_url(); ?>shop/assets/js/handlebars-v3.js"></script> 
  <script src="<?php echo base_url(); ?>shop/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- include  parallax plugin -->
  <script type="text/javascript" src="<?php echo base_url(); ?>shop/assets/js/jquery.parallax-1.1.js"></script>

  <!-- optionally include helper plugins -->
  <script type="text/javascript" src="<?php echo base_url(); ?>shop/assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

  <!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

  <script type="text/javascript" src="<?php echo base_url(); ?>shop/assets/js/jquery.mCustomScrollbar.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>shop/assets/js/bootstrap-datepicker.min.js"></script>

  <!-- include icheck plugin // customized checkboxes and radio buttons   -->
  <!-- <script type="text/javascript" src="<?php echo base_url(); ?>shop/assets/plugins/icheck-1.x/icheck.min.js"></script>
 -->
  <!-- include grid.js // for equal Div height  -->
  <script src="<?php echo base_url(); ?>shop/assets/js/grids.js"></script>

  <!-- include carousel slider plugin  -->
  <script src="<?php echo base_url(); ?>shop/assets/js/owl.carousel.min.js"></script>

  <!-- jQuery select2 // custom select   -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

  <!-- include touchspin.js // touch friendly input spinner component   -->
  <script src="<?php echo base_url(); ?>shop/assets/js/bootstrap.touchspin.js"></script>

  <!-- include custom script for site  -->
  <script src="<?php echo base_url(); ?>shop/assets/js/script.js"></script>
  <script>
    function load_in(){
     $("#loader").modal("show");
   }
   function load_out(){
     $("#loader").modal("hide");
   }  

   function removeCommas(str) {
    while (str.search(",") >= 0) {
      str = (str + "").replace(',', '');
    }
    return str;
  };

  function addCommas(input){
    return (
     input.toString()).replace(/^([-+]?)(0?)(\d+)(.?)(\d+)$/g, function(match, sign, zeros, before, decimal, after) { 
      var reverseString = function(string) { return string.split('').reverse().join(''); };
      var insertCommas  = function(string) { 
       var reversed   = reverseString(string);
       var reversedWithCommas = reversed.match(/.{1,3}/g).join(',');
       return reverseString(reversedWithCommas);
     };
     return sign + (decimal ? insertCommas(before) + decimal + after : insertCommas(before + after));
   });
   }

   function isDate(txtDate){
     var currVal = txtDate;
     if(currVal == '')
       return false;  
	  //Declare Regex 
	  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
	  var dtArray = currVal.match(rxDatePattern); // is format OK?
	  if (dtArray == null){
     return false;
   }
	  //Checks for mm/dd/yyyy format.	  
	  dtDay= dtArray[1];
	  dtMonth = dtArray[3];
	  dtYear = dtArray[5];
	  if (dtMonth < 1 || dtMonth > 12){
     return false;
   }else if (dtDay < 1 || dtDay> 31){
     return false;
   }else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31){
     return false;
   }else if (dtMonth == 2){
    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
    if (dtDay> 29 || (dtDay ==29 && !isleap)){
     return false;
   }
 }
 return true;
}

function checkerror(){
  if($("#error").length){
    var mess = $("#error").val();
    swal({ title: "เกิดข้อผิดพลาด!", text: mess, type: "error"});
  }else if($("#success").length){
    var mess = $("#success").val();
    swal({ title: "สำเร็จ", text: mess, timer: 1000, type: "success"});
  }else if($("#warning").length){
    var mess = $("#warning").val();
    swal({ title: "คำเตือน", text: mess, timer: 2000, type: "warning"});
  }
}
//**************  Handlebars.js  **********************//
function render(source, data, output){
	var template = Handlebars.compile(source);
	var html = template(data);
	output.html(html);
}

function render_append(source, data, output)
{
	var template 	= Handlebars.compile(source);
	var html 			= template(data);
	output.append(html);
}

function render_prepend(source, data, output)
{
	var template		= Handlebars.compile(source);
	var html			= template(data);
	output.prepend(html);	
}

var downloadTimer;
function get_download(token)
{
	load_in();
	downloadTimer = window.setInterval(function(){
		var cookie = $.cookie("file_download_token");
		if(cookie == token)
		{
			finished_download();
		}
	}, 1000);
}

function goToHome()
{
	window.location.href = "<?php echo SHOP_PATH; ?>main";
}

function finished_download()
{
	window.clearInterval(downloadTimer);
	$.removeCookie("file_down_load_token");
	load_out();
}

function get_rows(){
	$("#rows").submit();
}
$("#get_rows").change(function(e) {
  $("#rows").submit();
});

</script>
</body>
</html>
