<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Imprint MT Shadow, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 50%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Connection Form</h2>

<form action="Login Connection.php" method="POST">
  <div class="imgcontainer">
   <center> <img src="Front Page.jpg" alt="Avatar" class="avatar">
 </center> </div>
<h1><center> <font style="American Captain">Blood Donation Managment </center></h1>
  <div class="container">
    <label for="uname"><b>Full NAME</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="phone"><b>Phone No.</b></label>
    <input type="text" placeholder="Enter Phone No." name="phone" required>
        
    <button type="submit">Login Connection</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  </form>

</body>
</html>