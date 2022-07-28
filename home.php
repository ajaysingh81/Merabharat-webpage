<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>Home</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Josefin Sans", sans-serif;
}

header {
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
    url("../images/taj.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

nav {
  width: 100%;
  height: 15vh;
  background: rgba(0, 0, 0, 0.2);
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-transform: uppercase;
}

nav .logo {
  width: 25%;
  text-align: center;
  /*background: red;*/
}

nav .menu {
  width: 40%;
  display: flex;
  justify-content: space-around;
}

nav .menu a {
  width: 25%;
  text-decoration: none;
  color: white;
  font-weight: bold;
}

nav .menu a:first-child {
  color: #00b894;
}

main {
  width: 100%;
  height: 85vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
}

section h3 {
  font-size: 35px;
  font-weight: 200;
  letter-spacing: 3px;
  text-shadow: 1px 1px 2px black;
}

section h1 {
  margin: 30px 0 20px 0;
  font-size: 55px;
  font-weight: 700;
  text-shadow: 2px 1px 5px black;
  text-transform: uppercase;
}

section p {
  font-size: 25px;
  word-spacing: 2px;
  margin-bottom: 25px;
  text-shadow: 1px 1px 1px black;
}

section a {
  padding: 12px 30px;
  border-radius: 4px;
  outline: none;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  letter-spacing: 1px;
  transition: all 0.5s ease;
}

section .btnone {
  /*background: #00b894;*/
  background: #fff;
  color: #000;
}

.btnone:hover {
  background: #00b894;
  color: white;
}

section .btntwo {
  background: #00b894;
  color: white;
}

.btntwo:hover {
  background: #fff;
  color: #000;
}

.change_content:after {
  content: "";
  animation: changetext 10s infinite linear;
  color: #00b894;
}

@keyframes changetext {
  0% {
    content: "Jabalpur";
  }
  20% {
    content: "Agra";
  }
  35% {
    content: "Jaipur";
  }
  60% {
    content: "kerala";
  }
  80% {
    content: "delhi";
  }
  100% {
    content: "Mumbai";
  }
}
    </style>
</head>
<body>
<header>
	
    <nav>
        <div class="logo"> <h1 style="font-size: 20px;"> Mera bharat </h1> </div>
        <div class="menu">
            <a href="#" >Home</a>
            <a href="#">gallery</a>
            <a href="#" target="_blank">about</a>
            <a href="#">contact</a>
        </div>
    </nav>
    
        <main>
            <section>
                <h3>Welcome To India</h3>
                <h1>DO COME & VISIT <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
                <p>"India once is not enough"</p>
                <a href="#" class="btnone">learn more</a>
                <a href="login.php" class="btntwo">signup here</a>
            </section>
        </main>
    
    
    </header>
    
</body>
</html>