   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="row ">
          
        <div class="section-header">
          <h2>Our Services</h2>
          <p>We will help you make your house look awesome & professional</p>
        </div>
          <?php
         include('db.php');
         $sel='select * from services';
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
             echo"<div class='col-md-3'>
             <div class='card' style='width:100%;'>
             <img src='admin/images/$photo'width=500 hight=200 class='card-img-top' alt='...'>
               <div class='card-body'>
                 <h5 class='card-title'>$name</h5>
                 <p class='card-text'>$description</p>
                 <a href='service-details.php?id=$id' class='readmore stretched-link'>Learn more <i class='bi bi-arrow-right'></i></a>
               </div>
             </div>
           </div>";
         }
          ?>
        </div>
    </section>
   <!-- End Services Section -->