<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Merienda|Open+Sans" rel="stylesheet">


    <!-- JS -->
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div class="logo"></div>
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
      <section>
        <div class="desc">
          <p>When it comes to web hosting in Australia we know that you have numerous choices. An none of them stack up to us! Even when they say some Australian based web hosting choices are better than us. If you want outstanding performance with your website hosting or any hosting and the kind of support that makes our customers grin from ear to ear like the devil has awoken inside them to destroy their computer, you want Eclipse Hosting. We boast a range of affordable, all Aussie hosting options for personal, business and professional hosting use. Whatever you’re after — whether it’s economy hosting, your evil empire or highly questionable websites that other hosting companies shy away from. we can help you. Choose the Australian web hosting company that cares for its customers.  </p>
        </div>
      </section>

      <section class="info-grid">
        <div class="box-grid">
          <div class="grid-display">
            <h1 id="green"> 99.9% Uptime </h1>
            <p> Our times aren’t hyperbole we definitely have our servers perfect with these times* </p>
          </div>
          <div class="grid-display">
            <h1 id="blue"> Perfect firewalls </h1>
            <p>Nothing can get through! NOTHING!  </p>
          </div>
          <div class="grid-display">
            <h1 id="red"> 24/7 Assistants </h1>
            <p> Our Assistants can assist you in your vulnerable time of need*</p>
          </div>
          <div class="grid-display">
            <h1 id="green"> Aussie Servers </h1>
            <p>We are 100% Aussie nothing more nothing less….* </p>
            </div>
          <div class="grid-display">
            <h1 id="blue"> Money Back </h1>
              <p>Don’t like us? 39-day money back guarantee* </p>
          </div>
          <div class="grid-display">
            <h1 id="red"> Instant start   </h1>
            <p> As soon as we have your money you get the goods……*</p>
          </div>
        </div>
      </section>


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
