# CMS-Inferno

## Overview

CMS-Inferno is a robust Content Management System (CMS) developed using CodeIgniter 3. It provides a flexible and easy-to-use platform for managing website content, including pages, posts, media, and more. CMS-Inferno is designed to be customizable and extendable, making it suitable for a variety of web applications.

## Features

- **User Authentication**: Secure login and registration system for managing access.
- **Content Management**: Create, edit, and delete pages and posts with ease.
- **Media Library**: Manage images and files through an intuitive interface.
- **Admin Dashboard**: User-friendly admin panel for content and settings management.
- **Responsive Design**: Optimized for a seamless experience on both desktop and mobile devices.
- **Customizable**: Easily extend and customize to fit specific needs.

## Requirements

- PHP 5.6 or higher
- CodeIgniter 3.x
- MySQL 5.7 or higher
- Apache or Nginx web server
- Composer (for managing dependencies)

## Installation

1. **Clone the Repository**

```bash
git clone https://github.com/iceithq/cms-inferno.git
cd cms-inferno
```

## Install Dependencies

Install Composer dependencies:

```bash
composer install
```

## Configure Environment

Copy the example environment configuration file:

```bash

cp application/config/database.php.example application/config/database.php
```

Edit application/config/database.php to set your database credentials.

## Set Up Database

Import the provided SQL dump to create the necessary database tables:

```bash

mysql -u username -p database_name < database_dump.sql
```

## Set Permissions

Ensure the application/cache/ and application/logs/ directories are writable by the web server:

```bash

chmod -R 755 application/cache
chmod -R 755 application/logs
```

## Access the Application

Navigate to http://yourdomain.com in your web browser to access CMS-Inferno.

## Usage

* **Admin Login**: Access the admin panel at http://yourdomain.com/admin using the credentials created during installation.
* **Manage Content**: Use the admin dashboard to create, edit, and delete pages and posts.
* **Upload Media**: Manage images and files through the media library.

## Configuration

Base URL: Set the base_url in application/config/config.php:

```php
$config['base_url'] = 'http://yourdomain.com/';
```

SMTP Settings: Configure email settings in application/config/email.php if needed.

## Troubleshooting

* **404 Errors**: Verify your .htaccess file and server configuration for URL rewriting.
* **Database Connection Issues**: Check your database credentials in application/config/database.php.

## Contributing

* Fork the repository.
* Create a new branch (git checkout -b feature/your-feature).
* Commit your changes (git commit -am 'Add new feature').
* Push to the branch (git push origin feature/your-feature).
* Open a Pull Request.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

## Acknowledgements

* CodeIgniter 3 for the framework.
* Composer for dependency management.
* Various open-source libraries and tools.

## Contact

For any questions or support, please contact this repo.
