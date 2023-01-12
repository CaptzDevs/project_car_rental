<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car List</title>
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
  height: 5px;
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
    background: rgb(44, 44, 44);
    overflow: hidden;
}

header{
  width: 100%;
  height: 50px;
  background: rgb(42, 42, 42);
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  z-index: 2;
}
header a{
  color: white;
  text-decoration: none;
}
a:hover{
  color: white;
}
.header-logo{
  width: 30%;
  height: 100%;
  background: url('../assets/img/logo.png') no-repeat ;
  background-size: 20%;
  background-position: 35px;

}
.header-content{
  width: 100%;
  height: 100%;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
}
.header-panel{
  width: 30%;
  height: 100%;

}
ul.header-content {
  padding: 0px !important;
  margin: 0px !important;

}
.header-content li{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px 5px 10px 5px;
    position: relative;
    font-size: 16px;
}
.header-content li:hover{
    border-bottom: 1px solid var(--main-red);
}

.header-content li:hover ::after{
    content: "";
    width: 5px;
    height: 5px;
    background: var(--main-red);
    position: absolute;
    bottom: 5px;
    left: 40%;

}

main{
    
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    background: rgb(46, 46, 46);

    position: relative;
  }


.content{
    width: 100%;
    height: 100%;
    background: rgb(46, 46, 46);
    padding: 20px;
    overflow: auto;
    transform: translateX(-100%);
    opacity: 0%;
}

  footer{

    width: 100%;
    height: 100px;
    background: rgb(44, 44, 44);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-top: 50px;
  
}

.banner{
  width: 100%;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  border-radius: 5px;
  /* background: rgb(226,174,238);
background: linear-gradient(196deg, rgba(226,174,238,1) 0%, rgba(148,158,233,1) 100%); */
}
.banner-card{
  width: 100%;
  height: 150px;
  background: rgb(53, 53, 53);

  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: white;
  gap: 10px;
}
.label-text{
  color: white;
  font-size: .9rem;
  margin: 10px;

}
.banner-amount{
  font-size: 1.5rem;
}

.table-group{
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  flex-wrap: wrap;
  gap: 10px;
  
}

.section-table{
  width: 100%;
  min-width: 500px;

  background: rgb(60, 60, 60);
  border-radius: 10px;
  padding: 20px;

}
.table tbody{
  border-top: none !important;
}
.section-table .table{
  color: white;
  border-color: rgba(255, 0, 0, 0);
}
.table td{
  font-size: .9rem;
}
.table tr{
  cursor: pointer;
}
.table th , .table td{
  text-align: center;
  font-size: .8rem;
}
.table th:nth-child(1){
  text-align: center;
}
.table tbody tr:hover{
  background: rgb(50, 50, 50);
}

button{
  border: none;
  color: white;
}
.btn-edit{
  width: 50px;
  background: rgb(83, 83, 83);
  border-radius: 5px;
  padding: 5px 10px 5px 10px;
}
.btn-edit svg{
  font-size: 1rem;
}

section{
  margin-bottom: 20px ;
}

.status-box{
  padding: 5px 10px 5px 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-transform:capitalize;

}
.status-avalible {
  background: var(--green6);
}
.status-rented {
  background: var(--yellow6);
}
.status-fixing {
  background: var(--orange6);
}
.status-broken {
  background: var(--red6);
}

.section-status{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  flex-wrap: wrap;
  
}
.card-status{
  min-width: 300px;
  height: 100px;
  background: rgb(60, 60, 60);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  color: white;
  border-radius: 5px;
  overflow: hidden;
  font-size: .9rem;
  
}
.card-status-bar{
  width: 10px;
  height: 100%;
  position: absolute;
  left: 0;

}

.status-label{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  
}
.status-amount{
  width: 70%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

/*---------------------------------------------------*/

.section-modal{
    /* width: 100%; */
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
    overflow: auto;
    padding-top: 50px;
    padding-bottom: 50px;
    transform: translateX(100%);

}


.slide-in-from-right{
  transform: translateX(0%);
  opacity: 100%;
}
.slide-out-to-left{
  transform: translateX(-100%);
  opacity: 0%;
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

.form-modal{
/*   width: 700px;
  min-width: 300px; */
  height: auto;
  min-height: 700px; 
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


.form-modal-head{
  width: 100%;
  color: white;
  border-bottom: 1px solid rgb(61, 61, 61);
  font-size: 1.2rem;
  margin-bottom: 5px;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  padding-bottom: 10px;
  gap: 10px;
  
}
.form-modal-head svg {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 1.2rem;
}
.form-modal-head .status svg {
  position: relative;
  font-size: 1rem;
  top: 0px;
  right: 0px;
}
.form-modal-body {

  width: 100%;
  padding: 10px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  flex-wrap: wrap;
  gap: 15px;

}
.form-group-section{
  width: 100%;
  padding: 15px;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 10px;
  padding-top: 40px;
  margin-top: 20px;
  position: relative;
 border-top: 1px solid rgba(255, 255, 255, 0.451);

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

.form-group input{
  padding-left: 10px;
  background: rgba(48, 48, 48, 0.54);
}

.form-modal .row{
  margin: 0px;
}


.form-modal-footer {
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

.btn-send-modal{
  width: 100%;
  height: 100%;
  border-radius: 10px;
  background: none;
  color: white;
  border: none;
}

.btn-send-modal:hover{
  background: rgb(46, 46, 46);
}



.vehicle-stastus-form{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  
}

.vehicle-stastus-box{
  width: 100%;
  padding: 10px;
  background: rgb(61, 61, 61);
  text-align: center;
  cursor: pointer;
}

.form-section-label{
  position: absolute;
  background: rgb(36, 36, 36);
  top: -15px;
  font-size: 1rem;
  padding: 0px 20px 0px 20px;
  border: 1px solid rgba(255, 255, 255, 0.451);
  border-radius: 10px;
}
.borderless{
  border: none;
  padding-top: 0px;
  margin-top: 0px;
}
.dropify-wrapper{
  border-radius: 10px;
  background: rgba(48, 48, 48, 0.54);;
  border: none;


}
.dropify-wrapper:hover{
  background: rgba(48, 48, 48, 0.54);;
  border: 1px solid white;
}

.form-group-section label {
  font-size: 16px;
}

textarea{
  width: 100%;
  height: 150px;
  color: white;
  padding: 10px;
  border: none;
  outline: none;
  resize: none;
  border-radius: 10px;
  background: rgba(48, 48, 48, 0.54);;
}
textarea:hover{

border: 1px solid white;
}
.status-border-success {
  border: 1px solid var(--green6) !important;
}
.status-border-warning {
  border: 1px solid var(--yellow6) !important;
}
.status-border-danger {
  border: 1px solid var(--orange6) !important;
}
.status-border-error {
  border: 1px solid var(--red6) !important;
}

.status-success {
  background: var(--green6) !important;
}
.status-warning {
  background: var(--yellow6) !important;
}
.status-danger {
  background: var(--orange6) !important;
}
.status-error {
  background: var(--red6) !important;
}

.image-preview{
  width: 50px;
  height: 50px;
}

</style>
<body>
    <main>
    <div class="loading-page">
        LOADING <i class="fa-solid fa-spinner fa-spin px-2"></i>
      </div>

      <?php include('sidebar.php') ?>
        <div class="content">
          <div class="label-text">Dashboard <i class="fa-solid fa-chart-line"></i></div>
          <section class="banner">
                    <div class="banner-card">
                      <i class="fa-solid fa-car-side"></i>
                      <span class="banner-amount"><?php echo $summary['veh'] ?></span>
                      <span class="lbl_amount">Cars</span>
                    </div>

                    <div class="banner-card">
                      <i class="fa-duotone fa-file-check"></i>
                      <span class="banner-amount"><?php echo $summary['ren'] ?></span>

                      <span class="lbl_amount">Rented</span>
                    </div>
                    <div class="banner-card">
                      <i class="fa-solid fa-users"></i>
                      <span class="banner-amount"><?php echo $summary['cli'] ?></span>

                      <span class="lbl_amount">Customer</span>
                    </div>

            </section>
            <section class="section-status">
                <div class="card-status">
                    <div class="card-status-bar status-avalible"></div>
                    <div class="status-label">Avalible <i class="fa-solid fa-file-lines"></i></div>
                    <div class="status-amount"><?php echo $vehicle_status['ready'] ?></div>
                </div>
                <div class="card-status">
                  <div class="card-status-bar status-rented"></div>
                    <div class="status-label">Rented  <i class="fa-solid fa-file-check"></i></div>
                    <div class="status-amount">  <?php echo $vehicle_status['rented'] ?> </div>
                </div>
                <div class="card-status">
                  <div class="card-status-bar status-fixing"></div>
                    <div class="status-label">Fixing <i class="fa-solid fa-file-exclamation"></i> </div>
                    <div class="status-amount"> <?php echo $vehicle_status['fixing'] ?></div>
                </div>
                <div class="card-status">
                  <div class="card-status-bar status-broken"></div>
                    <div class="status-label">Broken <i class="fa-solid fa-file-excel"></i> </div>
                    <div class="status-amount"> <?php echo $vehicle_status['broken'] ?></div>
                </div>

            </section>
            <?php  
                  $status_client_color = ['error','success','warning'] ;
                  $status_client_arr = ['late','returned','renting'];
                  /* print_r($all_rental)  */
                  ?>
            <section class="section-table">
              <div class="label-text">Rent Detail <i class="fa-solid fa-files"></i></div>
              <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Client</th>
                    <th  scope="col">Vehicle</th>
                    <th  scope="col">Send Request Date</th>
                    <th  scope="col">Start Rent</th>
                    <th  scope="col">End Rent</th>
                    <th  style="width: 10%;"  scope="col">Rent Status</th>
                    <th style="width: 10px;" scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                 <?php $i = 0 ?>
                  <?php foreach($all_rental as $value){ 
                    $i++;
                       $start_date = DateTime::createFromFormat('Ymd', $value['start_rent_date'])->format('d / m / Y');
                       $end_date = DateTime::createFromFormat('Ymd', $value['end_rent_date'])->format('d / m / Y');
                    ?>
                  <tr class="data-row rent_data" data-id="<?php echo $value['client_id']?>">
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo $value['client_name'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['request_date'] ?></td>
                    <td><?php echo $start_date ?></td>
                    <td><?php echo $end_date ?></td>

                    <td >
                      <div class="status-box <?php echo $value['request_status'] == '2' ? "status-".$status_client_color[$value['returned_status']] : "status-border-".($value['is_late'] == '1' ? $status_client_color[$value['returned_status']] : 'error')?>" >
                      <?php echo $value['request_status'] == '2' ? 'Pending ...' :  $status_client_arr[$value['returned_status']]  ; ?>
                      <?php echo $value['is_late'] == '0' ?  "(Late)"  :  " " ; ?>

                    </div>
                  </td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>
                  <?php } ?>

                
                </tbody>
              </table>
            </div>
            </section>

            <?php $status_arr = ['broken','avalible' , 'rented' , 'fixing'] ?>

        <section class="table-group">  
            <section class="section-table">
              <div class="label-text">Cars <i class="fa-solid fa-cars"></i></div>
              <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th  scope="col">#</th>
                    <!-- <th  scope="col">Image</th> -->
                    <th  scope="col">Name</th>
                    <th style="width: 20%;"  scope="col">Status</th>
                    <th style="width: 10px;" scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i = 0 ?>
                <?php foreach($all_vehicle as $value){   $i++;?>

                  <tr class="data-row vehicle_data" data-id="<?php echo $value['id']?>">
                    <td><?php echo $i?> </td>
                   <!--  <td> <img class="image-preview" src="<?php echo $value['image_type'] == '1'? base_url("/uploads/images/".$value['image_url']) : $value['image_url'] ?>" alt=""> </td> -->
                    <td><?php echo $value['name'] ?></td>
                    <td ><div class="status-box status-<?php echo $status_arr[$value['vehicle_status']] ?>"><?php echo $status_arr[$value['vehicle_status']] ?></div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>
                  
                  <?php } ?>
  
                </tbody>
              </table>
            </div>
            </section>


            <?php $status_client_color = ['error','success','warning'] ;
                  $status_client_arr = ['not approve','approved','pending'];
                  $status_client_attached = ['not attached','attached'];
                  $status_client_filled = ['not filled','filled'];


                  $status_client_role = ['admin','client'];

            ?>


            <section class="section-table">
              <div class="label-text">Client <i class="fa-solid fa-users"></i></div>
              <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Name</th>
                    <th  scope="col">Email</th>
                    <th  scope="col">Detail</th>
                    <th  scope="col">ID card</th>
                    <th  scope="col">Driver License</th>

                    <th style="width: 20%;"  scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i = 0 ?>
                <?php foreach($all_client as $value){ $i++ ;
                  $client_image = $this->Admin_model->get_image_byClientID($value['id']);
        
                  $check_user_idcard = 0;
                  $check_user_dl= 0;
                  
                  $check_user_detail = $value['name'] && $value['email'] && $value['tel'] && $value['address'] ? 1 : 0;
                  foreach($client_image as $image){
                    if( $image['image_section'] == 'ID_Card' && $image['image_url'] != ''  ){
                      $check_user_idcard = $image['image_section'] = 1;
                    }
                    if(  $image['image_section'] == 'Driver_License' && $image['image_url'] != ''  ){
                      $check_user_dl = $image['image_section'] = 1;
                    }


                }

                  
                  ?>
                  <tr class="data-row client_data" data-id="<?php echo $value['id']?>">
                    <td><?php echo $i ?> </td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td>
                    <div class="status-box status-<?php echo $status_client_color[$check_user_detail] ?>"><?php echo $status_client_filled[$check_user_detail] ?></div>
                    </td>

                    <td>
                    <div class="status-box status-<?php echo $status_client_color[$check_user_idcard] ?>"><?php echo $status_client_attached[$check_user_idcard] ?></div>
                   </td>
                    <td>
                    <div class="status-box status-<?php echo $status_client_color[$check_user_dl] ?>"><?php echo $status_client_attached[$check_user_dl] ?></div>
                  </td>


                    <td ><div class="status-box status-<?php echo $status_client_color[$value['approve_status']] ?>"><?php echo $status_client_arr[$value['approve_status']] ?></div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>
              
                  <?php } ?>
  
                </tbody>
              </table>
            </div>
            </section>
          
        </section>

        </div>

     

    </main>

   <script>
 
/*  $("#start_rent").Calendar('calendar',{
  separation : "/",
   
})

$("#end_rent").Calendar('calendar',{
  separation : "/",
   
}) */

window.onload = function(e){
  $(".content").addClass('slide-in-from-right')
  $("aside").css("opacity",'100%')
}

window.onbeforeunload  = function(event) {
      $(".content").addClass('slide-out-to-left')
      $("aside").css("opacity",'0%')
      console.log('d')
};







    $(`.data-row.rent_data`).click((e)=>{
      location.href = `<?php echo base_url('/Admin/rental/') ?>${e.target.parentElement.dataset.id ? e.target.parentElement.dataset.id : e.target.parentElement.parentElement.dataset.id}`

     /*  $(".section-modal#car-detail").addClass('slide-in-from-right')
      $(".content").addClass('slide-out-to-left')
      $("aside").css("opacity",'0%') */

    }) 


    $(`.data-row.client_data`).click((e)=>{
      location.href = `<?php echo base_url('/Admin/client/') ?>${e.target.parentElement.dataset.id ? e.target.parentElement.dataset.id : e.target.parentElement.parentElement.dataset.id}`

     /*  $(".section-modal#car-detail").addClass('slide-in-from-right')
      $(".content").addClass('slide-out-to-left')
      $("aside").css("opacity",'0%') */

    }) 

    
    $(`.data-row.vehicle_data`).click((e)=>{
      location.href = `<?php echo base_url('/Admin/vehicle/') ?>${e.target.parentElement.dataset.id ? e.target.parentElement.dataset.id : e.target.parentElement.parentElement.dataset.id}`

    }) 

    $(".rent-data-row").click((e)=>{
      $(".section-modal#rent-detail").addClass('slide-in-from-right')
      $(".content").addClass('slide-out-to-left')
      $("aside").css("opacity",'0%')

    })

      $(".close-panel").click((e)=>{
        $(".section-modal#car-detail").removeClass('slide-in-from-right')
        $(".section-modal#rent-detail").removeClass('slide-in-from-right')

        $(".content").removeClass('slide-out-to-left')
        $("aside").css("opacity",'100%')

      

    })



    $('.dropify.user_image').dropify({
      tpl: {
        wrap:            '<div class="dropify-wrapper"></div>',
        loader:          '<div class="dropify-loader"></div>',
        message:         '<div class="dropify-message" style="font-size:2rem"><i class="fa-solid fa-address-card"></i> </div>',
        preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
        filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
        clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
        errorLine:       '<p class="dropify-error">{{ error }}</p>',
        errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
    }
    });

    $('.dropify').dropify({
      tpl: {
        wrap:            '<div class="dropify-wrapper"></div>',
        loader:          '<div class="dropify-loader"></div>',
        message:         '<div class="dropify-message" style="font-size:2rem"><i class="fa-solid fa-images"></i> </div>',
        preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
        filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
        clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
        errorLine:       '<p class="dropify-error">{{ error }}</p>',
        errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
    } 
    });

   </script>
</body>
</html>