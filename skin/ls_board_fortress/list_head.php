<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
 <td colspan=8 bgcolor=EE781A height=2></td>
</tr>
<tr><td width=1>
<form method=post name=list action=list_all.php>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected>
<input type=hidden name=exec>
<input type=hidden name=keyword value="<?=$keyword?>">
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
</td><td width=100%>

<table border=0 cellspacing=0 cellpadding=0 width=100%>
<tr align=center bgcolor=f7f7f7 height="25">
  <td>
    <table border=0 height=18 cellspacing=0 cellpadding=0 width=25>
       <tr><td align=center valign=top nowrap><?=$a_no?><div class=lifesay>No</font></div></a></td></tr>
    </table>
  </td>
<?=$hide_cart_start?>
  <td>
    <table border=0 height=18 cellspacing=0 cellpadding=0>
       <tr><td align=center valign=top nowrap><?=$a_cart?><div class=lifesay>C</font></div></a></td></tr>
    </table>
  </td>
<?=$hide_cart_end?>
<?=$hide_category_start?><td><?=$a_category?></td><?=$hide_category_end?>
  <td width=100%>
    <table border=0 height=18 cellspacing=0 cellpadding=0 width=100%>
       <tr><td align=center valign=top><?=$a_subject?><div class=lifesay>Subject</font></div></a></td></tr>
    </table>
  </td>
  <td>
    <table border=0 height=18 cellspacing=0 cellpadding=0 width=90>
       <tr><td align=center valign=top><?=$a_name?><div class=lifesay>Name</font></div></a></td></tr>
    </table>
  </td>
  <td>
    <table border=0 height=18 cellspacing=0 cellpadding=0>
       <tr><td align=center valign=top nowrap><?=$a_date?><div class=lifesay>Date</font></div></a></td></tr>
    </table>
  </td>
  <td>
    <table border=0 height=18 cellspacing=0 cellpadding=0>
       <tr><td align=center valign=top nowrap><?=$a_hit?><div class=lifesay>Hit</font></div></a></td></tr>
    </table>
  </td>
  <td>
  </td>
</tr>
<tr>
 <td colspan=8 bgcolor=EE781A height=1></td>
</tr>
<tr>
 <td colspan=8 bgcolor=c4c4c4 height=1></td>
</tr>
