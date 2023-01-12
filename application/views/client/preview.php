<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <?php include('plugin.php') ?>

    <link   href="<?php echo base_url('assets/plugin/c-carlendar/css/calendar.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/plugin/c-carlendar/js/calendar.js')?>"></script>


   

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
    align-items: flex-start;
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
  font-size: .8rem !important;

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



.btn-pre-quotation{
  width: 50%;
  height: 100%;
  border-radius: 10px;
  background: none;
  color: white;
  border: none;
}
.btn-send-quotation:hover , .btn-pre-quotation:hover{
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
 .price-detail{
  font-size: .7rem;
  
}
#form_confirm,#form_rental{
  width: 40%;

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




/* calendar point */
.calendar-points{
      /*   width: 110%; */
      width: 715px;
        max-width: 715px;
        min-width: 250px;
        height: auto;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        flex-wrap: wrap;
        gap: 10px;
      padding-top: 10px;
      }
    .section-year{
        width: fit-content;
        padding: 10px;
        height: auto;
        border-radius: 10px;
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 10px;

        
    }
    
    .calen-day{
        min-width: 25px;
        min-height: 25px;
        background: rgb(108, 108, 108);
        border-radius: 5px;
        font-size: .7rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .5s;
        color: white;

    }
    .calen-day:hover{
        transition: .5s;
        background: rgb(52, 52, 52) !important;

    }

    .color-none{
        transition: .5s;
        background: rgb(38, 38, 38) !important;
        color: rgba(255, 255, 255, 0.249);
    }

    .disabled-select-before{
         pointer-events: none;
         background: rgba(77, 77, 77, 0.514) !important;
    }

    .disabled-select{
         pointer-events: none;
         background: rgba(163, 163, 163, 0.514) !important;
        background: rgb(0, 0, 0) !important;
        opacity: 70%;
        color: rgba(255, 255, 255, 0.249);

    }

    
    .selected-date{
        transition: .5s;
        background: rgb(0, 0, 0) !important;
        color: rgba(255, 255, 255, 0.249);
    }
    
    .start-date-hl{
        background: rgb(154, 154, 154) !important;
        color: black;
    }
    
    .end-date-hl{
        background: var(--gray-300) !important;
        color: black;
        
    }
    #form_calendar{
        width: fit-content;
        padding: 10px;
        background: rgb(26, 26, 26);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        overflow:auto;
        overflow-x: hidden;
        filter: drop-shadow(10px 10px rgb(17, 17, 17));
        height: 200px;
        padding: 50px;
        padding-bottom: 10px;
      }
   

      .form-footer{
        width: 100%;
        position: sticky;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-radius: 5px;
        
      }

      .form-footer-btn{
        width: 90%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        border: none;
        outline: none;
        background: rgb(44, 44, 44);

        color: white;
      }

      .form-footer-btn:hover{
        background: rgb(44, 44, 44);
        filter: drop-shadow(5px  5px rgb(86, 86, 86) );
        color: white;
      }
      .form-footer-btn:disabled{
        background: rgba(44, 44, 44, 0.371);

      }

      .selected-start-date , .selected-end-date , .selected-amount-date {
        background: rgb(52, 52, 52);
      }

      .datepicker{
        font-size: .8rem;
      }
 /*    #form_quotation{
      width: 30%;
      height: 100%;
        padding: 10px;
        background: rgb(26, 26, 26);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        filter: drop-shadow(10px 10px rgb(17, 17, 17));
    } */

    @media (max-width: 576px) { 

    }

@media (max-width: 768px) { 
.form-quotation{
width: 100%;
} 
.calendar-points{
  width: 110%;
}
 }

@media (max-width: 992px) {  

}

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

                  <?php 
                  if(!isset($_SESSION['id'])){   ?>

                        <button id="btn_login">Login or Signup</button>
                        <span style="font-size: .5rem;"> You need to Login before renting car</span>

                  <?php } else{

                  $is_approved = $this->Admin_model->get_data_by_id("tbl_client",$_SESSION['id'])['approve_status'];
                  if($is_approved == '1'){ ?>
                        <button id="btn_rentCar">Rent</button>

                  <?php }else if($is_approved == '0'){  ?>
                        
                        <a style="width: 100%;" href="<?php echo base_url('/Client/detail/').$_SESSION['id'] ?>">  <button > Verify </button></a>
                        <span style="font-size: .5rem;"> You need to verify your identity before renting</span>

                    <?php }
                    else if($is_approved == '2'){  ?>
                        
                      <a style="width: 100%;" href="<?php echo base_url('/Client/detail/').$_SESSION['id'] ?>">  <button > Profile Status : Pending </button></a>
                      <span style="font-size: .5rem;"> Your data need to approve identity before renting</span>

                  <?php }
                  } ?>
            </aside>
        </section>

        <section class="quotation">
              <button class="close-panel" id="close_modal"><i class="fa-solid fa-xmark"></i></button> 
              <button class="close-panel d-none" id="close_calendar"><i class="fa-solid fa-xmark"></i></button> 


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
                   
                     <div class="col-12">
                      <div class="row gx-1">
                        <div class="col-sm-12 col-xl-5">
                          <div class="form-group">
                            <label for="date_pay" >Start Rent</label>
                            <input class="datepicker" type="text" id="start_rent" name="start_rent" autocomplete="off">
                      </div>
                    </div>

                    <div class="col-sm-12 col-xl-2 text-center d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-arrow-right"></i>
                    </div>
 
                    <div class="col-sm-12 col-xl-5">
                          <div class="form-group">
                            <label for="date_pay" >End Rent</label>
                            <input class="datepicker" type="text" id="end_rent" name="end_rent" autocomplete="off">
                      </div>
                    </div>
                    
                      </div>

                      
                     </div>
                
                 
                   <div class="col-xl-12">
                    
                       <div class="sum-rateperday">
                        1 days | <?php echo number_format($vehicle_detail['rate']) ?> ฿
                       </div>
                       
                   </div>

                    <div class="col-xl-3 col-md-12 d-none">
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
                       <span><?php echo $vehicle_detail['deposit']?> ฿</span>
                     </div>
                   
                     <div class="quotation-detail-group price-detail">
                       <div>Rate / Day :</div>
                       <div id="sum_rate"><?php echo $vehicle_detail['rate']?> ฿</div>
                     </div>

                    <div class="quotation-detail-group price-detail">
                      <div>Vat (7%)</div>
                      <div id="sum_vat">0 ฿</div>
                    </div>

                     <div class="quotation-detail-group price-detail hl">
                      <div>Total</div>
                      <div id="sum_total">0 ฿</div>
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
              <button class="btn-pre-quotation" id="pre-1">  <i class="fa-solid fa-left"></i> back </button>
                <button class="btn-send-quotation" id="next-2"> Next <i class="fa-solid fa-arrow-right"></i> </button>
              </div>


          </form>


          <form class="form-quotation form-next" id="form_confirm" action="">
              
            <div class="form-quotation-head">
              <span>Confirm</span>
              <i class="fa-solid fa-check"></i>
            </div>

          <div class="row gap-1 form-quotation-body confirm-page-text">

            <div class="col-12 form-group quotation-detail">

                 
              <div class="quotation-detail-group price-detail ">
                <div>Car id : </div>
                <div> <?php echo $vehicle_detail['id'] ?></div>
              </div>

              <div class="quotation-detail-group price-detail">
                <div>Car name : </div>
                <div> <?php echo $vehicle_detail['name'] ?> </div>
              </div>

              <div class="quotation-detail-group price-detail">
                <div>License plate : </div>
                <div> <?php echo $vehicle_detail['license_plate'] ?> </div>
              </div>

        </div>

            <div class="col-12 form-group quotation-detail">

              
                   <div class="quotation-detail-group price-detail">
                     <span>File :</span>
                     <span> dsddasdaasdga4416.jpg <i class="fa-duotone fa-file  mx-1"></i></span>
                   </div>
                 
                   <div class="quotation-detail-group price-detail">
                    <div>Start rent : </div>
                    <div> <span id="sum_start_rent"></span><i class="fa-solid fa-calendar-days  mx-1"></i></div>

                  </div>

                   <div class="quotation-detail-group price-detail">
                    <div>End rent : </div>
                    <div> <span id="sum_end_rent"> </span><i class="fa-solid fa-calendar-days  mx-1"></i></div>

                   </div>


                   <div class="quotation-detail-group price-detail">
                    <div>Day amount : </div>
                    <div> <span id="sum_amount_day"></span> days <i class="fa-solid fa-calendar-days  mx-1"></i></div>

                   </div>


                   <div class="quotation-detail-group price-detail">
                    <div>Total cost </div>
                    <div> <span id="sum_cost"></span> <i class="fa-solid fa-money-check-dollar mx-1"></i></div>

                   </div>

                

                 </div>

             
                 <div class="col-12">
                  <div class="rental-rule">
                   fine for late to return the car 5000฿/day
                  </div>
              </div>
         

          </div>




            <div class="form-quotation-footer">
            <button class="btn-pre-quotation" id="pre-2">  <i class="fa-solid fa-left"></i> back </button>
              <button class="btn-send-quotation"  id="next-3"> Confirm <i class="fa-duotone fa-file-check"></i> </button>
            </div>


        </form>



        <form class="form-quotation form-next" id="form_rental" style="padding-bottom: 10px;" action="">
              
          <div class="form-quotation-head">
            <span> Rental Detail</span>
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>

        <div class="row gap-1 form-quotation-body">
          <div class="col-12 form-group quotation-detail">

                 
            <div class="quotation-detail-group price-detail">
              <div>Car id : </div>
              <div> <?php echo $vehicle_detail['id'] ?> </div>
            </div>

            <div class="quotation-detail-group price-detail">
              <div>Car name : </div>
              <div>  <?php echo $vehicle_detail['name'] ?> </div>
            </div>

            <div class="quotation-detail-group price-detail">
              <div>License plate : </div>
              <div>  <?php echo $vehicle_detail['license_plate'] ?> </div>
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
           
      <form class="form-quotation form-next" id="form_calendar" action="">
              <h2>Calendar</h2>
              <div class="calendar-points" id="calendar_points" width="100" height="100"></div>
              <div class="form-footer">
                <div class="row bg-black" style="width: 90%;">
                  <div class="col-4 p-2 selected-start-date text-center" style="font-size: .8rem;"></div>
                  <div class="col-4 p-2 selected-amount-date text-center" style="font-size: .8rem;"></div>
                  <div class="col-4 p-2 selected-end-date text-center" style="font-size: .8rem;"></div>
                </div>
                <button class="form-footer-btn" id="btn_rent_date" disabled>Submit</button>
              </div>
          </form>
  

        </section>
    </main>
    
   

    <footer>
       All Design By Captz
  </footer>
  
  <script>
    
    let date_arr = <?php print_r($renting_date_arr) ?>

  
    
    let d2 = new Date()
    let THIS_YEAR = d2.getFullYear()
    let TODAY = `${d2.getFullYear()}${("0"+(d2.getMonth()+1)).slice(-2)}${("0"+(d2.getDate())).slice(-2)}`

    renderCelendarPoint(THIS_YEAR)
      renderCelendarPoint(THIS_YEAR+1)
    let selectDate = []

    $(".calen-day").click((e)=>{
        let start_date = 0 
        let end_date = 0
        let fullDate = e.target.dataset.fulldate
        let year =e.target.dataset.year
        let month = e.target.dataset.month
        let date = e.target.dataset.date

        e.target.classList.add("selected-date")
        if(fullDate == selectDate[0] && selectDate.length == 1){
            selectDate.length = 0
            $(".calen-day.start-date-hl").removeClass('start-date-hl')
            $(".calen-day.end-date-hl").removeClass('end-date-hl')


        }else if(fullDate == selectDate[1]){
            selectDate[0] = selectDate[1]
            selectDate.length = 1

            $(".calen-day.selected-date").each((i,item)=>{
                item.classList.remove('selected-date')
                item.classList.remove('start-date-hl')
                item.classList.remove('end-date-hl')

            })
        }
        else if(fullDate == selectDate[0] && selectDate.length == 2){
            selectDate[0] = selectDate[1]
            selectDate.length = 1

            $(".calen-day.selected-date").each((i,item)=>{
                item.classList.remove('selected-date')
                item.classList.remove('start-date-hl')
                item.classList.remove('end-date-hl')

            })
        }
        else if(selectDate.length < 2){
            selectDate.push(fullDate)
            if(+selectDate[1] < +selectDate[0]){
                selectDate.reverse()
                $(".calen-day.start-date-hl").removeClass('start-date-hl')
                $(".calen-day.end-date-hl").removeClass('end-date-hl')

            }
        }else {
            selectDate[1] = fullDate
            
            if(+selectDate[1] < +selectDate[0]){
                selectDate.reverse()
                $(".calen-day.start-date-hl").removeClass('start-date-hl')
                $(".calen-day.end-date-hl").removeClass('end-date-hl')
            }
                $(".calen-day.selected-date").each((i,item)=>{
            
                    item.classList.remove('selected-date')
                    item.classList.remove('end-date-hl')
                    item.classList.remove('start-date-hl')

                })
        } 
       
        //selecting 
        $(".calen-day").each((i,item)=>{

            if(item.dataset.fulldate == selectDate[0]) item.classList.add('start-date-hl')
            if(item.dataset.fulldate == selectDate[1]) item.classList.add('end-date-hl')

            if(selectDate.length == 2 && item.dataset.fulldate >= selectDate[0] && item.dataset.fulldate <= selectDate[1]){
                
                item.classList.add('selected-date')
                if(item.className.includes('disabled-select')){
                    selectDate.length = 0
                    $(".calen-day.selected-date").each((i,item)=>{

                        item.classList.remove('selected-date')
                        item.classList.remove('start-date-hl')
                        item.classList.remove('end-date-hl')
                    })
                }
                
            }
           
            if(selectDate.length == 0){
                item.classList.remove('selected-date')
                item.classList.remove('start-date-hl')
                item.classList.remove('end-date-hl')
            }
        })
   

  
        if(selectDate.length == 0){
          $(".selected-start-date").text('--')
          $(".selected-end-date").text('--')
          $(".selected-amount-date").text('0 days')
          $(".selected-amount-date").removeClass('status-error')
          $("#btn_rent_date").prop('disabled',true)

        }

        if(selectDate.length == 1){
          $(".selected-start-date").text( convertDate(selectDate[0],'dmy').join(' / '))
          $(".selected-end-date").text('--')
          $(".selected-amount-date").text('0 days')
          $(".selected-amount-date").removeClass('status-error')
          $("#btn_rent_date").prop('disabled',true)

        }
        if(selectDate.length == 2){
          
          $(".selected-start-date").text(convertDate(selectDate[0],'dmy').join(' / '))
          $(".selected-end-date").text(convertDate(selectDate[1],'dmy').join(' / '))
          $(".selected-amount-date").text(dateDiff(selectDate[0],selectDate[1])+' days')
         
          if(dateDiff(selectDate[0],selectDate[1]) > 30){
            $(".selected-amount-date").addClass('status-error')
          }else{
            $("#btn_rent_date").prop('disabled',false)
            $(".selected-amount-date").removeClass('status-error')

          }
        }

        $("#btn_rent_date").click((e)=>{
            e.preventDefault()
            $("#start_rent")[0].dataset.value = selectDate[0]
            $("#end_rent")[0].dataset.value = selectDate[1]
            $("#date_amount").val(dateDiff(selectDate[0],selectDate[1]))

            renderInputDate('start_rent')
            renderInputDate('end_rent')

            let days = dateDiff(selectDate[0],selectDate[1])
            let price = days* <?php echo (int) $vehicle_detail['rate']; ?>;
            let deposit = <?php echo (int) $vehicle_detail['deposit']; ?>;

            $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
            $('#total_price').html(` ${(price+deposit).toLocaleString()} `)

            $("#form_quotation").removeClass('slide-out-to-left')
            $("#form_calendar").removeClass('slide-form')

            setTimeout(() => {
            $("#form_calendar").css("display",'none')
            }, 500);

            $('.close-panel#close_calendar').addClass('d-none')
            $('.close-panel#close_modal').removeClass('d-none')

        })


        console.log(fullDate)
        console.log(selectDate)
    })


    /* -------------------------------------------- */
    function convertDate(fulldate,format='mdy'){
        fulldate = (''+fulldate)
        y = (fulldate.slice(0,4))
        m = (fulldate.slice(4,6))
        d = (fulldate.slice(6,8))

        if(format == 'mdy'){
          return [m,d,y]
        }else if(format == 'dmy'){
          return [d,m,y]
        }
    }

    function dateDiff(date1,date2){
        let date_format1 = new Date(convertDate(date1))
        let date_format2 = new Date(convertDate(date2))
        const diffTime = Math.abs(date_format2 - date_format1);
        const diffDays = Math.ceil(diffTime / 86400000); 
        return diffDays
    }

    function renderColor(){
    setTimeout(() => {
        let i = 0
        let count = setInterval(() => {
            $('.calen-day')[i].classList.remove('color-none')

            if(i == $('.calen-day').length-1){
                clearInterval(count)
            }
            i++;

        }, 5);
        }, 100);
    }




    function daysInYear(year) {
        
    return ((year % 4 === 0 && year % 100 > 0) || year %400 == 0) ? 366 : 365;
    }

    function renderCelendarPoint(year){
          let arrDaysOfMonth = []

    for (let i = 1 ; i <= 12; i++){
        arrDaysOfMonth.push(new Date(year, i, 0).getDate())
    }
    
    let month_c = 0;
    let c2 = 0

    let disabled_select = ''

    let date_ex = date_arr
    let c_arr = 0;

    let month_section = ["red6","orange6","yellow6",'lime6',"green6",'teal6','cyan6',"blue6","indigo6","violet6",'purple','grape6']

    $("#calendar_points")[0].insertAdjacentHTML("beforeend",`<section class='section-year' id='year_${year}'></section>` )

    for (let i = 1 ; i <= daysInYear(year); i++){
        c2++
        if(c2 > arrDaysOfMonth[month_c]){
            month_c += 1;
            c2 = 1
        }


        let fullDate = `${year}${("0"+(+month_c+1)).slice(-2)}${("0"+(c2)).slice(-2)}`
        let month = `${("0"+(month_c+1)).slice(-2)}`
        let date = `${("0"+(c2)).slice(-2)}`

        disabled_select_before =  +fullDate < TODAY ? 'disabled-select' : '' 

       if(+date_ex[c_arr] <= +fullDate && +date_ex[c_arr+1] >= +fullDate){
            disabled_select = 'disabled-select' 
        } else{
            disabled_select =  ''
        }
        if(+date_ex[c_arr+1] == +fullDate){
            c_arr +=2
        }
     

             $(`#year_${year}`)[0].insertAdjacentHTML("beforeend",`
                <div class="calen-day color-none ${disabled_select_before} ${disabled_select}" 
                        data-fulldate = '${fullDate}'
                        data-year = '${year}'
                        data-month = '${month}'
                        data-date = '${date}'

                style="background:var(--${month_section[month_c]});">${date}</div>
             ` )
       
    }

 
    renderColor()
    
    
        
    }
  
</script>
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
      $("#car-image-preview")[0].src = ''
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
      

    $("#btn_login").click((e)=>{
        location.href = "<?php echo base_url('/Control/Login') ?>"
    })
    $("#btn_rentCar").click((e)=>{
        $(".quotation").addClass('slide-in-from-right')
        $(".content").addClass('slide-out-to-left')
        $("body").css("overflow","hidden")
        $('html,body').scrollTop(0);
    


    })

    $(".close-panel#close_modal").click((e)=>{
        $(".quotation").removeClass('slide-in-from-right')
        $(".content").removeClass('slide-out-to-left')
        $("body").css("overflow","auto")


    })
    $('.close-panel#close_calendar').click((e)=>{
        $("#form_quotation").removeClass('slide-out-to-left')
        $("#form_calendar").css("display",'none')
        $("#form_calendar").removeClass('slide-form')

        $('.close-panel#close_calendar').addClass('d-none')
        $('.close-panel#close_modal').removeClass('d-none')

    })

    $("#next-1").click((e)=>{
      e.preventDefault()
      $("#form_quotation").addClass('slide-out-to-left')
      $("#form_payment").css("display",'block')
      $("#form_payment").addClass('slide-form')


      let price = parseInt($('#total_price').text().replace(/,/g, ''), 10)
      let vat = Math.round(price*0.07)
      $('#sum_rate').html($('.sum-rateperday').html())
      $("#sum_vat").html(vat+" ฿")
      $('#sum_total').html(( +vat+price).toLocaleString())

    })

    $("#pre-1").click((e)=>{
      e.preventDefault()
      $("#form_quotation").removeClass('slide-out-to-left')
      $("#form_payment").addClass('slide-out-to-right')
      $("#form_payment").removeClass('slide-form')
    })



    $("#next-2").click((e)=>{
      e.preventDefault()
      $("#form_payment").addClass('slide-form-out')

      $("#form_confirm").css("display",'block')
      $("#form_confirm").addClass('slide-form')


      $("#sum_start_rent").html($("#start_rent").val())
      $("#sum_end_rent").html($("#end_rent").val())
      $("#sum_amount_day").html($("#date_amount").val())
      $("#sum_cost").html( $("#sum_total").html())

    })

    



    $("#pre-2").click((e)=>{
      e.preventDefault()

       $("#form_payment").removeClass('slide-form-out')

      $("#form_confirm").css("display",'block')
      $("#form_confirm").removeClass('slide-form')
    })

    $('#start_rent').click((e)=>{
      e.preventDefault()
      $("#form_quotation").addClass('slide-out-to-left')
      $("#form_calendar").css("display",'flex')
      $("#form_calendar").addClass('slide-form')

      $('.close-panel#close_calendar').removeClass('d-none')
      $('.close-panel#close_modal').addClass('d-none')



    })

    let CLIENT_ID = "<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''  ?>"
      let VEHICLE_ID = "<?php echo isset($vehicle_detail['id']) ? $vehicle_detail['id'] : ''  ?>"

    $("#next-3").click((e)=>{
     /*  e.preventDefault()
      $("#form_confirm").addClass('slide-form-out')

      $("#form_rental").css("display",'block')
      $("#form_rental").addClass('slide-form') */

      e.preventDefault()

   

      sendData()


    })

    async function sendData(type,id){

/*  if(await preUpload() == false){
         return 0;
     } */

 $("#btn_upload_product , #btn_upload_image , #btn_upload_file").prop('disabled',true);
 $.toast().reset('all')
 $.toast({
     heading: `<div style="width:200px"> Uploading</div>`,
     text:`<div id="data_load_progress" style="color:var(--gray-900);"></div> \n <div id="image_load_progress" style="color:var(--gray-900);"></div> \n <div id="file_load_progress" style="color:var(--gray-900);"></div>`,
     showHideTransition : "fade",
 allowToastClose: false,
     hideAfter : false,
     loader:true,
 })

     let formData = new FormData();

     formData.append('table','tbl_rental')
    /*  type == 'update' ? formData.append('id',id) : '' */
     formData.append('client_id',CLIENT_ID)
     formData.append('vehicle_id',VEHICLE_ID)
     formData.append('start_rent_date',$("#start_rent")[0].dataset.value)
     formData.append('end_rent_date',$("#end_rent")[0].dataset.value)
     formData.append('rent_days',$("#date_amount").val())
     formData.append('cost', parseInt($('#sum_cost').text().replace(/,/g, ''), 10))

     formData.append('fine',0)

     formData.append('receipt','')



     let dataSend = {};
     formData.forEach(function(value, key){
       dataSend[key] = value;
     });

     console.log(dataSend)


     $.ajax({

         type: 'POST',
         url:  '<?php echo base_url('Admin/add_Rental_Data') ?>',
         data: JSON.stringify(dataSend),
         contentType: 'application/json; charset=utf-8',
         dataType: 'json',
          xhr: function() {
             //upload Progress
             var xhr = $.ajaxSettings.xhr();

             if (xhr.upload) {
                 $(".progress").show();
                 xhr.upload.addEventListener('progress', function(event) {

                     var percent = 0;
                     var position = event.loaded || event.position;
                     var total = event.total;
                     if (event.lengthComputable) {
                         percent = Math.ceil(position / total * 100);
                     }
                     console.log(percent)

                     //update progressbar

            

                 }, true);
             }
             return xhr;
         },

         success: async function(data, status) {

             console.log(data);
       

             if (data > 0) {
                 console.log("UPLOAD SUCCESS")

                 setTimeout(() => {
             $.toast().reset('all')
             $.toast({

                        heading: "Upload Data Successfully",
                        text:"",
                        showHideTransition : "fade",
                        hideAfter : 1500,
                        icon:"success"
                    })

                     location.href = '<?php echo isset($_SESSION['id'])  ? base_url('/Client/rental/').$_SESSION['id'] : "" ?> '
           }, 500);


             } else {

                 swal({
                     title: 'Can not be saved!',
                     //text: "You won't be able to revert this!",
                     type: 'warning',
                     confirmButtonClass: 'btn btn-confirm mt-2'
                 });
             }
         }
         });
}


    function renderInputDate(id = ''){
          let fulldate = $("#"+id)[0].dataset.value
          let convertedDate = convertDate(fulldate,'dmy')
          let d = new Date(convertedDate[2],+convertedDate[1]-1,convertedDate[0])

          console.log(d)

          let d_en_sm = ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
          let m_en_full = ['','January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

          $("#"+id).val(`${d_en_sm[d.getDay()]}, ${("0"+d.getDate()).slice(-2)} ${m_en_full[d.getMonth()+1]} ${d.getFullYear()}`)
          $("#"+id)[0].dataset.value = `${d.getFullYear()}${("0"+(d.getMonth())).slice(-2)}${("0"+d.getDate()).slice(-2)}`
    }

 
    $("#btn_incr_day").click((e)=>{
      e.preventDefault()
    
   
        if(+e.target.previousElementSibling.value < 20 ){
          
          e.target.previousElementSibling.value = +e.target.previousElementSibling.value + 1;


          rendetEndDate()

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



        if(e.keyCode == 38 && +e.target.value < 20){
          e.target.value  = +e.target.value  + 1
        rendetEndDate()

          days = $("#date_amount").val()
          price = days* <?php echo (int) $vehicle_detail['rate']; ?>;

          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)

      }else if(e.keyCode == 40 && +e.target.value > 1 ){

          e.target.value  = +e.target.value - 1
        rendetEndDate()

          days = $("#date_amount").val()
          price = days* <?php echo (int) $vehicle_detail['rate']; ?>;

          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)
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
        rendetEndDate()


        let days = $("#date_amount").val()
        let price = days* <?php echo (int) $vehicle_detail['rate']; ?>;
        let deposit = <?php echo (int) $vehicle_detail['deposit']; ?>;



          $(".sum-rateperday").html(`${days} days | ${price.toLocaleString()} ฿`)
          $('#total_price').html(` ${(price+deposit).toLocaleString()} `)
       
      } 

    })

    let d = new Date()

/*  $("#start_rent").Calendar('calendar',{
  format : "dd/MM/yyyy",
  separation : " ",
    lang : "en",
    showDay : 'small',
    closeOnSelect : true,
    max  : 30000101, 
    min : d.getFullYear()+""+("0"+(d.getMonth()+1)).slice(-2)+""+("0"+d.getDate()).slice(-2)
})  */
$("#end_rent").prop('readonly',true)




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