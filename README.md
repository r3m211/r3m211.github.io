# PHP Portfolio Website

A professional portfolio website built with PHP, showcasing programming projects with a focus on an employee portal PHP/MySQL project.

## Features

- Clean, responsive design
- Sections for About, Skills, Projects, and Contact
- Contact form with validation
- No database required - contact form submissions stored in JSON file

## Project Structure

```
php_portfolio/
├── css/                # CSS styles
├── data/               # Data storage for contact form submissions
├── images/             # Image assets
├── includes/           # PHP includes and configuration
├── lib/                # PHP library code
├── partials/           # Page section partials
├── index.php           # Main entry point
└── run.php             # Development server launcher
```

## Usage

### Running the website locally

There are two ways to run this website locally:

#### Option 1: Using PHP's built-in server

1. Navigate to the project directory
2. Run the development server script:
   ```
   php run.php
   ```
3. Visit http://localhost:8000 in your browser

#### Option 2: Manual server start

1. Navigate to the project directory
2. Start PHP's built-in server:
   ```
   php -S localhost:8000
   ```
3. Visit http://localhost:8000 in your browser

### Configuration

Edit `includes/config.php` to change site details:

- Site title, name, description
- Contact information
- Social media links
- Contact form settings

## Contact Form

The contact form stores submissions in a JSON file in the `data/` directory. In a production environment, you would want to set up mail sending functionality.

To enable email sending, uncomment and configure the mail function in `lib/contact_handler.php`.

## Customization

- **Theme Colors**: Edit the Tailwind configuration in the header to adjust the primary color
- **Content**: Update text in each partial file under the `partials/` directory
- **Skills**: Modify the skills array in `partials/skills.php`
- **Projects**: Update the projects data in `partials/projects.php`

## License

This project is open source and available under the [MIT License](LICENSE).