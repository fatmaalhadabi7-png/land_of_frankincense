<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore & Book Destinations - Land of Frankincense</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f6f0; color: #333; line-height: 1.6; }
        header { background-color: #2c5e43; color: white; padding: 20px; text-align: center; }
        nav { background-color: #1e422f; display: flex; justify-content: center; padding: 10px; }
        nav a { color: white; text-decoration: none; padding: 10px 20px; font-weight: bold; border-radius: 5px; }
        nav a:hover { background-color: #2c5e43; }
        
        .container { max-width: 1200px; margin: 0 auto; padding: 40px 20px; display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 30px; }
        h1 { color: #2c5e43; text-align: center; margin-top: 30px; font-size: 32px; }
        
        .card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); display: flex; flex-direction: column; transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
        
        .slideshow-container { width: 100%; height: 180px; position: relative; overflow: hidden; background-color: #ddd; }
        .slide-img { width: 100%; height: 100%; object-fit: cover; display: none; }
        .slide-img.active { display: block; animation: fadeEffect 0.8s ease-in-out; }
        
        .card-content { padding: 20px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; text-align: center; }
        .card h3 { color: #2c5e43; margin: 0 0 10px 0; font-size: 18px; }
        .card p { font-size: 14px; color: #666; margin-bottom: 15px; line-height: 1.5; }
        
        .book-btn { background-color: #d4af37; color: white; border: none; padding: 12px; border-radius: 6px; cursor: pointer; font-weight: bold; width: 100%; transition: 0.2s; }
        .book-btn:hover { background-color: #b8962d; }

        .modal { display: none; position: fixed; z-index: 100; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); }
        .modal-content { background-color: white; margin: 10% auto; padding: 30px; border-radius: 10px; width: 350px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.2); }
        .modal-content input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .close-btn { background-color: #ff4d4d; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; margin-top: 10px; width: 100%; font-weight: bold; }
        .close-btn:hover { background-color: #e60000; }

        @keyframes fadeEffect {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <header>
        <h2>Know about the land of frankincense in one click</h2>
    </header>

    <nav>
        <a href="index.html">Home</a>
        <a href="history.html">History</a>
        <a href="places.php">Tourist Attractions</a>
        <a href="login.html">Login</a>
    </nav>

    <h1>Explore and Book Destinations</h1>

    <div class="container">
        <div class="card">
            <div class="slideshow-container">
                <img src="images/muscat_forts.jpg" class="slide-img active" alt="Muscat Forts">
            </div>
            <div class="card-content">
                <h3>Muscat Forts</h3>
                <p>Explore Al Jalali & Al Mirani forts protecting the historic old harbor of Muscat.</p>
                <button class="book-btn" onclick="openBooking('Muscat Forts')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/souq_mut.jpg" class="slide-img active" alt="Mutrah Souq 1">
                <img src="images/mutrah_souq.jpg" class="slide-img" alt="Mutrah Souq 2">
                <img src="images/corniche.webp" class="slide-img" alt="Mutrah Corniche">
            </div>
            <div class="card-content">
                <h3>Mutrah Souq & Corniche</h3>
                <p>Stroll through the historical winding alleys of the old souq and enjoy the waterfront waterfront views.</p>
                <button class="book-btn" onclick="openBooking('Mutrah Souq')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/bait_zubair.jpg" class="slide-img active" alt="Bait Al Zubair 1">
                <img src="images/alzubair.jpg" class="slide-img" alt="Bait Al Zubair 2">
            </div>
             <div class="card-content">
                <h3>Bait Al Zubair</h3>
                <p>Discover ancient Omani weapons, traditional costumes, and rich cultural heritage inside this magnificent museum.</p>
                <button class="book-btn" onclick="openBooking('Bait Al Zubair')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/alam_pa1.webp" class="slide-img active" alt="Al Alam Palace 1">
                <img src="images/alam_palace.jpg" class="slide-img" alt="Al Alam Palace 2">
            </div>
            <div class="card-content">
                <h3>Al Alam Palace</h3>
                <p>Admire the unique gold and blue architecture of the official ceremonial palace of His Majesty the Sultan.</p>
                <button class="book-btn" onclick="openBooking('Al Alam Palace')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/nizwa.jpg" class="slide-img active" alt="Nizwa Fort 1">
                <img src="images/niz_wa.jpg" class="slide-img" alt="Nizwa Fort 2">
            </div>
            <div class="card-content">
                <h3>Nizwa Fort</h3>
                <p>Visit Oman's traditional heritage city and its magnificent circular fort tower.</p>
                <button class="book-btn" onclick="openBooking('Nizwa Fort')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/jabal_akhdar.jpg" class="slide-img active" alt="Jabal Akhdar 1">
                <img src="images/jabal_ak1.jpg" class="slide-img" alt="Jabal Akhdar 2">
                <img src="images/jabal_ak2.jpg" class="slide-img" alt="Jabal Akhdar 3">
            </div>
            <div class="card-content">
                <h3>Jabal Akhdar</h3>
                <p>Enjoy the cool weather, beautiful rose gardens, and green mountain terraces.</p>
                <button class="book-btn" onclick="openBooking('Jabal Akhdar')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container">
                <img src="images/alhoota.jpg" class="slide-img active" alt="Al Hoota Cave">
            </div>
            <div class="card-content">
                <h3>Al Hoota Cave</h3>
                <p>Discover the fascinating underground lake and rare formations inside the cave.</p>
                <button class="book-btn" onclick="openBooking('Al Hoota Cave')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/jinz.jpg" class="slide-img active" alt="Ras Al Jinz 1">
                <img src="images/jinz1.jpg" class="slide-img" alt="Ras Al Jinz 2">
            </div>
            <div class="card-content">
                <h3>Ras Al Jinz</h3>
                <p>Watch the unique green sea turtles nesting on the golden sands under the protection of the eco-reserve.</p>
                <button class="book-btn" onclick="openBooking('Ras Al Jinz')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container">
                <img src="images/sunaysilah_fort.jpg" class="slide-img active" alt="Sunaysilah Fort">
            </div>
            <div class="card-content">
                <h3>Sunaysilah Fort</h3>
                <p>Explore the 300-year-old historic fort guarding the maritime history of Sur city.</p>
                <button class="book-btn" onclick="openBooking('Sunaysilah Fort')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container">
                <img src="images/khandaq_fort.jpg" class="slide-img active" alt="Al Khandaq Fort">
            </div>
            <div class="card-content">
                <h3>Al Khandaq Fort</h3>
                <p>See the ancient square fort surrounded by a brilliant defensive trench built for protection.</p>
                <button class="book-btn" onclick="openBooking('Al Khandaq Fort')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/hillah_fort.png" class="slide-img active" alt="Al Hillah Fort 1">
                <img src="images/hillah_f1.jpg" class="slide-img" alt="Al Hillah Fort 2">
            </div>
            <div class="card-content">
                <h3>Al Hillah Fort</h3>
                <p>Appreciate the beautiful Islamic plaster carvings and traditional design in the heart of Buraimi.</p>
                <button class="book-btn" onclick="openBooking('Al Hillah Fort')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container">
                <img src="images/salalah.jpg" class="slide-img active" alt="Dhofar Frankincense">
            </div>
            <div class="card-content">
                <h3>Dhofar</h3>
                <p>Explore UNESCO archaeological sites linking Oman's rich history to old empires.</p>
                <button class="book-btn" onclick="openBooking('Dhofar')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/darbat.jpg" class="slide-img active" alt="Wadi Darbat 1">
                <img src="images/darbat_m1.jpeg" class="slide-img" alt="Wadi Darbat 2">
            </div>
            <div class="card-content">
                <h3>Wadi Darbat</h3>
                <p>Immerse yourself in lush greenery, majestic waterfalls, and seasonal lake boat trips.</p>
                <button class="book-btn" onclick="openBooking('Wadi Darbat')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/mughsail.jpg" class="slide-img active" alt="Al Mughsail Beach 1">
                <img src="images/mug_sail.jpg" class="slide-img" alt="Al Mughsail Beach 2">
            </div>
            <div class="card-content">
                <h3>Al Mughsail Beach</h3>
                <p>Enjoy the breathtaking golden sands and powerful natural water blowholes by the ocean.</p>
                <button class="book-btn" onclick="openBooking('Al Mughsail Beach')">Book Now</button>
            </div>
        </div>

        <div class="card">
            <div class="slideshow-container" data-autoplay="true">
                <img src="images/marneef.jpg" class="slide-img active" alt="Marneef Cave 1">
                <img src="images/mar_neef.jpg" class="slide-img" alt="Marneef Cave 2">
            </div>
            <div class="card-content">
                <h3>Marneef Cave</h3>
                <p>Relax under natural limestone cave formations overlooking the roaring waves of Salalah.</p>
                <button class="book-btn" onclick="openBooking('Marneef Cave')">Book Now</button>
            </div>
        </div>
    </div>

    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <form method="POST" action="process_booking.php">
                <h3 id="modalTitle">Book Your Trip</h3>

                <!-- hidden field carries the selected destination to PHP -->
                <input type="hidden" name="destination" id="destinationField">

                <input type="text"  name="user_name"  id="userName" placeholder="Your Full Name" required>
                <input type="email" name="user_email" id="userEmailField" placeholder="Your Email" required>
                <input type="date"  name="tripDate"   id="tripDate" required>

                <button type="submit" name="confirm_booking" class="book-btn">Confirm Booking</button>
                <button type="button" class="close-btn" onclick="closeBooking()">Cancel</button>
            </form>
        </div>
    </div>

    <script>
        let selectedPlace = "";

        function openBooking(placeName) {
            // منع الزوار غير المسجلين من الحجز مباشرة عبر الرابط
            const currentUser = localStorage.getItem("currentUser");
            if (!currentUser) {
                alert("⛔ Access Denied! Please login to your account first before booking any destination.");
                window.location.href = "index.html";
                return;
            }

            selectedPlace = placeName;
            document.getElementById('modalTitle').innerText = "Booking for: " + placeName;
            document.getElementById('destinationField').value = placeName; // pass destination to PHP
            document.getElementById('bookingModal').style.display = "block";
            
            // تعبئة إيميل المستخدم المسجل تلقائياً لتسهيل التجربة
            document.getElementById('userEmailField').value = currentUser;
        }

        function closeBooking() {
            document.getElementById('bookingModal').style.display = "none";
        }

        // ملاحظة: لم نعد نحفظ في localStorage. الفورم الآن يرسل البيانات
        // مباشرة إلى process_booking.php ليتم حفظها في قاعدة بيانات MySQL.

        // نظام تقليب الصور التلقائي كل 3 ثوانٍ
        document.querySelectorAll('.slideshow-container[data-autoplay="true"]').forEach(container => {
            let slides = container.querySelectorAll('.slide-img');
            let currentSlideIndex = 0;

            setInterval(() => {
                slides[currentSlideIndex].classList.remove('active');
                currentSlideIndex = (currentSlideIndex + 1) % slides.length;
                slides[currentSlideIndex].classList.add('active');
            }, 3000);
        });

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const dest = urlParams.get('destination');
            if (dest) {
                openBooking(dest);
            }
        }
    </script>
</body>
</html>