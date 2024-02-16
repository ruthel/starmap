<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Starlight Checkout</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lz-string/1.5.0/lz-string.min.js"></script>
  <script src="https://unpkg.com/dexie/dist/dexie.js"></script>
  <link rel="stylesheet" href="assets/css/map.css">
</head>
<body>
<div class="s-container">
  <div class="nav">
    <div id="title-bloc">
      <div style="margin-right: 8px">
        <img src="assets/media/img/logo.png" alt="" style="width: 32px; margin-top: 6px">
      </div>
      <h1 id="title"><a href="index.php">Starlight Map</a></h1>
    </div>
    <div>
      <ul class="menu">
        <li><a href="./editor">Create a star map</a></li>
        <li><a href="./about">About Us</a></li>
        <li><a href="./contact">Contact</a></li>
      </ul>
    </div>
  </div>
  <form action="ecommerce/order" method="post">
    <table style="width: 100%" cellspacing="0">
      <tr>
        <th>PRODUCT</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
        <input type="hidden" value="<?= $map->map_id ?>" name="map_id">
      </tr>

      <tr>
        <td>
          <div style="display: flex;">
            <img src="assets/media/checkout.png" alt="" height="280" id="map">
            <script>

              new Dexie('StarMap').open().then(r => {
                const db = r
                console.log(r)
                db.images.get({'key': "image-thumbnail"}).then(res => {
                  console.log(res)
                })
              });


              document.getElementById('map').src = LZString.decompressFromUTF16(localStorage.getItem("image-thumbnail"))
              document.addEventListener('contextmenu', event => {
                event.preventDefault();
              });
            </script>
            <div style="margin-left: 8px; display: grid; grid-template-rows: repeat(8,1fr); row-gap: 12px">
              <div><strong>Title: </strong><?= $map->map_place ?></div>
              <div><strong>Type: </strong>Poster</div>
              <div><strong>Print Size ($02.00): </strong><?= $map->map_size ?></div>
            </div>
          </div>
        </td>
        <td>
          <div>$02.00</div>
        </td>
        <td>
          <div>$02.00</div>
        </td>
        <td>
          <div>$02.00</div>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <hr>
          <div style="text-align: right">
            <button style="background: #E6E6E6; padding: 8px 16px; border: none; cursor:pointer;" type="button">UPDATE
              CART
            </button>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div style="width: calc(100% - 16px);">
            <!--            <hr>-->
            <div style="padding: 8px 0">&nbsp;</div>
            <!--            <hr>-->
            <!--            <input type="text" placeholder="Coupon code"-->
            <!--                   style="padding: 16px; background: #E6E6E6; width: 100%; box-sizing: border-box; border: none; margin: 12px 0 24px">-->
            <!--            <div>-->
            <!--              <button style="background: #E6E6E6; padding: 16px 16px; border: none; cursor:pointer;width: 100%" type="button">APPLY COUPON-->
            <!--              </button>-->
            <!--            </div>-->
          </div>
        </td>
        <td colspan="3">
          <div style="background: #e6e6e6; width: 100%; padding: 8px 24px 24px; box-sizing: border-box">
            <h1 style="margin: 0; font-weight: 500; font-size: 28px">CART TOTALS</h1>
            <hr>
            <div style="display: flex; padding: 16px 0">
              <span style="flex: 1">Subtotal</span>
              <span>$02.00</span>
            </div>
            <hr>
            <div style="display: flex; padding: 16px 0">
              <span style="flex: 1">Total</span>
              <span style="color: #29ABE2">$02.00</span>
            </div>
            <div>
              <div>
                <button
                    type="submit"
                    style="color: white;background: #29ABE2; padding: 16px 16px; border: none; cursor:pointer;width: 100%">
                  PAY WITH PAYPAL
                </button>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>