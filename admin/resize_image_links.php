<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php');
?>
<style>
p
{
	font-size:11px;}
</style>

<script type="text/javascript">

function chk()
{

if(document.form.img_path.value == "")
	{
	alert ("Please attach a image to be uploaded");
	document.form.img_path.focus();
	return false;
}else
if(document.form.img_label.value == "")
	{
	alert ("Please enter image Label");
	document.form.img_label.focus();
	return false;
}else
if(document.form.img_setting.value == "")
	{
	alert ("Please select image Position");
	document.form.img_setting.focus();
	return false;
}else
	{
	document.form.submit();
	}
}

function back_frm()
    {
	 window.location.href='events.php';
  }
</script>
<table id="container_table" cellpadding='0' cellspacing='0' align="center">
<tr>
<td id="contents" valign="top">
<table id="contents_table" cellpadding='0' cellspacing='0'>
<tr><td height="25px">&nbsp;</td></tr>
<tr>
<td>
<div class="staticPages index">
<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
	<tr>
		<td class="content_heading">
			Resize your image with simple steps:	
		</td>
	</tr>
</table>

<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
	<!--<tr>
		<td >
			<p><a href="http://www.resizeyourimage.com/" target="_blank">http://www.resizeyourimage.com/</a>	</p>
		</td>
	</tr>
     
    <tr><td><p>1. Click the above link.</p></td></tr>
	<tr><td><p>2. Click on "Chose file" button. and select you image that you wanna resize.</p></td></tr>
    <tr><td><p>3. Use the buttons to set the size of your image online. From left to right:</p>
    	<p> &nbsp; &nbsp;  Zoom in, Zoom out, Height and Width show you the actual height and width of the cropped area.</p>
        <p> &nbsp; &nbsp;  Use the arrows to crop the area.</p>
    <tr><td><p>4.  Set the image Height = 142 and Width = 135 (Height and witdh are shown in the buttons above. Use buttons and arrows to set size).</p></td>
    <tr><td><p>5. Press the orange button to resize your image. This will bring you to the download page where you will find your new image!</p></td></tr>
    <tr><td><p>6. Press the  "Change to jpg" button to change the image format. </p></td></tr>
    <tr><td><p>7. Now, Press the "Save this image" button. Your image have to save on your computer.	</p></td></tr>
     <tr>
		<td class="content_heading">&nbsp;
			
		</td>
	</tr>
    
    <tr>
		<td class="content_heading">
			OR
		</td>
	</tr> -->
    
    <tr>
		<td >&nbsp;
			
		</td>
	</tr> 
    
    <tr>
		<td >
			<p><a href="http://resizepic.com/" target="_blank">http://resizepic.com/</a></p>
		</td>
	</tr>
     <tr><td><p>1. Click the above link.</p></td></tr>
	<tr><td><p>2. Click on "Choose file" button and select the image on your computer.</p></td></tr>
    <tr><td><p>3. Enter image Width = 135 and Height = 142.</p></td></tr>
    <tr><td><p>4. Press the Resize image button to resize your image. This will bring you to the download page where you will find your new image.</p></td>
    <tr><td><p>5. Now click on "Download". Your new image has to saved on your computer with a new name.</p></td></tr>
    <tr><td><p>6. Use this image in the ADD EVENT PICTURES section.</p></td></tr>
    
	<tr>
		<td class="content_heading">&nbsp;
			
		</td>
	</tr> 
    
    <tr>
		<td class="content_heading">
			OR
		</td>
	</tr>
    
    <tr>
		<td >&nbsp;
			
		</td>
	</tr> 
    
    <tr>
		<td >
			<p><a href="http://www.simpleimageresizer.com/" target="_blank">http://www.simpleimageresizer.com//</a></p>
		</td>
	</tr>
     <tr><td><p>1. Click the above link.</p></td></tr>
	<tr><td><p>2. Click on "Select image" button and select the image from your computer.</p></td></tr>
    <tr><td><p>3. Choose the option "dimensions".</p></td></tr>
    <tr><td><p>4. Enter image Width = 135 and Height = 142.</p></td>
    <tr><td><p>5. Press the Resize button to resize your image.</p></td></tr>
    <tr><td><p>6. Now, right click on "Download" link.</p></td></tr>
    <tr><td><p>7. Select save link as. A pop up box will be shown on your screen. Click on save. </p></td></tr>
    <tr><td><p>8. Save the image on your computer with a new name.</p></td></tr>
    <tr><td><p>9. Use this image in the ADD EVENT PICTURES section.</p></td></tr>
</table>

</td>
</tr>
</table>		
<?php
include "common/footer.php";
?>			