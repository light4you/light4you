<? include "$dir/value.php3"; ?>
<br><br><br>
<div align=center>
<form>
<table border=0 cellspacing=0 cellpadding=0 width=300>
<tr>
  <td valign=bottom class=kissofgod-head-td><img src=images/t.gif width=1 height=1></td>
</tr>
<tr>
  <td style='padding:10 0 0 5'><font class=kissofgod-large-font>오류!</font></td>
</tr>
<tr height=1><td class=kissofgod-line3><img src=images/t.gif width=1 height=1></td></tr>
<tr height=20><td><img src=images/t.gif width=1 height=1></td></tr>
<tr>
  <td align=center><?echo $message;?></td>
</tr>
<tr height=20><td><img src=images/t.gif width=1 height=1></td></tr>
<tr><td height=1 class='kissofgod-line2'><img src=images/t.gif border=0 width=1 height=1></td></tr>
<tr>
  <td align=right style='padding:15 0 0 0'>

<?
  if(!$url)
  {
?>

  <img src=images/t.gif height=3><br><img onclick=history.back() border=0 align=absmiddle src=<?=$dir?>/btn_back.gif onfocus=blur() style='cursor:hand'>

<?
  }
  else
  {
?>

  <div align=right><input type=button value='   Move   ' onclick=location.href="<?echo $url;?>" class=kissofgod-submit onfocus=blur()>

<?
  }
?>
   </td>
</tr>
</form>
</table>
</div>
<br><br>
