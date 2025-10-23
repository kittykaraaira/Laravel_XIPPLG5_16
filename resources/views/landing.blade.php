<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Oh My Cake</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

  <!-- Hero Section -->
  <header id="home" class="hero-section">
    <nav class="navbar">
      <div class="logo">Oh My Cake</div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#why">Why Us</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="icons">
        <span class="phone">📞 +123 456 789</span>
        <span class="search"></span>
        <span class="love"></span>
        <span class="bell"></span>
      </div>
    </nav>

    <div class="hero-content">
      <h1>Taste The Joy</h1>
      <h2>Handcrafted Sweets for Every Moment</h2>
      <p>
        Discover our delightful collection of cakes, cupcakes, and pastries – made with passion, precision, and a whole lot of love. Let us sweeten your day!
      </p>
      <button class="cta-btn">Order Now</button>
      <div class="scroll-down">
        <a href="#gallery" aria-label="Scroll to Gallery">⬇️</a>
      </div>
    </div>
  </header>

<!-- WHAT WE MAKE -->
 <section class="products-section" id="products">
  <h2>What We Make</h2>
  <h3>Discover our delightful handmade creations</h3>
  <div class="product-list">
    <div class="product-item" data-description="A light and fluffy cake bursting with fresh strawberry flavor, topped with creamy frosting and real strawberries. Perfect for any celebration!">
      <img src="assets/stroberri.png" alt="Strawberry Cake" />
      <span>Strawberry Cake</span>
    </div>
    <div class="product-item" data-description="Rich and decadent chocolate tart with a buttery crust, filled with smooth chocolate ganache. A chocolate lover's dream come true.">
      <img src="assets/Choco.png" alt="Chocolate Tart" />
      <span>Chocolate Tart</span>
    </div>
    <div class="product-item" data-description="Exotic matcha-infused delight with layers of green tea sponge and subtle sweetness. Ideal for those seeking a unique and refreshing treat.">
      <img src="assets/Pandan.png" alt="Matcha Delight" />
      <span>Matcha Delight</span>
    </div>
    <div class="product-item" data-description="Tangy lemon cheesecake with a graham cracker base, creamy filling, and zesty lemon topping. A refreshing dessert for sunny days.">
      <img src="assets/Tart.png" alt="Lemon Cheesecake" />
      <span>Lemon Cheesecake</span>
    </div>
  </div>
</section>


<section class="why-section">
  <h2>Why Choose Us</h2>
  <h3>Because every dessert we make is crafted with love, quality, and joy to sweeten your moments</h3>
  <div class="why-features">
    <div class="feature">
      <div class="icon">🎂</div>
      <p class="title">Freshly Baked Everyday</p>
      <p class="desc">We bake our cakes and desserts fresh every single morning to ensure you get the best taste and texture possible.</p>
    </div>
    <div class="feature">
      <div class="icon">🍓</div>
      <p class="title">Natural Ingredients</p>
      <p class="desc">We carefully select natural and high-quality ingredients, with no preservatives or artificial flavors added.</p>
    </div>
    <div class="feature">
      <div class="icon">🚚</div>
      <p class="title">Fast & Safe Delivery</p>
      <p class="desc">Your orders are delivered quickly and safely, preserving freshness and ensuring they arrive in perfect condition.</p>
    </div>
    <div class="feature">
      <div class="icon">⭐</div>
      <p class="title">Customer Satisfaction First</p>
      <p class="desc">We listen, we care, and we always strive to exceed your expectations in both service and flavor.</p>
    </div>
  </div>
</section>



<section class="gallery-section" id="gallery">
  <h2>Our Gallery</h2>
  <h3>A sweet glimpse into our delightful creations</h3>
  <div class="gallery-scroll">
    <div class="gallery-item">
      <img src="assets/gallery1.jpg" alt="Gallery Item 1">
    </div>
    <div class="gallery-item">
      <img src="assets/gallery2.jpg" alt="Gallery Item 2">
    </div>
    <div class="gallery-item">
      <img src="assets/gallery3.jpg" alt="Gallery Item 3">
    </div>
    <div class="gallery-item">
      <img src="assets/gallery4.jpg" alt="Gallery Item 4">
    </div>
    <div class="gallery-item">
      <img src="assets/gallery4.jpg" alt="Gallery Item 4">
    </div>
    <div class="gallery-item">
      <img src="assets/gallery4.jpg" alt="Gallery Item 4">
    </div>
    <div class="gallery-item">
      <img src="assets/gallery4.jpg" alt="Gallery Item 4">
    </div>
    <!-- Tambahkan lebih banyak jika diperlukan -->
  </div>
</section>


 <section class="order-section" id="order">
  <h2>Order Now</h2>
  <h3>Fill the form below to place your dessert order via WhatsApp</h3>
  <form id="order-form" onsubmit="sendToWhatsApp(event)">
    <input type="text" id="name" placeholder="Your Name" required />
    <input type="text" id="menu" placeholder="Menu (e.g., Strawberry Shortcake)" required />
    <input type="number" id="quantity" placeholder="Quantity" required min="1" />
    <textarea id="note" placeholder="Special request (optional)"></textarea>
    <button type="submit" class="cta-btn">Send via WhatsApp</button>
  </form>
</section>


  <!-- Delivery Info -->
  <section class="delivery-section">
    <h2>Delivery & Payment</h2>
    <p>Free delivery in the city area for orders over $20.</p>
    <p>5% discount for online payment (Visa, Mastercard, PayPal)</p>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 Oh My Cake. All rights reserved.</p>
  </footer>

  <!-- Product Preview Modal -->
  <div id="product-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img id="modal-image" src="" alt="">
      <h3 id="modal-title"></h3>
      <p id="modal-description"></p>
    </div>
  </div>

 <script src="{{ asset('js/java.js') }}"></script>

</body>
</html>