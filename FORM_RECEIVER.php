<!DOCTYPE html>
<html>
<head>
<style>
@import url("https://fonts.googleapis.com/css?family=Spartan&display=swap");
* {
  margin: 0;
  padding: 0;
}

body {
  background: url("https://www.todayshospitalist.com/wp-content/uploads/2009/08/blood-transfusion.jpg") center center no-repeat;
  background-size: cover;
  width: 100vw;
  height: 165vh;
  display: grid;
  align-items: center;
  justify-items: center;
  font-size: 55pt;
  font-family: "Spartan";
  color: #2A293E;
}
label, input, textarea {
  display: block;
  width: 100%;
  font-size: 12pt;
  line-height: 24pt;
  font-family: "Spartan";
}
.contact-us {
  background: #f8f4e5;
  padding:100px 100px;
  border-top: 10px solid #f45702;
  box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


input {
  margin-bottom: 30pt;
}

h2 {
  font-weight: normal;
  font-size: 30pt;
  line-height: 24pt;
  font-style: italic;
  margin: 0 0 0.5em 0;
}

span {
  font-size: 8pt;
}

em {
  color: #f45702;
  font-weight: bold;
}

input, textarea {
  border: none;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 2px;
  background: #f8f4e5;
  padding-left: 5px;
  outline: none;
}

input:focus, textarea:focus {
  border: 1px solid #6bd4b1;
}

textarea {
  resize: none;
}

button {
  display: block;
  float: right;
  line-height: 30pt;
  padding: 0 20px;
  border: none;
  background: #f45702;
  color: white;
  letter-spacing: 2px;
  transition: 0.2s all ease-in-out;
  border-bottom: 2px solid transparent;
  outline: none;
}
button:hover {
  background: inherit;
  color: #f45702;
  border-bottom: 2px solid #f45702;n
}

::selection {
  background: #ffc7b8;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
  border: 1px solid #6bd4b1;
  -webkit-text-fill-color: #2A293E;
  -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
  transition: background-color 5000s ease-in-out 0s;
}
.button {
  background-color: #FFFFFF;
  border-radius: 15px;
  border: white;
  color: black;
  padding: 12px 100px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 75px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.5s;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.8s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1:hover{
   width: 25%;
   border-radius: 8px;
   background-color: white;
   background-image: linear-gradient(#159957, #155799);
   box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button5:hover{
   width: 100%;
   border-radius: 8px;
   background-color: white;
   background-image: linear-gradient(#D66D75, #E29587);
   box-shadow: 0 22px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<button class="button button1"><span><h2>RECIEVER</h2></span></button>
<div class="contact-us">
     <form action="RecieverConnection.php" method="POST">
    <label for="name">NAME<em>&#x2a;</em></label><input id="name" name="name"  type="text" required/>
    <label for="phone">PHONE NUMBER<em>&#x2a;</em></label><input id="phone" name="phone"  type="number" required />
    <label for="pname">PATIENT NAME<em>&#x2a;</em></label><input id="pname" name="pname" type="text" required />
    <label for="hname">HOSPITAL NAME<em>&#x2a;</em></label><input id="hname" name="hname" type="text" required />
    <label for="address">HOSPITAL ADDRESS<em>&#x2a;</em></label><input id="address" name="address"  type="text" rows="4" required/>
    <label for="bloodGroup">BLOOD GROUP<em>&#x2a;</em></label><input id="bloodGroup" name="bloodGroup"  type="text" required />
    <label for="qblood">QUANTITY OF BLOOD<em>&#x2a;</em></label><input id="qblood" name="qblood"  type="text" required />
</textarea>
  <button id="customerOrder" value ="Submit">SUBMIT</button>
  </form>
</div>

