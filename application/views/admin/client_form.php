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
    overflow-x: hidden;

  }

  aside{
    min-width: 250px;
    max-width: 250px;
    height: 100%;
    background: rgb(33, 33, 33);
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column  ;
    gap: 10px;
    position: relative;
  }

  .header-menu{
    width: 100%;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    color: white;
    font-size: 1.3rem;
  }

 
  .menu-item{
    width: 100%;
    padding: 15px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;

  }

  .menu-item:hover{
    background: rgb(51, 51, 51);

  }

  .menu-item svg{
    width: 30px;
    padding-right: 5px;
    padding-left: 5px;
    min-width: 30px;

}

.menu-footer{
  width: 100%;
  height: 50px;
  background: rgb(53, 53, 53);
  position: absolute;
  bottom: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: .6rem;
  
}

.content{
    width: 100%;
    height: 100%;
    background: rgb(46, 46, 46);
    padding: 20px;
    overflow: auto;
    overflow-x: hidden;

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
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
  
}

.section-table{
  width: 49%;
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
  pointer-events: none;
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
    overflow-x: hidden;

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
  text-transform: capitalize;
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
input:hover , textarea:hover{
outline: 1px solid white;
}
input{
  width: 100%;
}
.progress-bar{
  width: 100%;
  height: 15px;
  background: none;
  position: relative;
  margin-top: 5px;
  color: white;
  overflow: visible;
}

.form-section-label svg{
  margin-left: 5px;
}

.progress-loader{
  width: 0%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  background: var(--green4);
  border-radius: 5px;

 
  
}
.image-preview-url{
  width: 100%;
  height: 300px;
  object-fit: contain;
  display: none;
}

.status-selected{
  border-radius: 5px;
  filter: drop-shadow(0px 5px var(--blue8) );
  transform: translateY(-5px);
}
 svg{
  user-select: none;
  pointer-events: none;
}

</style>
<body>
    <main>

      <div class="loading-page">
        LOADING <i class="fa-solid fa-spinner fa-spin px-2"></i>
      </div>
    <!--     <aside>
          <div class="header-menu">
            Car Rental 
          </div>
         <div class="menu-item"> <i class="fa-solid fa-car-side"></i> Cars </div>
         <div class="menu-item"> <i class="fa-duotone fa-file-check"></i> Rent Status </div>
         <div class="menu-item"> <i class="fa-solid fa-users"></i>  Customer </div>
         <div class="menu-item"> <i class="fa-solid fa-wrench"></i> Fix </div>
         <div class="menu-item"> <i class="fa-solid fa-sparkles"></i> Privilege </div>

    
          <div class="menu-footer">v 1.0</div>
        </aside>
        <div class="content">
          <div class="label-text">Car List <i class="fa-solid fa-chart-line"></i></div>
          <section class="banner">
                    <div class="banner-card">
                      <i class="fa-solid fa-car-side"></i>
                      <span class="banner-amount">150</span>
                      <span class="lbl_amount">Cars</span>
                    </div>

                    <div class="banner-card">
                      <i class="fa-duotone fa-file-check"></i>
                      <span class="banner-amount">150</span>
                      <span class="lbl_amount">Rented</span>
                    </div>
                    <div class="banner-card">
                      <i class="fa-solid fa-users"></i>
                      <span class="banner-amount">150</span>
                      <span class="lbl_amount">Customer</span>
                    </div>

            </section>
            <section class="section-status">
                <div class="card-status">
                    <div class="card-status-bar status-avalible"></div>
                    <div class="status-label">Avalible <i class="fa-solid fa-file-lines"></i></div>
                    <div class="status-amount">50</div>
                </div>
                <div class="card-status">
                  <div class="card-status-bar status-rented"></div>
                    <div class="status-label">Rented  <i class="fa-solid fa-file-check"></i></div>
                    <div class="status-amount"> 50 </div>
                </div>
                <div class="card-status">
                  <div class="card-status-bar status-fixing"></div>
                    <div class="status-label">Fixing <i class="fa-solid fa-file-exclamation"></i> </div>
                    <div class="status-amount">50</div>
                </div>
                <div class="card-status">
                  <div class="card-status-bar status-broken"></div>
                    <div class="status-label">Broken <i class="fa-solid fa-file-excel"></i> </div>
                    <div class="status-amount">50</div>
                </div>

            </section>

        <section class="table-group">  
            <section class="section-table">
              <div class="label-text">Cars <i class="fa-solid fa-car-side"></i></div>
              <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">Name</th>
                    <th  scope="col">Brand</th>
                    <th  scope="col">Year</th>
                    <th style="width: 20%;"  scope="col">Status</th>
                    <th style="width: 10px;" scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="car-data-row">
                    <th scope="row">1</th>
                    <td>Ford Focus</td>
                    <td>Ford</td>
                    <td>2012</td>
                    <td ><div class="status-box status-avalible">Avalible</div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>
                  <tr class="car-data-row">
                    <th scope="row">1</th>
                    <td>Ford Focus</td>
                    <td>Ford</td>
                    <td>2012</td>
                    <td><div class="status-box status-rented">Rented</div></td>

                    
                    <td> <button class="btn-edit">  <i class="fa-regular fa-file-check"></i> </button> </td>
                  </tr>
                  <tr class="car-data-row">
                    <th scope="row">1</th>
                    <td>Ford Focus</td>
                    <td>Ford</td>
                    <td>2012</td>
                    <td><div class="status-box status-fixing">Fixing</div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-exclamation"></i>  </button> </td>
                  </tr>

                  <tr class="car-data-row">
                    <th scope="row">1</th>
                    <td>Ford Focus</td>
                    <td>Ford</td>
                    <td>2012</td>
                    <td><div class="status-box status-broken">Broken</div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-excel"></i> </button> </td>
                  </tr>
                </tbody>
              </table>
            </div>
            </section>
            

            <section class="section-table">
              <div class="label-text">Rent Detail <i class="fa-solid fa-car-side"></i></div>
              <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">Client</th>
                    <th  scope="col">Vehicle</th>
                    <th  scope="col">Start Rent</th>
                    <th  scope="col">End Rent</th>
                    <th  style="width: 10%;"  scope="col">Rent Status</th>
                    <th style="width: 10px;" scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                  <tr class="rent-data-row">
                    <th scope="row">1</th>
                    <td>Siwakorn</td>
                    <td>Ford Focus</td>
                    <td>23/12/2565</td>
                    <td>28/12/2565</td>
                    <td ><div class="status-box status-avalible">Returned</div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>

                  <tr class="rent-data-row">
                    <th scope="row">1</th>
                    <td>Siwakorn</td>
                    <td>Ford Focus</td>
                    <td>23/12/2565</td>
                    <td>28/12/2565</td>
                    <td ><div class="status-box status-rented">Rented</div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>

                  <tr class="rent-data-row">
                    <th scope="row">1</th>
                    <td>Siwakorn</td>
                    <td>Ford Focus</td>
                    <td>23/12/2565</td>
                    <td>28/12/2565</td>
                    <td ><div class="status-box status-broken">Late</div></td>
                    <td> <button class="btn-edit"><i class="fa-regular fa-file-lines"></i></button> </td>
                  </tr>
            
                
                </tbody>
              </table>
            </div>
            </section>
        </section>

        </div> -->

        <section class="section-modal row p-4 gap-sm-3" id="car-detail">

          <button class="close-panel"><i class="fa-solid fa-xmark"></i></button> 


         <form class="form-modal col-lg-6 col-md-12" id="form_detail_modal" action="">
            <div class="form-modal-head">
              <span>Car Detail</span>
              <i class="fa-solid fa-file-invoice"></i>


            </div>

            <?php $client_detail = $client_data ? $client_data['detail'][0] : '';
            ?>

          <div class="form-modal-body">

            <div class="form-group-section">
              <label class="form-section-label" for="">Overview</label>
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" value="<?php echo  $client_detail ? $client_detail['name'] : '' ?>">
              </div>
  
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="username" value="<?php echo  $client_detail ? $client_detail['username'] : '' ?>">
              </div>
  
              <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="password" id="password"  value="<?php echo  $client_detail ? $client_detail['password'] : '' ?>" >
              </div>

              <div class="form-group">
                <label for="">Email.</label>
                <input type="text" name="email" id="email" value="<?php echo  $client_detail ? $client_detail['email'] : '' ?>">
              </div>

              <div class="form-group">
                <label for="">Tel.</label>
                <input type="text" name="tel" id="tel" value="<?php echo  $client_detail ? $client_detail['tel'] : '' ?>">
              </div>
              
              
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="address" maxlength="150" cols="30" rows="10" ><?php echo  $client_detail ? $client_detail['address'] : '' ?></textarea>

            </div>

             <!--  <div class="form-group">
                <label for="">ID Card</label>
                <input type="file" class="dropify user_image" id="client_id_card" data-default-file="" />
              </div>

                 <div class="form-group">
                <label for="">Driver License </label>
                <input type="file" class="dropify user_image" id="client_driver_license" data-default-file="" />
  
              </div> -->

            </div>

            <div class="form-group-section ">
                <label class="form-section-label" for="">Status</label>
                
                <label for="">Role</label>
    
                <div class="vehicle-stastus-form">
                  <div class="vehicle-stastus-box role <?php echo $client_detail && $client_detail['role'] == '1' ? 'status-selected' : '' ?> <?php echo $data_id == 'add' ? 'status-selected' : '' ?>" data-value="1"> Client <i class="fa-solid fa-user"></i></div>
                  <div class="vehicle-stastus-box role <?php echo $client_detail && $client_detail['role'] == '0' ? 'status-selected' : '' ?> " data-value="0"> Admin <i class="fa-solid fa-user-astronaut"></i></div>
                </div>
                
              </div>
             
              <div class="form-group-section borderless">
                <label for="">Ban</label>
    
                <div class="vehicle-stastus-form">
                  <div class="vehicle-stastus-box data_status <?php echo $client_detail && $client_detail['data_status'] == '1' ? 'status-selected' : '' ?><?php echo $data_id == 'add' ? 'status-selected' : '' ?>" data-value="1"> Unban <i class="fa-regular fa-circle"></i></div>
                  <div class="vehicle-stastus-box data_status <?php echo $client_detail && $client_detail['data_status'] == '0' ? 'status-selected' : '' ?> " data-value="0"> Ban <i class="fa-solid fa-ban"></i></div>
                </div>
                
              </div>
            
     
     

       <!--    <div class="form-group-section borderless">
            <label for="">Type</label>
            <div class="vehicle-stastus-form">
              <div class="vehicle-stastus-box vehicle_type <?php echo $data_id == 'add' ? 'status-selected' : '' ?> <?php echo $client_detail && $client_detail['vehicle_type'] == '1' ? 'status-selected' : '' ?> " data-value='1'><i class="fa-solid fa-car-side"></i></div>
              <div class="vehicle-stastus-box vehicle_type <?php echo $client_detail && $client_detail['vehicle_type'] == '2' ? 'status-selected' : '' ?> " data-value='2'><i class="fa-solid fa-motorcycle"></i></div>
            </div>
          </div>
 -->
        
   

        
          </div>

      
            <div class="form-modal-footer">
              <button class="btn-send-modal" id="btn_save"> <?php echo is_numeric($data_id) ? "Copy all data to new page" : 'Save' ?> </button>
              <?php if(!is_numeric($data_id) == false){ ?>
              <button class="btn-send-modal" id="btn_update"> Save </button>
              <?php } ?>
            </div>
        </form> 
     <?php if(is_numeric($data_id)){ ?>

        <form class="form-modal col-lg-4 col-md-12" id="form_image_modal" action="">
          <div class="form-modal-head">
            <span>Car Image</span>
            <i class="fa-solid fa-images"></i>
          </div>

        <div class="form-modal-body">


        <?php 

          $client_section_arr = ['ID_Card','Driver_License'];
          $client_arr = [];

          foreach($client_section_arr as $section2){
            $client_arr[$section2] =  [] ;
            foreach($client_data['images'] as $client_image2){
            
              if($client_image2['image_section'] == $section2){
                $client_arr[$section2] = $client_image2 ;
              }
              
            }

          }

       /*    echo '<pre>';
          print_r($client_arr);
          echo '</pre>'; */


         ?>
<!-- <?php foreach($client_section_arr as $section){ ?>

           <div class="status border p-2 rounded <?php echo $client_arr[$section] && $client_arr[$section]['id'] ? 'status-success' : '' ?>"><?php echo $section ?></div>

<?php } ?> -->

<?php foreach($client_section_arr as $section){
  
  ?>

          <div class="form-group-section">
            <label class="form-section-label" id="lbl-<?php echo $section ?>" for=""><?php echo $section ?> </label>
            <div class="form-group">
            

              <input type="file" class="dropify"  
                    data-default-file="<?php echo $client_arr[$section]  ? base_url('/uploads/images/'.$client_arr[$section]['image_url']) : ''  ?>" 
                    data-type="<?php echo $section ?>" 
                    data-id="<?php $client_arr[$section] && printf($client_arr[$section]['id']) ?> " 

                    />
                  
                    <div class="progress-bar">
                  <div class="progress-loader" id="progress-<?php echo $section ?>"></div>
              </div>           
            </div>
            <div class="form-group-section borderless">
         

              <label for="">Show on web</label>
    
              <div class="vehicle-stastus-form">
                <div data-value="1" data-id="<?php $client_arr[$section] && printf($client_arr[$section]['id'])  ?> "  data-image_section=<?php echo $section ?> class="vehicle-stastus-box image_data_status <?php echo $client_arr[$section] && $client_arr[$section]['data_status'] == '1' ? 'status-selected' : ''  ?>" ><i class="fa-solid fa-eye"></i></div>
                <div data-value="0" data-id="<?php $client_arr[$section] && printf($client_arr[$section]['id'])  ?> "  data-image_section=<?php echo $section ?> class="vehicle-stastus-box image_data_status <?php echo $client_arr[$section] && $client_arr[$section]['data_status'] == '0' ? 'status-selected' : ''  ?>" ><i class="fa-solid fa-eye-slash"></i></div>
              </div>
            </div>

          </div>
          <?php  } ?>

        <!--   <div class="form-group-section">
            <label class="form-section-label" id="lbl-front" for="">Front</label>
            <div class="form-group">
              <img class="image-preview-url" id="image_preview_front">
              <input type="file" class="dropify" data-default-file="" data-type="front"/>
            </div>
                  <div class="progress-bar">
                  <div class="progress-loader" id="progress-front"></div>
              </div>
            <div class="form-group-section borderless">
         
              <div class="form-group">
              <label for="">URL</label>
              <input class="url-input-image" type="text"  data-type="font">
            </div>

              <label for="">Show on web</label>
    
              <div class="vehicle-stastus-form">
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye"></i></div>
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye-slash"></i></div>
              </div>
            </div>

          </div>
          <div class="form-group-section">
            <label class="form-section-label" id="lbl-back" for="">Back</label>
            <div class="form-group">
              <img class="image-preview-url" id="image_preview_back">
              <input type="file" class="dropify" data-default-file="" data-type="back"/>
                  <div class="progress-bar">
                  <div class="progress-loader" id="progress-back"></div>
              </div>
            </div>

            <div class="form-group-section borderless">
         
              <div class="form-group">
              <label for="">URL</label>
              <input class="url-input-image" type="text"  data-type="back">
            </div>

              <label for="">Show on web</label>
    
              <div class="vehicle-stastus-form">
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye"></i></div>
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye-slash"></i></div>
              </div>
            </div>

          </div>

          <div class="form-group-section">
            <label class="form-section-label" id="lbl-side" for="">Side</label>
            <div class="form-group">
              <img class="image-preview-url" id="image_preview_side">
              <input type="file" class="dropify" data-default-file="" data-type="side"/>
                  <div class="progress-bar">
                  <div class="progress-loader" id="progress-side"></div>
              </div>
            </div>

            <div class="form-group-section borderless">
         
              <div class="form-group">
              <label for="">URL</label>
              <input class="url-input-image" type="text" data-type="side">
            </div>

              <label for="">Show on web</label>
    
              <div class="vehicle-stastus-form">
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye"></i></div>
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye-slash"></i></div>
              </div>
            </div>

          </div>
         
          
          <div class="form-group-section">
            <label class="form-section-label" id="lbl-above" for="">Above</label>
            <div class="form-group">
              <img class="image-preview-url" id="image_preview_above">
              <input type="file" class="dropify" data-default-file="" data-type="above"/>
                  <div class="progress-bar">
                  <div class="progress-loader" id="progress-above"></div>
              </div>
            </div>

            
            <div class="form-group-section borderless">
         
              <div class="form-group">
              <label for="">URL</label>
              <input class="url-input-image" type="text" data-type="above">
            </div>

              <label for="">Show on web</label>
    
              <div class="vehicle-stastus-form">
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye"></i></div>
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye-slash"></i></div>
              </div>
            </div>

          </div>

          <div class="form-group-section">
            <label class="form-section-label" id="lbl-wheel" for="">Wheel</label>
            <div class="form-group">
              <img class="image-preview-url" id="image_preview_wheel">
              <input type="file" class="dropify" data-default-file="" data-type="wheel"/>
                  <div class="progress-bar">
                  <div class="progress-loader" id="progress-wheel"></div>
              </div>
            </div>

            
            <div class="form-group-section borderless">
         
              <div class="form-group">
              <label for="">URL</label>
              <input class="url-input-image" type="text" data-type="wheel">
            </div>

              <label for="">Show on web</label>
    
              <div class="vehicle-stastus-form">
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye"></i></div>
                <div class="vehicle-stastus-box"><i class="fa-solid fa-eye-slash"></i></div>
              </div>
            </div>

          </div> -->

      
        </div>

    
         <!--  <div class="form-modal-footer">
            <button class="btn-send-modal" id="next-1"> Save </button>
          </div> -->
      </form> 
      <?php } ?>


        </section>

      <!--   <section class="section-modal row p-4 gap-sm-3" id="rent-detail">

          <button class="close-panel"><i class="fa-solid fa-xmark"></i></button> 

         <form class="form-modal col-lg-6 col-md-12" id="form_modal" action="">
            <div class="form-modal-head">
              <span>Rent Detail</span>
              <i class="fa-solid fa-file-invoice"></i>
              <div class="status status-rented rounded px-2">Pending <i class="fa-solid fa-check"></i></div>
            </div>

          <div class="form-modal-body">

            <div class="form-group-section">
              <label class="form-section-label" for="">General</label>
              <div class="form-group">
                <label for="">Client Name</label>
                <input type="text" name="" id="">
              </div>
  
              <div class="form-group">
                <label for="">Vehicle Name</label>
                <input type="text" name="" id="">
              </div>
  
              <div class="form-group">
                <label for="start_rent" >Start Rent</label>
                <input class="datepicker" type="text" id="start_rent" name="start_rent" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="end_rent" >End Rent</label>
            <input class="datepicker" type="text" id="end_rent" name="end_rent" autocomplete="off">
      </div>
              
              
            <div class="form-group">
              <label for="">Rent days</label>
              <input type="text" name="" id="">
            </div>

            </div>
           
            
            <div class="form-group-section">
              <label class="form-section-label" for="">Payment</label>

            <div class="form-group">
              <label for="">Proof of payment</label>
              <input type="file" class="dropify" data-default-file="" />

            </div>
         

          </div>
          <div class="form-group-section ">
            <label class="form-section-label" for="">Status</label>
            
            <label for="">Show on web</label>

            <div class="vehicle-stastus-form">
              <div class="vehicle-stastus-box"><i class="fa-solid fa-eye"></i></div>
              <div class="vehicle-stastus-box"><i class="fa-solid fa-eye-slash"></i></div>
            </div>
          </div>

          <div class="form-group-section borderless">
            <label for="">Returning Car Status</label>
            <div class="vehicle-stastus-form">
              <div class="vehicle-stastus-box"> Returned <i class="fa-solid fa-circle-check"></i></div>
              <div class="vehicle-stastus-box"> Renting <i class="fa-solid fa-car-side"></i></div>
              <div class="vehicle-stastus-box"> Late <i class="fa-solid fa-clock"></i></div>

            </div>
          </div>

        
          <div class="form-group-section borderless">
            <label for="">Request Status</label>
            <div class="vehicle-stastus-form">
              <div class="vehicle-stastus-box">Approve <i class="fa-solid fa-file-check"></i> </div>
              <div class="vehicle-stastus-box">Pending <i class="fa-solid fa-clock"></i></div>
              <div class="vehicle-stastus-box">Denied <i class="fa-solid fa-file-excel"></i></div>
            </div>
          </div>

        
          </div>

      
            <div class="form-modal-footer">
              <button class="btn-send-modal" id="next-1"> Save </button>
            </div>
        </form> 
        <form class="form-modal col-lg-4 col-md-12" id="form_modal" action="">
          <div class="form-modal-head">
            <span>Client Detail</span>
            <i class="fa-solid fa-file-user"></i>
          </div>

        <div class="form-modal-body">

          <div class="form-group-section">
            <label class="form-section-label" for="">Overview</label>

              <div class="form-group">
                <label for="">Client Name</label>
                <input type="text" name="" id="">
              </div>

              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="" id="">
              </div>

              <div class="form-group">
                <label for="">Password</label>
                <input type="text" name="" id="">
              </div>

              <div class="form-group">
                <label for="">Tel.</label>
                <input type="text" name="" id="">
              </div>

              <div class="form-group">
                <label for="">Address</label>
                <textarea name="" id="" maxlength="150" cols="30" rows="10"></textarea>
              </div>

              <div class="form-group">
                <label for="">ID Card</label>
                <input type="file" class="dropify user_image" id="client_id_card" data-default-file="" />
  
              </div>

              <div class="form-group">
                <label for="">Driver License </label>
                <input type="file" class="dropify user_image" id="client_driver_license" data-default-file="" />
  
              </div>
  
              <div class="form-group-section ">
                <label class="form-section-label" for="">Status</label>
                
                <label for="">Role</label>
    
                <div class="vehicle-stastus-form">
                  <div class="vehicle-stastus-box"> Client <i class="fa-solid fa-user"></i></div>
                  <div class="vehicle-stastus-box"> Admin <i class="fa-solid fa-user-astronaut"></i></div>
                </div>
                
              </div>
             
              <div class="form-group-section borderless">
                <label for="">Ban</label>
    
                <div class="vehicle-stastus-form">
                  <div class="vehicle-stastus-box"> Unban <i class="fa-regular fa-circle"></i></div>
                  <div class="vehicle-stastus-box"> Ban <i class="fa-solid fa-ban"></i></div>
                </div>
                
              </div>

         

          </div>

        </div>

    
          <div class="form-modal-footer">
            <button class="btn-send-modal" id="next-1"> Save </button>
          </div>
      </form> 

        </section> -->

    </main>

    <script>

const REF_ID = '<?php echo $data_id ?>';

$(".dropify").change((e)=>{
  console.log('d')
  uploadImage(REF_ID,e.target.dataset.type)
})

$(".url-input-image").change((e)=>{
  console.log('d')
  uploadImageURL(e,REF_ID,e.target.dataset.type,e.target.value)
  
})

$("#btn_save").click((e)=>{
  e.preventDefault()
    sendData('save')
})

$("#btn_update").click((e)=>{
  e.preventDefault()
    sendData('update',REF_ID)
})

$(`.btn-delete-url`).click((e)=>{
    e.preventDefault()
    let image_section = e.target.dataset.type
    let image_id = e.target.dataset.id

    $(`.url-input-image[data-type='${image_section}']`).val('')
    $(`#image_preview_${image_section}`).removeClass("d-block")
    $(`input[data-type='${image_section}']`).parent().removeClass("d-none")
    $(`input[data-type='${image_section}'][type='file']`).addClass("dropify")


      $.ajax({
        url: '<?php echo base_url("/Admin/deleteData")?>',
        type: 'POST',
        data: {
                'table' : 'tbl_client_image',
                'id':image_id
              },
        success: function(response) {
          if(response == 1){
               $.toast({
                           heading: "Delete Status Successfully",
                           text:"",
                           showHideTransition : "fade",
                           hideAfter : 2000,
                           icon:"success"

                       })
                    }
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

    $(".dropify").change((e)=>{
        uploadImage(REF_ID,e.target.dataset.type)
    })
})


$(".image_data_status").click((e)=>{
  let value = e.target.dataset.value
  let section = e.target.dataset.image_section
  let image_id = e.target.dataset.id


  $(`.image_data_status[data-image_section='${section}']`).each((i,item)=>{
        item.classList.remove('status-selected')
    })

    updateStatus('tbl_client_image','id',image_id,'data_status',value)
    e.target.classList.add('status-selected')

  })

$(".data_status,.role").click((e)=>{
  let value = e.target.dataset.value

  if(e.target.className.includes('data_status')){
    $('.data_status').each((i,item)=>{
        item.classList.remove('status-selected')
      })
      updateStatus('tbl_client','id',REF_ID,'data_status',value)
  }

  if(e.target.className.includes('role')){
    $('.role').each((i,item)=>{
        item.classList.remove('status-selected')
        
        
      })
      updateStatus('tbl_client','id',REF_ID,'role',value)
      
  }


  
  

    e.target.classList.add('status-selected')
})

function updateStatus(table ,id_name, ref_id , section , value){

    let datasend = {
      'table' : table,
    }

    datasend[section] = value;
    datasend[id_name] = ref_id;


    
    $.ajax({
        url: '<?php echo base_url("/Admin/updateData")?>',
        type: 'POST',
        data: JSON.stringify(datasend),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(response) {
          if(response == 1){
               $.toast({

                           heading: "Update Status Successfully",

                           text:"",

                           showHideTransition : "fade",

                           hideAfter : 2000,

                           icon:"success"

                       })
          }
          
        }
    });
    

 
}

$(`.dropify`).on('dropify.beforeClear', function(e, element){

    let image_id = e.target.dataset.id
    let image_section = e.target.dataset.type


    $(`.dropify[data-type='${image_section}']`).on('dropify.afterClear', function(event, element){

      $.ajax({
        url: '<?php echo base_url("/Admin/deleteData")?>',
        type: 'POST',
        data: {
                'table' : 'tbl_client_image',
                'id':image_id
              },
        success: function(response) {
          if(response == 1){
            $(`.url-input-image[data-type='${image_section}']`).parent().removeClass("d-none")

               $.toast({

                           heading: "Delete Status Successfully",

                           text:"",

                           showHideTransition : "fade",

                           hideAfter : 2000,

                           icon:"success"

                       })
            }
          }
      });
    }); 

});
  
/* */



function uploadImageURL(e,ref_id,image_section,value){


  if(value != ""){
    $(`#image_preview_${image_section}`).addClass('d-block')
    $(`.dropify[data-type='${image_section}']`).parent().addClass('d-none')
    
    $(`#image_preview_${image_section}`).attr('src',value)

    let datasend = {
      'table' : 'tbl_/*  */_image',
      'vehicle_id': ref_id,
      'image_section': image_section,
      'image_type': '2',
      'image_url': value,
    }
    
    $.ajax({
        url: '<?php echo base_url("/Admin/addData")?>',
        type: 'POST',
        data: JSON.stringify(datasend),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(response) {
          if(response > 0){
            $(`.btn-delete-url[data-type='${image_section}']`).attr('data-id',response)

               $.toast({
                           heading: "Upload Image URL Successfully",
                           text:"",
                           showHideTransition : "fade",
                           hideAfter : 2000,
                           icon:"success"
                       })
                    }
                }
           });
    

  }else{
    $(`#image_preview_${image_section}`).removeClass("d-block")
    $(`input[data-type='${image_section}']`).removeClass("d-none")
    $(`input[data-type='${image_section}'][type='file']`).addClass("dropify")

  let image_id = e.target.dataset.id

      $.ajax({
        url: '<?php echo base_url("/Admin/deleteData")?>',
        type: 'POST',
        data: {
                'table' : 'tbl_/*  */_image',
                'id':image_id
              },
        success: function(response) {
          if(response == 1){
               $.toast({

                           heading: "Delete Status Successfully",

                           text:"",

                           showHideTransition : "fade",

                           hideAfter : 2000,

                           icon:"success"

                       })
            }
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

    $(".dropify").change((e)=>{
  uploadImage(REF_ID,e.target.dataset.type)
})

  }
}

function checkSlugURL(){

  if($("#slug_url").val() != SLUG_URL){

  return $.post('<?php echo base_url('Admin/checkDuplicateSlugURL') ?>',{

                    slugURL: $("#slug_url").val(),

                    table : TABLE

                }).done((data)=>{

                if(data == 0){

                return true

            }

                if(data > 0){

                return false

                }

          })

    }else{

        return false

    }

}

function checkIsNull(){

  let nullList = [];
  $(".imp").each((i,item)=>{

    if(item.value == ''){

        item.classList.add("nullForm")

        nullList.push(item.dataset.name);

    }

    item.addEventListener("change",(e)=>{

        e.target.classList.remove("nullForm")

    })

})

  if(f.length == 0){

        nullList.push("Image: Product Image");

    }

  
    if(nullList.length > 0){

    $.toast({
            heading: `โปรดกรอกข้อมูลให้ครบ`,
            text:` ${nullList.join('<br>')}`,
            showHideTransition : "fade",
            hideAfter : 3000,
            icon : 'warning'
        }) 

        return true;
    }else{
        return false;

    }
}

/* $("#slug_url").on('change',async (e)=>{

  if(testSlug(e.target.value) && await checkSlugURL() == 0 && $("#slug_url").val() != '' ){       
        $.toast({
            heading: "You can use this slug URL",
            showHideTransition : "fade",
            hideAfter : 3000,
            icon : 'success'
        }) 

    }else{
        $.toast({
            heading: "You can't use this slug URL",
            showHideTransition : "fade",
            hideAfter : 3000,
            icon : 'warning'
        })
      }
}) */


async function preUpload(){
    if(checkIsNull()){

        return false

  }

   else if(testSlug($("#slug_url").val()) && await checkSlugURL() == 0 ){       
        $.toast({

            heading: "You can use this slug URL",

            showHideTransition : "fade",

            hideAfter : 3000,

            icon : 'success'

        })

        return true

    }else{

        $.toast({
            heading: "You can't use this slug URL",
            showHideTransition : "fade",
            hideAfter : 3000,
            icon : 'warning'
        })
        return false
    }

    if(f.length == 0 ){
        $.toast({

            showHideTransition : "fade",

            hideAfter : 3000,

            icon : 'warning',

            heading: "No Image to upload",

         })

        return false;

      }

}

function uploadFile(ref_id){

            let fileData = new FormData($("#fileData")[0]);
            fileData.append("section","product")
            fileData.append('file_type',$("#file_type").val())
            fileData.append('ref_id',ref_id)

            return $.ajax({
            type: 'POST',
            url: '<?php echo base_url('Admin/uploadFile') ?>',
            processData: false,
            contentType: false,
            data: fileData,
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
                        $(".progress-bar").css("width", +percent + "%");

                        $('#progress_bar_id' + " .status").text(percent + "%");

                        $("#file_load_progress").text(`File     : ${percent}%`)

                    }, true);

                }

                return xhr;
            },
            success: function(data, status) {

                data = JSON.parse(data)
                console.log(data);    
                $("#file_load_progress").html(`<div style="color:var(--green6)">File     : 100% <i class="fas fa-check"></i> </div> `)
                $('#file_load_progress').attr('data-success',true)
                $('#currentID').val(data);
                $('#oldImg').val(data);
                $(".progress-bar").css("width", +0 + "%");
                $(".progress").hide();
                $('#ImagesFiles').val('');
                $('#cFiles').val('');
                if (data) {
                     $.toast({
                           heading: "Upload File Successfully",
                           text:"",
                           showHideTransition : "fade",
                           hideAfter : 15000,

                           icon:"success"

                       })

                

                    console.log("UPLOAD FILE SUCCESS")

                  

                  /*   setTimeout(function() {

                        window.location.href = "<?php echo base_url('Control/Product_add/') ?>" + data;

                    }, 2000); */

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

function uploadImage(ref_id,image_section){

          let imageData = new FormData();

          imageData.append('type','client')
          imageData.append('ref_id',ref_id)
          imageData.append('image_section',image_section); 
          imageData.append('image_type','1'); 
          imageData.append('upload_image', $(`.dropify[data-type='${image_section}']`)[0].files[0]); 


           return $.ajax({

            type: 'POST',

            url: '<?php echo base_url('Admin/uploadImage') ?>',

            processData: false,

            contentType: false,

            data: imageData,

                xhr: function() {

                //upload Progress

                var xhr = $.ajaxSettings.xhr();

                if (xhr.upload) {
                  $(`#progress-${image_section}`).parent().show()


                    xhr.upload.addEventListener('progress', function(event) {

                        var percent = 0;

                        var position = event.loaded || event.position;

                        var total = event.total;

                        

                        if (event.lengthComputable) {

                            percent = Math.ceil(position / total * 100);

                        }

                        //update progressbar

                        $(`#progress-${image_section}`).css("width", +percent + "%");


                    }, true);

                }

                return xhr;

            },

            success: function(data, status) {

                data = JSON.parse(data)

                console.log(data);

                $(`.url-input-image[data-type='${image_section}']`).parent().addClass("d-none")

                $(`.dropify[data-type='${image_section}']`).prop('disabled',true)
                $(`.dropify[data-type='${image_section}']`).attr('data-id',data)

                setTimeout(() => {

                  $(`#lbl-${image_section}`).append(`<i class="fa-solid fa-circle-check"></i>`)
                  $(`#lbl-${image_section}`).addClass(`status-success`)
                  $(`#progress-${image_section}`).parent().hide()

                  $(`.dropify[data-type='${image_section}']`).on('dropify.beforeClear', function(event, element){
                      return true
                  });

                  $(`.dropify[data-type='${image_section}']`).on('dropify.afterClear', function(event, element){

                    $(`.dropify[data-type='${image_section}']`).prop('disabled',false)


                      $(`#progress-${image_section}`).css("width", 0 + "%");
                      console.log(image_section)
                      $(`#lbl-${image_section} svg`).remove()
                      $(`#lbl-${image_section}`).removeClass(`status-success`)
                      
                      setTimeout(() => {
                          $(`#progress-${image_section}`).parent().hide()
                      }, 500);

                  });

                }, 1000);

                if (data) {

                    console.log("UPLOAD IMAGE SUCCESS")

                    $.toast({

                           heading: "Upload Image Successfully",

                           text:"",

                           showHideTransition : "fade",

                           hideAfter : 2000,

                           icon:"success"

                       })

                } else {

                    swal({

                        title: 'Can not be saved!',

                        //text: "You won't be able to revert this!",

                        type: 'warning',

                        confirmButtonClass: 'btn btn-confirm mt-2'

                    });

                }

            }

            })

}


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

        let formData = new FormData($("#form_detail_modal")[0]);

        formData.append('table','tbl_client')
        formData.append('id',<?php echo $data_id ?>)
        formData.append('role',$(".role.status-selected")[0].dataset.value)
        formData.append('data_status',$(".data_status.status-selected")[0].dataset.value)


        let dataSend = {};
        formData.forEach(function(value, key){
          dataSend[key] = value;
        });

        console.log(dataSend)
  

        $.ajax({

            type: 'POST',
            url: type == 'save' ? '<?php echo base_url('Admin/addData') ?>' : '<?php echo base_url('Admin/updateData') ?>',
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
                        location.href =  '<?php echo base_url('/Admin/client/')?>'+data 
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

    </script>
   <script>
 
 $.toast({
  icon:'success',
  heading: "Client Data : "+REF_ID,
  hideAfter : 1500,
})

window.onbeforeunload  = function(event) {
  $(".section-modal#car-detail").removeClass('slide-in-from-right')

};

 $(".section-modal#car-detail").addClass('slide-in-from-right')

    $(".car-data-row").click((e)=>{
      $(".section-modal#car-detail").addClass('slide-in-from-right')
      $(".content").addClass('slide-out-to-left')
      $("aside").css("opacity",'0%')

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

        setTimeout(() => {
            location.href = '<?php echo base_url('/admin')?>'
        }, 500);

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