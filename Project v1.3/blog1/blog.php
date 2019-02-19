<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="glow.css">
<style>
* {
  box-sizing: border-box;
}
 input[type = "button"]{
  top: 50%;
  left: 50%;
  width: 100px auto;
  height: 30px auto;
  text-align: center;
  color: #000;
  font-size: 16px;
  text-transform: uppercase;
  text-decoration: none;
  font-family: sans-serif;
  font-weight: bold;
  border: 5px;
  border-sizing: border-box;
  background: linear-gradient(90deg, #03a9f4,#f441a5, #ffeb3b,#03a9f4);
  border-radius: 12px;
  background-size: 400%;
}

input[type = "button"]:hover{
  {
    cursor: pointer;
    animation: animate 8s linear infinite;
  }
  @keyframes animate
  {
      0%
      {
          background-position:0%;
      }
      100%
      {
          background-position:400%;
      }
  }
}

input[type = "button"]:before{
  content: '';
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  z-index: -1;
  background: linear-gradient(90deg, #03a9f4,#f441a5, #ffeb3b,#03a9f4);
  background-size: 400%;
  border-radius: 30px;
  opacity: 0;
  transition: 0.5s;
  filter: blur(40px);
}
input[type = "button"]:hover:before{
  filter: blur(200px);
  opacity: 1;
  animation: animate 8s linear infinite;
}



/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #000;
}

/* Header/Blog Title */
.header {
  text-align: center;
  font-size: 24px;
  color: black;
  font-weight: bold;
  text-transform: uppercase;
  font-family: sans-serif;
  background: linear-gradient(90deg, #03a9f4,#f441a5, #ffeb3b,#03a9f4);
  background-size: 400%;
  border-radius: 12px;
  animation: animate 8s linear infinite;
  transition: 0.25s;
}
h2{
  text-align: center;
  font-size: 24px;
  color: black;
  font-weight: bold;
  text-transform: uppercase;
  font-family: sans-serif;
  background: linear-gradient(90deg, #03a9f4,#f441a5, #ffeb3b,#03a9f4);
  background-size: 400%;
  border-radius: 12px;
  animation: animate 8s linear infinite;
  transition: 0.25s;
}
h5{
  text-align: left;
  font-size: 12px;
  color: black;
  font-weight: bold;
  text-transform: uppercase;
  font-family: sans-serif;
  background: linear-gradient(90deg, #03a9f4,#f441a5, #ffeb3b,#03a9f4);
  background-size: 200%;
  border-radius: 12px;
  animation: animate 8s linear infinite;
  transition: 0.25s;
  width: 300px;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 40%;
  padding: 10px;
}

/* Add a card effect for articles */
.card {
   background: linear-gradient(90deg,#ffeb3b,#03a9f4);
   background-size: 100%;
   padding: 20px;
   margin-top: 20px;
   border-radius: 12px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
  a{
    text-decoration: none;
    color: black;
  }
}
</style>
</head>
<form method="post">
<body>

<div class="header">
  <h2>Sound of harmony</h2>
  <h2 font-size="16"><?php session_start(); echo 'Welcome, ' . $_SESSION['username']; ?> </h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Demi Lee Moore</h2>
      <h5>Des 24 2018</h5>
      <audio controls>
        <source src="Steve Hofmeyr  Demi Lee Moore_audio.mp3" type="audio/mpeg">
      </audio>
      <div  style="height:200px;"><img src="demi.jpg" alt="Steve en Demi Lee" border="2px"></div>
      <p>Amanda - Steve Hofmeyr and Demi Lee Moore</p>
      <p>Demi Lee Moore was the first winner of the Idols programme "DieKontrak" on Kyknet. This is her performance with Steve of Amanda</p>
      <div class="button">
          <input type="submit" name="button" value="Comment" formaction="../comments.php" >
      </div>
    </div>
    <div class="card">
      <h2>Amira</h2>
      <h5>Des 24 2018</h5>
      <div  style="height:200px;"><img src="amira.jpg" alt="Amira Cd cover" width="300" height="200" border="2px"><video src="Amira - With All my Heart.mp4"  width="400" height="200" border="5px" controls>

      </video> </div>
      <p>Amira - With all my heart</p>
      <p>Amira Willighagen won Hollands got talent in 2013 when she was just 9 years old.
      Her new album was released a few weeks ago by Coleske artists in South Africa.
      She currently lives in Potchefstroom, where she goes to school at Potchefstoom Volskool.
      </p>
      <input type="submit" name="comment2" formaction="../comments.php" value="Comment">
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Check out my other blog:</h3>
      <a href="www.jandrebad.wixsite.com/jndphotography">jndphotography</a>
    </div>
  </div>
</div>
  <br/>
  <input type="submit" name="logout" value="Logout" formaction="../start.php">

</body>
</form>
</html>
