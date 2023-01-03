<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="/CarRental/assets/css/root.css">
    <link rel="stylesheet" href="/CarRental/assets/plugin/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CarRental/assets/plugin/fontawesome/all.min.css">

    <script src="/CarRental/assets/plugin/bootstrap-5.1.3-dist/js/bootstrap.min.js"> </script>
    <script src="/CarRental/assets/plugin/fontawesome/all.min.js"> </script>
    <script src="/CarRental/assets/plugin/jquery/jquery-3.6.0.min.js"> </script>

</head>
<style>
     
     * {
  margin: 0;
  padding: 0;
  font-family: "Google Sans", Arial, Helvetica, sans-serif;
  box-sizing: border-box;
  transition: 0.5s;

  color: white;

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
    padding: 20px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.banner{
    width: 100%;
    min-height: 50vh;
    background: #505050;
    border-radius: 5px;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 10px;
    
}
.banner-text{
    max-width: 50%;
    padding: 20px;
    font-size: .8rem;
    line-clamp: 3;
}
.banner-text h1{
    font-size: 2rem;
}

.banner-image{
    background: #000;
}
.cartype{
    width: 100%;
    background: #505050;
    border-radius: 10px;
    padding: 20px; 
}
.service{
    width: 100%;
    background: #505050;
    border-radius: 10px;
    padding: 20px;

}
ul{
    margin: 0 !important;
    padding: 0 !important;
}
.service-list{
    height: 100%;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 10px;
}

.service-item{
    background: #363636;
    width: 100px;
    height: 150px;
    min-width: 200px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 1.5rem;
    padding: 10px;
}
.service-item svg{
    width: 100%;
    height: 50%;
}
.service-item span{
    width: 65%;
    height: 50%;
    font-size: 18px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
img{
    width: 100%;
    object-fit: contain;
    background: rgb(255, 255, 255);
}

</style>
<body>
    <main>
        <section class="banner">
            <div class="banner-text"> 
                <h1>Car Rental <i class="fa-solid fa-car-side"></i></h1>
                <h4> 1000+ cars is Ready to Rent </h4>
                <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur enim, sint itaque ut numquam illum beatae voluptates quos perspiciatis molestiae, libero nesciunt iste dicta, labore asperiores maiores. Ipsa, nihil ipsam!     </span>    
            </div>
        </section>

        <section class="cartype">
            <div class="">Car Type</div>
            <div class="row service-list">
                <div class="col-3 service-item ">
                    <i class="fa-solid fa-car-side"></i>
                </div>
                <div class="col-3 service-item ">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
            </div>
        </section>

        <section class="service">
            <div class="">Service</div>
            <div class="row service-list">
                <div class="col-3 service-item ">
                    <i class="fa-solid fa-car-bump"></i>
                    <span>First class insurance 1</span>
                </div>
              
                <div class="col-3 service-item ">
                    <i class="fa-solid fa-gas-pump"></i>
                    <span>Full of fuel</span>
                </div>
                <div class="col-3 service-item ">
                    <i class="fa-solid fa-tire"></i>
                    <span>Change parts every use.</span>

                </div>
                <div class="col-3 service-item ">
                    <i class="fa-solid fa-map"></i>
                    <span>GPS driving.</span>
                </div>
            </div>
        </section>
       


    </main>

</body>
</html>