# Notifications

A comprehensive notifications application built with Laravel 9. This application allows users to send and manage various types of notifications, including email, SMS, and in-app notifications.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Installation

Follow these steps to set up the Notifications application on your local machine.

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL or any other supported database

### Steps

1. Clone the repository:

    ```sh
    git clone git@github.com:nymul-islam-moon/notifications.git
    cd notifications
    ```

2. Install the dependencies:

    ```sh
    composer install
    ```

3. Copy the `.env.example` file to `.env`:

    ```sh
    cp .env.example .env
    ```

4. Generate the application key:

    ```sh
    php artisan key:generate
    ```

5. Set up the database in the `.env` file:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. Run the migrations:

    ```sh
    php artisan migrate
    ```

7. (Optional) Seed the database:

    ```sh
    php artisan db:seed
    ```

8. Serve the application:

    ```sh
    php artisan serve
    ```

## Configuration

### Notification Channels

This application supports multiple notification channels. Configure each channel in the `config/services.php` file.

#### Email

Configure your email settings in the `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
