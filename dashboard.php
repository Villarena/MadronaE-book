<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<header>
	
<nav>
<img src="img/ian1.png"> 
	<div class="logo"><h1 style="font-size: 30px; left:160px;top:30px; position:absolute">EDUC|</h1> </div>
	<div class="menu">
		<a href="dashboard.php">Home</a>
		<a href="https://bicol-u.edu.ph/" target="_blank">about</a>
		<a href="logout.php">logout</a>
	</div>
</nav>

	<main>
		<section>
			<h3>Welcome Students</h3>
			<h1>DO COME & VISIT <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
			<p>"Stay Alive"</p>
			<a href="websitelesson.php" class="btntwo">Book</a>
		</section>
	</main>


</header>
</body>
</html>
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
    url("img/bg-bu.png");
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
img {
  width: 10%;
  height:200%;

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
    content: "Antonette";
  }
  20% {
    content: "Julianne";
  }
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
@media (max-width: 767px) {
            nav {
               height: auto;
               flex-direction: column;
               align-items: flex-start;
            }

            nav .logo {
               width: 100%;
               text-align: left;
               margin-bottom: 10px;
            }

            nav img {
               width: 20%;
               height: auto;
               position: relative;
               left: 0;
               transform: none;
            }

            nav .menu {
               width: 100%;
               display: flex;
               justify-content: space-around;
               margin-bottom: 10px;
            }

            .container {
               width: 90%;
               margin: 50px auto;
               padding: 20px;
            }
         }
</style>