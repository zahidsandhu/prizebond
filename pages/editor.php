<script type="text/javascript" src="editor/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
mode : "textareas",
theme : "advanced",
plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,cleanup,help,|,insertdate,inserttime,preview,|,forecolor,backcolor",
theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,advhr,|,print,|,ltr,rtl,|,fullscreen",
theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,
content_css : "css/content.css",
template_external_list_url : "lists/template_list.js",
external_link_list_url : "lists/link_list.js",
external_image_list_url : "lists/image_list.js",
media_external_list_url : "lists/media_list.js",
style_formats : [
{title : 'Bold text', inline : 'b'},
{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
{title : 'Example 1', inline : 'span', classes : 'example1'},
{title : 'Example 2', inline : 'span', classes : 'example2'},
{title : 'Table styles'},
{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
],
template_replace_values : {
username : "Some User",
staffid : "991234"
}
});
</script>
<?php
if (isset($_GET["edit"])){
	$result=mysql_query("select * from posting where dat='".$_GET["edit"]."'");
	$row=mysql_fetch_array($result);
	$posts=stripslashes($row["posting"]);
	$button="Update";
	$url="?post=".$_GET["post"]."&edit=".$_GET["edit"];
}else{
	$posts="";
	$button="Submit";
	$url="?post=".$_GET["post"];
}
if (!isset($_GET["edit"])){
if (check_access_post($_SESSION["uid"],$_GET["post"])=="1"){
	echo "<div class='error_message' style='font-size:13px;'>You have posted one time, now you can not post again. If you want to have post please delete the previous post</div>
	";
	$ds="disabled='disabled'";
}else{
	$ds="";
}
}else{
	$ds="";
}
?>
<form name="form1" method="post" action="<?php echo "$url"; ?>">
  <table width="100%" cellpadding="10" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>
	  <?php
	  if (isset($_POST["Submit"])){
	  		$posting=addslashes($_POST["posting"]);
			if (strip_tags($_POST["posting"])==""){
				echo "<div class='error_message'><p>You can not post empty.</p></div>";
			}else{
				$dat=time();
				if ($_POST["Submit"]=="Submit"){
				mysql_query("insert into posting (uid,posting, dat, page, level) values ('".$_SESSION["uid"]."','$posting','$dat','".$_GET["post"]."','1')");
				}else{
					mysql_query("update posting set posting='$posting', dat='$dat', level='1' where dat='".$_GET["edit"]."'");
				}
				if ($_GET["post"]=="homepage"){
					mysql_query("update users set hm='$dat' where uid='".$_SESSION["uid"]."' ");
				}
				header("location:?s=1");
			}
	  }
	  ?>	  </td>
    </tr>
    <tr>
      <td><textarea  rows="20" name="posting" style="width:100%"><?php echo $posts; ?></textarea></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="Submit" value="<?php echo $button; ?>" class="submit" <?php echo $ds; ?> /></td>
    </tr>
  </table>
</form>
