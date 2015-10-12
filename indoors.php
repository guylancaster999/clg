<?php 
require "php/functionz.php";
head("Transport");
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
                        <?php banner("Indoors");?>
								<a name="indoors0"></a>
						<?php 
						for ($i=1;$i<=5;$i++)
						{
							photo("gallery".$i.".jpg","gallery".$i."_small.jpg","Photo ".$i,120,"Indoor Activities","indoors.php"); 
						}
						for ($i=6;$i<=10;$i++)
						{
							photo("gallery".$i.".jpg","gallery".$i."_small.jpg","Photo ".$i,120,"Indoor Activities","indoors.php"); 
						 }
						photo("gallery12.jpg","gallery12_small.jpg","Photo 11",120,"Indoor Activities","indoors.php"); 
						for ($i=24;$i<=29;$i++)
						{
							photo("gallery".$i.".jpg","gallery".$i."_small.jpg","Photo ".($i-12),120,"Indoor Activities","indoors.php"); 
						}
						photo("gallery30.jpg","gallery30_small.jpg","Photo 18",120,"Indoor Activities","indoors.php"); 
						for ($i=35;$i<=39;$i++)
						{
							photo("gallery".$i.".jpg","gallery".$i."_small.jpg","Photo ".($i-16),120,"Indoor Activities","indoors.php"); 
						} 
						for ($i=40;$i<=42;$i++)
						{
							photo("gallery".$i.".jpg","gallery".$i."_small.jpg","Photo ".($i-16),120,"Indoor Activities","indoors.php"); 
						} 
						for ($i=63;$i<=64;$i++)
						{
							photo("outdoor".$i.".jpg","outdoor".$i."_small.jpg","Photo ".($i-36),120,"Indoor Activities","indoors.php"); 
						}  
						photo("outdoor65.jpg","outdoor65_small.jpg","Photo 29",120,"Indoor Activities","indoors.php"); 
						for ($i=48;$i<=49;$i++)
						{
							photo("gallery".$i.".jpg","gallery".$i."_small.jpg","Photo ".($i-18),120,"Indoor Activities","indoors.php"); 
						} 
						?>  
						<div align="center">Click on thumbnails to see larger images</div><br/>

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
