<form>
<br><br><br>
<table border=0 width=250 class=sjini-box>
<tr><td>
<table border=0 width=100%>
<tr>
 <td align=right><span class=sjini-bfont>::: Error :::</span></td>
</tr>
</table>
</td></tr>
<tr><td class=sjini-dotline></td></tr>
<tr><td align=center height=30>
      <br>
      <?echo $message;?>
      <br><br>
<?
  if(!$url)
  {
?>

  <br>
  <center><a href=# onclick=history.back() onfocus=blur()><img src=<?=$dir?>/img/back.gif border=0></a>

<?
  }
  else
  {
?>

  <div align=center><a href=# onclick=location.href="<?echo $url;?>" onfocus=blur()><img src=<?=$dir?>/img/move.gif border=0></a>

<?
  }
?>
   <br>
    </td>
</tr>
</form>
</table>
<br><br>
