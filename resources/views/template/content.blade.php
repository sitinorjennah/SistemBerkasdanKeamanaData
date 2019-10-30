<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">500 Gb Toshiba Computer Hard Disk </h3>
              <div class="col-12">
                <img src="../img/harddisk.jpg" class="hdd-image" alt="Hdd Image">
              </div>
              <div class="col-12 product-image-thumbs">
                
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">500 Gb Toshiba Computer Hard Disk</h3>
              <p>
                <?php
                // set partition
                $fs = "/";
                // display available and used space
                echo "Total available space on this partition: " . 
                round(disk_total_space($fs) / (1024*1024)) . " MB\r\n<br />"; 
                echo "Total free space: " . round(disk_free_space($fs) / (1024*1024)) . " MB\r\n<br />";
                // calculate used space
                $disk_used_space =
                round((disk_total_space($fs) - disk_free_space($fs)) / (1024*1024)); 
                echo "Total used space: " . $disk_used_space . " MB\r\n<br />";
                // calculate % used space
                echo "% used space: " . round((disk_total_space($fs) -
                disk_free_space($fs)) / disk_total_space($fs) * 100) . " %";
                ?>
              </p>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp.550.000,.
                </h2>
                <h4 class="mt-0">
                  <small>Rp.550.000,. </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                  Add to Cart
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i> 
                  Add to Wishlist
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>