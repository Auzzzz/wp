<?php
include_once('tools.php');

topModule('Name');
?>


    <section class="products">
        <section class="header">
            <div class="wrap">
                <h1>Eclipse Servers</h1>
                <p>Eclipse Servers We pride our selves on amazingly Poor Quality Servers</p>
            </div>
        </section>
    </section>

    <section class="list">

        <div class="rant">
            <p>This package boosts massive server specs for half the price of what our competition has, the massive
                server overhead allows you to grow and not have the disadvantage of having other people’s servers affect
                your raw webhosting performance </p>
            <p>All of our hosting packages also include solid state drives, which help ensure your site loads up quickly
                and is very stable. If you choose one package and find that you need something larger, just let us know.
                We can upgrade your hosting any time you want, without any site outages. You can also get in touch with
                our sales team and they will help you to determine what is right for you </p>

        </div>

        <?php


//preShow($pumps);

    foreach ($pumps as $key => $value) {?>
      <table>
          <tbody>
          <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value['img']; ?></td>
              <td><?php echo $value['title']; ?></td>
              <td><?php echo $value['desc']; ?></td>
              <td><?php echo "$".$value['price']; ?></td>

              <td>
                <form action='<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $key?>' method='post' enctype='multipart/form-data'> <input type="submit" value="submit" onclick="document.getElementById('form').style.display = 'block' ;"></form>
              </td>
              <?php }?>
          </tr>
          </tbody>
      </table>
      <?php

      if (isset($_GET['id'])) {
        echo $_GET['id'];

        $id = $_GET['id'];
        ?>

        <div class="form">
            <h3> Order Now! </h3>
            <form id='order' method='post' target='' onclick="val()" action='cart.php'>
                <p id='error'></p>
                <div class="value">
                    <label> How many Servers do you need?</label>
                    <input type="hidden" id='id' name="id" value="<?php echo $id;?>"/>
                    <button type="button" onclick="add();">+</button>
                    <input type="number" id='qty' name="qty" value="1" min="1" />
                    <button type="button" onclick="neg();">-</button>
                </div>
                <br />
                <div class="option">
                    <label> How many Servers do you need?</label>
                    <select name="option">
                        <option value="Wave your Rights">Wave your rights</option>
                        <option value="dedi-ip">Get a dedicated ip address*</option>
                        <option value="phone">Get a direct number to not go through our system</option>
                        <option value="audi">Win a CAR!**</option>
                    </select>
                    <br/>
                    <button form="order" class="submit" id="add" name="add"> Order Now </button>
                </div>
        <?php
} else {
  //dipslay nothing
}

?>
    </section>
</main>

<?php
bottomModule();
?>
