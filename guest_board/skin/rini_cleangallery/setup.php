<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td nowrap><?=$memo_on_sound?></td>
<td height=20 align=right class=rini_ver3>
<?=$a_member_modify?>myinfo&nbsp;</a>
<?=$a_member_memo?>memo&nbsp;</a>
<?=$a_logout?>logout&nbsp;</a>
<?=$a_setup?>admin</a>
<?=$a_member_join?>join&nbsp;</a>
<?=$a_login?>login</a>
</td>
<tr>
<?
if($setup[use_category])
{
?>
  <td align=center colspan=2><? include "include/print_category.php"; ?></td>
<?}?>
 </tr>
</table>
