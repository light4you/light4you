<? /////////////////////////////////////////////////////////////////////////
 /*
 목록을 출력하는 부분입니다.
 목록은 여러개이기 때문에 이 파일을 계속 읽어서 출력합니다.
 순환이 되도록 잘 작성하셔야 합니다.
 아래는 HTML 안에 그대로 사용해주시면 순환을 하면서 출력을 합니다.

 <?=$insert?> : 답글일경우 한칸씩 들어가는 깊이를 출력합니다.
 <?=$icon?>   : 현재 글의 상태에 따라서 아이콘을 출력합니다.

 바구니와 카테고리의 경우 사용하지 않는 수가 있으므로 숨겨놓을때 쓰는 변수;;
 <?=$hide_cart_start?> 내용 <?=$hide_cart_end?> : start 와 end 사이에는 사라짐;; 바구니
 <?=$hide_category_start?> 내용 <?=$hide_category_end?> : Start와 end 사이에는 사라짐;; 바구니

                
 참고: old_head.gif : 원본글이면서 12시간이 넘은 글의 아이콘
       new_head.gif : 12시간에 적히 모든 글. 원본/답글 상관없이
       reply_head.gif : 12시간이 지난 답글의 아이콘
       reply_new_head.gif : 12시간이 지나지 않은 답글의 아이콘;;
       notice_head.gif : 공지사항일때 아이콘
       secret_head.gif : 비밀글을때 나타나는 아이콘
       arror.gif : 현재 리스트에서 선택되어 있는 글 앞에 붙는 아이콘
 */
///////////////////////////////////////////////////////////////////////// ?>

<!-- 목록 부분 시작 -->

<?
 if($setup[only_board]) {
    $popup_text=str_replace("\r\n","&lt;br&gt;",$data[memo]);
 }
 else {
    $popup_text=str_replace("<","&lt;",$data[memo]);
    $popup_text=str_replace(">","&gt;",$popup_text);
    $popup_text=str_replace("\r","",$popup_text);
    $popup_text=str_replace("\n","",$popup_text);
 }
 $popup_text=str_replace("'","",$popup_text);
 if($image_loop==0) {
	$popup = "viewon('$popup_text', 1);";
 } elseif($image_loop==$max_show_image-1) {
	$popup = "viewon('$popup_text', 2);";
 } else $popup = "viewon('$popup_text', 0);";


 if($file_name1&&file_exists($data[file_name1])) 
 {
 	if(eregi("\.swf",$file_name1))
	{
		if($file_name2&&file_exists($data[file_name2])) 
		{	
   		$size=GetImageSize($data[file_name2]);
   		if($size[0] == 0 ) $size[0]=1;
   		if($size[1] == 0 ) $size[1]=1;
   		if($size[0]>$size[1]) { $per=$size_factor / $size[0]; }
    		else                 { $per=$size_factor / $size[1]; }
   		$x_size=$size[0]*$per;
   		$y_size=$size[1]*$per;
   		$img_src=$data[file_name2];

   		$win_width = $size[0] + 15;
   		$win_height = $size[1] + 30;
   		
   		$view_img=
    		"<a 
   	 	 href='#' 
  	 	  onclick=\"new_win=window.open('$dir/view_flash.php?file=$data[file_name1]','img_win','left=0,top=0,width=450, height=400, resizable=yes, scrollbar=no,status=no'); new_win.resizeTo(450,400); new_win.focus()\" 
 		    onMouseOver=\"$popup return true;\"
 		    onMouseOut=\"viewoff(); return true;\"
 		    onFocus=\"this.blur();\"
 		   >";		
		} 
 		else 
 		{
 		  $size[0]=$size[1]=0;
 		  $x_size=100;
 		  $y_size=80;
 		  $img_src=$dir."/img/noimg.gif";

  		  $view_img=
  		  "<a 
  		   href='#' 
 		    onclick=\"new_win=window.open('$dir/view_flash.php?file=$data[file_name1]','img_win','left=0,top=0,width=450, height=400, resizable=yes, scrollbar=no,status=no'); new_win.resizeTo(450,400); new_win.focus()\" 
 		    onMouseOver=\"$popup return true;\"
 		    onMouseOut=\"viewoff(); return true;\"
 		    onFocus=\"this.blur();\"
 		   >";
 		 }
 	 }
	elseif(eregi("\.jpg",$file_name1)||eregi("\.gif",$file_name1))
	{
		if($file_name2&&file_exists($data[file_name2])) 
		{	
   		$size=GetImageSize($data[file_name2]);
   		if($size[0] == 0 ) $size[0]=1;
   		if($size[1] == 0 ) $size[1]=1;
   		if($size[0]>$size[1]) { $per=$size_factor / $size[0]; }
    		else                 { $per=$size_factor / $size[1]; }
   		$x_size=$size[0]*$per;
   		$y_size=$size[1]*$per;
   		$img_src=$data[file_name2];
   		
   		$win_size=GetImageSize($data[file_name1]);
   		if($win_size[0] == 0 ) $win_size[0]=1;
   		if($win_size[1] == 0 ) $win_size[1]=1;
   		if($win_size[0]>$win_size[1]) { $per=$size_factor / $win_size[0]; }
    		else                 { $per=$size_factor / $win_size[1]; }
   		$win_x_size=$win_size[0]*$per;
   		$win_y_size=$win_size[1]*$per;   		

   		$win_width = $win_size[0] + 15;
   		$win_height = $win_size[1] + 30;
   		
   		$view_img=
 		   "<a 
 		    href='#' 
 		    onclick=\"new_win=window.open('$dir/view_img.php?file=$data[file_name1]','img_win','left=0,top=0,width=1, height=1, resizable=yes, scrollbar=no,status=no'); new_win.resizeTo($win_width,$win_height); new_win.focus()\" 
 		    onMouseOver=\"$popup return true;\"
 		    onMouseOut=\"viewoff(); return true;\"
 		    onFocus=\"this.blur();\"
 		   >";
		} 
 		else 
 		{
 		  $size=GetImageSize($data[file_name1]);
  		 if($size[0] == 0 ) $size[0]=1;
  		 if($size[1] == 0 ) $size[1]=1;
  		 if($size[0]>$size[1]) { $per=$size_factor / $size[0]; }
 		   else                 { $per=$size_factor / $size[1]; }
 		  $x_size=$size[0]*$per;
 		  $y_size=$size[1]*$per;
 		  $img_src=$data[file_name1];

 		  $win_width = $size[0] + 15;
 		  $win_height = $size[1] + 30;
 		  $view_img=
 		   "<a 
 		    href='#' 
 		    onclick=\"new_win=window.open('$dir/view_img.php?file=$data[file_name1]','img_win','left=0,top=0,width=1, height=1, resizable=yes, scrollbar=no,status=no'); new_win.resizeTo($win_width,$win_height); new_win.focus()\" 
 		    onMouseOver=\"$popup return true;\"
 		    onMouseOut=\"viewoff(); return true;\"
 		    onFocus=\"this.blur();\"
 		   >";
 		 }
	}
	else 
	{
	 $size[0]=$size[1]=0;
 	  $x_size=100;
 	  $y_size=80;
  	 $img_src=$dir."/img/noimg.gif";

 	  $view_img=
 	   "<a 
 	    href='#' 
 	    onMouseOver=\"$popup return true;\"
 	    onMouseOut=\"viewoff(); return true;\"
 	    onFocus=\"this.blur();\"
	    >";	
	 }
} 
 else 
{
 	 if($file_name2&&file_exists($data[file_name2])) 
 	 {	
   		$size=GetImageSize($data[file_name2]);
   		if($size[0] == 0 ) $size[0]=1;
   		if($size[1] == 0 ) $size[1]=1;
   		if($size[0]>$size[1]) { $per=$size_factor / $size[0]; }
    		else                 { $per=$size_factor / $size[1]; }
   		$x_size=$size[0]*$per;
   		$y_size=$size[1]*$per;
   		$img_src=$data[file_name2];

   		$win_width = $size[0] + 15;
   		$win_height = $size[1] + 30;
   		
   		$view_img=
 		   "<a 
 		    href='#' 
 		    onclick=\"new_win=window.open('$dir/view_img.php?file=$data[file_name2]','img_win','left=0,top=0,width=1, height=1, resizable=yes, scrollbar=no,status=no'); new_win.resizeTo($win_width,$win_height); new_win.focus()\" 
 		    onMouseOver=\"$popup return true;\"
 		    onMouseOut=\"viewoff(); return true;\"
 		    onFocus=\"this.blur();\"
 		   >";
	} 
 	else 
 	{
 	  $size[0]=$size[1]=0;
 	  $x_size=100;
 	  $y_size=80;
  	 $img_src=$dir."/img/noimg.gif";

 	  $view_img=
 	   "<a 
 	    href='#' 
 	    onMouseOver=\"$popup return true;\"
 	    onMouseOut=\"viewoff(); return true;\"
 	    onFocus=\"this.blur();\"
	    >";
	 } 
}
 
?>

<td width=<?echo (100 / $max_show_image);?>% valign=top>
<TABLE  BORDER=0 CELLPADDING=0 CELLSPACING=0 width=140 class=sjini-box2>
<tr valign=top onMouseOver=this.style.backgroundColor='F0F0F0' onMouseOut=this.style.backgroundColor=''>
<td>    
    <table border=0 cellpadding=0 cellspacing=0 width=100%>
	<TR height=140>
		<TD valign=middle align=center style='padding-left:10; padding-top:10; padding-right:10; padding-bottom:10;' >
		<?=$view_img?><img src=<?=$img_src?> width=<?=$x_size?> height=<?=$y_size?> border=0>
		</TD>
	</TR>
	<?=$hide_cart_start?>
	  <tr align=left>
		<td style='padding-left:10; padding-top:0; padding-right:10; padding-bottom:5;' >
		<input type=checkbox name=cart value="<?=$data[no]?>">
		<?=$a_modify?><?   if($is_admin||$member[level]<=$setup[grant_delete]){ ?>edit</a><? } ?>
		<?=$a_delete?><?   if($is_admin||$member[level]<=$setup[grant_delete]){ ?>&nbsp;del</a><? } ?>
		</td>
	  </tr>
	<?=$hide_cart_end?>
	
	<?=$hide_category_start?>
	  <tr><td class=sjini-dotline></td></tr>
	  <TR align=center>
		<td style='padding-left:1; padding-top:10; padding-right:1; padding-bottom:10;' >
		<?=$icon?><?=$category_name?>
	        </TD>
	  </TR>
	<?=$hide_category_end?>
    </table>
</td>
</tr>
</TABLE>
</td>

<?
  $image_loop++;
  if($image_loop>=$max_show_image) 
  {
     echo"
       	</tr><tr>
	 <td colspan=$max_show_image class=sjini-blank height=10></td>
	</tr>
	<tr align=center>";
     $image_loop=0;
  }
?>
