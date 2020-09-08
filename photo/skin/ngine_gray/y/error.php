<? include "$dir/value.php3"; ?>

<br><br><br>
<div align=center>
<form>
<table border=0 cellspacing=0 cellpadding=0 width=300>
<tr>
   <td colspan=2><table width=100% border=0 cellspacing=0 cellpadding=0>
  <tr>
    <td bgcolor=<?=$sC_dark0?>><img src=/images/t.gif height=1></td> 
  </tr>
</table></td>
</tr>
</table>
<table border=0 cellpadding=0 cellspacing=0 width=300>
<tr>
  <td colspan=2 height=30>&nbsp;&nbsp;<font color=<?=$sC_dark0?>><b>Error !!</b></font></td>
</tr>
<tr height=1><td colspan=2 bgcolor=<?=$sC_dark0?>><img src=images/t.gif height=1></td></tr>
<tr height=25 bgcolor=<?=$sC_dark2?> style=padding:5px;>
    <td align=center height=30>
      <br>
      <?echo $message;?><br><br>
</td>
</tr>
<tr height=1><td colspan=2 bgcolor=<?=$sC_dark0?>><img src=images/t.gif height=1></td></tr>
<tr><td height=30 align=right>

<?
  if(!$url)
  {
?>

  <img src=images/t.gif height=3><br><input type=button border=0 align=absmiddle onclick=history.go(-1) value=' back ' class=input>

<?
  }
  else
  {
?>

  <div align=center><input type=button value='   Move   ' onclick=location.href="<?echo $url;?>" class=submit>

<?
  }
?>
   <br><br>
    </td>
</tr>
</form>
</table>
</div>
<br><br>
