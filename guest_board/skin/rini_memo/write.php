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
<script language="javascript">
function Change (target,classname,type)
        {
        if ( target.value == target.defaultValue && type==0)        target.value = '';
        if ( !target.value && type==1)        target.value = target.defaultValue;
        target.className=classname;
        }
</script>


<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?> nowrap>

<tr>
<td width=0>
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
<input type=hidden name=subject value="M<?=$subject?>">
<input type=hidden name=password value="Knucles<?=$password?>">
<!----------------------------------------------->
</td>

<? $memo="간단 메모하세요^-^ 로긴 하셨으면 이름 안적어두 됩니다"; ?>

<td>
<tr><td background="<?=$dir?>/images/back.gif">&nbsp;</td>
</tr>
<tr>
 <td colspan="2"><a href='admin.php' title="관리자">
<img src="<?=$dir?>/images/name.gif" border=0></a>
<input type=text name=name size=18 maxlength=12 class=wForm value='<?=$name?>'>&nbsp;
<font style="font-family:웹정,굴림;font-size:9pt;color:silver;">
&nbsp;<?=$Row[board_title]?><?=$hide[board_title_end]?></td>
</tr>
<tr>

<td align="left">
<img src="<?=$dir?>/images/memo.gif" border=0>
<input type=text name="memo" size=55 maxlength=45 class=wForm2 value='<?=$memo?>' style='border-width:0 0 1; border-bottom:dotted #e8e8e8 1px; line-height:100%;' onFocus="Change(this,'input',0)" onBlur="Change(this,'input',1)">
</td></tr>
<tr>
<td align=right height=13>
<input type=image name="submit" src="<?=$dir?>/images/save.gif" accesskey="s"">
</td>
</tr>
<tr><td background="<?=$dir?>/images/back.gif" height=13><font size=1>&nbsp;</font></td></tr>
</td></tr></table>

        <script language="javascript">
        document.write.name.focus();
        </script>
