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
  background: rgb(45, 45, 45);

}

main{
    
    width: 100%;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 10px;
    background: rgb(45, 45, 45);
    position: relative;
    padding-top: 30px;

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
    <main>



        <section class="quotation">
              <button class="close-panel"><i class="fa-solid fa-xmark"></i></button> 


        <form class="form-quotation form-next" id="form_rental" style="padding-bottom: 10px;" action="">
              

        <?php $ve_status_arr = ['Denied','Approve ','Pending'] ?>
            <?php $ve_status_color_arr = ['error','success','warning'] ?>
    <?php 

    $end_rent = DateTime::createFromFormat('Ymd', $rental_data['end_rent_date']);
    $start_rent = DateTime::createFromFormat('Ymd', $rental_data['start_rent_date']);

    
    $today = new DateTime();
    $interval = $today->diff($end_rent);
    
    $remainingDays = $interval->format('%a');

    $istimetorent = $today >= $start_rent ;

    $datebefore_renting = $today->diff($start_rent)->format('%a');

 
    ?>
          <div class="form-quotation-head">
            <span> Rental Detail</span>
            <i class="fa-solid fa-magnifying-glass"></i>
            <div style="font-size: .8rem;" class="status status-<?php echo $rental_data ? $ve_status_color_arr[$rental_data['request_status']]  : '' ?> rounded px-2">
            <?php echo $rental_data ? $ve_status_arr[$rental_data['request_status']]  : '' ?> <!-- <i class="fa-solid fa-check"></i> --></div>

            <?php if($datebefore_renting > 0  && $rental_data['request_status'] != 0){ ?> 
              <div class="status status-success rounded px-2 mt-1"  style="font-size: .8rem;">
              <?php echo $datebefore_renting ?> Days before renting
            </div>
          <?php  } ?>
              
            <?php if($rental_data['request_status'] != 0 && $istimetorent ){ ?>
            <div class="status status-success <?php echo $remainingDays < 2 ? 'status-error ': '' ?> rounded px-2 mt-1"  style="font-size: .8rem;">
              <?php echo $remainingDays ?> Days Remain
            </div>
              <?php } ?>
          </div>


        <div class="row gap-1 form-quotation-body">
          <div class="col-12 form-group quotation-detail">

                 
            <div class="quotation-detail-group price-detail">
              <div>Car id : </div>
              <div> <?php echo $rental_data['vehicle_id'] ?> </div>
            </div>

            <div class="quotation-detail-group price-detail">
              <div>Car name : </div>
              <div>  <?php echo $rental_data['name'] ?> </div>
            </div>

            <div class="quotation-detail-group price-detail">
              <div>License plate : </div>
              <div>  <?php echo $rental_data['license_plate'] ?> </div>
            </div>

      </div>

          <div class="col-12 form-group quotation-detail">

                 <div class="quotation-detail-group price-detail">
                   <span>Rent ID :</span>
                   <span> <?php echo $rental_data['id'] ?>  </span>
                 </div>

                 <?php 
                 
                 $start_date = DateTime::createFromFormat('Ymd', $rental_data['start_rent_date']);
                 $end_date = DateTime::createFromFormat('Ymd', $rental_data['end_rent_date']);

  
                 ?>
               
                 <div class="quotation-detail-group price-detail">
                  <div>Start rent : </div>
                  <div> <?php echo $start_date->format('d / m / Y');  ?>  </div>
                </div>


                 <div class="quotation-detail-group price-detail">
                  <div>End rent : </div>
                  <div> <?php echo $end_date->format('d / m / Y');  ?>  </div>

                 </div>


                 <div class="quotation-detail-group price-detail">
                  <div>Day rent : </div>
                  <div> <?php echo $rental_data['rent_days'] ?>  days</div>

                 </div>


                 <div class="quotation-detail-group price-detail">
                  <div>Total cost </div>
                  <div> <?php echo number_format($rental_data['cost']) ?>  ฿</div>

                 </div>


                 

              

               </div>

               <div class="col-12 form-group quotation-detail">
                <?php 
                  $approve_arr=  ['Denied', 'Approve' , 'Pending'] ;
                  $status_color = ['error','success','warning'] ;

                ?>

                  <div class="quotation-detail-group price-detail">
                  <div> Receipt: </div>
                  <div class="status px-2 rounded status-<?php echo $status_color[$rental_data['approve_receipt']] ?>"> <?php echo  $approve_arr[$rental_data['approve_receipt']] ?> </div>

                 </div>

                 <div class="quotation-detail-group price-detail">
                   <div>Request Status :</div>
                   <div class="status px-2 rounded status-<?php echo $status_color[$rental_data['request_status']] ?>"> <?php echo  $approve_arr[$rental_data['request_status']]?>  </div>
                 </div>


               


               
              

               </div>

               <?php if((int) $rental_data['fine'] > 0) {?>
               <div class="col-12 form-group quotation-detail">

                <div class="quotation-detail-group price-detail" style="color:var(--red4)">
                  <span>Fine : </span>
                  <span>   <div> <?php echo $rental_data['fine'] ?> </div> </span>
                </div>
              
              </div>
              <?php } ?>

              <div class="col-12">
                <div class="rental-rule">
                 fine for late to return the car 5000฿/day
                </div>
            </div>

       

        </div>




        


      </form>
           

        </section>
    </main>
    
   

   
  

  <script>
    $(".close-panel").click((e)=>{
        $(".quotation").removeClass('slide-in-from-right')
        $(".content").removeClass('slide-out-to-left')
        $("body").css("overflow","auto")

        setTimeout(() => {
          if(window.history.length < 5){
            location.href = '<?php echo base_url('/Control/category')?>'

          }else{
            window.history.back()
          }
    
        }, 200);
    })

          $(".quotation").addClass('slide-in-from-right')
        $(".content").addClass('slide-out-to-left')
        $("body").css("overflow","hidden")
        $('html,body').scrollTop(0);

   $("#form_rental").css("display",'block')
      $("#form_rental").addClass('slide-form')

  /*   let CLIENT_ID = "<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''  ?>"
      let VEHICLE_ID = "<?php echo isset($vehicle_detail['id']) ? $vehicle_detail['id'] : ''  ?>" */

    $("#next-3").click((e)=>{
 

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
         url:  '<?php echo base_url('Admin/addData') ?>',
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

                    if(type == 'save'){
                     location.href =  '<?php echo base_url('/Admin/vehicle/')?>'+data 
                   }
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


/*     function rendetEndDate(){
      let fulldate = $("#start_rent")[0].dataset.value
          let d = new Date(fulldate.slice(0,4),fulldate.slice(4,6),(+fulldate.slice(6,8)+(+$("#date_amount").val())))
          $("#end_rent").val(`${d_en_sm[d.getDay()]}, ${("0"+d.getDate()).slice(-2)} ${m_en_full[d.getMonth()]} ${d.getFullYear()}`)

          $("#end_rent")[0].dataset.value = `${d.getFullYear()}${("0"+(d.getMonth()-1)+1).slice(-2)}${("0"+d.getDate()).slice(-2)}`
    } */

  
  </script>
</body>
</html>