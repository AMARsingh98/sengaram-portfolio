@extends('layouts.app')

@section('title', 'Contact - SENGARAM')

@section('content')
<!-- Contact Hero -->
<section class="contact-hero">
    <div class="container">
        <div class="contact-header">
            <h1 class="section-title">Let's Work Together</h1>
            <p class="section-subtitle">Ready to bring your ideas to life? I'd love to hear about your project and discuss how we can create something amazing together.</p>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-content">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <div class="form-card">
                    <h2>Send Me a Message</h2>
                    <p>Fill out the form below and I'll get back to you within 24 hours..</p>
                    
                    @if(session('success'))
                    <div class="success-message">
                        <div class="message-icon success">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="message-content">
                            <h4>Message Sent Successfully!</h4>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if(session('error'))
                    <div class="error-message">
                        <div class="message-icon error">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                        <div class="message-content">
                            <h4>Message Failed</h4>
                            <p>{{ session('error') }}</p>
                        </div>
                    </div>
                    @endif
                    
                    <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="project_type">Project Type</label>
                            <select id="project_type" name="project_type" class="form-input">
                                <option value="">Select a project type</option>
                                <option value="web_development">Web Development</option>
                                <option value="api_development">API Development</option>
                                <option value="ecommerce">E-commerce Solution</option>
                                <option value="consulting">Technical Consulting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="budget">Budget Range</label>
                            <select id="budget" name="budget" class="form-input">
                                <option value="">Select budget range</option>
                                <option value="under_5000">Under $5,000</option>
                                <option value="5000_10000">$5,000 - $10,000</option>
                                <option value="10000_25000">$10,000 - $25,000</option>
                                <option value="25000_plus">$25,000+</option>
                                <option value="discuss">Let's Discuss</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Project Details</label>
                            <textarea id="message" name="message" class="form-textarea" rows="6" placeholder="Tell me about your project, goals, timeline, and any specific requirements..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary btn-full">
                            Send Message
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="contact-info-section">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <p>I'm always excited to work on new projects and collaborate with amazing people. Let's discuss your ideas!</p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h4>Email</h4>
                                <p>amarsinghsengar98@gmail.com</p>
                                <a href="mailto:amarsinghsengar98@gmail.com" class="method-link">Send Email</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h4>LinkedIn</h4>
                                <p>Connect with me professionally</p>
                                <a href="https://www.linkedin.com/in/amar-singh-sengar-a57670183/" target="_blank" class="method-link">View Profile</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h4>Location</h4>
                                <p>Available for remote work worldwide</p>
                                <span class="method-link">Remote Friendly</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="availability">
                        <h4>Availability</h4>
                        <div class="availability-status">
                            <div class="status-indicator available"></div>
                            <span>Available for new projects</span>
                        </div>
                        <p>I typically respond within 24 hours and am available for projects starting immediately.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection