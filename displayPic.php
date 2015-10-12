 <?php require "php/functionz.php";
 
 ?>

<html lang="en">
<?php
$pic    =$_REQUEST["pic"];
$picTtl =$_REQUEST["picTtl"];
$pgTtl  =$_REQUEST["pgTtl"];
$fromUrl=$_REQUEST["fromUrl"];
head($pgTtl." ".$picTtl);
?>
 <body>
   <div id="wrapper">
    <div id="sidebar-wrapper">
       <?php menu();?>
         </div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Chorlton Little Gems Childminders <a href="#menu-toggle" class="btn btn-default  rt" id="menu-toggle" title="Menu Toggle"><span class="glyphicon glyphicon-align-justify"></span></a></h1>
                        <h2><?php print $pgTtl." : ".$picTtl;?></h2>
						 <a href="<?php print $fromUrl;?>" title="Click here to Return">
							 <img src="images/<?php print $pic;?>" alt="<?php print $picTtl?>" class="img-rounded img-responsive" />
						 </a>
						  <br/>
						 <div align="center">Click on Picture to Return.</div>
                    							<?php foot();?>
                    </div>
                 </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
        <?php foot2();?>
</body>
</html>
							