<SCRIPT LANGUAGE="JavaScript">
<!--
function formresize(mode) {
        if (mode == 0) {
                document.write.memo.cols  = 80;
                document.write.memo.rows  = 20; }
        if (mode == 1) {
                document.write.memo.cols += 5; }
        if (mode == 2) {
                document.write.memo.rows += 3; }
}
// -->
</SCRIPT>
<?
  /*
  write.php 는 글쓰기 폼입니다.
  아래 변수를 사용합니다.

  회원일때 나타나지 않는 부분을 처리하는 부분입니다. 감싸주면 회원일때는 나타나지 않습니다.
  <?=$hide_start?> : 회원일때 글쓰기등을 나타나지 않게 하는 부분입니다;; 회원일때는 자동 주석(<!--)이 들어갑니다.  
  <?=$hide_end?>  : 회원일때 보이지 않게 합니다. <?=$hide_start?>로 시작하고 <?=$hide_end?> 로 감싸주면 됩니다.

  <?=$hide_sitelink1_start?>, <?=$hide_sitelink1_end?> : 싸이트링크 1번을 사용하는지 않하는지 표시
  <?=$hide_sitelink2_start?>, <?=$hide_sitelink2_end?> : 싸이트링크 2번을 사용하는지 않하는지 표시
  <?=$hide_pds_start?>, <?=$hide_pds_end?> : 자료실을 사용하는지 않하는지 표시
  <?=$hide_html_start?>, <?=$hide_html_end?> : HTML 체크박스 표시 


  <?=$title?> : 신규, 수정, 답글일때의 제목 표시

  아래변수는 해당폼에 있는것을 그대로 놔두시면 됩니다.
  <?=$name?> : 원본 이름입니다.
  <?=$subject?> : 원본 제목입니다.
  <?=$email?> : 원본 메일입니다.
  <?=$homepage?> : 홈페이지입니다.
  <?=$memo?> : 원본 내용입니다.
  <?=$sitelink1?> : 싸이트 링크 1번입니다
  <?=$sitelink2?> : 싸이트 링크 2번입니다
  <?=$file_name1?> : 업로드된 파일 1번입니다.
  <?=$file_name2?> : 업로드된 파일 2번입니다.
  <?=$category_kind?> : 카테고리 셀렉트 박스
  <?=$use_html?> : HTML 체크 표시;; 즉 html체크였을때(수정) checked 가 들어가 있음;;
  <?=$reply_mail?> : 답변메일 체크 표시;;
  <?=$secret?> : 비밀글 표시
  <?=$upload_limit?> : 업로드 용량
  */
?>
<? include "$dir/value.php3"; ?>
<?
 if ($mode=="reply") $write_str="Reply Mode";
 elseif($mode=="modify") $write_str="Edit Mode";
 else $write_str="Write Mode";
?>

<!-- 폼태그 부분;; 수정하지 않는 것이 좋습니다 -->
<form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data>
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
<input type=hidden name=subject value="Gallery">
<!----------------------------------------------->
 
<table border=0 cellspacing=0 cellpadding=0>
<tr><td class=sjini-blank height=20></td></tr>
</table>
 
<table border=0 cellspacing=0 cellpadding=0 width=450 class=sjini-box>
<tr>
<td>
  <table border=0 cellspacing=0 cellpadding=0 width=100%>
  <tr>
   <td height=25 align=right><b>::: <?=$write_str?> :::</b></td>
  </tr>
  <tr><td class=sjini-dotline></td></tr>
  </table>
</td>
</tr>

<tr>
<td>
  <table border=0 cellspacing=5 cellpadding=0 width=100% style='margin-top:10'>
  <tr>
  <td>
 
  <?=$hide_start?>

  <tr>
    <td align=right class=sjini-bfont>Name</td> 
    <td style='font-family:Tahoma; font-size:8pt'> <input type=text name=name value="<?=$name?>" <?=size(10)?> maxlength=20 class=input><span class=sjini-bfont>　 　PassWD </span><input type=password name=password <?=size(10)?> maxlength=20 class=input> </td>
  </tr>

  <tr>
    <td align=right class=sjini-bfont>eMail</td>
    <td> <input type=text name=email value="<?=$email?>" <?=size(35)?> maxlength=200 class=input> </td>
  </tr>

  <tr>
    <td align=right class=sjini-bfont>U R L</td>
    <td> <input type=text name=homepage value="<?=$homepage?>" <?=size(35)?> maxlength=200 class=input> </td>
  </tr>

  <?=$hide_end?>
     
  <tr>
    <td colspan=2 align=right class=sjini-mfont>
       <?=$category_kind?>
       <?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1> Html &nbsp;<?=$hide_html_end?>
       <input type=checkbox name=reply_mail <?=$reply_mail?> value=1> Get-Reply-eMail &nbsp; 
    </td>
   
   <tr>
    <td></td>
    <td><textarea name=memo <?=size2(63)?> rows=12 class=textarea><?=$memo?></textarea></td>
  </tr>

  <?=$hide_pds_start?>
  <tr valign=top>
    <td align=right class=sjini-bfont>Upload</td>
    <td> <input type=file name=file1 <?=size(50)?> maxlength=255 class=input> <?=$file_name1?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td >( * jpg, gif, swf 파일만 업로드 가능 합니다. ^^* )</td>
  </tr>
  <tr>
    <td align=right class=sjini-bfont>ScreenShot</td>
    <td> <input type=file name=file2 <?=size(50)?> maxlength=255 class=input> <?=$file_name2?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td >( * 스크린샷은 jpg, gif 파일만 업로드 가능 합니다. ^^* )</td>
  </tr>
  <?=$hide_pds_end?>

  <tr>
    <td colspan=2 align=right><br> 
       <input type=submit value="" onfocus=blur() accesskey="s" class=sjini-ok>&nbsp;&nbsp;
       <input type=button value="" onfocus=blur() onclick=history.go(-1) class=sjini-back>&nbsp;
       <br>
    </td>
  </tr>
  </table>
</td>
</tr>

</table>

<br><br>



