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

</style>
<header >
    <div class='header-logo'></div>
    <ul class='header-content'>
        <li>
            <a href="/">Home</a>
        </li>   
        <li>
            <a href="/Cars">Cars</a>
        </li>
        <li>
            <a href="/Service">Service</a>

        </li>
        <li>
            <a href="/Contact">Contact</a>

        </li>
    </ul>
    <div class='header-panel'></div>

</header>