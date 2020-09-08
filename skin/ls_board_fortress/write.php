<SCRIPT LANGUAGE="JavaScript">
<!--
function formresize(mode) {
        if (mode == 0) {
                document.write.memo.cols  = 80;
                document.write.memo.rows  = 20; }
        if (mode == 1) {
                document.write.memo.cols += 5; }
        if (mode == 2) {
                document.write.memo.rows += 3; }
}
// -->
</SCRIPT>
<br>
<?
  if($mode=="reply") $title="<span style=font-family:verdana;font-size:8pt;font-weight:bold;><font color=white>Post a Reply</font></span>";
  elseif($mode=="modify") $title="<span style=font-family:verdana;font-size:8pt;font-weight:bold;><font color=white>Modify Article</font></span>";
  else $title="<span style=font-family:verdana;font-size:8pt;font-weight:bold;><font color=white>Post a New Article</font></span>";
?>
<table border=0 cellspacing=0 cellpadding=0 width=550>
<tr><td colspan=100><table width=100% cellpadding=1 cellspacing=0 border=0 bgcolor=EE781A >
<tr><td><table width=100% cellpadding=0 cellspacing=0 border=0 bgcolor=white><tr><td>
<table border=0 cellspacing=0 cellpadding=0 width=100%>
<tr>
   <td colspan=2><table width=100% height=22 border=0 cellspacing=0 cellpadding=1 bgcolor=EE781A >
  <tr><td>
<table width=100% height=20 border=0 cellspacing=0 cellpadding=0 bgcolor=EE781A><tr>
   <td align=left nowrap>&nbsp;&nbsp;<?=$title?></td>
  </tr>
</table></td>
</tr>
</table>

</td></tr></table>

<table border=0 cellspacing=0 cellpadding=0 width=550>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr>
 <td width=0>
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
 <Td>
 
<table border=0 width=100% cellspacing=1 cellpadding=0 bgcolor=<?=$sC_dark2?>>

<?=$hide_start?>
<tr height=25>
 <td colspan=2>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr>
  <td width=80 align=right class=light2><b>Name&nbsp;</b></td>
  <td>
  <img src=img/t.gif width=1 align=absmiddle><input type=text name=name value="<?=$name?>" <?=size(20)?> maxlength=20 class=lifesay2>
  </td>
  <td width=80 align=right class=light2><b>Password&nbsp;</b></td>
  <td>
  <input type=password name=password <?=size(20)?> maxlength=20 class=lifesay2>
  </td>
</tr>
</table>
</td></tr>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr height=25>
  <td align=right class=light2><b>E-mail&nbsp;</b></td>
  <td> <input type=text name=email value="<?=$email?>" <?=size(40)?> maxlength=200 class=lifesay2> </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr height=25>
  <td align=right class=light2><b>Homepage&nbsp;</b></td>
  <td> <input type=text name=homepage value="<?=$homepage?>" <?=size(40)?> maxlength=200 class=lifesay2> </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<?=$hide_end?>

<tr height=25>
  <td align=right class=light2 width=80><b>Special&nbsp;</b></td>
  <td> 
  <table border=0 cellpadding=0 cellspacing=0>
  <tr>
  <td>
<?=$category_kind?> 
  </td>
  <td>
       <?=$hide_notice_start?> <input type=checkbox name=notice <?=$notice?> value=1 onfocus='this.blur();'></td><td class=light2>&nbsp;Notice &nbsp;&nbsp;<?=$hide_notice_end?></td>
  <td>
       <?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1 onfocus='this.blur();'></td><td class=light2>&nbsp;Use HTML &nbsp;&nbsp;<?=$hide_html_end?></td>
  <td>     <input type=checkbox name=reply_mail <?=$reply_mail?> value=1 onfocus='this.blur();'></td><td class=light2>&nbsp;Reply Mail &nbsp;&nbsp;</td>  
  <td>    <?=$hide_secret_start?> <input type=checkbox name=is_secret <?=$secret?> value=1 onfocus='this.blur();'></td><td class=light2>&nbsp;Secret &nbsp;&nbsp;<?=$hide_secret_end?></td>
  </tr>
  </table>
  </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr>
  <td align=right class=light2><b>Subject&nbsp;</b></td>
  <td> <input type=text name=subject value="<?=$subject?>" <?=size(60)?> maxlength=200 class=lifesay2> </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr>
  <td align=right class=light2><b>Contents&nbsp;</b></td>
  <td valign=top>
  <textarea name=memo <?=size2(70)?> rows=20 class=lifesay2 ><?=$memo?></textarea>
  </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<?=$hide_sitelink1_start?>
<tr height=25>
  <td align=right class=light2><b>Link &nbsp;</b></td>
  <td> <input type=text name=sitelink1 value="<?=$sitelink1?>" <?=size(60)?> maxlength=200 class=lifesay2> </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<?=$hide_sitelink1_end?>
<?=$hide_sitelink2_start?>
<tr height=25>
  <td align=right class=light2><b>Link &nbsp;</b></td>
  <td> <input type=text name=sitelink2 value="<?=$sitelink2?>" <?=size(60)?> maxlength=200 class=lifesay2> </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<?=$hide_sitelink2_end?>
<?=$hide_pds_start?>
<tr height=25>
  <td>&nbsp;</td>
  <td class=lifesay2><b>Maximum File size : <?=$upload_limit?></b></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr height=25>
  <td align=right class=light2><b>File #1&nbsp;</b></td>
  <td> <input type=file name=file1 <?=size(50)?> maxlength=255 class=lifesay2> <?=$file_name1?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr height=25>
  <td align=right class=light2><b>File #2&nbsp;</b></td>
  <td> <input type=file name=file2 <?=size(50)?> maxlength=255 class=lifesay2> <?=$file_name2?></td>
</tr>

<?=$hide_pds_end?>
</table></td></tr></table></td></tr></table></td></tr></table>

<table border=0 cellspacing=1 cellpadding=1 width=550>
<tr align=center height=30>
  <td align=center>
      <input type=image border=0 align=absmiddle src=<?=$dir?>/img/btn_confirm.gif>&nbsp;&nbsp; 
      <img src=<?=$dir?>/img/btn_back.gif align=absmiddle border=0 onclick=history.go(-1) style=cursor:hand>
</tr>
</table>

</td>
</tr>
</table>
