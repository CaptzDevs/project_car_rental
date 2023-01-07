<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <?php include('plugin.php') ?>
   

</head>
<style>
     
     * {
  margin: 0;
  padding: 0;
  font-family: "Google Sans", Arial, Helvetica, sans-serif;
  box-sizing: border-box;
  transition: 0.5s;
  

}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 0px;
  height: 1px;
  border-radius: 50px;
}

::-webkit-scrollbar-track {
  background: #505050;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

html {
  scroll-behavior: smooth;
}
body {
    background: rgb(247, 247, 247);
}

main{
    
    width: 100%;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 10px;
    background: rgb(66, 66, 66);
    position: relative;
    padding-top: 30px;
    background: rgb(247, 247, 247);

  }

.panel{
    width: 20%;
    min-width: 250px;
    border-radius: 10px;
    padding: 10px;
    color: rgb(0, 0, 0);
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    gap: 10px;
    background: rgba(57, 57, 57, 0.188);
    position: absolute;
    right: 10px;
    overflow: auto;
}

.panel-perspective{
    width: 20%;
    max-height: 75vh;
    min-width: 250px;
    border-radius: 10px;
    padding: 10px;
    color: rgb(0, 0, 0);
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    gap: 10px;
    background: rgba(57, 57, 57, 0.188);
    position: absolute;
    left: 10px;
    overflow: auto;
}

.image-section{
  width: 100%;
  padding: 10px;
  border-radius: 10px;
}
.image-section ul{
    list-style: none;
    margin-top: 15px;
    padding-left: 10px;
    padding-right: 10px;

}
.image-section li{
  font-size: .8rem;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  padding: 10px;
  padding-left: 20px;
  border-radius: 5px;
  margin-top: 5px;
  cursor: pointer;
}

.image-section li:hover{
  background: rgb(171, 171, 171);

}
.panel-section{
  width: 100%;
  padding: 10px;
  border-radius: 10px;
}
.panel-section ul{
    list-style: none;
    margin-top: 15px;
    padding-left: 10px;
    padding-right: 10px;

}
.panel-section li{
  font-size: .8rem;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  padding: 10px;
  padding-left: 20px;
  border-radius: 5px;
  margin-top: 5px;
  cursor: pointer;
}

.panel-section li:hover{
  background: rgb(171, 171, 171);

}

.content{
  width: 100%;
  height: auto;
  min-height: 100vh;
  background: rgba(43, 43, 43, 0);
  border-radius: 10px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  flex-wrap: wrap;
  gap: 15px;
  position: relative;
  padding-top: 0px;
  overflow: hidden;
  margin-top: 50px;
}

.car-item{
  width: 100%;
  height: 100%;
  min-height: 90vh;
  border-radius: 10px;
  background: rgb(247, 247, 247);
  display: flex;
  align-items: center;
  justify-content: flex-start;
  flex-direction: column;
  overflow: hidden;
  padding: 10px;
  cursor: pointer;
  position: relative;
}
#car-image-preview{
  position: relative;
}
.car-item-image::before{
  content: '';
  width: 100px;
  height: 100px;
  position: absolute;
  top: -10px;
  left: 20px;
  background: red;
  z-index: 3;
  background: rgb(247, 247, 247);

}
.car-item:hover{
}

.car-item svg{
  position: absolute;
  top: 10px;
  left: 30px;
  z-index: 3;
  color: #434343 !important;

}
.car-item-image{
  width: 50%;
  height: 550px;
  min-width: 650px;
  min-height: 550px;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  transform: translate(0%,-150%);
  position: relative;

}
.car-item-image img{
  width: 90%;
  object-fit: cover;
  user-select: none;
  pointer-events: none;

}
.car-item-name{
  width: 100%;
  height: 20%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgb(43, 43, 43);
  
  border-radius: 10px;
  font-size: 1.5rem;
  padding: 10px;
  text-align: center;
  color: white;
  z-index: 5;
}

.panel button{
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border: none;
    color: rgb(255, 255, 255);
    background: rgb(32, 32, 32);
}

.privilege-section li{
    background: rgb(183, 183, 183);
}

footer{
  width: 100%;
  height: 150px;
  background: rgb(44, 44, 44);
  display: flex;
  align-items: center;
  justify-content: center;
color: white;
margin-top: 50px;
  
}

.quotation{
    width: 100%;
    height: 100vh;
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    background: rgb(45, 45, 45);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    color: white;
    z-index: 5;
    gap: 10px;
    transform: translateX(100%);
    overflow: auto;
    padding-top: 50px;
    padding-bottom: 50px;
}

.slide-in-from-right{
  transform: translateX(0%);
  opacity: 100%;
}
.slide-out-to-left{
  transform: translateX(-100%);
  opacity: 0%;
}

.form-group {
  width: 100%;
  margin: 0px;
  padding: 0px;
}

.form-group label {
  font-size: .8rem;
  color: white;
}

.datepicker , input {
  background: rgb(46, 46, 46);
    outline: none;
    border: none;
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 10px;
  }
.date-icon{
  color: rgb(137, 137, 137) !important;
}
.date-panel{
  top: 70%;
  right: 0%;
}

.form-quotation{
  width: 500px;
  min-width: 300px;
  height: auto;
   min-height: 600px; 
  display: flex;
  align-items: center;
  justify-content: flex-start;
  flex-direction: column;
  border-radius: 10px;
  background: rgb(36, 36, 36);
  padding: 20px;
  position: relative;
  padding-bottom: 120px;


}
.form-quotation-head{
  width: 100%;
  color: white;
  border-bottom: 1px solid rgb(61, 61, 61);
  font-size: 1.7rem;
  margin-bottom: 5px;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  flex-direction: column;
  position: relative;
  padding-bottom: 10px;
  
}
.form-quotation-head svg {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 1.2rem;
  color: var(--violet4);
}
.form-quotation-body {

  width: 100%;
  padding: 10px;
  padding-left: 20px;
  padding-right: 20px;

}
.form-quotation .row{
  margin: 0px;
}
.form-quotation-footer {
  width: 100%;
  height: 100px;
  background: rgb(24, 24, 24);
  position: absolute;
  bottom: 0px;
  left: 0px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  
}

.amount-group{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: row;
  gap: 10px;
}
.date_amount {
  width: 50px;
  text-align: center;
  border-radius: 5px;
}
.amount-group button{
  width: 30px;
  border-radius: 5px;
  background: rgb(55, 55, 55);
  color: white;
  border: none;
  padding: 5px;
}

svg{
  pointer-events: none;
}

.row > *{
  padding-right: 0px;
  padding-left: 0px;

}

.quotation-detail{
  padding: 20px;
  background: rgb(46, 46, 46);
  border-radius: 5px;
  font-size: .8rem;
}
.quotation-detail-group{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.sum-rateperday{
  width: 100%;
  height: 100%;
  min-height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgb(46, 46, 46);
  border-radius: 10px;
}

.btn-send-quotation{
  width: 100%;
  height: 100%;
  border-radius: 10px;
  background: none;
  color: white;
  border: none;
}

.btn-send-quotation:hover{
  background: rgb(46, 46, 46);
}
.total-price{
  width: 100%;
  background: rgb(46, 46, 46);
  display: flex;
  align-items: flex-start;
  justify-content: space-evenly;
  padding: 20px;
  border-radius: 10px;
  
}

.header-label{
  font-size: .8rem;
}
.price-detail{
  padding-left: 10px;
  padding-right: 10px;
}
.hl{
  background: rgb(35, 35, 35);
  padding: 10px;
}

.payment-gatways-container{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 10px;
  margin-top: 10px;
}
.payment-item{
  /* width: 100%; */
  height: 70px;
  background: rgb(72, 72, 72);
  padding: 10px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: .7rem;
  cursor: pointer;
}
.payment-item:hover{
  background: rgb(49, 49, 49);

}

.payment-file{
  margin-top: 20px;
}

.rental-rule{
  width: 100%;
  border-radius: 10px;
  margin-top: 10px;
  font-size: .8rem;
  color: var(--red4);
}
.close-panel{
  width: 20px;
  position: absolute;
  top: 10px;
  right: 50px;
  padding: 10px;
  background: none;
  border: none;
  color: white;
  z-index: 5;
}

.form-next{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(150%, -50%);
  opacity: 0%;

}

.slide-form{
  transform: translate(-50%, -50%);
  opacity: 100%;

}

.slide-form-out{
  transform: translate(-150%, -50%);
  opacity: 0%;
}

li{
  text-transform: capitalize;
}

.pre-slide-in{
    animation: pre_slide_out 1s 0s forwards;
}

.fade-panel-in{
    animation: fade-in-panel  1s 0s forwards;
}

.fade-item-in{
    animation: fade-in-panel  1s 0s forwards;
}
.perspective-list li, .pricing-list li, .privilege-list li{
  transform: translate(150%,0%);
}
@keyframes pre_slide_out {
  0%{
    transform: translate(150%,0%);
    opacity: 0%;

  }
  100%{
    transform: translate(0%,0%);
    opacity: 100%;

  }
}

@keyframes fade-in-panel {
  0%{
    transform: translate(150%,0%);
    opacity: 0%;
  }
  100%{
    transform: translate(0%,0%);
    opacity: 100%;

  }
}

@keyframes fade-in-item {
  0%{
    transform: translate(150%,0%);
    opacity: 0%;
  }
  100%{
    transform: translate(0%,0%);
    opacity: 100%;

  }
}


@media (max-width: 576px) { 

  
 }

@media (max-width: 768px) { 
  .form-quotation{
  width: 100%;
} 
 }

@media (max-width: 992px) {  }

@media (max-width: 1200px) {  }

@media (max-width: 1400px) {  }

</style>
<body>
  <?php include('header.php') ?>
    <main>
          <?php 

          $vehicle_detail = $vehicle_data['detail'][0];
          $car_section_arr = ['overview','front','back','side','above'];
          $car_arr = [];

          foreach($car_section_arr as $section2){
            $car_arr[$section2] =  [] ;
            foreach($vehicle_data['images'] as $car_image2){
            
              if($car_image2['image_section'] == $section2){
                $car_arr[$section2] = $car_image2 ;
              }
              
            }

          }

       /*    echo '<pre>';
          print_r($car_arr);
          echo '</pre>'; */


         ?>
  
        <section class="content" >

            <div class="car-item"> 
       
              <div class="car-item-image">
                <?php if($car_arr['overview']['image_type'] == '1'){ ?>
                <img id="car-image-preview" src="<?php $car_arr['overview']  && printf(base_url('/uploads/images/'.$car_arr['overview']['image_url']))  ?>">
                <?php } ?>
                <?php if($car_arr['overview']['image_type'] == '2'){ ?>
                <img id="car-image-preview" src="<?php $car_arr['overview']  && printf($car_arr['overview']['image_url'])  ?>">
                
                <?php } ?>

              </div>
              <div class="car-item-name ">
                <?php echo $vehicle_detail['name']; ?>
              </div> 
            </div>

            
            <aside class="panel-perspective">
                <div class="image-section">
                    <div> Perspectives  </div>
                    <ul class="perspective-list">

                       <!--  <li> <i class="fa-regular fa-chevron-right"></i> Overview  </li> -->
                    <?php foreach($car_section_arr as $section){
                      $section_selected = '';
                      if($section == 'overview') $section_selected = '<i class="fa-regular fa-chevron-right"></i>'
                      ?>
                        <li class="car-section-selector" data-src="<?php $car_arr[$section] && printf($car_arr[$section]['image_url']) ?>"> <?php echo $section_selected ?> <?php echo $section ?>  </li>
                      <?php  } ?>

                    </ul>
                  </div>
            </aside>

            <aside class="panel">
             
                  <div class="panel-section privilege-section">
                    <div> Privilege  </div>
                    <ul class="privilege-list">
                        <li> <i class="fa-solid fa-car-tilt"></i> First class insurance  </li>
                        <li> <i class="fa-solid fa-gas-pump"></i> Full fuel  </li>
                        <li> <i class="fa-solid fa-location-arrow"></i> GPS  </li>
                    </ul>
                  </div>

                  <div class="panel-section">
                    <div> Rate  </div>
                    <ul class="pricing-list">
                        <li>  Rate / Day : <?php echo number_format($vehicle_detail['rate']); ?> ฿ </li>
                        <li>  Deposit :   <?php echo number_format($vehicle_detail['deposit']); ?> ฿ </li>

                    </ul>
                  </div>

                    <button id="btn_rentCar">Rent</button>
            </aside>
        </section>
        <section class="quotation">
              <button class="close-panel"><i class="fa-solid fa-xmark"></i></button> 

             <form class="form-quotation" id="form_quotation" action="">
                <div class="form-quotation-head">
                  <span>Quotation</span>
                  <i class="fa-solid fa-file-invoice"></i>
                </div>

              <div class="row gap-3 form-quotation-body">

                <div class="col-12 form-group quotation-detail">

                       <div class="quotation-detail-group">
                         <span>Deposit :</span>
                         <span><?php echo number_format( $vehicle_detail['deposit']); ?>  ฿</span>
                       </div>
                     
                       <div class="quotation-detail-group">
                         <div>Rate / Day :</div>
                         <div><?php echo number_format($vehicle_detail['rate']); ?>  ฿</div>
                       </div>
                     </div>
                   
                     <div class="col-12 ">
                         <div class="form-group">
                           <label for="date_pay" >Start Rent</label>
                           <input class="datepicker" type="text" id="date_1" name="start_rent" autocomplete="off">
                     </div>
                   </div>
                 
                   <div class="col-xl-8">
                    
                       <div class="sum-rateperday">
                        1 days | <?php echo number_format($vehicle_detail['rate']) ?> ฿
                       </div>
                       
                   </div>

                    <div class="col-xl-3 col-md-12">
                        <div class="form-group">
                          <label for="date_amount"  >Rent days</label>
                          <div class="amount-group">
                              <button id="btn_decr_day"> <i class="fa-solid fa-minus"></i> </button>
                              <input class="date_amount" type="text" id="date_amount" name="date_amount" value="1" autocomplete="off">
                              <button id="btn_incr_day"> <i class="fa-solid fa-plus"></i> </button>
                            </div>
                          
                      </div>
                    </div>

                    <div class="col-3 total-price">
                          <div >Total | </div>
                          <div id="total_price" >15000</div>
                    </div>

                </div>

                <div class="form-quotation-footer">
                  <button class="btn-send-quotation" id="next-1"> Next <i class="fa-solid fa-arrow-right"></i> </button>
                </div>


            </form> 


            <form class="form-quotation form-next" id="form_payment" action="">
              
              <div class="form-quotation-head">
                <span>Payment</span>
                <i class="fa-duotone fa-money-check-dollar"></i>
              </div>

            <div class="row gap-1 form-quotation-body">
              <div class="col-12 form-group quotation-detail">

                     <div class="quotation-detail-group price-detail">
                       <span>Deposit :</span>
                       <span>10000 ฿</span>
                     </div>
                   
                     <div class="quotation-detail-group price-detail">
                       <div>Rate / Day :</div>
                       <div>900 ฿</div>
                     </div>

                    <div class="quotation-detail-group price-detail">
                      <div>Vat (7%)</div>
                      <div>900 ฿</div>
                    </div>

                     <div class="quotation-detail-group price-detail hl">
                      <div>Total</div>
                      <div>900 ฿</div>
                    </div>

                   </div>

                   <div class="col-12">
                      <div class="row gap-2 align-items-center justify-content-center mt-3">
                        <div class="col-xl-6 col-sm-12 payment-item">ไทยพาณิชย์ 4090700949<i class="fa-solid fa-money-check-dollar"></i></div>
                        <div class="col-xl-5 col-sm-12 payment-item">Prompay 0980746601<i class="fa-solid fa-money-check-dollar"></i></div>
                   </div>
              </div>

              <div class="col-12">
                  <div class="payment-file">
                    <input type="file" name="" id="">
                  </div>
              </div>

            </div>




              <div class="form-quotation-footer">
                <button class="btn-send-quotation" id="next-2"> Next <i class="fa-solid fa-arrow-right"></i> </button>
              </div>


          </form>


          <form class="form-quotation form-next" id="form_confirm" action="">
              
            <div class="form-quotation-head">
              <span>Confirm</span>
              <i class="fa-solid fa-check"></i>
            </div>

          <div class="row gap-1 form-quotation-body">

            <div class="col-12 form-group quotation-detail">

                 
              <div class="quotation-detail-group price-detail">
                <div>Car id : </div>
                <div> 3131daa</div>
              </div>

              <div class="quotation-detail-group price-detail">
                <div>Car name : </div>
                <div> civic </div>
              </div>

              <div class="quotation-detail-group price-detail">
                <div>License plate : </div>
                <div> 19313 </div>
              </div>

        </div>

            <div class="col-12 form-group quotation-detail">

              

                   <div class="quotation-detail-group price-detail">
                     <span>File :</span>
                     <span> dsddasdaasdga4416.jpg <i class="fa-duotone fa-file"></i></span>
                   </div>
                 
                   <div class="quotation-detail-group price-detail">
                    <div>Start rent : </div>
                    <div> 19/12/2022 <i class="fa-solid fa-calendar-days"></i></div>

                  </div>

                   <div class="quotation-detail-group price-detail">
                    <div>End rent : </div>
                    <div> 19/12/2022 <i class="fa-solid fa-calendar-days"></i></div>

                   </div>


                   <div class="quotation-detail-group price-detail">
                    <div>Days rent : </div>
                    <div> 3 days <i class="fa-solid fa-calendar-days"></i></div>

                   </div>


                   <div class="quotation-detail-group price-detail">
                    <div>Total cost </div>
                    <div> 30000 <i class="fa-solid fa-money-check-dollar"></i></div>

                   </div>

                

                 </div>

             
                 <div class="col-12">
                  <div class="rental-rule">
                   fine for late to return the car 5000฿/day
                  </div>
              </div>
         

          </div>




            <div class="form-quotation-footer">
              <button class="btn-send-quotation"> Confirm <i class="fa-duotone fa-file-check"></i> </button>
            </div>


        </form>



        <form class="form-quotation form-next" style="padding-bottom: 10px;" action="">
              
          <div class="form-quotation-head">
            <span> Rental Detail</span>
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>

        <div class="row gap-1 form-quotation-body">
          <div class="col-12 form-group quotation-detail">

                 
            <div class="quotation-detail-group price-detail">
              <div>Car id : </div>
              <div> 3131daa</div>
            </div>

            <div class="quotation-detail-group price-detail">
              <div>Car name : </div>
              <div> civic </div>
            </div>

            <div class="quotation-detail-group price-detail">
              <div>License plate : </div>
              <div> 19313 </div>
            </div>

      </div>

          <div class="col-12 form-group quotation-detail">

                 <div class="quotation-detail-group price-detail">
                   <span>Rent ID :</span>
                   <span> dsddasdaasdga4416  </span>
                 </div>
               
                 <div class="quotation-detail-group price-detail">
                  <div>Start rent : </div>
                  <div> 19/12/2022</div>
                </div>


                 <div class="quotation-detail-group price-detail">
                  <div>End rent : </div>
                  <div> 21/12/2022</div>

                 </div>


                 <div class="quotation-detail-group price-detail">
                  <div>Days rent : </div>
                  <div> 3 days</div>

                 </div>


                 <div class="quotation-detail-group price-detail">
                  <div>Total cost </div>
                  <div> 30000</div>

                 </div>

              

               </div>

               <div class="col-12 form-group quotation-detail">

                <div class="quotation-detail-group price-detail" style="color:var(--red4)">
                  <span>Fine : </span>
                  <span> 5000 </span>
                </div>
              

              </div>

              <div class="col-12">
                <div class="rental-rule">
                 fine for late to return the car 5000฿/day
                </div>
            </div>

       

        </div>




        


      </form>
           

        </section>
    </main>
    
   

    <footer>
       All Design By Captz
  </footer>
  

  <script>

  $('aside').addClass('fade-panel-in')

    let i =0;
  let count =setInterval(()=>{
    $('.privilege-list li')[i].classList.add('fade-item-in')
    if(i == $('.privilege-list li').length-1){
      clearInterval(count)
    }
    i++
  },200)

  let i2 =0;
  let count2 =setInterval(()=>{
    $('.pricing-list li')[i2].classList.add('fade-item-in')
    if(i2 == $('.pricing-list li').length-1){
      clearInterval(count2)
    }
    i2++
  },200)

  let i3 =0;
  let count3 =setInterval(()=>{
    $('.perspective-list li')[i3].classList.add('fade-item-in')
    if(i3 == $('.perspective-list li').length-1){
      clearInterval(count3)
    }
    
    i3++
  },200)


$('.car-item-image').addClass('pre-slide-in')

    $('.car-section-selector').click((e)=>{
      $("#car-image-preview")[0].src = e.target.dataset.src
$('.car-item-image').removeClass('pre-slide-in')
      

      $('.car-section-selector').each((i,item)=>{
        $(item.children[0]).remove()
      })

setTimeout(() => {
  $('.car-item-image').addClass('pre-slide-in')
}, 200);



      e.target.insertAdjacentHTML('afterbegin',`<i class="fa-regular fa-chevron-right"></i>`)

    })
      

    $("#btn_rentCar").click((e)=>{
        $(".quotation").addClass('slide-in-from-right')
        $(".content").addClass('slide-out-to-left')
        $("body").css("overflow","hidden")
        $('html,body').scrollTop(0);
    })

    $(".close-panel").click((e)=>{
        $(".quotation").removeClass('slide-in-from-right')
        $(".content").removeClass('slide-out-to-left')
        $("body").css("overflow","auto")
    })

    $("#next-1").click((e)=>{
      e.preventDefault()
      $("#form_quotation").addClass('slide-out-to-left')

      $("#form_payment").css("display",'block')
      $("#form_payment").addClass('slide-form')
    })

    $("#next-2").click((e)=>{
      e.preventDefault()
      $("#form_payment").addClass('slide-form-out')

      $("#form_confirm").css("display",'block')
      $("#form_confirm").addClass('slide-form')
    })

    $("#btn_incr_day").click((e)=>{
      e.preventDefault()
   

        if(+e.target.previousElementSibling.value < 20 ){

          e.target.previousElementSibling.value = +e.target.previousElementSibling.value + 1;
          let days = $("#date_amount").val()
          let price = days* <?php echo (int) $vehicle_detail['rate']; ?>;
          let deposit = <?php echo (int) $vehicle_detail['deposit']; ?>;

            $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
            $('#total_price').html(` ${(price+deposit).toLocaleString()} `)

        }
    })

    $("#date_amount").on('change keyup',(e)=>{
      console.log(e.type)
      

        let days = 1
        let price = 1
        let deposit = <?php echo (int) $vehicle_detail['deposit']; ?>;

        if(e.type = 'change'){
          if(e.target.value != '' || e.target.value > 1){
          e.target.value = +e.target.value

          days = $("#date_amount").val()
          price = days* <?php echo (int) $vehicle_detail['rate']; ?>;

          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)
        }
      }


      if(+e.target.value >= 1 && +e.target.value <= 20){
      if(e.keyCode == 38){
          e.target.value  = +e.target.value  + 1
          days = $("#date_amount").val()
          price = days* <?php echo (int) $vehicle_detail['rate']; ?>;

          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)

      }else if(e.keyCode == 40 && +e.target.value > 1 ){

          e.target.value  = +e.target.value - 1
          days = $("#date_amount").val()
          price = days* <?php echo (int) $vehicle_detail['rate']; ?>;

          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)
      }
    }

  
      if(+e.target.value < 1){
        e.target.value = 1
      } else if(+e.target.value > 20){
        e.target.value = 20
      } 

    })

    $("#btn_decr_day").click((e)=>{
      e.preventDefault()
      if(+e.target.nextElementSibling.value  >= 2){
        e.target.nextElementSibling.value = +e.target.nextElementSibling.value - 1; 

        let days = $("#date_amount").val()
        let price = days* <?php echo (int) $vehicle_detail['rate']; ?>;
        let deposit = <?php echo (int) $vehicle_detail['deposit']; ?>;



          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)
       
      } 

    })

/* $("#date_1").Calendar('calendar',{
  separation : "/",
   
}) */


/* $("#date_2").Calendar('calendar',{
    separation : "/",
    lang : "th",
    showDay : 'small',
    closeOnSelect : true,   
    yearType : "AD",

    min : 20210901,  
    max : 20230105, 
    
}) */
      $("#btn_rentCar").click(()=>{
       /*  $(".quotation").css("display",'block') */

        
      })

  /*   $("#btn_rentCar").click(()=>{
        $(".content").css("transform","translateX(-100%)")
        $(".quotation").css("transform","translateX(100%)")

        setTimeout(() => {
            $(".quotation").css("display",'block')
        }, 20);

        setTimeout(() => {
            $(".quotation").css("transform","translateX(0%)")
        }, 100);
    })

    $("#goback").click(()=>{
        $(".quotation").css("transform","translateX(100%)")
        $(".quotation").css("display",'none')
        setTimeout(() => {
            $(".content").css("transform","translateX(0%)")
        }, 20);
    }) */

    
  </script>
</body>
</html>