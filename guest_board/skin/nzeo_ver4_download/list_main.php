<?
	$subject = str_replace(">","><font class=list_han><u>",$subject);
	$name= str_replace(">","><font class=list_han>",$name);

	if(eregi("\.jpg|\.png|\.gif|\.jpeg",$data['file_name2'])&&@file_exists($data['file_name2'])) {
		$screenshot = $data['file_name2'];
		$image_info = @getimagesize($screenshot);
		if($image_info[0]>140) {
			$_x = 140;
			$_y = 120;
		}
		else {
			$_x = $image_info[0];
			$_y = $image_info[1];
		}
		$img_a = "<a href=\"javascript:void(window.open('$dir/view_image.php?filename=".urlencode($screenshot)."','screenshot','width=$image_info[0],height=$image_info[1],scrollbars=no,toolbars=no'))\">";
		$img_a2 = "</a>";
	} else {
		$screenshot=$dir."/noscreenshot.gif";
		$_x = 140;
		$_y = 120;
		$img_a = $img_a2 = "";
	}

	unset($_m);
	unset($line);
	$_m = explode("\n",strip_tags($data['memo']));
	for($i=0;$i<count($_m);$i++) if(trim($_m[$i])) $line[] = $_m[$i];
	$tmp_memo = $line[0]."<br>".$line[1]."<br>".$line[2]."<br>".$line[3];
	if($line[4]) $tmp_memo.="...more";
?>


<table border=1 cellspacing=1 cellpadding=1 width=<?=$width?> style=table-layout:fixed height=130>
<col width=96></col><col width=></col>
<tr align=center valign=center>
	<td align=center width="100%" height="100%">
		<table border=0 cellspacing=0 cellpadding=1 width="100%" height="100%" style=table-layout:fixed>
		<tr align=center valign=center>
			<td bgcolor="#f1f1f1"><?=$img_a?><img src="<?=$screenshot?>" width=<?=$_x?> height=<?=$_y?> border=1 style="border-color:000000"><?=$img_a2?></td>
		</tr>
		</table>
	</td>
	<td valign=top bgcolor="#e5e5e5" class=list_han nowrap>
		<table border=0 width=100% cellspacing=0 cellpadding=0 style=table-layout:fixed>
		<col width=></col><col width=30></col>
		<tr valign=top>
			<td height=28><nobr><b><?=$subject?></b></nobr></td>
			<td align=right><?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?></td>
		</tr>
		</table>
		<table border=0 width=100% cellspacing=0 cellpadding=0 height=24 class=table-layout:fixed>
		<col width=></col><col width=></col><col width=></col>
		<tr valign=top>
			
		<table border=0 width=100% cellspacing=0 cellpadding=0 class=table-layout:fixed>
		<tr>
			<td class=list_han nowrap><img src=<?=$dir?>/t.gif border=0 height=5><br><?=$tmp_memo?></td>
		</tr>
		</table>
	</td>
</tr>
</table>

<table border=0 width=<?=$width?> cellspacing=0 cellpadding=0 class=line2>
<tr>
	<td height=1><img src=<?=$dir?>/t.gif border=0 height=1></td>
</tr>
</table>
<img src=<?=$dir?>/t.gif border=0 height=8><br>
<?$coloring++;?>


<?$coloring++;?>
