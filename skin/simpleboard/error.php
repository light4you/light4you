<? include "$dir/value.php3"; ?>

<br><br><br>
<div align=center>

<table border="0" width="200" cellspacing=0 cellpadding=0>
    <tr>
        <td width="30" height=2  background=<?=$dir?>/list_left.gif>

        </td>
        <td width="140" align=center height=2 background=<?=$dir?>/list_center.gif>
<b><font size="1" face="Verdana" color="#8E8F90"></font></b>
        </td>
        <td width="30" height=2 background=<?=$dir?>/lift_right.gif>

        </td>
    </tr>
    <tr>
        <td width="200" colspan="3" align=center>

        <table border=0 width=190 cellspacing=0 cellpadding=0>
<tr height=50>

<td align=center><font color=8E8F90><?echo $message;?></td></tr>

 <tr>
 <td align=center>
<?
  if(!$url)
  {
?>

  <img onclick=history.back() border=0 align=absmiddle src=<?=$dir?>/cancel.gif>

<?
  }
  else
  {
?>

  <div align=center><input type=button value='   Move   ' onclick=location.href="<?echo $url;?>" class=submit>

<?
  }
?>

 </td>
</tr>

</table>
</td>
</tr>

</table>
<br><BR><BR>
</div>



