<html>
  <head>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/functions.js"></script>
  </head>

  <body>
      <a name="top"></a>
      <div class="header">
          <a href="#top"><img src="../images/L7S-BT.png" class="logo"></a>
          <div class="accmgr">
              <button class="signbuttn" onclick="location='https://youtube.com/watch?v=dQw4w9WgXcQ'">Sign in</button>
              <button class="logbuttn" onclick="location='https://youtube.com/watch?v=fC7oUOUEEi4'">Log in</button>
          </div>
      </div>
      <div class="content">
          <div class="welcome">
              <p class="subtitle">Bienvenido al index de EL7Seven</p>
              <div class="welcimg">
                  <img class="crop" src="../images/earth.jpg">
              </div>
          </div>
          <div class="info">
              <div class="card">
                  <p class="sctext">Hola</p>
                  <div class="cardimg">
                      <img class="smcrop" src="../images/hola.jpg">
                  </div>
              </div>
              <div class="card">
                  <p class="sctext">Pagame</p>
                  <div class="cardimg">
                      <img class="smcrop" src="../images/pagame.jpg">
                  </div>
              </div>
              <div class="card">
                  <p class="sctext">Ahora</p>
                  <div class="cardimg">
                      <img class="smcrop" src="../images/ahora.jpg">
                  </div>
              </div>
          </div>
          <div class="fulario">
              <p class="sctext">Calcule su edad</p>
              <form action="age.php" method="post">
                  <lable for="nombre">Nombre:</lable>
                  <input type="text" id="nombre" name="nombre">
                  <lable for="apellido">Apellido:</lable>
                  <input type="text" id="apellido" name="apellido">
                  <lable for="fecha">Fecha de Nacimiento</lable>
                  <input type="date" id="fecha" name="fecha">
                  <input type="submit" class="submit" value="Enviar">
              </form>
          </div>
          <div class="calcont">
              <button class="arrowl" onclick="resMes()"> < </button>
              <div class="calen">
              </div>
              <button class="arrowr" onclick="sumMes()"> > </button>
          </div>
          <div class="footer">
              Que haces aca abajo? Esta tan bueno?
              <div class="bolud">
                  EsteEsUnTextoUltraLargoConElUnicoPropositoDeUsarElWordWrapPorqueHonestamenteNoSeMeOcurreNada
              </div>
          </div>
      </div>
  </body>
</html>
