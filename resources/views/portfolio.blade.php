@extends('layouts.app')

@section('title', 'Portfolio - SENGARAM')

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
                        <img src="https://media.licdn.com/dms/image/v2/D4D03AQFK13ZJDaxgEA/profile-displayphoto-shrink_800_800/B4DZPj2e0.HMAc-/0/1734694532401?e=1759968000&v=beta&t=dU01vBoi-dklA1fyEnWSnmb7qiplHZx0s_Kw_KCv2zM" alt="Amar Singh Sengar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
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
                        <a href="https://www.linkedin.com/in/amar-singh-sengar-a57670183/" target="_blank" class="profile-link">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
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