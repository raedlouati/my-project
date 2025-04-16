# PHP Login Project

A simple PHP project with a login page based on Bootstrap and Docker support.



## Features

- Login system with session management
- Bootstrap 5 for responsive design
- Docker support for easy deployment
- GitHub Actions CI/CD pipeline

## Requirements

- PHP 8.0+
- Web server (Apache/Nginx)
- Docker (optional, for containerized deployment)

## Quick Start

### Using Docker

1. Clone this repository
2. Run with Docker Compose:
   ```bash
   docker-compose up -d
   ```
3. Access the application at http://localhost:8080

### Manual Setup

1. Clone this repository
2. Place the files in your web server's document root
3. Access the application through your web server

## Login Credentials

For demo purposes, use these credentials:
- Username: admin
- Password: password123

**Note:** In a production environment, you should implement proper user authentication with a database.

## Docker Build

To build the Docker image manually:

```bash
docker build -t my-php-project .
docker run -p 8080:80 my-php-project
```

## GitHub Actions

This project includes a GitHub Actions workflow that:

1. Lints PHP files
2. Builds the Docker image
3. Tests the Docker image
4. Provides deployment information (customize for your deployment target)

## Project Structure

```
├── index.php          # Main entry point (protected)
├── login.php          # Login form
├── authenticate.php   # Login validation
├── logout.php         # Session termination
├── css/               # Stylesheets
│   └── style.css      # Custom CSS
├── js/                # JavaScript files
│   └── script.js      # Custom JS
├── includes/          # Reusable components
│   ├── header.php     # Page header with navigation
│   └── footer.php     # Page footer
├── Dockerfile         # Docker configuration
├── docker-compose.yml # Docker Compose configuration
└── .github/           # GitHub configuration
    └── workflows/     # GitHub Actions workflows
        └── main.yml   # CI/CD pipeline
```

## License

MIT
