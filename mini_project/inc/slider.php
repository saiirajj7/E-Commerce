<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php 
                $getIphone = $pd->latestFromIphone();
                if ($getIphone) {
                    while ($result = $getIphone->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>ASUS</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>
				<?php 
                $getSamsung = $pd->latestFromSamsung();
                if ($getSamsung) {
                    while ($result = $getSamsung->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Samsung</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>
			</div>
			<div class="section group">
				<?php 
                $getAcer = $pd->latestFromAcer();
                if ($getAcer) {
                    while ($result = $getAcer->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Acer</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>			
				<?php 
                $getCanon = $pd->latestFromCanon();
                if ($getCanon) {
                    while ($result = $getCanon->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Apple</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="https://news-cdn.softpedia.com/images/news2/ubuntu-touch-developers-main-focus-is-unity-8-convergence-for-ubuntu-phones-496936-2.jpg" alt=""/></li>
						
						</li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>
