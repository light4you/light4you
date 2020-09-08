<?	if($mode=="reply") $title="싸이트링크 답변";	elseif($mode=="modify") $title="싸이트링크 수정";	else $title="싸이트링크 작성"; ?>

<SCRIPT LANGUAGE="JavaScript">
<!-- function zb_formresize(obj) { 	obj.rows += 3; } // --> 
</SCRIPT>

<table border=0 width=<?=$width?> cellsapcing=1 cellpadding=0>
<form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data>
<input type=hidden name=page value=<?=$page?>><input type=hidden name=id value=<?=$id?>>
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

<col width=80 align=right style=padding-right:10px;height:28px class=list1></col>
<col class=list0 style=padding-left:10px;height:28px width=></col>

<tr class=title>
<td height=30 valign=middle colspan=2 class=title_han align=center bgcolor=#E7E7E7>&nbsp;&nbsp;<?=$title?></td>
</tr>

<?=$hide_start?>
<tr>
<td bgcolor=#F7F7F7><font class=list_eng><b>비밀번호</b></font></td>
<td><input type=password name=password <?=size(20)?> maxlength=20 class=input></td>
</tr>

<tr>
<td bgcolor=#F7F7F7><font class=list_eng><b>이름</b></font></td>
<td><input type=text name=name value="<?=$name?>" <?=size(20)?> maxlength=20 class=input></td>
</tr>

<tr>
<td bgcolor=#F7F7F7><font class=list_eng><b>이메일</b></font></td>
<td><input type=text name=email value="<?=$email?>" <?=size(40)?> maxlength=200 class=input></td>
</tr>

<tr>
<td bgcolor=#F7F7F7><font class=list_eng><b>홈페이지</b></font></td>
<td><input type=text name=homepage value="<?=$homepage?>" <?=size(40)?> maxlength=200 class=input></td>
</tr>
<?=$hide_end?>

<tr>
<td bgcolor=#F7F7F7><font class=list_eng><b>체크</b></font></td>
<td class=list_eng><?=$category_kind?><?=$hide_notice_start?> 
<input type=checkbox name=notice <?=$notice?> value=1> 공지 <?=$hide_notice_end?>      
</td>
</tr>

<?=$hide_sitelink1_start?>
<tr>
<td bgcolor=#F7F7F7><font class=list_eng><b>싸이트링크</b></font></td>
<td><input type=text name=sitelink1 value="<?=$sitelink1?>" <?=size(62)?> maxlength=200 class=input style=width:99%></td>
</tr>
<?=$hide_sitelink1_end?>

<tr valign=top>
<td bgcolor=#F7F7F7><font class=list_eng><b>싸이트이름</b></font></td>
<td><input type=text name=subject value="<?=$subject?>" <?=size(60)?> maxlength=200 style=width:99% class=input></td>
</tr>

<tr>
<td bgcolor=#F7F7F7 onclick=document.write.memo.rows=document.write.memo.rows+4 style=cursor:hand>
  <font class=list_eng><b>싸이트설명</b></font></td>
<td style=padding-top:8px;padding-bottom:8px;>
  <textarea name=memo <?=size2(90)?> rows=12 class=textarea style=width:99%><?=$memo?></textarea></td>
</tr>
</table>

<table border=0 width=<?=$width?> cellsapcing=1 cellpadding=0>

<tr>
<td colspan=2>
    <table border=0 cellspacing=1 cellpadding=2 width=100% height=40>
        <tr>			
        <td bgcolor=#F7F7F7>&nbsp;</td>
	<td bgcolor=#F7F7F7 align=right>
	   <input type=submit value="Subject" class=submit accesskey="s">
           <input type=button value="List" class=submit onclick=history.back()>
        </td>
	</tr>
    </table>
	
</td>
</tr>
</table>
<br>
