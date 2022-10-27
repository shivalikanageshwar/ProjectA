    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts section-bg">
      <div class="container" data-aos="fade-up">
        <div class=" section-header">
         <h2>Recent Blog Posts</h2>
         <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>

        <div class="row gy-5">
         <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                      <?php
                                        include("db.php");
                                        $sel="select * from blogs";
                                        $status1=mysqli_query($con,$sel);
                                        $i=1;
                                        while($row=mysqli_fetch_array($status1))
                                        {
                                            $id=$row['id'];
                                            $name=$row['name'];
                                            $status=$row['status'];
                                            $description=$row['description'];
                                            $photo=$row['photo'];
                                            $datetime=$row['datetime'];
          echo"<div class='post-item position-relative h-100'>

            <div class='post-img position-relative overflow-hidden'>
            <img src='admin/bimages/$photo'width=500 hight=200 class='card-img-top' alt='...'>
             
            </div>

            <div class='post-content d-flex flex-column'>

              <h3 class='post-title'>$description</h3>

              <div class='meta d-flex align-items-center'>
                <div class='d-flex align-items-center'>
                  <i class='bi bi-person'></i> <span class='ps-2'>$name</span>
                </div>
                <span class='px-3 text-black-50'>/</span>
                <div class='d-flex align-items-center'>
                  <i class='bi bi-folder2'></i> <span class='ps-2'>Politics</span>
                </div>
              </div>

              <hr>

              <a href='blog-details.php?id=$id' class='readmore stretched-link'><span>Read More</span><i class='bi bi-arrow-right'></i></a>

            </div>

          </div>
        </div>";
      }
      ?><!-- End post item -->
       </div>
      </div>
    </section>
    <!-- End Recent Blog Posts Section -->