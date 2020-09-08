<table border=0 cellspacing=1 cellpadding=0 width=400>
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
 <Td>
 
<table border=0 width=400 cellsapcing=0 cellpadding=2>
<tr>
  <td align=center colspan=2> <?=$title?> </td>
</tr>

<?=$hide_start?>

<tr>
  <td align=center style=font-family:VERDANA;font-size:7pt>pass</td>
  <td> <input type=password name=password <?=size(15)?> maxlength=20 class=input> </td>
</tr>

<tr>
  <td width=80 style=font-family:VERDANA;font-size:7pt align=center>name</td> 
  <td> <input type=text name=name value="<?=$name?>" <?=size(15)?> maxlength=20 class=input> </td>
</tr>

<tr>
  <td style=font-family:VERDANA;font-size:7pt align=center>e-mail</td>
  <td> <input type=text name=email value="<?=$email?>" <?=size(30)?> maxlength=200 class=input> </td>
</tr>

<tr>
  <td style=font-family:VERDANA;font-size:7pt align=center>home</td>
  <td> <input type=text name=homepage value="<?=$homepage?>" <?=size(30)?> maxlength=200 class=input> </td>
</tr>

<?=$hide_end?>

<tr>
  <td align=center width=80></td>
  <td style=font-family:VERDANA;font-size:7pt> <?=$category_kind?> 
       <?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1>use html     
 <?=$hide_notice_start?> <input type=checkbox name=notice <?=$notice?> value=1>notice</font><?=$hide_notice_end?></td>
</tr>

<tr>
  <td style=font-family:VERDANA;font-size:7pt align=center>Name</td>
  <td> <input type=text name=subject value="<?=$subject?>" <?=size(40)?> maxlength=200 class=input> </td>
</tr>

<tr>
  <td style=font-family:VERDANA;font-size:7pt align=center>Profile</td>
  <td height=150 valign=top><textarea name=memo <?=size2(43)?> rows=10 class=textarea><?=$memo?></textarea></td>
</tr>

<?=$hide_sitelink1_start?>
<tr>
  <td style=font-family:VERDANA;font-size:7pt align=center>link</td>
  <td> <input type=text name=sitelink1 value="<?=$sitelink1?>" <?=size(45)?> maxlength=200 class=input> </td>
</tr>
<?=$hide_sitelink1_end?>

<?=$hide_pds_start?>
<tr>
  <td style=font-family:VERDANA;font-size:7pt colspan=2 align=center>maximum file size : <?=$upload_limit?></td>
</tr>

<tr>
  <td style=font-family:VERDANA;font-size:7pt align=center>Image</td>
  <td> <input type=file name=file2 <?=size(29)?> maxlength=255 class=input> <?=$file_name2?></td>
</tr>
<?=$hide_pds_end?>

</table>

<table border=0 cellspacing=1 cellpadding=1 width=450>
<tr align=center height=30>
  <td align=center>
  <input onfocus='this.blur()' type=submit value=' Submit ' ; font-class:button;height:18' align=center style=cursor:hand class=button>
  <input onfocus='this.blur()' type=button value=' Back '   ; font-class:button;height:18' align=center style=cursor:hand class=button onclick="history.go(-1)">
  </td>
</tr>
</table>

</td>
</tr>
</table>
