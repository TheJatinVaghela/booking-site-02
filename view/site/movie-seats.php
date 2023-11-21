  <?php 
    //  echo '<pre>';
    //  echo "in php";
    //  print_r($this->seat_info);
    //  echo "in php 1`";
    //  print_r($this->datetime);
    //  echo "in php 2`";
    //  print_r($this->date);
    //  echo '</pre>';
if($this->seat_info != "No"){
    $seat_info = $this->seat_info;
    foreach ($seat_info as $key => $value) {
        foreach ($value as $key2 => $value2) { 
            if($key2 === 'seat'){ ?>
            <style>
            <?php echo "#".$value2."{
                display:none;
                }"; ?>
            </style>
          <?php 
            }
        } 
    }
}else{
    // echo "in seat_info";
    // $this->print_stuf($this->seat_info);
};
  ?>

  
  <!-- ==========Banner-Section========== -->
  <section class="details-banner hero-area bg_img seat-plan-banner" data-background="assets/images/banner/banner04.jpg">
      <div class="container">
          <div class="details-banner-wrapper">
              <div class="details-banner-content style-two">
                  <h3 class="title">Venus</h3>
                  <div class="tags">
                      <a href="#0">City Walk</a>
                      <a href="#0">English - 2D</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ==========Banner-Section========== -->

  <!-- ==========Page-Title========== -->
  <form action="" method="post">
      <section class="page-title bg-one">
          <div class="container">
              <div class="page-title-area">
                  <div class="item md-order-1">
                      <input type="text" name="last_page" value="<?php echo $_REQUEST['last_page'] ?? $this->last_page; ?> " hidden>
                      <a href="http://localhost/clones/booking-site-02/public<?php echo $_REQUEST["last_page"] ?? $this->last_page; ?>" class="custom-button back-button">
                          <i class="flaticon-double-right-arrows-angles"></i>back
                      </a>
                  </div>
                  <div class="item date-item flex-nowrap">
                      <!-- <form action="" method="post"> -->
                          <input type="text" name="movie_id" value="<?php echo $_REQUEST["movie_id"] ?? $this->movie_id; ?>" id="" hidden>
                          <select class="select-bar" name="datetime">
                              <?php
                                // echo $this->date; //2023-09-09 09:30:00 year-month-day hour-minit-second
                                if($this->date != ""){
                                    foreach ($this->date as $key => $value) { ?>
                                        <option value="<?php echo $key ?>" <?php if($this->datetime == $value){echo "selected";}?>><?php echo $value; ?></option>
                                    <?php
                                    }
                                }else{ ?>
                                    <option value="<?php echo $key ?>" <?php echo "selected";?>><?php echo "Comming Soon"; ?></option>
                               <?php };
                                ?>
                          </select>
                          <?php if($this->date != ""){?>
                          <input type="submit" class="custom-button" name="DATETIME" value="check" id="" />
                          <?php };?>
                      <!-- </form> -->
                  </div>

              </div>
          </div>
      </section>
      <!-- ==========Page-Title========== -->

      <!-- ==========Movie-Section========== -->
      <div class="seat-plan-section padding-bottom padding-top">
          <div class="container">
            <?php if($this->date != ""){?>
              <div class="screen-area" id="seats_wrapper">
                  <h4 class="screen">screen</h4>
                  <div class="screen-thumb">
                      <img src="assets/images/movie/screen-thumb.png" alt="movie">
                  </div>
                  <h5 class="subtitle">silver plus</h5>
                  <div class="screen-wrapper">
                      <ul class="seat-area">
                          <li class="seat-line">
                              <span>G</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-0" id="G-0" value="yes" />
                                              <label for="G-0">G-0</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-1" id="G-1" value="yes" />
                                              <label for="G-1">G-1</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-2" id="G-2" value="yes" />
                                              <label for="G-2">G-2</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-3" id="G-3" value="yes" />
                                              <label for="G-3">G-3</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-4" id="G-4" value="yes" />
                                              <label for="G-4">G-4</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-5" id="G-5" value="yes" />
                                              <label for="G-5">G-5</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-6" id="G-6" value="yes" />
                                              <label for="G-6">G-6</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-7" id="G-7" value="yes" />
                                              <label for="G-7">G-7</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-8" id="G-8" value="yes" />
                                              <label for="G-8">G-8</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-9" id="G-9" value="yes" />
                                              <label for="G-9">G-9</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-10" id="G-10" value="yes" />
                                              <label for="G-10">G-10</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-11" id="G-11" value="yes" />
                                              <label for="G-11">G-11</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-12" id="G-12" value="yes" />
                                              <label for="G-12">G-12</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="G-13" id="G-13" value="yes" />
                                              <label for="G-13">G-13</label>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <span>G</span>
                          </li>
                          <li class="seat-line">
                              <span>f</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-0" id="F-0" value="yes" />
                                              <label for="F-0">F-0</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-1" id="F-1" value="yes" />
                                              <label for="F-1">F-1</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-2" id="F-2" value="yes" />
                                              <label for="F-2">F-2</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-3" id="F-3" value="yes" />
                                              <label for="F-3">F-3</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-4" id="F-4" value="yes" />
                                              <label for="F-4">F-4</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-5" id="F-5" value="yes" />
                                              <label for="F-5">F-5</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-6" id="F-6" value="yes" />
                                              <label for="F-6">F-6</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-7" id="F-7" value="yes" />
                                              <label for="F-7">F-7</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-8" id="F-8" value="yes" />
                                              <label for="F-8">F-8</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-9" id="F-9" value="yes" />
                                              <label for="F-9">F-9</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-10" id="F-10" value="yes" />
                                              <label for="F-10">F-10</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-11" id="F-11" value="yes" />
                                              <label for="F-11">F-11</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-12" id="F-12" value="yes" />
                                              <label for="F-12">F-12</label>
                                          </li>
                                          <li class="single-seat seat-free border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="F-13" id="F-13" value="yes" />
                                              <label for="F-13">F-13</label>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <span>f</span>
                          </li>
                      </ul>
                  </div>
                  <h5 class="subtitle">silver plus</h5>
                  <div class="screen-wrapper">
                      <ul class="seat-area couple">
                          <li class="seat-line">
                              <span>e</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="E-0" id="E-0" value="yes" />
                                              <label for="E-0">E-0</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="E-1" id="E-1" value="yes" />
                                              <label for="E-1">E-1</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="E-2" id="E-2" value="yes" />
                                              <label for="E-2">E-2</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="E-3" id="E-3" value="yes" />
                                              <label for="E-3">E-3</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="E-4" id="E-4" value="yes" />
                                              <label for="E-4">E-4</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="E-5" id="E-5" value="yes" />
                                              <label for="E-5">E-5</label>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <span>e</span>
                          </li>
                          <li class="seat-line">
                              <span>d</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-0" id="D-0" value="yes" />
                                              <label for="D-0">D-0</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-1" id="D-1" value="yes" />
                                              <label for="D-1">D-1</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-2" id="D-2" value="yes" />
                                              <label for="D-2">D-2</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-3" id="D-3" value="yes" />
                                              <label for="D-3">D-3</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-4" id="D-4" value="yes" />
                                              <label for="D-4">D-4</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-5" id="D-5" value="yes" />
                                              <label for="D-5">D-5</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-6" id="D-6" value="yes" />
                                              <label for="D-6">D-6</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="D-7" id="D-7" value="yes" />
                                              <label for="D-7">D-7</label>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <span>d</span>
                          </li>
                          <li class="seat-line">
                              <span>c</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-0" id="C-0" value="yes" />
                                              <label for="C-0">C-0</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-1" id="C-1" value="yes" />
                                              <label for="C-1">C-1</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-2" id="C-2" value="yes" />
                                              <label for="C-2">C-2</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-3" id="C-3" value="yes" />
                                              <label for="C-3">C-3</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-4" id="C-4" value="yes" />
                                              <label for="C-4">C-4</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-5" id="C-5" value="yes" />
                                              <label for="C-5">C-5</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-6" id="C-6" value="yes" />
                                              <label for="C-6">C-6</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-7" id="C-7" value="yes" />
                                              <label for="C-7">C-7</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" name="no" type="redio">
                                              <input type="checkbox" name="C-8" id="C-8" value="yes" />
                                              <label for="C-8">C-8</label>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <span>c</span>
                          </li>
                          <li class="seat-line">
                              <span>b</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-0" id="B-0" value="yes" />
                                              <label for="B-0">B-0</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-1" id="B-1" value="yes" />
                                              <label for="B-1">B-1</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-2" id="B-2" value="yes" />
                                              <label for="B-2">B-2</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-3" id="B-3" value="yes" />
                                              <label for="B-3">B-3</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-4" id="B-4" value="yes" />
                                              <label for="B-4">B-4</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-5" id="B-5" value="yes" />
                                              <label for="B-5">B-5</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-6" id="B-6" value="yes" />
                                              <label for="B-6">B-6</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-7" id="B-7" value="yes" />
                                              <label for="B-7">B-7</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="B-8" id="B-8" value="yes" />
                                              <label for="B-8">B-8</label>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                              <span>b</span>
                          </li>
                          <li class="seat-line">
                              <span>a</span>
                              <ul class="seat--area">
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-1" id="A-1" value="yes" />
                                              <label for="A-1">A-1</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-2" id="A-2" value="yes" />
                                              <label for="A-2">A-2</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-3" id="A-3" value="yes" />
                                              <label for="A-3">A-3</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-4" id="A-4" value="yes" />
                                              <label for="A-4">A-4</label>
                                          </li>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-5" id="A-5" value="yes" />
                                              <label for="A-5">A-5</label>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="front-seat">
                                      <ul>
                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-6" id="A-6" value="yes" />
                                              <label for="A-6">A-6</label>
                                          </li>

                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-7" id="A-7" value="yes" />
                                              <label for="A-7">A-7</label>
                                          </li>

                                          <li class="single-seat seat-free-two border border-primary" type="redio" name="no">
                                              <input type="checkbox" name="A-8" id="A-8" value="yes" />
                                              <label for="A-8">A-8</label>
                                          </li>


                                      </ul>
                                  </li>
                              </ul>
                              <span>a</span>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="proceed-book bg_img" data-background="assets/images/movie/movie-bg-proceed.jpg">
                  <div class="proceed-to-book">
                      <div class="book-item">
                          <button id="book_seats" type="submit" class="custom-button" name="proceed" value="true">proceed</button>
                      </div>
                  </div>
              </div>
          </div>
          <?php };?>
            </form>
      </div>

      <script>
          /* const book_seats = document.getElementById("book_seats");
        // const seats_wrapper = document.getElementById("seats_wrapper");

        book_seats.onclick = function(event){
            event.preventDefault();
            // console.log(li_radio);
        }
        const li_radio = document.querySelectorAll("li[type='redio']");
        li_radio.forEach(e => {
            e.setAttribute('name',e.childNodes[3].innerText);
            e.setAttribute('value','no');
            e.onclick =function(){
                if(e.getAttribute('value') === 'no'){
                    e.setAttribute('value','yes');
                    e.childNodes[1].setAttribute('src',"./assets/images/movie/seat02-booked.png")
                }else if(e.getAttribute('value') !== 'no'){
                    e.setAttribute('value','no');
                    e.childNodes[1].setAttribute('src',"./assets/images/movie/seat02-free.png")
                }
                console.log(e.getAttribute('value'));
                
            }
        });*/
      </script>
      <!-- ==========Movie-Section========== -->

      <!-- 
[
G-0,
G-1,
G-2,
G-3,
G-4,
G-5,
G-6,
G-7,
G-8,
G-9,
G-1,
G-1,
G-1,
G-1,
F-0,
F-1,
F-2,
F-3,
F-4,
F-5,
F-6,
F-7,
F-8,
F-9,
F-1,
F-1,
F-1,
F-1,
E-0,
E-1,
E-2,
E-3,
E-4,
E-5,
D-0,
D-1,
D-2,
D-3,
D-4,
D-5,
D-6,
D-7,
C-0,
C-1,
C-2,
C-3,
C-4,
C-5,
C-6,
C-7,
C-8,
B-0,
B-1,
B-2,
B-3,
B-4,
B-5,
B-6,
B-7,
B-8,
A-1,
A-2,
A-3,
A-4,
A-5,
A-6,
A-7,
A-8
]
     -->