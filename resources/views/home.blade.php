@extends('layouts.app')

@section('title', 'SENGARAM - Senior Software Engineer')

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
            <p class="brand-tagline">Building ideas into scalable web solutions</p>
            <p class="brand-description">Software Engineer with 4.5+ years of experience, skilled in building scalable systems. Developed solutions that increased sales by 25% through data-driven insights.</p>
            
            <div class="brand-buttons">
                <a href="{{ route('portfolio') }}" class="btn-primary">
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
            <a href="{{ route('portfolio') }}" class="link-card">
                <div class="link-icon">👨💻</div>
                <h3>About Me</h3>
                <p>Learn about my experience, skills, and journey as a software engineer.</p>
                <span class="link-arrow">→</span>
            </a>
            
            <a href="{{ route('portfolio') }}#projects" class="link-card">
                <div class="link-icon">🚀</div>
                <h3>My Projects</h3>
                <p>Explore my portfolio of web applications and development projects.</p>
                <span class="link-arrow">→</span>
            </a>
            
            <a href="{{ route('contact') }}" class="link-card">
                <div class="link-icon">💬</div>
                <h3>Contact</h3>
                <p>Ready to start your project? Let's discuss your requirements.</p>
                <span class="link-arrow">→</span>
            </a>
        </div>
    </div>
</section>
@endsection