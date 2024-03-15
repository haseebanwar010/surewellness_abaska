<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

 
 
 
  <script src="<?php echo $baseUrl; ?>assets/frontend/js/bootstrap.min.js"></script>
     
    <script type="text/javascript">
		$(document).ready(function(){
			
				$('.mobile_menu a').click(function(){
				$('.menu').slideToggle();
				
				});
			
		});
	</script>

<script src="<?php echo $baseUrl; ?>assets/frontend/js/slider.js"></script>
<script>
$(".slider-container").ikSlider({
  speed: 500
});
$(".slider-container").on('changeSlide.ikSlider', function (evt) { console.log(evt.currentSlide); });

</script>
<!-- Select2 -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo $baseUrl; ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo $baseUrl; ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $baseUrl; ?>assets/frontend/js/chosen.jquery.js" type="text/javascript"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
      $('.datepicker').datepicker({
      autoclose: true
    })
  });
</script>
<script>
    $(document).ready(function(){
        
        $('.country_changer').change(function(){
            var selectedcountry=$('.country_changer').val();
            var statehtml="";
            
            var form_data = new FormData();
            var baseurl='<?php echo $baseUrl; ?>';
            form_data.append('country_id', selectedcountry);        
            $.ajax({
        
                url: baseurl+'home/get_states', // point to server-side PHP script 
                dataType: 'JSON',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(response){
                    statehtml += "<option value=''>Please Select State</option>";
                    for(var i=0; i<response.length; i++){
                        statehtml += "<option value='"+response[i].id+"'>"+response[i].name+"</option>";
                    }
                    $('.state_changer').html(statehtml);
                    if(response.length==1){
                        var cititeshtml="";
                        var form_data = new FormData();
                        form_data.append('state_id', response[0].id);        
            $.ajax({
        
                url: baseurl+'home/get_cities', // point to server-side PHP script 
                dataType: 'JSON',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(response){
                    cititeshtml += "<option value=''>Please Select City</option>";
                    for(var i=0; i<response.length; i++){
                        cititeshtml += "<option value='"+response[i].id+"'>"+response[i].name+"</option>";
                    }
                    $('.city_changer').html(cititeshtml);
                }
            });
                    }
                }
            });
        });
        $('.state_changer').change(function(){
            
            var selectedstate=$('.state_changer').val();
            
            var cititeshtml="";
            
            var form_data = new FormData();
            var baseurl='<?php echo $baseUrl; ?>';
            form_data.append('state_id', selectedstate);        
            $.ajax({
        
                url: baseurl+'job_seaker/get_cities', // point to server-side PHP script 
                dataType: 'JSON',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(response){
                    cititeshtml += "<option value=''>Please Select City</option>";
                    for(var i=0; i<response.length; i++){
                        cititeshtml += "<option value='"+response[i].id+"'>"+response[i].name+"</option>";
                    }
                    console.log(cititeshtml);
                    $('.city_changer').html(cititeshtml);
                }
            });
        });
        
    });
</script>

 <?php if($this->session->flashdata('login_error_msg')){ ?>
      <script>
    $(document).ready(function(){
        $('#exampleModal').modal('show');
    });
</script>      
    <?php } ?>
<?php if($this->session->flashdata('forgot_error_msg')){ ?>
      <script>
    $(document).ready(function(){
        $('#forgoModal').modal('show');
    });
</script>      
    <?php } ?>

<script>
     $(document).ready(function(){
         $('#forgotmodal').click(function(){
             $('#exampleModal').modal('hide');
             $('#forgoModal').modal('show');
             
         })
        
    });
</script>

 <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

</html>

