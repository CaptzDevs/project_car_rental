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
  background-color: rgb(43, 43, 43) ;
}




main{
    width: 100%;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 10px;
    background: rgb(66, 66, 66);
    position: relative;
    padding-top: 60px;
  padding-left: 50px;
  padding-bottom: 50px;
    
  
  }
aside{
    width: 20%;
    min-width: 250px;
    border-radius: 10px;
    padding: 10px;
    color: white;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    gap: 10px;
}
.search-section{
  width: 100%;
  background: rgb(41, 41, 41);
  border-radius: 10px;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 10px;
}

.search-section label{
  width: 10%;
  text-align: center;
  margin-right: 10px;
}

.search-input{
  width: 90%;
  background: rgb(255, 255, 255);
  border: none;
  outline: none;
  border-radius: 5px;
  padding-left: 10px;
}

.sort-section{
  width: 100%;
  background: rgb(41, 41, 41);
  padding: 10px;
  border-radius: 10px;
}
.sort-section ul{
    list-style: none;
    margin-top: 15px;
    padding-left: 10px;
    padding-right: 10px;

}
.sort-section li{
  font-size: .9rem;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 15px;
  padding: 10px;

  border-radius: 5px;
  margin-top: 5px;
  cursor: pointer;
}

.sort-section li:hover{
  background: rgb(63, 63, 63);

}


.content{
  width: 80%;
  height: auto;
  background: rgba(43, 43, 43, 0);
  border-radius: 10px;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  flex-wrap: wrap;
  gap: 15px;
  padding: 20px;
  padding-top: 10px;
}

.car-item{
  width: 260px;
  height: 260px;
  border-radius: 10px;
  background: rgb(255, 255, 255);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  overflow: hidden;
  padding: 10px;
  cursor: pointer;
  position: relative;
  
}
.car-item:hover{

  filter: drop-shadow(10px 10px rgba(150, 150, 150, 0.242));
}
.car-item:hover .car-item-image img{
    width: 110%;
}


.car-item svg{
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 3;
  color: #434343 !important;

}
.car-item-image{
  width: 100%;
  height: 80%;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
}

.car-item-image img{
  width: 100%;
  object-fit: contain;
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
  user-select: none;
  font-size: .7rem;
  padding: 10px;
  text-align: center;

color: white;
}



footer{
  width: 100%;
  height: 150px;
  background: rgba(44, 44, 44, 0.177);
  display: flex;
  align-items: center;
  justify-content: center;
color: white;
  
}
a{
    text-decoration: none;
}

</style>
<body>
<?php include('header.php') ?>

    <main>
  
        <aside>
          <div class="search-section">
              <label for="search"> <i class="fa-regular fa-magnifying-glass"></i> </label>
              <input class="search-input" type="text" id="search" placeholder="search" >
          </div>
            <div class="sort-section">
              <div> Type   </div>
            <ul>
                <li><i class="fa-regular fa-square"></i> <i class="fa-solid fa-car-side"></i> Car </li>
                <li><i class="fa-regular fa-square"></i> <i class="fa-solid fa-motorcycle"></i> Motorcycle </li>
            </ul>
            </div>

       

          <div class="sort-section">
            <div> Brand </div>
            <ul>
                <?php foreach($vehicle_brand as $value){ ?>
                <li><i class="fa-regular fa-square"></i> <?php echo $value['brand'] ?> </li>
           <?php } ?>

            </ul>
          </div>

          <div class="sort-section">
            <div> Years </div>
            <ul>
                <?php 
                $c = 0;
                for($i = 2024  ; $i >= 1996  ; $i--){
                    $c += 1;
                    $max = $i+4;
                    if($c == 5){
                        $c = 0;
                    ?>
                             <li data-min="<?php echo $i ?>" data-max="<?php echo $max ?>"><i class="fa-regular fa-square" ></i> <?php echo $i."-".$max ?> </li>
                <?php }} ?>
            </ul>
          </div>

          <div class="sort-section">
            <div> Seat</div>
            <ul>
                <li><i class="fa-regular fa-square"></i> 2 </li>
                <li><i class="fa-regular fa-square"></i> 4 </li>
                <li><i class="fa-regular fa-square"></i> 6 </li>

            </ul>
          </div>
          

            
            

        </aside>

        <section class="content" >
            <?php foreach($vehicle_data as $value){ ?>
            <a class="car-item" href="<?php echo base_url('/Control/preview/').$value['id'] ?>"> 
              <?php echo $value['vehicle_type'] == '1' ?  '<i class="fa-solid fa-car-side"></i> ' : '<i class="fa-solid fa-motorcycle"></i>' ?>
              <div class="car-item-image">
                <img src="<?php echo $value['image_type'] == '1'? base_url("/uploads/images/".$value['image_url']) : $value['image_url'] ?>">
              </div>
              <div class="car-item-name">
                <?php echo $value['name'] ?>
              </div> 
            </a>
            <?php } ?>

            


            

          
        </section>
        

    </main>
    <footer>
       All Design By Captz
  </footer>
</body>
</html>