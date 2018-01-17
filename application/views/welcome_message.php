<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter with elFinder - Dida Nurwanda</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquery-ui/css/base/jquery-ui.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/elfinder/css/theme.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/elfinder/css/elfinder.min.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-1.7.2.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/jquery-ui/js/jquery-ui.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/elfinder/js/elfinder.min.js'); ?>"></script>
	
	<script type="text/javascript">
		jQuery(document).ready(function(){
			
			  $("#elfinder-tag").hide();

				$("#getfile").click(function () {
					$("#elfinder-tag").toggle();
				});
		
		
			jQuery('#elfinder-tag').elfinder({
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