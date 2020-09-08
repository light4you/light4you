<form>
<br>
<table cellpadding="1" cellspacing="0" border=0>
<tr>
<td>
<table cellpadding="1" cellspacing="0" border=0>
<tr><td>
<table border=0 width=250>
<tr>
    <td align=center height=30>
      <br>
      <?echo $message;?><br><br>
<?
  if(!$url)
  {
?>

  <center><input type=button value=" back " onclick=history.back() class=submit>

<?
  }
  else
  {
?>

  <div align=center><input type=button value=" back " class=submit onclick=location.href="<?echo $url;?>">

<?
  }
?>
   <br><br>
    </td>
</tr>
</form>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
