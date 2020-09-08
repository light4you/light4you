<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td colspan=2 height=1 bgcolor=#F5F5F5></td>
</tr>

<tr>
<td colspan=2 height=3></td>
</tr>

<tr height=22>
<td width=80 align=right class=rini_ver>name&nbsp;&nbsp;&nbsp;</td>
<td align=left><?=$face_image?> <?=$name?></td>
</tr>

<?=$hide_homepage_start?>
<tr height=22>
<td width=80 align=right class=rini_ver>homepage&nbsp;&nbsp;&nbsp;</td>
<td align=left ><?=$homepage?></td>
</tr>
<?=$hide_homepage_end?>

<?=$hide_sitelink1_start?>
<tr height=22>
<td width=80 align=right class=rini_ver>link 1&nbsp;&nbsp;&nbsp;</td>
<td align=left ><?=$sitelink1?></td>
</tr>
<?=$hide_sitelink1_end?>

<?=$hide_sitelink2_start?>
<tr height=22>
<td width=80 align=right class=rini_ver>link 2&nbsp;&nbsp;&nbsp;</td>
<td align=left ><?=$sitelink2?></td>
</tr>
<?=$hide_sitelink2_end?>

<?=$hide_download1_start?>
<tr height=22>
<td width=80 align=right class=rini_ver>image&nbsp;&nbsp;&nbsp;</td>
<td align=left ><?=$a_file_link1?><?=$file_name1?> (<?=$file_size1?>)</a>, Download : <?=$file_download1?></td>
</tr>
<?=$hide_download1_end?>

<?=$hide_download2_start?>
<tr height=22>
<td width=80 align=right class=rini_ver>image2&nbsp;&nbsp;&nbsp;</td>
<td align=left ><?=$a_file_link2?><?=$file_name2?> (<?=$file_size2?>)</a>, Download : <?=$file_download2?></td>
</tr>
<?=$hide_download2_end?>

<tr height=22>
<td width=80 align=right class=rini_ver>subject&nbsp;&nbsp;&nbsp;</td>
<td align=left><?=$subject?></td>
</tr>

<tr>
<td colspan=2 height=3></td>
</tr>

<tr>
<td colspan=2 height=1 bgcolor=#F5F5F5></td>
</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td style='word-break:break-all;padding:8'>
<?=$upload_image1?>
<table border=0 cellspacing=0 cellpadding=0>
<tr><td height=5></td></tr></table>
<?=$upload_image2?>
<?=$memo?>
</td>
</tr>
<tr><td height=2></td></tr>
<tr><td align=right class=rini_taho><?=$ip?></td></tr>
<tr><td height=6></td></tr>
</table>

<!-- 간단한 답글 시작하는 부분 -->
<?=$hide_comment_start?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<?=$hide_comment_end?>
