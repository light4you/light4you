<? include "$dir/value.php3"; ?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
  <tr>
    <td width=1>
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
    </td>
  </tr>
  <tr>
    <td width=100%>

<table border=0 cellspacing=0 cellpadding=0 width=100%>

<tr align=center>
    <td>
      <table width=100% height=2 border=0 cellspacing=0 cellpadding=0 background=<?=$dir?>/line_left.gif>
        <tr>
          <td align=center width=30 nowrap>
     
          </td>
        </tr>
      </table>
    </td>


<?=$hide_cart_start?>
   <td>
   <table width=100% height=2 border=0 cellspacing=0 cellpadding=0 background=<?=$dir?>/line_center.gif>
  <tr>
    <td align=center nowrap></td>
  </tr>
</table>
   </td>
<?=$hide_cart_end?>
    </td>

    <td width=100%>
      <table width=100% height=2 border=0 cellspacing=0 cellpadding=0 background=<?=$dir?>/line_center.gif>
        <tr>
          <td>
            <table width=100% border=0 cellspacing=0 cellpadding=0>
              <tr><td></td><td align=center>
              <?=$a_subject?>
              </td></tr></table>
          </td>
        </tr>
      </table>
    </td>
    <td>
      <table width=80 height=2 border=0 cellspacing=0 cellpadding=0 background=<?=$dir?>/line_center.gif>
        <tr>
          <td align=center style='word-break:break-all;'>
            <?=$a_name?>
          </td>
        </tr>
      </table>
    </td>
    <td>
      <table width=100% height=2 border=0 cellspacing=0 cellpadding=0 background=<?=$dir?>/line_center.gif>
        <tr>
          <td align=center>
            <?=$a_date?>
          </td>
        </tr>
      </table>
    </td>
    <td>
      <table width=30 height=2 border=0 cellspacing=0 cellpadding=0 background=<?=$dir?>/line_right.gif>
        <tr>
          <td align=center>
            <?=$a_hit?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
