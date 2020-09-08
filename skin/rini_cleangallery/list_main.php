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
        $popup = "viewon('$data[subject]','$popup_text', 1);";
 } elseif($image_loop==$max_show_image-1) {
        $popup = "viewon('$data[subject]','$popup_text', 2);";
 } else $popup = "viewon('$data[subject]','$popup_text', 0);";


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
                   $x_size=90;
                   $y_size=90;
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
                   $x_size=90;
                   $y_size=90;
                   $img_src=$dir."/images/noimg.gif";

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
        elseif(eregi("\.jpg",$file_name1)||eregi("\.gif",$file_name1)||eregi("\.bmp",$file_name1)||eregi("\.png",$file_name1)||eregi("\.tif",$file_name1)||eregi("\.tiff",$file_name1)||eregi("\.tga",$file_name1))
        {
                if($file_name2&&file_exists($data[file_name2]))
                {
                   $size=GetImageSize($data[file_name2]);
                   if($size[0] == 0 ) $size[0]=1;
                   if($size[1] == 0 ) $size[1]=1;
                   if($size[0]>$size[1]) { $per=$size_factor / $size[0]; }
                    else                 { $per=$size_factor / $size[1]; }
                   $x_size=90;
                   $y_size=90;
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
                   $x_size=90;
                   $y_size=90;
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
           $x_size=90;
           $y_size=90;
           $img_src=$dir."/images/noimg.gif";

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
                   $x_size=90;
                   $y_size=90;
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
           $x_size=90;
           $y_size=90;
           $img_src=$dir."/images/noimg.gif";

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
<table border=0 cellspacing=0 cellpadding=0 width=102>
<tr>
  <td height=1 width=1 bgcolor=#E6E6E6></td>
  <td height=1 width=5 bgcolor=#E6E6E6></td>
  <td height=1 width=90 bgcolor=#E6E6E6></td>
  <td height=1 width=5 bgcolor=#E6E6E6></td>
  <td height=1 width=1 bgcolor=#E6E6E6></td>
</tr>
<tr>
  <td height=5 width=1 bgcolor=#E6E6E6></td>
  <td height=5 width=5 bgcolor=#FFFFFF></td>
  <td height=5 width=90 bgcolor=#FFFFFF></td>
  <td height=5 width=5 bgcolor=#FFFFFF></td>
  <td height=5 width=1 bgcolor=#E6E6E6></td>
</tr>
<tr>
  <td height=90 width=1 bgcolor=#E6E6E6></td>
  <td height=90 width=5 bgcolor=#FFFFFF></td>
  <td><?=$view_img?><img src=<?=$img_src?> width=<?=$x_size?> height=<?=$y_size?> border=0></td>
  <td height=90 width=5 bgcolor=#FFFFFF></td>
  <td height=90 width=1 bgcolor=#E6E6E6></td>
</tr>
<tr>
  <td height=5 width=1 bgcolor=#E6E6E6></td>
  <td height=5 width=5 bgcolor=#FFFFFF></td>
  <td height=5 width=90 bgcolor=#FFFFFF></td>
  <td height=5 width=5 bgcolor=#FFFFFF></td>
  <td height=5 width=1 bgcolor=#E6E6E6></td>
</tr>
<tr>
  <td height=1 width=1 bgcolor=#E6E6E6></td>
  <td height=1 width=5 bgcolor=#E6E6E6></td>
  <td height=1 width=90 bgcolor=#E6E6E6></td>
  <td height=1 width=5 bgcolor=#E6E6E6></td>
  <td height=1 width=1 bgcolor=#E6E6E6></td>
</tr>

<tr>
<td height=21 width=102 colspan=5 align=center>
<?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>">&nbsp;<?=$hide_cart_end?>
<?=$subject?> <font color=#COCOCO class=rini_taho><?=$comment_num?></font>
<font class=rini_ver3><?=$a_modify?>&nbsp;+&nbsp;</a><?=$a_delete?>&nbsp;-</a></font>
</td>
</tr>
<tr>
<td height=0 colspan=5 align=center></td></tr>
</table>
</td>

<?
  $image_loop++;
  if($image_loop>=$max_show_image)
  {
     echo"
               </tr><tr>
         <td colspan=$max_show_image height=5></td>
        </tr>
        <tr align=center>";
     $image_loop=0;
  }
?>
