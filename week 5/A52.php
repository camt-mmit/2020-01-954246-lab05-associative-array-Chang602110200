<?php
//602110200 Chang hongxiang
//Wechat name: Chang
echo"Input Number of Data: ";
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++){
	echo"Data ",$i+1,"\n";
	echo"   Name Prefix (0: Mr., 1: Miss. , 2: Mrs.): ";
	fscanf(STDIN,"%s",$np);
	$array1[$i]=$np;
	echo"   First Name: ";
	fscanf(STDIN,"%s",$fn);
	$array2[$i]=$fn;
	echo"  Last Name: ";
	fscanf(STDIN,"%s",$ln);
	$array3[$i]=$ln;
	echo"  Gender (0: Male, 1: Female, 2: Transgender): ";
	fscanf(STDIN,"%s",$g);
	$array4[$i]=$g;

	echo" Phone Number: ";//
	fscanf(STDIN,"%s",$pn);
	
	$pn[$i]=[];
	for($j=0;$j<=$i;$j++){
		$n=null;
	echo "Phone Number %d : " , $j+1;
	fscanf(STDIN,"%s",$n);
	if($n==null) break; 
		 else $phone[$i][$j]=$n;//
		 $array5[$i]=$pn;}
}
echo"------------------------------------------------------\n";

for($i=0;$i<$n;$i++){
	if($array1[$i]==0){echo"Mr.";} if($array1[$i]==1){echo"Miss.";} elseif($array1[$i]==2){echo"Mrs.";}
	echo$array2[$i]," ",$array3[$i],"\nGender: ";
	if($array4[$i]==0){echo"Male\n";} if($array4[$i]==1){echo"Female\n";} elseif ($array4[$i]==2){echo "Transgender\n";}
	 printf("phone number: ");
        for($j=0;$j<$array5[$i];$j++){
         $q="";
         if($j>0) echo $q=",";
         echo $phone[$i][$j];}
	echo "\n------------------------------------------------------\n";		
}	