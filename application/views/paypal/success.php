<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Successful</title>
    <script src='//js.zapjs.com/js/download.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lz-string/1.5.0/lz-string.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
    <button onclick="function click(){

         const db = new Dexie('StarMap');
         db.version(1).stores({images: '++id, key, value'});
         db.open().catch(function (e) {});

    db.images.where('key').equals('image').each(function(record) {
    download(record.value, 'dlDataUrlText.jpeg','application/octet-stream;base64')
    }).catch(function (error) {});
    }">
        Download
    </button>
    <?php echo form_open('/email'); ?>
    <input type="email" name="email">
    <input type="hidden" name="image" id="name">
    <script>document.getElementById('name').value = LZString.decompressFromUTF16(localStorage.getItem("image"))</script>
    <button type="submit">
        Send Via Mail
    </button>
    <?php form_close(); ?>
    <a href="https://www.paypal.com/myaccount/transactions">View in PayPal Account</a>
</div>

<script>
    // Fetch payment details from your server-side logic
    fetch('/get-payment-details')
        .then(response => response.json())
        .then(data => {
            document.getElementById('transactionId').textContent = data.transactionId;
            document.getElementById('paymentAmount').textContent = data.paymentAmount;
            // Populate other details as needed
        })
        .catch(error => console.error('Error fetching payment details:', error));
</script>
</body>
</html>
