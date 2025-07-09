<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gozayaan Clone</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <header>
    <div class="logo">Gozayaan</div>
    <nav>
      <ul>
        <li><a href="#">Flight</a></li>
        <li><a href="#">Hotel</a></li>
        <li><a href="#">Tour</a></li>
        <li><a href="#">Visa</a></li>
        <li><a href="#">Gift Card</a></li>
      </ul>
    </nav>
    <div class="signin">
      <button>Sign In</button>
    </div>
  </header>

  <section class="search-section">
    <form action="search.php" method="GET">
      <div class="trip-type">
        <label><input type="radio" name="trip" checked> One Way</label>
        <label><input type="radio" name="trip"> Round Way</label>
      </div>
      <input type="text" name="from" placeholder="From: Dhaka">
      <input type="text" name="to" placeholder="To: Cox's Bazar">
      <input type="date" name="date">
      <input type="number" name="travelers" placeholder="Travelers">
      <button type="submit">Search</button>
    </form>
  </section>

  <section class="how-to">
    <div class="card">কিভাবে ফ্লাইট বুক করবেন?</div>
    <div class="card">কিভাবে হোটেল বুক করবেন?</div>
    <div class="card">কিভাবে ডিসকাউন্ট পাবেন?</div>
  </section>

  <section class="deals">
    <h2>Hot Deals</h2>
    <div class="deal">18% Discount - City Bank</div>
    <div class="deal">10% Discount - bKash</div>
    <div class="deal">11% Discount - bKash</div>
  </section>

  <section class="special">
    <h2>Special Offers</h2>
    <div class="offer">Free Hotel in Istanbul</div>
    <div class="offer">Fly to Bangkok</div>
    <div class="offer">Fly to Kathmandu</div>
  </section>

  <footer>
    <div class="footer-links">
      <a href="#">Home</a>
      <a href="#">Refund Policy</a>
      <a href="#">Privacy Policy</a>
    </div>
    <div class="contact">
      Email: info@gozayaan.com | Phone: 09678 332211
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
