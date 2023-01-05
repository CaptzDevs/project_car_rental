       <style>
        
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
    opacity: 0%;
    overflow: hidden;
    
  }
  .menu-body{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column  ;
    gap: 10px;
    position: relative;
    overflow: auto;
  }
  
  .header-menu{
    width: 100%;
    height: 90px;
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
    text-decoration: none;

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
       </style> 
        <aside>
          <div class="header-menu">
            Car Rental 

          </div>
          <div class="menu-body">
         <a href="<?php echo base_url('/Control/category') ?>" class="menu-item"> <i class="fa-solid fa-house"></i> Client Side </a>
         <a href="<?php echo base_url('/Admin') ?>" class="menu-item"> <i class="fa-solid fa-chart-line"></i> Dashboard </a>
         <a href="<?php echo base_url('/Admin/vehicle') ?>" class="menu-item"> <i class="fa-solid fa-car-side"></i> Vehicle </a>
         <a href="<?php echo base_url('/Admin/Client') ?>" class="menu-item"> <i class="fa-solid fa-users"></i>  Client </a>
         <a href="<?php echo base_url('/Admin/Rent') ?>" class="menu-item disabled"> <i class="fa-duotone fa-file-check"></i> Rent Status </a>
         <a href="<?php echo base_url('/Admin/Fix') ?>" class="menu-item disabled"> <i class="fa-solid fa-wrench"></i> Fix </a>
         <a href="<?php echo base_url('/Admin/Privilege') ?>" class="menu-item disabled"> <i class="fa-solid fa-sparkles"></i> Privilege </a>

         <a href="<?php echo base_url('/Admin/Privilege') ?>" class="menu-item disabled"> <i class="fa-solid fa-right-from-bracket"></i>Logout </a>


         </div>
          <div class="menu-footer">v 1.0</div>
        </aside>