# IRONPDF for C++ Landing Page

A modern, responsive landing page for the IRONPDF for C++ Beta Software Program. Built with CodeIgniter 4, this landing page showcases the product features and provides an early access signup form.

## Project Overview

This is a pixel-perfect, production-quality landing page implementation that features:
- Responsive design optimized for all screen sizes
- Modern UI with custom CSS and Bootstrap integration
- SEO-optimized with proper semantic HTML
- Excellent Core Web Vitals scores
- Accessibility considerations (ARIA, keyboard navigation, contrast)
- Cross-browser compatibility

## Technology Stack

- **PHP**: 8.1 or higher
- **Framework**: CodeIgniter 4
- **Frontend**: Bootstrap 5.3.8

## Requirements

- PHP 8.1 or higher
- Composer

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/myopaingthu/iron-landing.git
cd iron-landing
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy the environment file and configure it:

```bash
cp env .env
```

Edit `.env` and set your `app.baseURL`:

```env
app.baseURL = 'http://localhost:8080/'
```

### 4. Set Permissions

Ensure the `writable` directory is writable:

```bash
chmod -R 755 writable
```

### 5. Run the Development Server

```bash
php spark serve
```

The application will be available at `http://localhost:8080/`
