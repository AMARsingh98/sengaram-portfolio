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
                    <div class="project-placeholder">🚴</div>
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
                    <div class="project-placeholder">📊</div>
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
                    <div class="project-placeholder">🤖</div>
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
                <div class="service-icon">🚀</div>
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
                <div class="service-icon">🎯</div>
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
                <div class="service-icon">💬</div>
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