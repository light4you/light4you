<?
  /* 간단한 답글을 출력하는 부분입니다.
   view.php스킨파일에 간단한 답글을 시작하는 <table>시작 태그가 시작되어 있습니다.
   그리고view_foot.php 파일에 </table>태그가 간단한 답글 쓰기 폼과 같이 있습니다

  <?=$comment_name?> : 글쓴이
  <?=$c_memo?> : 내용
  <?=$c_reg_date?> : 글을 쓴 날자;;
  <?=$a_del?> : 코멘트 삭제 버튼링크
  <?=$c_face_image?> : 멤버용 아이콘;;
 */
?>

<tr>
  <td colspan=2>
     <table border=0 align=center cellpadding=2 cellspacing=0 width=<?=$width?>>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
   <tr align=center>
     <td width=10% align=right style='word-break:break-all;' nowrap><?=$c_face_image?> <?=$comment_name?></td>
     <td width=1%nowrap class=lifesay2><b>::</b></td>
     <td align=left style='word-break:break-all;'><?=$c_memo?></td>
	 <td width=70 style='word-break:break-all;' nowrap class=light><font style=font-size:7pt;>&nbsp;[<?=$c_reg_date?>]</td>
     <td width=5%><?=$a_del?>ⓧ</a></td>
   </tr>
   </table>
 </td>
</tr>

