<?php
$code = "#include<stdio.h> \n\n";
$code .= "#include<conio.h> \n\n";
$code .= "//wap in c to show only valid 256 cases in switch \n";
$code .= "void main(){ \n";
$code .= "int n; \n";
$code .= 'printf("Enter the no B/w 1 to 256:");'." \n";
$code .= 'scanf("%d",&n);'." \n";
$code .= 'switch(n){ '."\n";

for($i=1;$i<70000;$i++)
{
	$code .= 'case '.$i.':'." \n";
	$code .= 'printf('.'"case '.$i.' is executing \n");'."\n";
}
$code .= "default: \n";
$code .= 'printf('.'"default case 10 is executing \n");'."\n";
$code .= "}\n";
$code .= "}\n";
$fp = fopen("p10.c","w+");
fwrite($fp,$code);
fclose($fp);






 	
		

	
		





