<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorong Temu - Coffee & Eatery</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --green-main: #1a3a2e;      
            --green-accent: #4a6358;
            --gold: #d4af37;            
            --cream: #ffffff;           
            --text-dark: #1a1a1a;       
            --text-gray: #666666;
            --bg-light: #f8f8f8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--cream);
            color: var(--text-dark);
            line-height: 1.6;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        body.loaded {
            opacity: 1;
        }

        /* ===== HEADER ===== */
        header {
            background: white;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.4s ease;
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 85px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: var(--green-main);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        nav {
            display: flex;
            gap: 45px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 15px;
            transition: color 0.3s ease;
        }

        nav a:hover { 
            color: var(--gold); 
        }

        /* ===== REVEAL ANIMATIONS ===== */
        .reveal-element {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .reveal-element.reveal {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== HERO ===== */
        .hero {
            margin-top: 85px;
            height: calc(100vh - 85px);
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 60px;
            gap: 80px;
            align-items: center;
        }

        .hero-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 72px;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 28px;
            color: var(--green-main);
            letter-spacing: -2px;
        }

        .hero-text p {
            font-size: 18px;
            color: var(--text-gray);
            margin-bottom: 40px;
            line-height: 1.8;
            max-width: 500px;
        }

        .btn-primary {
            display: inline-block;
            padding: 18px 50px;
            background: var(--green-main);
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            border: 2px solid var(--green-main);
            position: relative;
            overflow: hidden;
        }

        .btn-primary:hover {
            background: transparent;
            color: var(--green-main);
        }

        .hero-image {
            height: 600px;
            border-radius: 0;
            overflow: hidden;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        /* ===== ABOUT ===== */
        .about-section {
            background: var(--bg-light);
            padding: 140px 60px;
        }

        .about-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 100px;
            align-items: center;
        }

        .about-image {
            height: 550px;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-content {
            padding-left: 40px;
        }

        .label {
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 600;
            margin-bottom: 20px;
            display: block;
        }

        .about-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 32px;
            color: var(--green-main);
            letter-spacing: -1px;
        }

        .about-content p {
            font-size: 17px;
            color: var(--text-gray);
            line-height: 1.9;
            margin-bottom: 24px;
        }

        /* ===== MENU ===== */
        .menu-section {
            padding: 140px 60px;
            background: white;
        }

        .menu-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .menu-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .menu-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 56px;
            font-weight: 700;
            color: var(--green-main);
            margin-bottom: 24px;
            letter-spacing: -1.5px;
        }

        .menu-tabs {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-bottom: 70px;
        }

        .tab-btn {
            padding: 14px 32px;
            border: 1px solid #e0e0e0;
            background: white;
            color: var(--text-dark);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 15px;
            position: relative;
            overflow: hidden;
        }

        .tab-btn.active {
            background: var(--green-main);
            color: white;
            border-color: var(--green-main);
        }

        .tab-btn:hover {
            border-color: var(--green-main);
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px 40px;
        }

        .menu-card {
            background: white;
            transition: all 0.4s cubic-bezier(0.65, 0, 0.35, 1);
            opacity: 1;
            transform: translateY(0);
        }

        .menu-card:hover {
            transform: translateY(-12px);
        }

        .menu-card-image {
            height: 280px;
            margin-bottom: 24px;
            overflow: hidden;
        }

        .menu-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .menu-card:hover .menu-card-image img {
            transform: scale(1.08);
        }

        .menu-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            margin-bottom: 12px;
            color: var(--green-main);
            font-weight: 600;
        }

        .menu-card p {
            font-size: 15px;
            color: var(--text-gray);
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .menu-card .price {
            font-size: 18px;
            font-weight: 700;
            color: var(--gold);
        }

        .pagination {
            margin-top: 70px;
            text-align: center;
        }

        .page-btn {
            padding: 12px 20px;
            margin: 0 6px;
            border: 1px solid #e0e0e0;
            background: white;
            color: var(--text-dark);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 15px;
            position: relative;
            overflow: hidden;
        }

        .page-btn.active {
            background: var(--green-main);
            color: white;
            border-color: var(--green-main);
        }

        /* ===== CONTACT ===== */
        .contact-section {
            padding: 140px 60px;
            background: var(--bg-light);
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .contact-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 56px;
            font-weight: 700;
            color: var(--green-main);
            letter-spacing: -1.5px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 80px;
        }

        .contact-card {
            background: white;
            padding: 50px 40px;
            text-align: center;
            transition: all 0.4s ease;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        }

        .contact-card i {
            font-size: 32px;
            color: var(--gold);
            margin-bottom: 24px;
            transition: transform 0.3s ease;
        }

        .contact-card:hover i {
            transform: scale(1.1);
        }

        .contact-card h3 {
            font-size: 20px;
            margin-bottom: 16px;
            color: var(--green-main);
            font-weight: 600;
        }

        .contact-card p {
            color: var(--text-gray);
            font-size: 15px;
            line-height: 1.8;
        }

        .map-wrapper {
            height: 500px;
            overflow: hidden;
        }

        .map-wrapper iframe {
            width: 100%;
            height: 100%;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--green-main);
            color: white;
            padding: 100px 60px 40px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 80px;
            margin-bottom: 80px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: white;
            margin-bottom: 24px;
            display: block;
            font-weight: 700;
        }

        .footer-col p {
            color: rgba(255,255,255,0.7);
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .footer-col h4 {
            font-size: 16px;
            margin-bottom: 28px;
            font-weight: 600;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 14px;
        }

        .footer-col ul li a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: var(--gold);
            padding-left: 5px;
        }

        .socials a {
            color: white;
            margin-right: 20px;
            font-size: 20px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .socials a:hover {
            color: var(--gold);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.5);
            font-size: 14px;
        }

        /* ===== RIPPLE EFFECT ===== */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.4);
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .hero {
                grid-template-columns: 1fr;
                padding: 80px 40px;
            }

            .hero-image {
                order: -1;
                height: 400px;
            }

            .about-container {
                grid-template-columns: 1fr;
                gap: 60px;
            }

            .menu-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 50px;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                padding: 0 20px;
            }

            nav {
                display: none;
            }

            .hero-text h1 {
                font-size: 48px;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }

            .menu-section,
            .contact-section,
            .about-section {
                padding: 80px 20px;
            }

            footer {
                padding: 60px 20px 30px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="header-content">
            <a href="#" class="logo">Lorong Temu</a>
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#menu">Menu</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-text reveal-element">
            <h1>Rasa yang Mempertemukan</h1>
            <p>Nikmati pengalaman kopi dan hidangan otentik dalam suasana yang hangat dan menenangkan di jantung kota.</p>
            <a href="#menu" class="btn-primary">Explore Menu</a>
        </div>
        <div class="hero-image reveal-element">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=2070&auto=format&fit=crop" alt="Coffee">
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="about-container">
            <div class="about-image reveal-element">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop" alt="Interior">
            </div>
            <div class="about-content reveal-element">
                <span class="label">Since 2020</span>
                <h2>Ruang Temu Penuh Cerita</h2>
                <p>Lorong Temu bukan sekadar destinasi kuliner. Kami adalah wadah di mana setiap cangkir kopi membawa inspirasi dan setiap hidangan merayakan kebersamaan.</p>
                <p>Berawal dari sudut kota Cianjur, kami kini hadir membawa cita rasa lokal yang dikemas dengan standar global untuk Anda di Bogor dan sekitarnya.</p>
            </div>
        </div>
    </section>

    <section class="menu-section" id="menu">
        <div class="menu-container">
            <div class="menu-header reveal-element">
                <span class="label">Our Selection</span>
                <h2>Menu by Category</h2>
            </div>

            <div class="menu-tabs">
                <button class="tab-btn active" data-filter="coffee">Coffee</button>
                <button class="tab-btn" data-filter="steak">Steak</button>
                <button class="tab-btn" data-filter="pasta">Pasta</button>
                <button class="tab-btn" data-filter="dessert">Dessert</button>
            </div>

            <div class="menu-grid">
                <!-- COFFEE -->
                <div class="menu-card" data-category="coffee">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Kopi Susu Temu</h3>
                    <p>Signature iced coffee dengan susu segar dan arabika pilihan.</p>
                    <span class="price">IDR 25.000</span>
                </div>

                <div class="menu-card" data-category="coffee">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Americano Classic</h3>
                    <p>Espresso bold dengan air panas, ringan dan clean taste.</p>
                    <span class="price">IDR 22.000</span>
                </div>

                <div class="menu-card" data-category="coffee">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Cappuccino Foam</h3>
                    <p>Perpaduan espresso, steamed milk, dan foam lembut.</p>
                    <span class="price">IDR 28.000</span>
                </div>

                <div class="menu-card" data-category="coffee">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Latte Vanilla</h3>
                    <p>Latte creamy dengan sentuhan vanilla yang smooth.</p>
                    <span class="price">IDR 30.000</span>
                </div>

                <div class="menu-card" data-category="coffee">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Caramel Macchiato</h3>
                    <p>Espresso dengan susu dan caramel manis legit.</p>
                    <span class="price">IDR 32.000</span>
                </div>

                <div class="menu-card" data-category="coffee">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1485808191679-5f86510681a2?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Cold Brew Citrus</h3>
                    <p>Cold brew segar dengan hint citrus alami.</p>
                    <span class="price">IDR 29.000</span>
                </div>

                <!-- STEAK -->
                <div class="menu-card" data-category="steak">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Grilled Beef Steak</h3>
                    <p>Daging sapi panggang saus lada hitam.</p>
                    <span class="price">IDR 82.000</span>
                </div>

                <div class="menu-card" data-category="steak">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Sirloin Steak</h3>
                    <p>Daging sapi sirloin panggang saus blackpepper.</p>
                    <span class="price">IDR 78.000</span>
                </div>

                <div class="menu-card" data-category="steak">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Tenderloin Steak</h3>
                    <p>Daging sapi tenderloin lembut saus mushroom.</p>
                    <span class="price">IDR 95.000</span>
                </div>

                <div class="menu-card" data-category="steak">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1598515213692-5f252f75d785?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Wagyu Steak</h3>
                    <p>Daging wagyu premium dengan saus pilihan.</p>
                    <span class="price">IDR 150.000</span>
                </div>

                <div class="menu-card" data-category="steak">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1625944525565-4d2b6c1c2f44?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Chicken Steak</h3>
                    <p>Dada ayam panggang saus barbeque.</p>
                    <span class="price">IDR 52.000</span>
                </div>

                <div class="menu-card" data-category="steak">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Beef Rice Bowl</h3>
                    <p>Daging sapi saus teriyaki.</p>
                    <span class="price">IDR 42.000</span>
                </div>

                <!-- PASTA -->
                <div class="menu-card" data-category="pasta">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Creamy Mushroom Pasta</h3>
                    <p>Pasta creamy dengan jamur dan keju.</p>
                    <span class="price">IDR 38.000</span>
                </div>

                <div class="menu-card" data-category="pasta">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1523986371872-9d3ba2e2f5b2?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Spaghetti Bolognese</h3>
                    <p>Saus daging sapi cincang khas Italia.</p>
                    <span class="price">IDR 40.000</span>
                </div>

                <div class="menu-card" data-category="pasta">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1525755662778-989d0524087e?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Spaghetti Carbonara</h3>
                    <p>Pasta saus creamy telur dan keju.</p>
                    <span class="price">IDR 42.000</span>
                </div>

                <div class="menu-card" data-category="pasta">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Aglio e Olio</h3>
                    <p>Pasta bawang putih, cabai, dan olive oil.</p>
                    <span class="price">IDR 35.000</span>
                </div>

                <div class="menu-card" data-category="pasta">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1611270629569-8b357cb88da0?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Seafood Marinara</h3>
                    <p>Pasta saus tomat dengan udang dan cumi.</p>
                    <span class="price">IDR 48.000</span>
                </div>

                <!-- DESSERT -->
                <div class="menu-card" data-category="dessert">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1624353365286-3f8d62daad51?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Churros Cinnamon</h3>
                    <p>Churros renyah saus cokelat.</p>
                    <span class="price">IDR 28.000</span>
                </div>

                <div class="menu-card" data-category="dessert">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1505253216365-7c61b9c58a1c?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Chocolate Lava Cake</h3>
                    <p>Kue cokelat hangat dengan lelehan cokelat.</p>
                    <span class="price">IDR 30.000</span>
                </div>

                <div class="menu-card" data-category="dessert">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1541599540903-216a46ca1dc0?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Cheese Cake</h3>
                    <p>Kue keju lembut dengan topping stroberi.</p>
                    <span class="price">IDR 32.000</span>
                </div>

                <div class="menu-card" data-category="dessert">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Brownies Ice Cream</h3>
                    <p>Brownies cokelat disajikan dengan es krim vanilla.</p>
                    <span class="price">IDR 35.000</span>
                </div>

                <div class="menu-card" data-category="dessert">
                    <div class="menu-card-image">
                        <img src="https://images.unsplash.com/photo-1511910849309-0dffb8785146?q=80&w=800&auto=format&fit=crop">
                    </div>
                    <h3>Pancake Honey</h3>
                    <p>Pancake lembut dengan madu dan butter.</p>
                    <span class="price">IDR 27.000</span>
                </div>
            </div>

            <div class="pagination">
                <button class="page-btn active" data-page="1">1</button>
                <button class="page-btn" data-page="2">2</button>
                <button class="page-btn" data-page="3">3</button>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="contact-header reveal-element">
                <span class="label">Find Us</span>
                <h2>Lokasi Kami</h2>
            </div>

            <div class="contact-grid">
                <div class="contact-card reveal-element">
                    <i class="fas fa-location-dot"></i>
                    <h3>Cianjur</h3>
                    <p>Jl. Siliwangi No. A1<br>08:00 - 22:00</p>
                </div>
                <div class="contact-card reveal-element">
                    <i class="fas fa-location-dot"></i>
                    <h3>Bogor</h3>
                    <p>Jl. Achmad Sobana No. 34<br>09:00 - 23:00</p>
                </div>
                <div class="contact-card reveal-element">
                    <i class="fas fa-envelope"></i>
                    <h3>Reservation</h3>
                    <p>halo@lorongtemu.id<br>+62 888 1234 567</p>
                </div>
            </div>

            <div class="map-wrapper reveal-element">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.586980887484!2d107.1363353!3d-6.819982000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68536b6fad4dcb%3A0x864e49bdbcf1a469!2sLORONG%20TEMU%20COFFEE%20%26%20EATERY!5e0!3m2!1sid!2sid!4v1769944964426!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="#" class="footer-logo">Lorong Temu</a>
                    <p>Menghadirkan harmoni dalam setiap rasa dan kenyamanan dalam setiap sudut ruang.</p>
                    <div class="socials">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Experience</h4>
                    <ul>
                        <li><a href="#">Dine In</a></li>
                        <li><a href="#">Private Event</a></li>
                        <li><a href="#">Catering</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <p>Dapatkan promo eksklusif setiap minggunya.</p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2026 Lorong Temu Coffee & Eatery. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        // ===== PAGE LOAD ANIMATION =====
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });

        // ===== MENU FILTER & PAGINATION WITH ANIMATION =====
        const tabs = document.querySelectorAll('.tab-btn');
        const menuCards = document.querySelectorAll('.menu-card');
        const pageBtns = document.querySelectorAll('.page-btn');
        const pagination = document.querySelector('.pagination');

        let currentFilter = 'coffee';
        let currentPage = 1;
        const itemsPerPage = 6;

        function renderMenu() {
            const filteredItems = [...menuCards].filter(
                card => card.dataset.category === currentFilter
            );

            // Hide all cards with fade out
            menuCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            });

            const totalPages = Math.ceil(filteredItems.length / itemsPerPage);

            if (totalPages <= 1) {
                pagination.style.display = 'none';
            } else {
                pagination.style.display = 'block';
            }

            if (currentPage > totalPages) currentPage = 1;

            pageBtns.forEach(btn => {
                btn.classList.remove('active');
                if (parseInt(btn.dataset.page) === currentPage) {
                    btn.classList.add('active');
                }

                if (parseInt(btn.dataset.page) <= totalPages) {
                    btn.style.display = 'inline-block';
                } else {
                    btn.style.display = 'none';
                }
            });

            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            // Show filtered cards with stagger animation
            setTimeout(() => {
                filteredItems.slice(start, end).forEach((card, index) => {
                    card.style.display = 'block';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 80);
                });
            }, 350);
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                currentFilter = tab.dataset.filter;
                currentPage = 1;

                renderMenu();
            });
        });

        pageBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentPage = parseInt(btn.dataset.page);
                renderMenu();
                
                // Smooth scroll to menu grid
                document.querySelector('.menu-grid').scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'center'
                });
            });
        });

        // ===== SCROLL REVEAL ANIMATION =====
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal-element').forEach(el => {
            observer.observe(el);
        });

        // ===== PARALLAX EFFECT ON HERO =====
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroImage = document.querySelector('.hero-image img');
            
            if (heroImage && scrolled < window.innerHeight) {
                heroImage.style.transform = `translateY(${scrolled * 0.4}px) scale(1.1)`;
            }
        });

        // ===== HEADER SCROLL EFFECT =====
        let lastScroll = 0;
        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.08)';
            } else {
                header.style.boxShadow = 'none';
            }

            // Hide header on scroll down, show on scroll up
            if (currentScroll > lastScroll && currentScroll > 200) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }

            lastScroll = currentScroll;
        });

        // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                
                if (target) {
                    const headerHeight = 85;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // ===== BUTTON RIPPLE EFFECT =====
        function createRipple(event) {
            const button = event.currentTarget;
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            button.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        }

        document.querySelectorAll('.btn-primary, .tab-btn, .page-btn').forEach(button => {
            button.addEventListener('click', createRipple);
        });

        // ===== MOUSE MOVE PARALLAX ON HERO =====
        const hero = document.querySelector('.hero');
        const heroText = document.querySelector('.hero-text');
        const heroImage = document.querySelector('.hero-image');

        hero.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            const moveX = (mouseX - 0.5) * 20;
            const moveY = (mouseY - 0.5) * 20;
            
            heroText.style.transform = `translate(${moveX}px, ${moveY}px)`;
            heroImage.style.transform = `translate(${-moveX}px, ${-moveY}px)`;
        });

        hero.addEventListener('mouseleave', () => {
            heroText.style.transform = 'translate(0, 0)';
            heroImage.style.transform = 'translate(0, 0)';
        });

        // Initialize menu
        renderMenu();

        // ===== FLOATING ANIMATION FOR CONTACT CARDS =====
        const contactCards = document.querySelectorAll('.contact-card');
        contactCards.forEach((card, index) => {
            setInterval(() => {
                card.style.animation = 'float 3s ease-in-out infinite';
                card.style.animationDelay = `${index * 0.3}s`;
            }, 100);
        });

        // Add floating keyframe
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
        `;
        document.head.appendChild(style);

        // ===== NUMBER COUNTER ANIMATION (if needed) =====
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = Math.floor(target);
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start);
                }
            }, 16);
        }

        // ===== CURSOR TRAIL EFFECT (Optional) =====
        let cursorTrail = [];
        document.addEventListener('mousemove', (e) => {
            if (cursorTrail.length > 5) {
                cursorTrail.shift();
            }
            
            const trail = document.createElement('div');
            trail.style.position = 'fixed';
            trail.style.width = '4px';
            trail.style.height = '4px';
            trail.style.borderRadius = '50%';
            trail.style.background = 'var(--gold)';
            trail.style.opacity = '0.6';
            trail.style.pointerEvents = 'none';
            trail.style.left = e.clientX + 'px';
            trail.style.top = e.clientY + 'px';
            trail.style.zIndex = '9999';
            trail.style.transition = 'opacity 0.5s ease';
            
            document.body.appendChild(trail);
            cursorTrail.push(trail);
            
            setTimeout(() => {
                trail.style.opacity = '0';
                setTimeout(() => trail.remove(), 500);
            }, 100);
        });

        console.log('🎨 Lorong Temu - All animations loaded!');
    </script>

</body>
</html>