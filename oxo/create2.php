<?php
$line_to_cell_2d = array();
$cell_to_line_2d = array();
//fill line_to_cell_2d============================================================================= 
for ($i=0;$i<8;$i++)
{
	$line_to_cell_2d[]=array(0,0,0);
}
for ($j=0;$j<3;$j++)
{
	for ($i=0;$i<3;$i++)
	{
		$line_to_cell_2d[$j][$i]  = ($i*3)+$j;
		$line_to_cell_2d[$j+3][$i]= ($j*3)+$i;
 	}
 	$line_to_cell_2d[6][$j] = 2+ ($j*2);
 	$line_to_cell_2d[7][$j]  = 4*$j;
}
//print ===================================================================================================
for ($j=0;$j<8;$j++)
{
	print $j;
	print ") ";
	for ($i=0;$i<3;$i++)
    {
		print $line_to_cell_2d[$j][$i];
	    print " ";
   }
   print "<br/>";
}
//fill cell to line=================================================================================
for ($j=0;$j<9;$j++)
{
   $cell_to_line_2d[] = array(-1,-1,-1,-1);
}
for ($j=0;$j<8;$j++)
{
 	for ($i=0;$i<3;$i++)
	{
		$k = $line_to_cell_2d[$j][$i];
		$ok = false;
		for ($z=0;!$ok;$z++)
		{
			$s=$cell_to_line_2d[$k][$z];
		 	if ($s ==-1)
		 	{
				 $ok=true;
		 		 $cell_to_line_2d[$k][$z]=$j;
		 	}
		} 
	}
}
// print======================================================================================
print "<hr/>";
for ($j=0;$j<8;$j++)
{
	print $j;
	print ") ";
 	for ($i=0;$i<4;$i++)
    {
      if ($cell_to_line_2d[$j][$i]>-1)
	  { print  $cell_to_line_2d[$j][$i];
	   print " ";
	  }
	}
   print "<br/>";
}
print "<hr/>";
//target=================================================================================
$target_2d=array(3,30,2,20,1,10,0);
for ($j=0;$j<=6;$j++)
{
 print $target_2d[$j];
 print " ";
}
$gm=array();
for ($i=0;$i<3;$i++)
{
	$gm[]=array(0,0,0);
}
$status = 0;
$_Session["cell_to_line_2d"]	=$cell_to_line_2d;
$_Session["status"]				=$status;
$_Session["target_2d"]			=$target_2d;
$_Session["line_to_cell_2d"]	=$line_to_cell_2d;
$_Session["gm"]					=$gm;
header("location:play2d.php");
?>