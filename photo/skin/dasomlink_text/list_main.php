
<? include "$dir/value.php3"; ?>

<table border=0 cellspacing=0 cellpadding=0 width=100%>

  <tr>
    <td align=center>
			
          <table border=0 cellspacing=0 cellpadding=0 width=100%>
				
              <tr>
	        <td>
                   <font color=<?=$sC_dark2?>><img src=<?=$dir?>/name_head.gif border=0 align=abstop>
		   <?=$hide_cart_start?>
		   &nbsp;<input type=checkbox name=cart value="<?=$data[no]?>">
                   <?=$hide_cart_end?>
                   &nbsp;<?=$data[subject]?></b></font>&nbsp;&nbsp;</font><?=$a_modify?>+</a>
                </td>
		<td width=10% nowrap align=right>
                   <font style=font-family:Tahoma;font-size:8pt;font;letter;letter-spacing:0px;><a onfocus='this.blur()' href=<?=$data[sitelink1]?> target=_blank><?=$a_sitelink?><?=$data[sitelink1]?></a>&nbsp;&nbsp;</font>
                </td>
	      </tr>
			
           </table>
		
     </td>
  </tr>

</table>
