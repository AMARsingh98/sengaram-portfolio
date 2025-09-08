# SENGARAM - Personal Portfolio Website

A modern, minimal, and professional Laravel 12 personal portfolio website for Amar Singh Sengar.

## Features

- **Modern Design**: Clean, professional layout with smooth animations and gradients
- **Responsive**: Mobile-first design that works on all devices
- **SEO Optimized**: Proper meta tags and semantic HTML structure
- **Fast Loading**: Optimized assets and minimal dependencies
- **Contact Form**: Functional contact form with validation

## Pages

1. **Home (Landing Page)**: 
   - Hero section with SENGARAM branding
   - Personal tagline and description
   - Quick stats and technologies
   - Call-to-action sections

2. **Portfolio Page**:
   - About me section
   - Technical skills showcase
   - Professional experience timeline
   - Education details
   - Featured projects

3. **Contact Page**:
   - Contact information
   - Contact form
   - Social media links

## Technologies Used

- **Backend**: Laravel 12, PHP 8.2+
- **Frontend**: Tailwind CSS, JavaScript (Vanilla)
- **Build Tool**: Vite
- **Database**: SQLite (default)

## Installation

1. Clone or download the project
2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Copy environment file:
   ```bash
   copy .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run migrations:
   ```bash
   php artisan migrate
   ```

7. Build assets:
   ```bash
   npm run build
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## Development

For development with hot reloading:
```bash
npm run dev
```

## Customization

- Update personal information in the Blade templates
- Modify colors and styling in `resources/css/app.css`
- Add new sections or pages as needed
- Configure email settings for contact form functionality

## Contact

- **Email**: amar.sengar@email.com
- **LinkedIn**: [linkedin.com/in/amar-singh-sengar-a57670183](https://www.linkedin.com/in/amar-singh-sengar-a57670183/)

## License

This project is open source and available under the MIT License.