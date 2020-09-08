<?
 /* 간단한 답글 쓰기 표시

  -- 간단한 답글 관련
  <?=$hide_comment_start?> <?=$hide_comment_end?> : 간단한 답글 쓰기 보여주기/ 숨기기
  <?=$hide_c_password_start?> <?=$hide_c_password_end?> : 간단한 답글시 비밀번호 입력 보여주기/ 숨기기;;

  <?=$c_name?> : 코멘트시 이름 입력하는 곳;;

  ** view.php 제일 아래쪽에 간답한 답글이 시작하는 <table>태그 시작부분이 있습니다.
     그리고 간단한 답글이 있으면 view_comment_view.php 파일에서 출력을 합니다.

 */
?>
</table>


<!-- 간단한 답변글 쓰기 -->
<form method=post name=write action=comment_ok.php>
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

<div align=center>
<table border=0 cellspacing=1 cellpadding=0 bgcolor=<?=$list_footer_bg_color?>>
<tr>
  <td bgcolor=<?=$list_header_back?>>
	<table border=0 cellspacing=0 cellpadding=4>
	<tr align=center> 
	  <td style=font-family:Verdana;font-size:8pt;letter-spacing:-1px;><img src=images/t.gif border=0 width=80 height=1><br>Name</td>
	  <td style=font-family:Verdana;font-size:8pt;letter-spacing:-1px;>Memo</td>
	<?=$hide_c_password_start?>
	  <td style=font-family:Verdana;font-size:8pt;letter-spacing:-1px;><img src=images/t.gif border=0 width=100 height=1><br>Password</td>
	<?=$hide_c_password_end?>
	  <td>&nbsp;</td>
	</tr>
	<tr align=center>
	  <td nowrap><?=$c_name?></td>
	  <td><input type=text name=memo <?=size(40)?> maxlength=100 class=input style="border-width:1px; border-style:solid;">&nbsp;&nbsp;</td>
	<?=$hide_c_password_start?>
	  <td><input type=password name=password <?=size(10)?> maxlength=20 class=input style="border-width:1px; border-style:solid;">&nbsp;&nbsp;</td>
	<?=$hide_c_password_end?>
	  <td><input type=submit class=comment_submit class=submit value='Comment' accesskey="s"></td>
	</tr>
	</table>
  </td>
</tr>
</table>
</form>
</div>
