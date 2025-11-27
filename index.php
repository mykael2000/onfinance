<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Lit Africa - Financial Empowerment for the Continent</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        /* Custom styles for professional feel and smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f8; /* Very light, inviting background */
        }
        /* Creative Color Palette based on a refined African theme */
        .color-primary { color: #065F46; /* Deep Emerald Green */ }
        .bg-primary { background-color: #065F46; }
        .bg-secondary { background-color: #FBBF24; /* Vibrant Amber Gold */ }
        
        /* Custom Shadow for a premium, floating look */
        .custom-shadow {
            box-shadow: 0 15px 30px -10px rgba(6, 95, 70, 0.2), 0 6px 15px -4px rgba(6, 95, 70, 0.1);
            transition: all 0.3s ease;
        }
        .custom-shadow:hover {
            box-shadow: 0 20px 40px -10px rgba(6, 95, 70, 0.35), 0 8px 20px -5px rgba(6, 95, 70, 0.2);
            transform: translateY(-4px);
        }

        /* Gradient for the Hero Section */
        .hero-gradient {
            background: linear-gradient(135deg, #f8f8f8 50%, #E0F2F1 100%);
        }

        /* Playfair Display for headers */
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

    <body class="bg-gray-50 font-sans text-gray-900">
        
    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm shadow-lg">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-20">
            <a href="#home" class="text-3xl font-black color-primary tracking-tight">
                ON. Finance
            </a>
            <div class="hidden md:flex space-x-8 text-base font-semibold">
                <a href="https://moneylitafrica.com" 
                    class="hover:text-amber-500 transition duration-300">
                    MoneyLit
                </a>
                <a href="#about" class="hover:text-amber-500 transition duration-300">About Omoefe</a>
                <a href="#events" class="hover:text-amber-500 transition duration-300">Impact</a>
                <a href="#vision" class="hover:text-amber-500 transition duration-300">Vision</a>
                <a href="#gallery" class="hover:text-amber-500 transition duration-300">Highlights</a>
                <a href="#contact" class="px-5 py-2 rounded-full bg-primary text-white font-bold hover:bg-emerald-900 transition duration-300 custom-shadow">Collaborate</a>
            </div>
            <!-- Mobile Menu Button (Hamburger) -->
            <button class="md:hidden p-2 text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-xl py-4 absolute w-full">
            <a href="#about" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">About Omoefe</a>
            <a href="#events" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">Events & Impact</a>
            <a href="#vision" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">Vision</a>
            <a href="#gallery" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">Highlights</a>
            <a href="#contact" class="block px-6 py-3 text-base text-white bg-primary mx-4 my-3 rounded-xl text-center font-bold">Collaborate Now</a>
        </div>
    </header>


    <!-- Banner Section (Homepage Integration) -->
    <section class="bg-gradient-to-tr from-emerald-800 via-emerald-700 to-emerald-900 px-6 md:px-12 py-20 text-center text-white rounded-b-3xl shadow-lg">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 font-serif">Introducing ON Finance — Our Impact Movement</h1>
        <p class="md:max-w-3xl mx-auto text-lg md:text-xl font-medium leading-relaxed mb-8">
        Money Lit Africa is evolving. Through ON Finance, we’re building an Africa where financial knowledge creates real change.<br>
        Our goal? To empower 100,000+ Africans with the tools, access, and community to achieve lasting financial freedom.
        </p>
        <div class="space-x-6">
        <a href="#learn" class="inline-block bg-amber-400 hover:bg-amber-500 text-emerald-900 font-bold px-8 py-3 rounded-xl shadow-md transition">Learn More About ON Finance</a>
        <a href="#partner" class="inline-block bg-transparent border-2 border-amber-400 hover:bg-amber-400 hover:text-emerald-900 text-white font-bold px-8 py-3 rounded-xl transition">Partner With Us</a>
        </div>
    </section>


    <!-- Landing Page Hero -->
    <section class="flex flex-col md:flex-row items-center md:justify-between px-6 md:px-12 py-20 max-w-7xl mx-auto">
        <div class="md:w-1/2 mb-12 md:mb-0">
        <h2 class="text-5xl font-extrabold color-primary mb-4 font-serif">Empowering Africa Through Financial Education and Access</h2>
        <p class="text-lg text-gray-700 mb-8 leading-relaxed max-w-lg">
            ON Finance is a movement turning financial literacy into measurable empowerment for women, youth, and underserved communities across the continent.
        </p>
        <div class="space-x-6">
            <a href="#join" class="inline-block bg-amber-400 hover:bg-amber-500 text-emerald-900 font-bold px-8 py-3 rounded-xl shadow-md transition">Join the Movement</a>
            <a href="#partner" class="inline-block border-2 border-amber-400 hover:bg-amber-400 hover:text-emerald-900 text-amber-400 font-bold px-8 py-3 rounded-xl transition">Become a Partner</a>
        </div>
        </div>
        <div class="md:w-1/2">
        <img src="img/Moneylit5.jpg" alt="Empowering Africa through finance" class="rounded-3xl shadow-lg max-w-full object-cover" />
        </div>
    </section>


    <!-- Section 1: Who We Are -->
    <section class="bg-white py-20 px-6 md:px-12 max-w-7xl mx-auto rounded-3xl shadow-md">
        <h3 class="text-4xl font-extrabold color-primary mb-6 font-serif border-b-4 border-amber-400 inline-block pb-2">Our Purpose Is Simple — Empowerment Through Financial Literacy</h3>
        <p class="text-lg text-gray-700 max-w-4xl leading-relaxed">
        ON Finance exists to close Africa’s financial knowledge gap.<br>
        We believe that financial education is not just about money, it’s about dignity, opportunity, and freedom.<br>
        Through training, partnerships, and digital programs, we equip Africans with practical skills to make informed money decisions and take control of their financial futures.
        </p>
    </section>


    <!-- Section 2: What We Do -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto">
        <h3 class="text-4xl font-extrabold color-primary mb-6 font-serif border-b-4 border-amber-400 inline-block pb-2">From Knowledge to Action</h3>
        <p class="text-lg text-gray-700 max-w-4xl leading-relaxed mb-8">
        Our programs are designed to make financial education accessible, inclusive, and transformational.
        </p>
        <ul class="list-disc pl-6 space-y-3 text-gray-800 max-w-xl font-medium">
        <li><strong>Finance 101 for Africa</strong> – A digital bootcamp simplifying finance for beginners.</li>
        <li><strong>Women & Wealth Campaign</strong> – Empowering women to grow and manage wealth.</li>
        <li><strong>Finance Ambassador Network</strong> – Training volunteers to bring financial literacy into their local communities.</li>
        </ul>
        <div class="mt-8">
        <a href="#programs" class="inline-block bg-amber-400 hover:bg-amber-500 text-emerald-900 font-bold px-8 py-3 rounded-xl shadow-md transition">Join a Program &rarr;</a>
        </div>
    </section>

    <!-- 3. Events & Initiatives - Creative Card Styling -->
        <section id="events" class="py-24 md:py-36 bg-gray-50 rounded-3xl p-8">
            <h2 class="text-5xl font-extrabold text-center mb-16 color-primary">Our Impact in Action</h2>

            <div class="grid gap-12 lg:grid-cols-2">
                
                <!-- International Women’s Day Financial Literacy Event -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border-t-4 border-pink-500 custom-shadow">
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-4xl">🌸</span>
                        <h3 class="text-2xl font-bold text-pink-600">IWD Financial Literacy Event</h3>
                    </div>
                    <p class="text-lg font-semibold text-gray-700 mb-6">Theme: Empowered Women, Empowered Finances</p>
                    <div class="space-y-4 text-gray-600 text-base">
                        <p>In celebration of International Women’s Day, we brought together women professionals and entrepreneurs for honest conversations about wealth creation and financial independence.</p>
                        <h4 class="text-lg font-extrabold color-primary pt-2">Key Highlights:</h4>
                        <ul class="list-none space-y-2 text-sm ml-0">
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>Panel discussions on investing</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>Networking and mentorship</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>50+ participants empowered</li>
                        </ul>
                        <a href="#gallery" class="mt-4 block w-full text-center px-4 py-3 bg-pink-500 text-white font-semibold rounded-xl hover:bg-pink-600 transition duration-300">
                            See Photo Highlights
                        </a>
                    </div>
                </div>

                <!-- Financial Literacy Conversations -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border-t-4 border-secondary custom-shadow">
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-4xl">💬</span>
                        <h3 class="text-2xl font-bold text-amber-600">Community Conversations</h3>
                    </div>
                    <p class="text-lg font-semibold text-gray-700 mb-6">Informal Sessions, Real Impact</p>
                    <div class="space-y-4 text-gray-600 text-base">
                        <p>We regularly host informal or community sessions both online and offline, emphasizing my role as a thought leader driving critical conversations around wealth, investing, and economic empowerment across Africa.</p>
                        <p class="pt-2">Join us to get involved in the discussion and start making measurable progress on your financial goals.</p>
                        <a href="#contact" class="mt-6 block w-full text-center px-4 py-3 bg-secondary color-primary font-bold rounded-xl hover:bg-amber-400 transition duration-300">
                            Connect on Social Media &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </section>


    <!-- Section 3: Our Impact -->
    <section class="bg-white py-20 px-6 md:px-12 max-w-7xl mx-auto rounded-3xl shadow-md">
        <h3 class="text-4xl font-extrabold color-primary mb-6 font-serif border-b-4 border-amber-400 inline-block pb-2">Turning Learning Into Measurable Change</h3>
        <p class="text-lg text-gray-700 max-w-4xl leading-relaxed mb-8">
        We’re not just teaching finance — we’re transforming lives.
        </p>
        <ul class="list-disc pl-6 space-y-3 text-gray-800 max-w-xl font-medium">
        <li>10,000+ people reached through online and in-person events.</li>
        <li>International Women’s Day 2025 event hosted with Afara Leadership center.</li>
        <li>Targeting 100,000+ empowered Africans by 2026.</li>
        </ul>
        <div class="mt-8 flex flex-wrap gap-6">
        <img src="img/impact/photo1.jpg" alt="Impact photo 1" class="rounded-xl shadow-lg w-60 object-cover" />
        <img src="img/impact/photo2.jpg" alt="Impact photo 2" class="rounded-xl shadow-lg w-60 object-cover" />
        <video controls class="rounded-xl shadow-lg w-60 object-cover">
            <source src="videos/event-reel.mp4" type="video/mp4" />
            Sorry, your browser doesn't support embedded videos.
        </video>
        </div>
        <a href="#impact-report" class="inline-block mt-8 bg-amber-400 hover:bg-amber-500 text-emerald-900 font-bold px-8 py-3 rounded-xl shadow-md transition">Read Our Impact Report &rarr;</a>
    </section>


    <!-- Section 4: Partnerships -->
    <section id="partner" class="py-20 px-6 md:px-12 max-w-7xl mx-auto">
        <h3 class="text-4xl font-extrabold color-primary mb-6 font-serif border-b-4 border-amber-400 inline-block pb-2">Partner With Purpose</h3>
        <p class="text-lg text-gray-700 max-w-4xl leading-relaxed mb-8">
        We collaborate with fintechs, NGOs, development organizations, and purpose-driven brands to create programs that drive financial inclusion.
        Whether it’s sponsoring a workshop, funding a campaign, or co-hosting an event — your partnership can help shape a financially confident Africa.
        </p>
        <div class="space-x-6">
        <a href="#become-partner" class="inline-block bg-amber-400 hover:bg-amber-500 text-emerald-900 font-bold px-8 py-3 rounded-xl shadow-md transition">Become a Partner</a>
        <a href="ON_Finance_Partnership_Deck.pdf" class="inline-block border-2 border-amber-400 hover:bg-amber-400 hover:text-emerald-900 text-amber-400 font-bold px-8 py-3 rounded-xl transition" download>Download Partnership Deck</a>
        </div>
    </section>


    <!-- Section 5: Advisory Board -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto text-center bg-white rounded-3xl shadow-lg text-emerald-400">
        <h3 class="text-4xl font-extrabold mb-6 font-serif border-b-4 border-amber-400 inline-block pb-2">Guided by Visionaries</h3>
        <div class="grid grid-cols-1 sm:grid-cols-1 gap-8 max-w-6xl mx-auto">
            <!-- Example advisory member -->
            <div class="text-center p-6 shadow-lg rounded-xl">
                <img src="img/money3.jpg" alt="Finance Expert" class="mx-auto rounded-full w-32 h-32 object-cover mb-4 shadow-md" />
                <h4 class="text-lg font-bold text-primary mb-1">Omoefe Orobator</h4>
                <p class="text-gray-700 text-sm">Finance Expert & Development Professional</p>
            </div>
        </div>
    </section>


    <!-- Section 6: Get Involved -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto text-center bg-emerald-900 rounded-3xl shadow-lg text-white">
        <h3 class="text-4xl font-extrabold mb-6 font-serif border-b-4 border-amber-400 inline-block pb-2">Join the Movement</h3>
        <p class="max-w-lg mx-auto text-lg leading-relaxed mb-8">
        Be part of Africa’s financial transformation. You can:
        </p>
        <ul class="list-disc list-inside max-w-md mx-auto text-lg font-medium mb-10">
        <li>Become an ON Fellow</li>
        <li>Partner with us on initiatives.</li>
        <li>Support our programs through donations or mentorship.</li>
        </ul>
        <div class="space-x-6">
        <a href="#join-us" class="inline-block bg-amber-400 hover:bg-amber-500 text-emerald-900 font-bold px-8 py-3 rounded-xl shadow-md transition">Join Us</a>
        <a href="#support" class="inline-block border-2 border-amber-400 hover:bg-amber-400 hover:text-emerald-900 text-white font-bold px-8 py-3 rounded-xl transition">Support Our Work</a>
        </div>
    </section>

    <!-- Footer Add-On -->
    <footer class="bg-amber-400 text-emerald-900 py-10 mt-16 text-center font-medium rounded-t-3xl px-6">
        ON Finance is dedicated to empowering Africans through financial education, access, and community-driven programs.
    </footer>
    </body>
</html>