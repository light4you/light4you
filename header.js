function memberBox(boxGbn, arrMem) {
    if (arrMem.length> 0) {    
        for(i=0;i<arrMem.length;i++) {
            if (arrMem[i][0] != undefined){

                if (arrMem[i][4] != "") {
                    imgname = arrMem[i][4];
                }
                else {
                    imgname = i + ".jpg";
                }        
                document.writeln('<h2>' + arrMem[i][0] + '</h2>');
                document.writeln('<table cellspacing=2 cellpadding=4 border=0><tr>');
                document.writeln('<td valign="top" style="padding-left:25px;"><img src="images/members/' + boxGbn + '/' + imgname + '" alt="' + arrMem[i][0] + '" border="0" align="left"></td>');
                document.writeln('<td valign="top">');
                document.writeln('<strong id="headtitle">Education & Experiences</strong><br><br>');
                document.writeln( arrMem[i][1] + '<br><br><br>' );
                document.writeln('<strong id="headtitle">Research Interests</strong><br><br>');
                document.writeln( arrMem[i][2] );
                document.writeln('</td></tr></table>');
                document.writeln('');
                
                if (i<arrMem.length-1) {
                  document.writeln('<hr/>');
                }
                else {
                    document.writeln('<br><br>');
                  }
            }
        }  
    }      
}
