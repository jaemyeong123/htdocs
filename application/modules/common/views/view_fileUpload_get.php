<script language="javascript">
var fileUpload=function(){
	document.form_file.action="/common/fileUpload_action";
	document.form_file.submit();
}
</script>
<form name="form_file" id="form_file" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?=$id?>" />
	<input type="hidden" name="device" id="device" value="<?=$device?>" />
  <input type="file" name="file" id="file" onchange="fileUpload();"/>
</form>
