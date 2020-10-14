<?php
//602110200 Chang hongxiang
//Wechat name: Chang
$arrayA=[];
$arrayB=[];
$arrayC=[];
$arrayD=[];
$arrayE=[];
for($i=0;;$i++){
  printf("Student %d: (name and grade, enter for end of data): ",$i+1);
  $name=null;
  $data=null;
  fscanf(STDIN,"%s %s",$name,$data);
  if($name==null) break;
  else{
	if($data!='A'&& $data!='B'&& $data!='C' && $data!='D'&& $data!='F')
	printf("Please input A, B, C, D or F for grade!!!\n");
  }
   if($data=='A') $arrayA[]=$name;
   else if($data=='B') $arrayB[]=$name; 
   else  if($data=='C') $arrayC[]=$name; 
   else if($data=='D') $arrayD[]=$name; 
   else if($data=='F') $arrayF[]=$name; 
}

printf("A(%d): ",count($arrayA));
for($j=0;$j<count($arrayA);$j++){
$c="";
if($j>0) echo $c=",";
$A=array_count_values($A);
echo "$arrayA[$j]";                 
}           
printf("\n");

printf("B(%d): ",count($arrayB));
for($j=0;$j<count($arrayB);$j++){
$c="";
if($j>0) echo $c=",";
$B=array_count_values($yB);
echo "$arrayB[$j]";
}
printf("\n");

printf("C(%d): ",count($arrayC));
for($j=0;$j<count($arrayC);$j++){
$c="";
if($j>0) echo $c=",";
$C=array_count_values(C);
echo "$arrayC[$j]";

}         
printf("\n");

printf("D(%d): ",count($arrayD));
for($j=0;$j<count($arrayD);$j++){
$c="";
if($j>0) echo $c=",";
$D=array_count_values($D);

echo "$arrayD[$j]";

}
printf("\n");
 printf("F(%d): ",count($arrayF));
for($j=0;$j<count($arrayF);$j++){
$c="";
if($j>0) echo $c=",";
$F=array_count_values($F);
echo "$arrayF[$j]";
}
printf("\n");

$sum=$A*4+$B*3+$C*2+$D*1+$F*0;
$number=$A+$B+$C+$D+$F;
$average=$sum/$number;
echo"The average=".$average;