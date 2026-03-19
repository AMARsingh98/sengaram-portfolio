<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Amar Singh Sengar - Senior Software Engineer | PHP Laravel Developer Portfolio')</title>
    <meta name="description" content="@yield('description', 'Amar Singh Sengar - Senior Software Engineer with 4.5+ years experience. Expert in PHP, Laravel, Python, MySQL. Built solutions that increased sales by 25%. Hire for web development projects.')">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    @hasSection('keywords')<meta name="keywords" content="@yield('keywords')">@endif
    <meta name="theme-color" content="#6366f1">
    <link rel="canonical" href="@yield('canonical', 'https://sengaram.in' . request()->getPathInfo())">

    <!-- Open Graph -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('canonical', 'https://sengaram.in' . request()->getPathInfo())">
    <meta property="og:title" content="@yield('og_title', 'Amar Singh Sengar - Senior Software Engineer | PHP Laravel Developer')">
    <meta property="og:description" content="@yield('og_description', 'Senior Software Engineer with 4.5+ years experience in PHP, Laravel, Python & MySQL. Building scalable web solutions. Hire me for your next project.')">
    <meta property="og:image" content="@yield('og_image', 'https://sengaram.in/images/default-profile-withbg.jpg')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Sengaram.in">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Amar Singh Sengar - Senior Software Engineer | PHP Laravel Developer')">
    <meta name="twitter:description" content="@yield('og_description', 'Senior Software Engineer with 4.5+ years experience in PHP, Laravel, Python & MySQL. Building scalable web solutions.')">
    <meta name="twitter:image" content="@yield('og_image', 'https://sengaram.in/images/default-profile-withbg.jpg')">

    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://www.googletagmanager.com">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MZCRC73056"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-MZCRC73056');
	</script>
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    [
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Amar Singh Sengar",
            "alternateName": ["Amar Sengar", "Amar Singh", "Engineer Amar"],
            "description": "Amar Singh Sengar is a Senior Software Engineer with 4.5+ years of experience in PHP, Laravel, Python and MySQL. Also known as Amar Sengar, engineer Amar built data-driven systems that increased sales by 25%.",
            "url": "https://sengaram.in",
            "jobTitle": "Senior Software Engineer",
            "worksFor": {
                "@type": "Organization",
                "name": "Alpha-Vector Pvt. Ltd"
            },
            "knowsAbout": ["PHP", "Laravel", "Python", "MySQL", "JavaScript", "Web Development", "API Development", "E-commerce"],
            "sameAs": [
                "https://sengaram.in/amarsinghsengar",
                "https://www.linkedin.com/in/amar-singh-sengar-a57670183/",
                "https://www.facebook.com/amarsingh.amarsingh.5836"
            ],
            "email": "amarsinghsengar98@gmail.com",
            "telephone": "+919799295681",
            "image": "https://sengaram.in/images/default-profile-withbg.jpg",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "IN"
            }
        },
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Sengaram.in - Amar Singh Sengar",
            "url": "https://sengaram.in",
            "description": "Portfolio of Amar Singh Sengar, Senior Software Engineer specializing in PHP, Laravel, Python and MySQL."
        }
    ]
    </script>
    @yield('structured_data')

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="{{ route('home') }}" class="logo">SENGARAM</a>
                
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('amarsinghsengar') }}" class="nav-link {{ request()->routeIs('amarsinghsengar') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    <li><a href="{{ route('contact') }}" class="btn-hire">Hire Me</a></li>
                </ul>
                
                <!-- Mobile menu button -->
                <button class="mobile-menu-btn" id="mobile-menu-btn">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile menu -->
            <div class="mobile-menu" id="mobile-menu">
                <ul class="mobile-nav-menu">
                    <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ route('amarsinghsengar') }}" class="nav-link">About</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    <li><a href="{{ route('contact') }}" class="btn-hire">Hire Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-cta">
                <h3>Let's Work Together</h3>
                <p>Ready to bring your ideas to life? Let's discuss your project.</p>
                <a href="{{ route('contact') }}" class="btn-primary btn-normal">Get In Touch</a>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-logo">SENGARAM</div>
                
                <div class="social-links">
                    <a href="mailto:amarsinghsengar98@gmail.com">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/amar-singh-sengar-a57670183/" target="_blank">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="copyright">
                <p>© {{ date('Y') }} SENGARAM. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('active');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.15)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>
