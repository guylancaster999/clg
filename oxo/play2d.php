<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script language="javascript" type="application/javascript">
document.getElementById("display").innerHTML  = "123";
var line_to_cell_2d = new Array(9);
var cell_to_line_2d = new Array(9);
//fill line_to_cell_2d============================================================================= 
for (i=0;i<8;i++)
{
	line_to_cell_2d[i]=Array(0,0,0);
}
for (j=0;j<3;j++)
{
	for (i=0;i<3;i++)
	{
		line_to_cell_2d[j][i]  = (i*3)+j;
		line_to_cell_2d[j+3][i]= (j*3)+i;
 	}
 	line_to_cell_2d[6][j] = 2+ (j*2);
 	line_to_cell_2d[7][j]  = 4*j;
}
//print ===================================================================================================
d="";
for (j=0;j<8;j++)
{
	d+= j +")";

	for (i=0;i<3;i++)
    {
		d+= line_to_cell_2d[j][i];
	}
   d+= "<br/>";
}
document.getElementById("display").innerHTML  = d;

//fill cell to line=================================================================================
for (j=0;j<9;j++)
{
   cell_to_line_2d[j] = Array(-1,-1,-1,-1);
}
for (j=0;j<8;j++)
{
 	for (i=0; i<3; i++)
	{
		k = line_to_cell_2d[j][i];
		ok = false;
		for (z=0;!ok; z++)
		{
			s=cell_to_line_2d[k][z];
		 	if (s ==-1)
		 	{
				 ok=true;
		 		 cell_to_line_2d[k][z]=j;
		 	}
		} 
	}
}
// print======================================================================================
var e="";

for (j=0;j<8;j++)
{
	e+= j+  ") ";
 	for (i=0;i<4;i++)
    {
      if (cell_to_line_2d[j][i]>-1)
	  { 
	  e+= cell_to_line_2d[j][i]+" ";
	  }
	}
   e+= "<br/>";
}

//target=================================================================================
var f="";
var target_2d=Array(3,30,2,20,1,10,0);
for (j=0;j<=6;j++)
{
 f+= target_2d[j]+" ";
}
var gm=array(3);
for (i=0;i<3;i++)
{
	gm[i]=Array(0,0,0);
}
var status = 0;
</script> 
<h1>OXO2</h1>
<div id='display'></div>

</body>
</html>
