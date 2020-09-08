<?
	$subject = str_replace(">","><font class=list_han>",$subject);
	$name= str_replace(">","><font class=list_han>",$name);
?>
<table border=0 width=<?=$width?> cellspacing=0 cellpadding=2>
<tr>
	<td class=list_han><b>[공지사항]</b> <?=$subject?> &nbsp;</b></font><font class=list_eng style=font-size:7pt><?=$comment_num?></font></td>
</tr>
</table>

<table border=0 width=<?=$width?> cellspacing=0 cellpadding=0 class=line2>
<tr>
	<td height=1><img src=<?=$dir?>/t.gif border=0 height=1></td>
</tr>
</table>
<?$coloring++;?>
