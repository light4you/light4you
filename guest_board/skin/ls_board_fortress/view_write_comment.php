<!-- 간단한 답변글 쓰기 -->
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr align=center>
<td width=0>
<form method=post name=write action=comment_ok.php>
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
</td>
 <td align=center>
 <table border=0 cellpadding=3 width=<?=$width?>>
 <tr>
  <td class=light height=20><b>Name&nbsp;:</b></td>
  <td><?=$c_name?>&nbsp;&nbsp;</td>
  <td class=light><b>Memo&nbsp;:</b></td>
  <td><input type=text name=memo <?=size(20)?> maxlength=100 class=input></td>
<?=$hide_c_password_start?>
  <td class=light><b>Pass&nbsp;:</b></td>
  <td><input type=password name=password <?=size(5)?> maxlength=20 class=input></td>
<?=$hide_c_password_end?>
  <td>&nbsp; <input type=image border=0 align=absmiddle accesskey="s"  src=<?=$dir?>/img/btn_confirm.gif></td>
  </tr>
  </table>
 </td>
</tr>
</form>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
</table>
