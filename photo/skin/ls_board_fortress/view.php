<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr height=15>
  <td colspan=2 bgcolor=FCEBDD class=lifesay2 align=center>View Article </td>
  <td colspan=2 bgcolor=FCEBDD class=lifesay align=right><?=$a_modify?><img src=<?=$dir?>/img/btn_modify.gif border=0 align=absmiddle>&nbsp;&nbsp;</a></td>
  <td colspan=2 bgcolor=FCEBDD class=lifesay align=right><?=$a_delete?><img src=<?=$dir?>/img/btn_delete.gif border=0 align=absmiddle>&nbsp;</a></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>Name</td>
 <td bgcolor=EE781A></td>
<td style='word-break:break-all;' width=100% class=light>&nbsp;&nbsp;<?=$face_image?><?=$name?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<?=$hide_homepage_start?>
<tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>Homepage</td>
 <td bgcolor=EE781A></td>
<td style='word-break:break-all;' width=100% class=light>&nbsp;&nbsp;<?=$homepage?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<?=$hide_homepage_end?>
  <?=$hide_download1_start?>
    <tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>File #1</td>
 <td bgcolor=EE781A></td>
<td width=100% class=light2>&nbsp;&nbsp; <?=$a_file_link1?><?=$file_name1?> (<?=$file_size1?>)</a> &nbsp; <font style=font-size:7pt;>Download : <?=$file_download1?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
  <?=$hide_download1_end?>
  <?=$hide_download2_start?> 
      <tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>File #2</td>
 <td bgcolor=EE781A></td>
<td width=100% class=light2>&nbsp;&nbsp; <?=$a_file_link2?><?=$file_name2?> (<?=$file_size2?>)</a> &nbsp; <font style=font-size:7pt;>Download : <?=$file_download2?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
  <?=$hide_download2_end?>
  <?=$hide_sitelink1_start?>
<tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>Link #1</td>
 <td bgcolor=EE781A></td>
<td width=100% class=light2>&nbsp;&nbsp; <?=$sitelink1?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
  <?=$hide_sitelink1_end?>
  <?=$hide_sitelink2_start?>
  <tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>Link #2</td>
 <td bgcolor=EE781A></td>
<td width=100% class=light2>&nbsp;&nbsp; <?=$sitelink2?></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
  <?=$hide_sitelink2_end?>
<tr height=23>
 <td align=center width=100 bgcolor=FCEBDD class=lifesay nowrap>Subject</td>
 <td bgcolor=EE781A></td>
<td style='word-break:break-all;' width=100% class=light>&nbsp;&nbsp;<b><?=$subject?></b></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
 <td style='word-break:break-all;padding:10px;' bgcolor=FFF9F4 height=100 valign=top>
     <span style=line-height:160%>
     <?=$upload_image1?>
     <?=$upload_image2?>
     <?=$memo?>
     <br>
     <div align=right style=font-family:Tahoma;font-size:7pt;><?=$ip?></div>
     </span>
 </td>
</tr>
</table>

<!-- 간단한 답글 시작하는 부분 -->
<?=$hide_comment_start?> 
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<?=$hide_comment_end?>
