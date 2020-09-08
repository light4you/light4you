<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td colspan=2 height=1 bgcolor=#F5F5F5></td>
</tr>

<tr height=30>
  <td align=left class=rini_ver3>
    <?=$a_list?>list&nbsp;&nbsp;</a>
    <?=$a_write?>write</a>
  </td>
  <td align=right class=rini_ver3>
    <?=$a_modify?>modify&nbsp;&nbsp;</a>
    <?=$a_delete?>delete</a>
  </td>
</tr>
<tr>
<td colspan=2 height=10></td>
</tr>
</table>

<!-- 이전 / 다음글 출력 -->

<?=$hide_prev_start?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr>
  <td height=1 colspan=4 bgcolor=#F5F5F5></td>
</tr>
<tr height=23>
  <td width=50 align=left class=rini_ver>&nbsp;Prev</td>
  <td align=left style='word-break:break-all;'>&nbsp;<?=$a_prev?><?=$prev_subject?></a></td>
  <td width=75 align=right style='word-break:break-all;'><?=$prev_face_image?> <?=$prev_name?>&nbsp;</td>
  <td width=60 align=right class=rini_taho>&nbsp;<?=$prev_reg_date?>&nbsp;</td>
</tr>

<tr>
  <td height=1 colspan=4 bgcolor=#F5F5F5></td>
</tr>
</table>
<?=$hide_prev_end?>

<?=$hide_next_start?>
<table border=0 cellspacing=0 cellpadding=0  width=<?=$width?>>
<tr height=23>
  <td width=50 align=left class=rini_ver>&nbsp;Next</td>
  <td align=left style='word-break:break-all;'>&nbsp;<?=$a_next?><?=$next_subject?></a></td>
  <td width=75 align=right style='word-break:break-all;'><?=$next_face_image?> <?=$next_name?>&nbsp;</td>
  <td width=60 align=right class=rini_taho>&nbsp;<?=$next_reg_date?>&nbsp;</td>
</tr>

<tr>
  <td height=1 colspan=4 bgcolor=#F5F5F5></td>
</tr>
<tr><td colspan=4 height=6></td></tr>
</table>
<?=$hide_next_end?>
