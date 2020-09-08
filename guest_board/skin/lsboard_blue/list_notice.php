<!-- 목록 부분 시작 -->
 
<tr align=center bgcolor=f4f4f4>
  <td class=light2 align=center>notice</td>
<?=$hide_cart_start?><td><input type=checkbox name=cart value="<?=$data[no]?>"></td><?=$hide_cart_end?>
<?=$hide_category_start?><td><?=$category_name?></td><?=$hide_category_end?>
  <td align=left style='word-break:break-all;'>&nbsp; <?=$insert?><?=$subject?> <font style=font-family:Tahoma;font-size:6pt;font-weight:bold;letter-spacing:-1px;><?=$comment_num?></font></td> 
  <td style='word-break:break-all;'><?=$face_image?> <?=$name?></div></td>
  <td class=light2><?=$reg_date?></td>
  <td class=light2>&nbsp;<?=$hit?></td>
</tr>
<tr>
<td colspan=8 background=<?=$dir?>/img/list_back.gif></td>
</tr>
