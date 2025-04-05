<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>StayHeaven...Hotels</title>
</head>

<body>
  <header class="header">
    <nav>
      <div class="nav__bar">
        <div class="logo">
          <a href="#" class="hotelname">
            <img
              src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1741875635/DALL_E_2025-03-13_19.52.43_-_A_sleek_and_modern_hotel_logo_with_a_color_palette_matching_a_clean_minimalist_website_design_shades_of_navy_blue_white_and_grey_._The_logo_featur_j9ycei.webp"
              alt="Hotel Logo" class="hotel-logo" />
            <span class="hotel-stay">Stay</span> Heaven
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#explore">Explore</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <button class="book-btn"><a href="#bookroom">Book Now</a></button>
    </nav>
    <div class="section__container header__container" id="home">
      <p>Simple - Unique - Friendly</p>
      <h1>Make Yourself At Home<br />In Our <span>Hotel</span>.</h1>
    </div>
  </header>

  <style>
    .hotel-logo {
      width: 50px;
      /* Adjust size as needed */
      height: auto;
      margin-right: 10px;
      vertical-align: middle;
    }

    .hotelname {
      display: flex;
      align-items: center;
    }
  </style>




  <section class="section__container about__container" id="about">
    <div class="about__image">
      <img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1739592918/AdobeStock_217685813_Preview_hgean3.jpg"
        alt="">
    </div>
    <div class="about__content">
      <p class="section__subheader">ABOUT US</p>
      <h2 class="section__header">The Best Holidays Start Here!</h2>
      <p class="section__description">
        With a focus on quality accommodations, personalized experiences, and
        seamless booking, our platform is dedicated to ensuring that every
        traveler embarks on their dream holiday with confidence and
        excitement.
      </p>
      <div class="about__btn">
      </div>
    </div>
  </section>

  <section class="section__container room__container">
    <p class="section__subheader">OUR LIVING ROOM</p>
    <h2 class="section__header">The Most Memorable Rest Time Starts Here.</h2>
    <div class="room__grid">
      <div class="room__card">
        <div class="room__card__image">
          <img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735926/room-1_d4obyy.jpg" alt="room" />

        </div>
        <div class="room__card__details">
          <h4>Deluxe Ocean View</h4>
          <p>
            Bask in luxury with breathtaking ocean views from your private
            suite.
          </p>
          <h5>Starting from <span>₹5999/night</span></h5>
          <button class="book-btn"><a href="#bookroom">Book Now</a></button>
        </div>
      </div>
      <div class="room__card">
        <div class="room__card__image">
          <img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735916/room-2_um9ati.jpg" alt="room" />

        </div>
        <div class="room__card__details">
          <h4>Executive Cityscape Room</h4>
          <p>
            Experience urban elegance and modern comfort in the heart of the
            city.
          </p>
          <h5>Starting from <span>₹2599/night</span></h5>
          <button class="book-btn"><a href="#bookroom">Book Now</a></button>
        </div>
      </div>
      <div class="room__card">
        <div class="room__card__image">
          <img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735915/room-3_qz6xee.jpg" alt="room" />

        </div>
        <div class="room__card__details">
          <h4>Family Garden Retreat</h4>
          <p>
            Spacious and inviting, perfect for creating cherished memories
            with loved ones.
          </p>
          <h5>Starting from <span>₹3999/night</span></h5>
          <button class="book-btn"><a href="#bookroom">Book Now</a></button>
        </div>
      </div>
    </div>
  </section>

  <section class="service" id="service">
    <div class="section__container service__container">
      <div class="service__content">
        <p class="section__subheader">SERVICES</p>
        <h2 class="section__header">Strive Only For The Best.</h2>
        <ul class="service__list">
          <li>
            <span><i class="ri-shield-star-line"></i></span>
            High Class Security
          </li>
          <li>
            <span><i class="ri-24-hours-line"></i></span>
            24 Hours Room Service
          </li>
          <li>
            <span><i class="ri-headphone-line"></i></span>
            Conference Room
          </li>
          <li>
            <span><i class="ri-map-2-line"></i></span>
            Tourist Guide Support
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section__container banner__container">
    <div class="banner__content">
      <div class="banner__card">
        <h4>25+</h4>
        <p>Properties Available</p>
      </div>
      <div class="banner__card">
        <h4>350+</h4>
        <p>Bookings Completed</p>
      </div>
      <div class="banner__card">
        <h4>600+</h4>
        <p>Happy Customers</p>
      </div>
    </div>
  </section>

  <section class="explore" id="explore">
    <p class="section__subheader">EXPLORE</p>
    <h2 class="section__header">What's New Today.</h2>
    <div class="explore__bg">
      <div class="explore__content">
        <p class="section__description">27th JAN 2025</p>
        <h4>A New Menu Is Available In Our Hotel.</h4>
        <button class="book-btn"><a href="menu.php">Menu</a></button>
      </div>
    </div>
  </section>
  <section id="bookroom">
    <div class="container">
      <h2>Book a Service</h2>
      <form action="process_booking.php" method="post" onsubmit="handleSubmit(event)">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>



        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" pattern="[0-9]{10}" title="Enter a valid 10-digit phone number"
          required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="in_date">Check-In Date:</label>
        <input type="date" id="in_date" name="in_date" required>

        <label for="out_date">Check-Out Date:</label>
        <input type="date" id="out_date" name="out_date" required>

        <label for="room_type">Room Type:</label>
        <select id="room_type" name="room_type" required>
          <option value="Deluxe Ocean View">Deluxe Ocean View</option>
          <option value="Executive Cityscape Room">Executive Cityscape Room</option>
          <option value="Family Garden Retreat">Family Garden Retreat</option>
        </select>

        <button type="submit">Submit Booking</button>
      </form>
    </div>
  </section>

  <footer class="footer" id="contact">
    <div class="section__container footer__container">
      <div class="footer__col">
        <div class="logo">
          <a href="#home" class="hotelname"><span class="hotel-stay">Stay</span> Heaven</a>
        </div>
        <p class="section__description">
          Discover a world of comfort, luxury, and adventure as you explore
          our curated selection of hotels, making every moment of your getaway
          truly extraordinary.
        </p>
        <button class="book-btn"><a href="#bookroom">Book Now</a></button>
      </div>
      <div class="footer__col">
        <h4>QUICK LINKS</h4>
        <ul class="footer__links">
          <li><a href="#">Browse Destinations</a></li>
          <li><a href="#">Special Offers & Packages</a></li>
          <li><a href="#">Room Types & Amenities</a></li>
          <li><a href="#">Customer Reviews & Ratings</a></li>
          <li><a href="#">Travel Tips & Guides</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>OUR SERVICES</h4>
        <ul class="footer__links">
          <li><a href="#">Concierge Assistance</a></li>
          <li><a href="#">Flexible Booking Options</a></li>
          <li><a href="#">Airport Transfers</a></li>
          <li><a href="#">Wellness & Recreation</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>CONTACT US</h4>
        <ul class="footer__links">
          <li><a href="#">stayheaven@gmail.com</a></li>
        </ul>
        <div class="footer__socials">
          <a href="#"><img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735912/facebook_dn06il.png"
              alt="facebook" /></a>
          <a href="#"><img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735913/instagram_cchp0o.png"
              alt="instagram" /></a>
          <a href="#"><img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735917/youtube_rqgdzc.png"
              alt="youtube" /></a>
          <a href="#"><img src="https://res.cloudinary.com/dwvwhzahe/image/upload/v1738735917/twitter_mvaccc.png"
              alt="twitter" /></a>
        </div>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © Nikhil siddavathula All rights reserved.
    </div>
  </footer>


  <script src="https://unpkg.com/scrollreveal"></script>
  <scrip src="main.js">
    </script>
    <script>
      // Scroll to the top on refresh
      window.onload = () => window.scrollTo(0, 0);
      function handleSubmit(event) {
        const inDate = new Date(document.getElementById('in_date').value);
        const outDate = new Date(document.getElementById('out_date').value);

        if (outDate <= inDate) {
          alert('Check-Out Date must be after Check-In Date');
          event.preventDefault(); // Prevents form submission
        }
      }

    </script>





</body>

</html>