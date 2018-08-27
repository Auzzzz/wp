<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">

    <!-- JS -->
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div class="logo"></div>
      <div class ="smlogo"></div>
    </header>

    <nav id="home">
      <div class='menu'>
        <div class='nav'> Home</div>
        <div class='nav'>Login</div>
        <div class='nav'>Products</div>
        <div class="nav">Special</div>
      </div>
    </nav>

    <main id="home">
      <section class="info-grid">
        <div class="box-grid">
          <div class="grid-display">
            <h1> Why us? </h1>
            <h3> Fortune Hosting is the best all round server hosting provider within Australia. With 15 years’ experience the hosting world along with over 500 happy customers you know you’re in good hands. Along with our top of the range Pentium © servers we can host anything and everything that you require from a simple email server to a mega file system </h3>
          </div>
          <div class="grid-display">
            <h3> test </h3>
          </div>
          <div class="grid-display">
            <h3> test </h3>
          </div>
        </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
