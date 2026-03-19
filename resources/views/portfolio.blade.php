@extends('layouts.app')

@section('title', 'About Amar Singh Sengar | Senior Software Engineer | Sengaram.in')
@section('description', 'Learn about Amar Singh Sengar – Senior Software Engineer with 4.5+ years experience. Skilled in PHP, Laravel, Python, MySQL. Helped increase sales by 25% through data-driven software solutions.')
@section('canonical', 'https://sengaram.in/amarsinghsengar')
@section('og_title', 'About Amar Singh Sengar | Senior Software Engineer')
@section('og_description', 'Amar Singh Sengar – Senior Software Engineer with 4.5+ years experience in PHP, Laravel, Python & MySQL. Built in-house software for user behavior analysis that increased sales by 25%.')
@section('keywords', 'Amar Singh Sengar, Amar Sengar, Amar Singh, engineer Amar, Amar engineer, about Amar Singh Sengar, Amar Singh Sengar portfolio, senior software engineer')
@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://sengaram.in/"},
        {"@type": "ListItem", "position": 2, "name": "About", "item": "https://sengaram.in/amarsinghsengar"}
    ]
}
</script>
@endsection

@section('content')
<!-- About Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h1>Hi, I'm <span class="highlight">Amar Singh Sengar</span><br>Senior Software Engineer</h1>
                <p>Software Engineer with 4.5+ years of experience, skilled in building scalable systems across both client-driven and product-centric setups. Developed in-house software for user behavior analysis, helping sales teams improve targeting and increase sales by 25%.</p>
                <div class="about-buttons">
                    <a href="#projects" class="btn-primary">
                        View My Work
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-secondary">Contact Me</a>
                </div>
            </div>
            <div class="about-image">
                <div class="profile-card">
                    <div class="profile-image">
                        <img src="images/default-profile-withbg.jpg" alt="Amar Singh Sengar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="profile-placeholder" style="display: none;">👨💻</div>
                    </div>
                    <h3>Amar Singh Sengar</h3>
                    <p>Senior Software Engineer</p>
                    <div class="profile-links">
                        <a href="mailto:amarsinghsengar98@gmail.com" class="profile-link">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                        <a href="tel:+919799295681" class="profile-link">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </a>
                        <a href="https://wa.me/919799295681" target="_blank" class="profile-link">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-number">4.5+</span>
                <span class="stat-label">Years Experience</span>
                <p class="stat-desc">Building scalable web solutions</p>
            </div>
            <div class="stat-card">
                <span class="stat-number">50+</span>
                <span class="stat-label">Projects Completed</span>
                <p class="stat-desc">Successful deliveries across industries</p>
            </div>
            <div class="stat-card">
                <span class="stat-number">10+</span>
                <span class="stat-label">Technologies</span>
                <p class="stat-desc">Modern tech stack expertise</p>
            </div>
            <div class="stat-card">
                <span class="stat-number">25%</span>
                <span class="stat-label">Sales Increase</span>
                <p class="stat-desc">Through data-driven solutions</p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section">
    <div class="container">
        <h2 class="section-title">Skills & Technologies</h2>
        <p class="section-subtitle">I work with modern technologies to build robust and scalable applications.</p>
        
        <div class="tech-grid">
            @php
            $technologies = [
                ['name' => 'PHP', 'icon' => '🐘', 'level' => 95],
                ['name' => 'Laravel', 'icon' => '⚙️', 'level' => 95],
                ['name' => 'CodeIgniter', 'icon' => '🔥', 'level' => 90],
                ['name' => 'JavaScript', 'icon' => '📜', 'level' => 85],
                ['name' => 'MySQL', 'icon' => '🗄️', 'level' => 90],
                ['name' => 'Python', 'icon' => '🐍', 'level' => 80],
                ['name' => 'jQuery', 'icon' => '💫', 'level' => 85],
                ['name' => 'AWS', 'icon' => '☁️', 'level' => 70],
            ];
            @endphp
            
            @foreach($technologies as $tech)
            <div class="tech-item">
                <span class="tech-icon">{{ $tech['icon'] }}</span>
                <span class="tech-name">{{ $tech['name'] }}</span>
                <div class="tech-level">
                    <div class="level-bar">
                        <div class="level-fill" style="width: {{ $tech['level'] }}%"></div>
                    </div>
                    <span class="level-text">{{ $tech['level'] }}%</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="experience-section">
    <div class="container">
        <h2 class="section-title">Experience & Education</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">Nov 2022 - Present</div>
                <div class="timeline-content">
                    <h3>Senior Software Engineer</h3>
                    <h4>Alpha-Vector Pvt. Ltd (Ninety-One Cycles)</h4>
                    <p>Manage outdoors91.com, overseeing online orders and enhancing user experience. Conduct user behavior analysis to optimize website performance and deliver personalized push notifications. Developed dashboards for monitoring website metrics, boosting sales by 25%.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-date">Aug 2021 - Nov 2022</div>
                <div class="timeline-content">
                    <h3>Software Engineer</h3>
                    <h4>Live DeftSoft Informatics Pvt. Ltd</h4>
                    <p>Conducted calls with international clients to understand requirements and provide project updates. Analyzed client needs and translated them into actionable development tasks. Developed, tested, and deployed software solutions per client specifications.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-date">April 2020 - July 2021</div>
                <div class="timeline-content">
                    <h3>Associate Software Engineer</h3>
                    <h4>Fusion Business Solution Pvt. Ltd</h4>
                    <p>Designed and implemented a system to analyze recorded conversations using AI and NLP techniques. Automated the extraction of key information from dialogues, reducing manual data entry by 40%. Focused on minimizing human effort by automating repetitive workflows.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects-section" id="projects">
    <div class="container">
        <h2 class="section-title">Featured Projects</h2>
        <p class="section-subtitle">Some of my recent work that showcases my skills and expertise.</p>
        
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image">
                    <div class="project-placeholder">
                        <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"/>
                        </svg>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Outdoors91 - E-Commerce Platform</h3>
                    <p>High-traffic product website with analytics & sales intelligence system. Led team to deliver data-driven solutions, user behavior analysis, and sales tracking dashboards that boosted sales by 25%.</p>
                    <div class="project-tech">
                        <span>Laravel</span>
                        <span>CodeIgniter</span>
                        <span>Python</span>
                        <span>MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="https://www.outdoors91.com/" target="_blank" class="project-link">View Live</a>
                        <a href="#" class="project-link">Details</a>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <div class="project-placeholder">
                        <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                        </svg>
                    </div>
                </div>
                <div class="project-content">
                    <h3>User Behavior Analytics System</h3>
                    <p>Custom in-house software for analyzing user behavior patterns. Enables smarter sales strategies, personalized push notifications, and improved user engagement through data-driven insights.</p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>PHP</span>
                        <span>JavaScript</span>
                        <span>MySQL</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link">View Details</a>
                        <a href="#" class="project-link">Case Study</a>
                    </div>
                </div>
            </div>
            
            <div class="project-card">
                <div class="project-image">
                    <div class="project-placeholder">
                        <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/>
                        </svg>
                    </div>
                </div>
                <div class="project-content">
                    <h3>AI Conversation Analysis System</h3>
                    <p>Designed and implemented system to analyze recorded conversations using AI and NLP techniques. Automated key information extraction from dialogues, reducing manual data entry by 40%.</p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>AI/NLP</span>
                        <span>PHP</span>
                        <span>Automation</span>
                    </div>
                    <div class="project-links">
                        <a href="#" class="project-link">View Details</a>
                        <a href="#" class="project-link">Technology</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="section-title">What I Do</h2>
        <p class="section-subtitle">I provide comprehensive web development services to help businesses grow.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/>
                    </svg>
                </div>
                <h3>Web Development</h3>
                <p>Full-stack web applications using modern frameworks like Laravel, React, and Vue.js for optimal performance and user experience.</p>
                <ul class="service-features">
                    <li>Custom Web Applications</li>
                    <li>E-commerce Solutions</li>
                    <li>CMS Development</li>
                    <li>Performance Optimization</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/>
                    </svg>
                </div>
                <h3>API Development</h3>
                <p>RESTful APIs and microservices for scalable backend solutions, third-party integrations, and mobile app backends.</p>
                <ul class="service-features">
                    <li>REST API Design</li>
                    <li>Database Architecture</li>
                    <li>Third-party Integrations</li>
                    <li>API Documentation</li>
                </ul>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>
                    </svg>
                </div>
                <h3>Technical Consulting</h3>
                <p>Strategic technical guidance, code reviews, architecture planning, and technology stack recommendations for your projects.</p>
                <ul class="service-features">
                    <li>Architecture Planning</li>
                    <li>Code Reviews</li>
                    <li>Technology Selection</li>
                    <li>Performance Audits</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection