<script language="JavaScript">
function formresize(mode) {
	if (mode == 0) {
		document.write.memo.cols  = 50;
		document.write.memo.rows  = 20; }
	if (mode == 1) {
		document.write.memo.cols += 5; }
	if (mode == 2) {
		document.write.memo.rows += 3; }
}
</script>

<p></p><table border=0 cellspacing=0 cellpadding=0 width=250>
<tr align=center valign="middle">
	<td height=15></td>
</tr>
</table>
<?
  if($mode=="reply") $title="<span style=font-family:tahoma;font-size:8pt;>POST A REPLY/span>";
  elseif($mode=="modify") $title="<span style=font-family:tahoma;font-size:8pt;>MODIFY ARTICLE</span>";
  else $title="<span style=font-family:tahoma;font-size:8pt;><p></p>NEW ARTICLE</span>";
?>
<table border=0 cellspacing=1 cellpadding=0 width=250>
<tr>
	<td colspan=2 height=30>&nbsp;&nbsp;<?=$title?></td>
</tr>
<tr height=1><td colspan=2><img src=images/t.gif height=1></td></tr>
<tr>
	<td width=1>
<!-- 폼태그 부분;; 수정하지 않는 것이 좋습니다 -->
<form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=no value=<?=$no?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=keyword value="<?=$keyword?>">
<input type=hidden name=category value="<?=$category?>">
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=mode value="<?=$mode?>">
<!----------------------------------------------->
	</td>
	<td>
<table width=100%>
<tr>
	<td class=seok-line></td>
</tr>
</table>
<table border=0 width=100% cellspacing=1 cellpadding=0>
<?=$hide_start?>
<tr height=25>
	<td colspan=2>
	<table border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td width=80 align=right class=seok-thm8>Name&nbsp;</td>
		<td><img src=images/t.gif width=1 align=absmiddle><input type=text name=name value="<?=$name?>" <?=size(10)?> maxlength=20 class=input></td>
		<td width=50 align=right class=seok-thm8>Pass&nbsp;</td>
		<td><input type=password name=password <?=size(10)?> maxlength=20 class=input></td>
	</tr>
	</table>
	</td>
</tr>
</tr>
<tr>
	<td height=1 colspan=2><img src=images/t.gif height=1></td>
</tr>
<tr height=25>
	<td align=right class=seok-thm8>E-mail&nbsp;</td>
	<td><input type=text name=email value="<?=$email?>" <?=size(30)?> maxlength=200 class=input></td>
</tr>
<tr>
	<td height=1 colspan=2><img src=images/t.gif height=1></td>
</tr>
<tr height=25>
	<td align=right class=seok-thm8>Homepage&nbsp;</td>
	<td><input type=text name=homepage value="<?=$homepage?>" <?=size(30)?> maxlength=200 class=input></td>
</tr>
<tr>
	<td height=1 colspan=2><img src=images/t.gif height=1></td>
</tr>
<?=$hide_end?>

<tr height=25>
	<td width=80></td>
	<td>
	<table border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td>
		<?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1></td><td valign=bottom class=seok-thm8>&nbsp;Notice &nbsp;&nbsp;<?=$hide_notice_end?></td>
		<td>
		<?=$hide_html_start?><input type=checkbox name=use_html <?=$use_html?> value=1></td><td class=seok-thm8>&nbsp;HTML &nbsp;&nbsp;<?=$hide_html_end?></td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td height=1 colspan=2><img src=images/t.gif height=1></td>
</tr>
<tr>
	<td align=right class=seok-thm8>Subject&nbsp;</td>
	<td><input type=text name=subject value="<?=$subject?>" <?=size(30)?> maxlength=200 class=input> </td>
</tr>
<tr>
	<td height=1 colspan=2><img src=images/t.gif height=1></td>
</tr>
<tr>
	<td colspan=2 valign=top><textarea name=memo <?=size2(38)?> rows=10 class=seok-textarea><?=$memo?></textarea><br><br></td>
</tr>
<tr height=1>
	<td colspan=2><img src=images/t.gif height=1></td>
</tr>
</table>
<table width=100%>
<tr>
	<td class=seok-line></td>
</tr>
</table>

<table border=0 cellspacing=1 cellpadding=1 width=250>
<tr align=center height=15>
	<td colspan=2 align=center>
	<input type=submit value='Write' class=seok-button>
	<input type=button value='Back' onclick=history.go(-1) class=seok-button>
	</td>
</tr>
</table>

</td>
</tr>
</table>
