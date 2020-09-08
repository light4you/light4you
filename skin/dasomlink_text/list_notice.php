
<? include "$dir/value.php3"; ?>

<table border=0 cellspacing=0 cellpadding=0 width=100%>

	<tr>
          <td align=center>
			
                 <table border=0 cellspacing=0 cellpadding=0 width=100%>
				
                      <tr>
	                 <td bgcolor=#F8F8F8>
                            <font color=<?=$sC_dark2?>><img src=<?=$dir?>/name_head.gif border=0 align=abstop>
                            <?=$hide_cart_start?>
			    <input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?>
			    <b><?=$data[subject]?></b></font>
                         </td>
			 <td width=20% nowrap align=right bgcolor=#F8F8F8>
                             <font style=font-family:Tahoma;font-size:7pt;font;letter;letter-spacing:0px;><?=$a_modify?></a>&nbsp;<?=$a_delete?></a></font>
                         </td>
		       </tr>
			
                 </table>
		
          </td>
	</tr>

</table>

<table height=1 width=100%>

<tr height=1>
  <td background="<?=$dir?>/lh_bg.gif">
  </td>
</tr>

</table>
