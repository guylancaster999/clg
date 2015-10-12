<?php
require "php/functionz.php";
head("Garden");
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
                        <?php banner("Garden");?>
					   The Garden is enclosed and has :
							<ul>
							<li>a Swing</li>
							<li>3 Slides</li>
							<li>2 Sand pits</li>
							<li>2 Paddling pools </li>
							<li>Picnic Table with parasol</li>
							<li>Bouncy Castle</li>
							 </ul>
							 <?php photo("garden1.jpg","garden1_200.jpg","Photo1",150,"Garden","garden.php");?>
							<?php photo("picnictable.jpg","picnictable_200.jpg","Photo 2 - Picnic Table",150,"Garden","garden.php");?> 
							<?php photo("garden7.jpg","garden7_200.jpg","Photo 3",150,"Garden","garden.php");?>
							<?php photo("garden4.jpg","garden4_200.jpg","Photo 4",150,"Garden","garden.php");?>
							<?php photo("garden5.jpg","garden5_200.jpg","Photo 5",150,"Garden","garden.php");?>
							<?php photo("garden6.jpg","garden6_200.jpg","Photo 6",150,"Garden","garden.php");?>
							<?php photo("swing.jpg","swing_200.jpg","Photo 7",150,"Garden","garden.php");?>
							<div align="center">Click on thumbnails to see larger images</div>
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
							