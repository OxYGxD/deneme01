<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <script src="nav.js" defer></script>
    <script src="https://kit.fontawesome.com/10019d67f0.js" crossorigin="anonymous"></script>
    <title>İhya Kesici Takım</title>
</head>

<header>
  <nav class="navbar">
    <div class="brand-title"> <a href="index.html">İhya Kesici Takım</a></div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="index.html">Ana sayfa</a></li>
        <li><a href="product.html">Ürünler</a></li>
        <li><a href="brands.html">Markalar</a></li>
        <li><a href="about.html">Hakkında</a></li>
        <li><a href="contact.html">İletişim</a></li>
      </ul>
    </div>
  </nav>
</header>

<body>
  <div>
    <H3>İletişim</H3>  
    <form method="POST" class="contact-form" action="cform.php">
     <input type="text" name="name" placeholder="Ad Soyad">
     <input type="text" name="mail" placeholder="Mail Adresi">
     <input type="text" name="subject" placeholder="Konu">
     <textarea name="message" placeholder="Mesajınız"></textarea>
    </form>
  </div>  
</body>

<footer class="footer-section">
   <p class="copyright-text">Created By <a href="#">Vinka Studio</a>.</p>
</footer>

</html>