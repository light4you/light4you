<form>

<br><br><br>

<table border=0 width=250 class=zv3_writeform height=30>

<tr class=title>	
<td height=30 class=title_han align=center bgcolor=#F7F7F7>
<b>에러</b>
</td>
</tr>

<tr class=list0>    
<td align=center height=50 class=list_han>      
<?echo $message;?>	
</td>
</tr>

</table>

<?  if(!$url)  {?>  

<br>  
<center>
<a href=# onclick=history.back() onfocus=blur()>
<font class=list_han>이전 화면</font></a>

<?  }  else  {?>	

<br>  

<div align=center>
<a href=# onclick=location.href="<?echo $url;?>" onfocus=blur()>
<font class=list_han>돌아가기</font></a>

<?  }?>

</form>

<br><br>
