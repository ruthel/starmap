<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PayPal Payment Successful</title>
  <script src="https://unpkg.com/dexie/dist/dexie.js"></script>
  <script src='//js.zapjs.com/js/download.js'></script>
</head>
<body>
<div class="success-container">
  <h1>Payment Successful!</h1>
  <p>Thank you for your payment. Your transaction has been completed successfully.</p>
  <p>Here are the details of your payment:</p>
  <ul>
    <li>Transaction ID: <span id="transactionId"></span></li>
    <li>Payment Amount: <span id="paymentAmount"></span></li>
  </ul>
  <script>
    let base64;
    const db = new Dexie('StarMap');
    db.version(1).stores({images: '++id, key, value'});
    db.open().catch(function (e) {
    });
    db.images.where('key').equals('image').each(function (record) {
      base64 = record.value
      document.getElementById('name').value = base64
    }).catch(function (error) {
    });
  </script>
  <button onclick="download(base64, 'dlDataUrlText.png', 'application/octet-stream;base64')">
    Download
  </button>
  <?php echo form_open('/email'); ?>
  <input type="email" name="email">
  <input type="hidden" name="image" id="name">
  <button type="submit">
    Send Via Mail
  </button>
  <?php form_close(); ?>
  <a href="https://www.paypal.com/myaccount/transactions">View in PayPal Account</a>
</div>

<script>
  // fetch('/get-payment-details')
  //   .then(response => response.json())
  //   .then(data => {
  //     document.getElementById('transactionId').textContent = data.transactionId;
  //     document.getElementById('paymentAmount').textContent = data.paymentAmount;
  //   })
  //   .catch(error => console.error('Error fetching payment details:', error));
</script>
</body>
</html>
