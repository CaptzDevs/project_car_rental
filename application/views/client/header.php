<style>
    
header{
  width: 100%;
  height: 50px;
  background: rgb(28, 28, 28);
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  z-index: 5;

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

.header-panel{
  width: 20%;
  height: 0px;
  position: relative;
  z-index: 5;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  color: white;
  padding-right: 40px;

}
.header-panel-dropdown{
  width: 100%;
  height: auto;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  flex-direction: column;
  top: 30px;
  overflow: hidden;
  border-radius: 10px;
  background: rgb(44, 44, 44);
  transform: translate(0px,50px);
  opacity: 0%;
  pointer-events: none;

}


.header-panel-icon{
  padding: 10px;
  font-size: .8rem;
  cursor: pointer;
}
.header-panel-icon svg{
  pointer-events: none;

}
.header-dropdown-item{
  width: 100%;
  padding: 20px;
  cursor: pointer;
}
.show-dropdown{
  opacity: 100%;
  transform: translate(0px,0px);
  pointer-events: all;
  
}
.header-dropdown-item:hover{
background: #000;
}

</style>
<header >
    <div class='header-logo'></div>
    <ul class='header-content'>
        <li>
            <a href="/">Home</a>
        </li>   
        <li>
            <a href="<?php echo base_url("/Control/Category/")?>">Cars</a>
        </li>
        <li>
            <a href="/Service">Service</a>

        </li>
        <li>
            <a href="/Contact">Contact</a>

        </li>
    </ul>
    <div class='header-panel'>
          <?php if( isset( $_SESSION['id'])){ ?>
            <div class="header-panel-icon" id="user-profile"> <?php echo  $_SESSION['username'] ?> <i class="fa-solid fa-user"></i></div>
            <div class="header-panel-dropdown">
              <a href="<?php echo base_url("/Client/detail/").$_SESSION['id'] ?>" class="header-dropdown-item">Profile</a>
              <a href="<?php echo base_url("/Client/rental/").$_SESSION['id'] ?>" class="header-dropdown-item">Rental Status</a>
              <a href="<?php echo base_url("/Control/Logout") ?>" class="header-dropdown-item">Logout</a>
            </div>
          <?php  }else{ ?>
            <a class="header-panel-icon" href="<?php echo base_url("/Control/Login") ?>" ><i class="fa-solid fa-right-to-bracket"></i></a>
          <?php } ?>
    </div>

</header>

<script>
  let dropdown_arr = ['header-dropdown-item','header-panel-icon']
  $(window).click((e)=>{
    if(!dropdown_arr.includes(e.target.className)){
      $(".header-panel-dropdown").removeClass('show-dropdown')
    }
  })
  $("#user-profile").click((e)=>{
    $(".header-panel-dropdown").toggleClass('show-dropdown')
  })
</script>