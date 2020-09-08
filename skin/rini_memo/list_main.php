
<!-- 로그인하지 않았을때 링크 걸리지 않게 했습니다 (modified by heybuba)-->

<?
   if($member[is_admin] == ""){
     $a_delete = "<a href=\"#\">";
   }
?>


<table border=0 width=<?echo $setup[table_width];?> cellspacing=0 cellpadding=0 background="<?=$dir?>/images/bg.gif") no-repeat fixed center top;>
<tr><td width=1 nowrap class=bg2></td>          <td>
<table width=100% border=0 cellspacing=0 cellpadding=0>
<tr bgcolor=#FFFFFF >
   <td width=100%>

   <table border=0 cellspacing=0 cellpadding=1 width=100% align=left>
   <tr>
   <td width=15 align=left><img src="<?=$dir?>/images/modi.gif" border=0 ></td>
   <td align=center width=65><?=$face_image?> <?=$name?></td><td width=15>::</td>
   <td align=left><?=$data[memo]?></td>
<td align=right>:: <?=$reg_date?>&nbsp;&nbsp;<?=$a_delete?><img src="<?=$dir?>/images/del.gif" border=0></a></td>
</tr>
    </table>
    </td>
</tr>
<tr>
     <td height=1 nowrap colspan=4 class=line2></td>
    </tr>
</table>
</td>
</tr></table>
