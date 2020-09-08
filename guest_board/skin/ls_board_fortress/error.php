<br><br><br>
<div align=center>
<form>
<table border=0 cellpadding=0 cellspacing=0 width=300>
<tr>
    <td align=center height=20 class=lifesay2><b>Message</font></td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=2></td>
</tr>
<tr>
<td height=2></td>
</td>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr>
    <td align=center height=30>
      <br>
      <?echo $message;?><br><br>
<?
  if(!$url)
  {
?>

  <center><img src=<?=$dir?>/img/btn_back.gif align=absmiddle border=0 onclick=history.go(-1) style=cursor:hand>

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
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr>
<td height=2></td>
</td>
<tr>
 <td colspan=8 bgcolor=EE781A height=2></td>
</tr>
</table>
</div>
<br><br>
