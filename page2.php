<!DOCTYPE html>
<html>
<head>
<style>
.h2 {
  font-family: "Gill Sans", Times, serif;
}
body {
  background: url("https://www.nysenate.gov/sites/default/files/styles/760x377/public/article/main-image/blood_donation.png?itok=v4zfH4sz&timestamp=1546612523") no-repeat;
  /* Keep the inherited background full size. */
  background-attachment: fixed; 
  background-size: cover;
  display: grid;
  align-items: center;
  justify-content: center;
  height: 25vh;
}

.container {
  width: 50rem;
  height: 22rem;
  box-shadow: 0 0 2rem 0 rgba(0, 0, 0, .2); 
  border-radius: 10px;
  position: relative;
  z-index: 1;
  background: inherit;
  overflow: hidden;
}

.container:before {
  content: "";
  position: absolute;
  background: inherit;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
  filter: blur(10px);
  margin: -20px;
}
.button {
  background-color: #FB8484;
  border-radius: 8px;
  border: white;
  color: black;
  padding: 12px 100px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.5s;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 1s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 1s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}  
.button7 {
  box-shadow: 0 22px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button5:hover{
   width: 100%;
   border-radius: 8px;
   background-color: #FFFFFF; /black/
   box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button1:hover{
   width: 50%;
   border-radius: 8px;
   background-color: #008CBA;/blue/
   box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2:hover{
   width: 50%;
   border-radius: 8px;
   background-color: #F179EA; /red/
   box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3:hover{
   width: 75%;
   border-radius: 8px;
   background-color: #4CAF50; /green/
   box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button4:hover {
    width: 60%;
    border-radius: 8px;
    background-color: #FFC100; /yellow/ 
    box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
}
</style>
</head>
<body>
<center><button class="button button5" ><span>BLOOD BANK MANAGEMENT</span></button><br></center>
<h2><center><button class="button button7"><span>GIVE BLOOD and SAVE LIFE!!</center></span><br></button>
<div class="container">
<center>
<button class="button button1"><span><a href="FORM_RECEIVER.php">Receiver </span></button><br><br>
<button class="button button2"><span><a href="FORM_DONOR.php">DONOR</span></a></button><br><br>
<button class="button button3"><span><a href="FORM_HOSPITAL.php">Hospital Resgistration</a></button></span><br><br>
<button class="button button4"><span><a href="FORM_NGO.php"> NGO Registration</span></a></button><br><br>
</center>
</div>
</center>
</body>
</html>
