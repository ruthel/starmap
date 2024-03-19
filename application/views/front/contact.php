<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Starlight Contact</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
<div class="s-container">
  <?php include('inc/menu.php')?>
</div>
<div style="background: white; height: 100vh; padding-top: 24px">
  <div class="s-container">
    <form action="senderemail/contactus" class="" method="post"
          style="display: grid; gap: 24px; grid-template-columns: repeat(3,3fr)">
      <div
          style="display: grid; grid-column-start: 1; gap: 28px;grid-column-end: 3; grid-template-columns: repeat(2,1fr)">
        <div>
          <label for="name">Your name (required)</label>
          <input type="text" name="name" id="name" class="input">
        </div>
        <div>
          <label for="surname">Your Surname</label>
          <input type="text" name="surname" id="surname" class="input">
        </div>
        <div>
          <label for="email">Your Email (required)</label>
          <input type="text" name="email" id="email" class="input">
        </div>
        <div>
          <label for="subject">Subject (required)</label>
          <input type="text" name="subject" id="subject" class="input">
        </div>
        <div style="grid-column-start: 1; grid-column-end: 3; width: 100%">
          <label for="subject">Your Message</label>
          <textarea style="min-height: 250px; resize: none" class="input" name="message"></textarea>
        </div>
      </div>
      <div>
        <h3 style="margin-bottom: 0">Lost in space ? Let us help!</h3>
        <div style="font-size: 12px">
          In case of any questions or difficulties contact us: <br>
          <strong>contact@starmap.com</strong><br>
          +1 332 900 6321 <br>
          We don’t have any language or time zone barriers.
        </div>
        <br>
        <hr>
        <div>
          OCR Ltd.
          Rīga, Matīsa iela 61 – 23, LV-1009
          Lativa
        </div>
        <hr>
      </div>
      <button style="width: 100%; max-width: 200px; padding: 12px 0; grid-column-start: 1; grid-column-end: 4">SEND
        MESSAGE
      </button>
    </form>
  </div>
</div>
</body>
</html>