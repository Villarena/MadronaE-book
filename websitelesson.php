<!DOCTYPE html>
<html>
   <head>
      <title>Dashboard</title>
   </head>
   <header>
<nav>
<img src="img/ian1.png"> 
	<div class="logo"><h1 style="font-size: 30px; left:160px;top:30px; position:fixed;">EDUC|</h1>  </div>
	<div class="menu">
		<a href="dashboard.php">Home</a>
		<a href="https://bicol-u.edu.ph/" target="_blank">about</a>
		<a href="logout.php">logout</a>
	</div>
</nav>
   <main>
      <section>
      <div class="a"><a href="book1.php"><img src="img/pic1 (1).png"></a></div>
      <div class="b"><a href="book2.php"><img src="img/pic2.png"></a></div>
      <div class="c"><a href="book3.php"><img src="img/pic3.png"></a></div>
      </section>
   </main>
   </header>
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
  background-color:white;
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
nav img {
  width: 10%;
  height:200%;
  left: 0px;

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

section .a img {

   position: fixed;
   padding-left: 50px;
  width: 25%;
  height: 60%;
  top: 35%;
}
.a:hover{
opacity: .5;
}
section .b img {

position: fixed;
padding-left: 50px;
left: 34%;
width: 25%;
height: 60%;
top: 35%;
}
.b:hover{
opacity: .5;
}
section .c img {

position: fixed;
padding-left: 50px;
left: 68%;
width: 25%;
height: 60%;
top: 35%;
}
.c:hover{
opacity: .5;
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