<!-- 이전 / 다음글 출력 -->
<?=$hide_prev_start?>
<table border=0 width=<?=$width?> cellspacing=0 cellpadding=0>
<tr align=center height=22>
  <td nowrap class=light2 width=40><b>&nbsp;Prev&nbsp</td>
  <td width=100% align=left>&nbsp<?=$prev_icon?><?=$a_prev?><?=$prev_subject?></a></td>
  <td nowrap style='word-break:break-all;'><img src=images/t.gif height=3><br><?=$prev_face_image?> <?=$prev_name?></td>
  <td nowrap class=light2 style='word-break:break-all;'>&nbsp&nbsp<?=$prev_reg_date?>&nbsp</td>
</tr>
<tr>
<td colspan=8 background=<?=$dir?>/img/list_back.gif></td>
</tr>
</table>
<?=$hide_prev_end?>

<?=$hide_next_start?>
<table border=0 width=<?=$width?> cellspacing=0 cellpadding=0>
<tr align=center height=22>
  <td nowrap class=light2 width=40><b>&nbsp;Next&nbsp</td>
  <td width=100% align=left>&nbsp<?=$next_icon?><?=$a_next?><?=$next_subject?></a></td>
  <td nowrap style='word-break:break-all;'><img src=img/t.gif height=3><br><?=$next_face_image?> <?=$next_name?></td>
  <td nowrap class=light2 style='word-break:break-all;'>&nbsp&nbsp<?=$next_reg_date?>&nbsp</td>
</tr>
<tr>
<td colspan=8 background=<?=$dir?>/img/list_back.gif></td>
</tr>
</table>
<?=$hide_next_end?>

<!-- 버튼 관련 출력 -->
<br>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
 <td>
    <?=$a_list?><img src=<?=$dir?>/img/btn_list.gif border=0 align=absmiddle></a>
    <?=$a_write?><img src=<?=$dir?>/img/btn_write.gif border=0 align=absmiddle></a>
 </td>
 <td align=right>
    <?=$a_reply?><img src=<?=$dir?>/img/btn_reply.gif border=0 align=absmiddle></a>
 </td>
</tr>
</table>
<br><br>
