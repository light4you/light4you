<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
	<title><?=$file?></title>
</head>
<?
  $new_string = $file;
  
  $new_string = split("/", $new_string);
    
    for($i=0;$i<sizeof($new_string)-1;$i++) {
        $new_string2 = $new_string2.$new_string[$i]."/";
    }
    $file=$new_string2.urlencode($new_string[sizeof($new_string)-1]);

?>
<body topmargin='0'  leftmargin='0' marginwidth='0' marginheight='0'>
<A href=# onclick=window.close()><img src="../../<?=$file?>" border=0></a>
</body>
</html>

