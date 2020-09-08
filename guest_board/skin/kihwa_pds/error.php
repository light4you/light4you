<br><br><br>
<div align=center>
<form>
<table border=0 cellpadding=0 cellspacing=0 width=300>
<tr>
    <td align=center height=20><b>Message</font></td>
</tr>
<tr>
    <td align=center height=30>
      <br>
      <?echo $message;?><br><br>
<?
  if(!$url)
  {
?>

  <center><input type=button value="   Back   " onclick=history.back() class=submit>

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
