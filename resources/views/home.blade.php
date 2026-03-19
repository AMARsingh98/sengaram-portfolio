@extends('layouts.app')

@section('title', 'Amar Singh Sengar | Senior Software Engineer | Sengaram.in')
@section('description', 'Amar Singh Sengar (Amar Sengar) – Senior Software Engineer with 4.5+ years of experience in PHP, Laravel, Python & MySQL. Available for freelance and full-time web development projects.')
@section('canonical', 'https://sengaram.in/')
@section('og_title', 'Amar Singh Sengar | Senior Software Engineer | Sengaram.in')
@section('og_description', 'Amar Singh Sengar – Senior Software Engineer with 4.5+ years of experience building scalable web applications. Expert in PHP, Laravel, Python & MySQL. Hire engineer Amar for your next project.')
@section('keywords', 'Amar Singh Sengar, Amar Sengar, Amar Singh, engineer Amar, Amar engineer, Amar software engineer, Sengaram, PHP developer India, Laravel developer, senior software engineer India')

@section('content')
<!-- Hero Branding Section -->
<section class="hero-branding">
    <div class="container">
        <div class="branding-content">
            <div class="brand-logo">
                <div class="logo-circle">
                    <span>S</span>
                </div>
            </div>
            <h1 class="brand-title">SENGARAM</h1>
            <p class="brand-tagline">Portfolio of <strong>Amar Singh Sengar</strong> – Senior Software Engineer</p>
            <p class="brand-description">Amar Singh Sengar is a Software Engineer with 4.5+ years of experience, skilled in building scalable systems. Engineer Amar developed solutions that increased sales by 25% through data-driven insights.</p>
            
            <div class="brand-buttons">
                <a href="{{ route('amarsinghsengar') }}" class="btn-primary">
                    Explore Portfolio
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary">Get In Touch</a>
            </div>
            
            <div class="brand-stats">
                <div class="stat-item">
                    <span class="stat-number">4.5+</span>
                    <span class="stat-label">Years</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Technologies</span>
                </div>
            </div>
        </div>
        
        <div class="floating-elements">
            <div class="float-item float-1">PHP</div>
            <div class="float-item float-2">Laravel</div>
            <div class="float-item float-3">React</div>
            <div class="float-item float-4">MySQL</div>
            <div class="float-item float-5">Python</div>
            <div class="float-item float-6">JS</div>
        </div>
    </div>
</section>

<!-- Quick Links Section -->
<section class="quick-links">
    <div class="container">
        <div class="links-grid">
            <a href="{{ route('amarsinghsengar') }}" class="link-card">
                <div class="link-icon">
                    <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </div>
                <h3>About Amar Singh Sengar</h3>
                <p>Learn about Amar Sengar's experience, skills, and journey as a senior software engineer.</p>
                <span class="link-arrow">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>

            <a href="{{ route('amarsinghsengar') }}#projects" class="link-card">
                <div class="link-icon">
                    <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                    </svg>
                </div>
                <h3>My Projects</h3>
                <p>Explore my portfolio of web applications and development projects.</p>
                <span class="link-arrow">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>

            <a href="{{ route('contact') }}" class="link-card">
                <div class="link-icon">
                    <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                    </svg>
                </div>
                <h3>Contact</h3>
                <p>Ready to start your project? Let's discuss your requirements.</p>
                <span class="link-arrow">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>
@endsection