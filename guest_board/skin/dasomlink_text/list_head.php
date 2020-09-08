
<? include "$dir/value.php3"; ?>

<table border=0 cellspacing=1 cellpadding=1 width=<?=$width?>>

 <tr>
  <td align=left>
       <? include "include/print_category.php"; ?>
  </td>
  <td align=right valign=bottom style=font-family:Tahoma;font-size:7pt;>   
     <?=$a_login?>login</a> <?=$a_logout?>logout&nbsp;</a> <?=$a_setup?>admin</a>&nbsp;&nbsp;
  </td>
 </tr>

</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>

<tr>
 <td width=100% valign=top>      
      
       <table border=0 cellspacing=0 cellpadding=0 width=100%>	
         
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
            <td colspan=10>			
                   
                  <table border=0 cellspacing=1 cellpadding=1 width=100%>				
                        
                       <tr>			 
                         <td height=1 background="<?=$dir?>/lh_bg.gif">
                         </td>			
                       </tr>			
                    
                   </table>	  
            
             </td>	  
          </tr>	
          
          <tr>	    
            <td>
