
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects ">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Projects</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Projects Filters -->
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php
         include('db.php');
         $sel='select * from project';
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
            echo"<div class='col-lg-4 col-md-6 portfolio-item filter-remodeling'>
              <div class='portfolio-content h-100'>
               
             <img src='admin/pimages/$photo'width=500 hight=200 class='card-img-top' alt='...'>
                <div class='portfolio-info'>
                  <h4>$name</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href='assets/img/projects/remodeling-1.jpg' title='Remodeling 1' data-gallery='portfolio-gallery-remodeling' class='glightbox preview-link'><i class='bi bi-zoom-in'></i></a>
                  <a href='project-details.php?id=$id' title='More Details' class='details-link'><i class='bi bi-link-45deg'></i></a>
                  
                  </div>
              </div>
            </div>";
         }
         ?>
            <!-- End Projects Item -->

            

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->