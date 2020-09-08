<? include "$dir/value.php3"; ?>
<div align=center>
<br><br><br>
<table border=0 cellspacing=0 cellpadding=0 width=250>
<tr>
   <td colspan=2><table width=100% border=0 cellspacing=0 cellpadding=0>
  <tr>
    <td bgcolor=<?=$sC_dark0?> align=center nowrap><img src=/images/t.gif height=1></td> 
  </tr>
</table></td>
</tr>
</table>
<table border=0 width=250 cellspacing=0 cellpadding=0>
<tr>
  <td colspan=2 height=30>&nbsp;&nbsp;<font color=<?=$sC_dark0?>><b>Member LogIn</b></font></td>
</tr>
<tr height=1><td colspan=2 bgcolor=<?=$sC_dark0?>><img src=images/t.gif height=1></td></tr>
<tr height=20 valign=bottom bgcolor=<?=$sC_dark2?>>
  <td align=right class=thm8><b>ID &nbsp;&nbsp;&nbsp;</b></td>
  <td align=right class=thm8><b>Password &nbsp;&nbsp;&nbsp;</b></td>
</tr>
<tr height=25 bgcolor=<?=$sC_dark2?>>
  <td align=center><input type=text name=user_id size=15 maxlength=20 class=input style=height:18px;font-family:Arial;font-size:8pt;font-weight:bold;color:<?=$sC_dark1?>></td>
  <td align=center><input type=password name=password size=15 maxlength=20 class=input style=height:18px;font-family:Arial;font-size:8pt;font-weight:bold;color:<?=$sC_dark1?>></td>
</tr>
<tr height=1><td colspan=2 bgcolor=<?=$sC_dark0?>><img src=images/t.gif height=1></td></tr>
<tr height=30>
  <td align=right align=center colspan=2 >
      <input type=submit border=0 align=absmiddle value=' ok ' class=input> 
      <input type=button border=0 align=absmiddle onclick=history.go(-1) value=' back ' class=input>
  </td>
</tr>
</table>
