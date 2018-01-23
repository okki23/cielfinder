<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter with elFinder - Dida Nurwanda</title>

	<style type="text/css">
 
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquery-ui/css/base/jquery-ui.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/elfinder/css/theme.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/elfinder/css/elfinder.min.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-1.7.2.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-ui/js/jquery-ui.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/elfinder/js/elfinder.min.js'); ?>"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			
			  $("#elfinder-tag").hide();

				$("#getfile").click(function () {
					$("#elfinder-tag").toggle();
				});
		
		
			$('#elfinder-tag').elfinder({
				url: '<?php echo base_url('welcome/elfinder'); ?>',
			 getFileCallback: function (file) {
                var filePath = file; //file contains the relative url.
                console.log(filePath);
                //var imgPath = "<img src = '"+filePath+"'/>";
                //$('#selectedImages').append(imgPath); //add the image to a div so you can see the selected images
                $("#hasil").val(filePath);
                $('#elfinder-tag').hide(); //close the window after image is selected
            }
			}).elfinder('instance');
		});
		
		   function cancelbtn() {
        $("#hasil").val('');
    }
		
		
		
	</script>
</head>
<body>

<div id="container">
	<h1>CodeIgniter with elFinder <span style="float:right">Dida Nurwanda</span></h1>
	<div class="form-group">
				 <label for="exampleInputEmail1">
					 Foto
				 </label>
				 <table>
					 <tr>
						 <td> <input class="form-control" id="hasil" type="text" name="foto"  /> 
						 </td>
						 <td> &nbsp; <a id="getfile" class="btn btn-primary"> ...  </a>

							 <a id="batalin" onclick="cancelbtn();" class="btn btn-danger"> X  </a>						</td>
					 <tr>
				 </table> 
			 </div>
	<br>
	<hr>
	<br>
	<div id="body">
		<div id="elfinder-tag"></div>
	</div>
 

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>