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
                        <?php banner("Transport");
					    photo("pram.jpg","pram_200.jpg","Photo 1 : 4 child carrying pram",150,"Transport","transport.php");?> 
						&nbsp;
						<?php photo("transport3.jpg","transport3_200.jpg","Photo 2 : 4 child carrying pram ",150,"Transport","transport.php");?> 
						&nbsp;
						<?php photo("trike1.JPG","trike1_200.jpg","Photo 2 : 6 child carrying tricycle",150,"Transport","transport.php");?> 
						<br/>
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