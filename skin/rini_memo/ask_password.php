<?
  /*
  글을 삭제하거나 할때 비밀번호를 물어보는 부분입니다

  <?=$target?> : 실행파일을 가리킵니다. 수정하지 마세요;;;
  <?=$title?> : 타이틀을 출력합니다

  <?=$a_list?> : 목록보기 링크
  <?=$a_view?> : 내용보기 링크

  <?=$invisible?> : 멤버나 관리자가 삭제시 삭제 버튼만 보입니다;;

  <?=$input_password?> : 비밀번호를 물어보는 input=text 출력
  */
?>
<div align=center>

 <table border=0 cellspacing=0 cellpadding=0 width=300 nowrap>
  <tr align=center>
   <td class=line1 height=1></td>
  </tr>
  <tr align=center>
   <td class=t height=18><b>Member Login</b></td>
  </tr>
  <tr align=center>
   <td class=line1 height=1></td>
  </tr>
</table>


<table border=0 width=300 cellspacing=0 cellpadding=0 nowrap>
 <tr>
  <td>
   <table border=0 width=100% cellpadding=0 cellspacing=0>
    <form method=post name=delete action=<?=$target?>>
     <input type=hidden name=page value=<?=$page?>>
     <input type=hidden name=id value=<?=$id?>>
     <input type=hidden name=no value=<?=$no?>>
     <input type=hidden name=select_arrange value=<?=$select_arrange?>>
     <input type=hidden name=desc value=<?=$desc?>>
     <input type=hidden name=page_num value=<?=$page_num?>>
     <input type=hidden name=keyword value="<?=$keyword?>">
     <input type=hidden name=category value="<?=$category?>">
     <input type=hidden name=sn value="<?=$sn?>">
     <input type=hidden name=ss value="<?=$ss?>">
     <input type=hidden name=sc value="<?=$sc?>">
     <input type=hidden name=mode value="<?=$mode?>">
     <input type=hidden name=c_no value=<?=$c_no?>>

    <tr height=25 style=padding:5px;>
     <td align=center><br><?=$title?></td>
    </tr>

    <tr>
     <td align=center>
      <table border=0 cellspacing=0 cellpadding=0>
<tr>
<td align=center><?=$input_password?>
</td>
</tr>
<tr>
<td class=line2 height=1></td>
</tr>
</table>
   <br>
  </td>
 </tr>
</table>
</td></tr></table>

 <table border=0 height=18 cellpadding=0 cellspacing=0 width=300 nowrap>
  <tr align=center>
   <td height=18 align=center>
      <input type=submit value="submit" class=submit>
      <input type=button value="cancel" onclick=history.go(-1) class=submit>
   </td>
  </tr>
  <tr align=center>
   <td class=line1 height=20></td>
  </tr>
 </table>

</div>

