# University Notifications Application

A comprehensive university notifications application built with Laravel 9. This application allows faculty members of a university to send and manage various types of notifications, including email, SMS, and in-app notifications, to keep students updated with the latest information.

## Table of Contents

- [Description](#description)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Description

The University Notifications Application is designed to facilitate effective communication between faculty members and students. Faculty members can create notifications that will be sent to students to keep them updated with the latest information, such as announcements, schedule changes, deadlines, and other important updates.

## Installation

Follow these steps to set up the University Notifications Application on your local machine.

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

2. Copy the `.env.example` file to `.env`:

    ```sh
    cp .env.example .env
    ```

3. Install the dependencies:

    ```sh
    composer install
    composer update
    ```

4. Generate the application key:

    ```sh
    php artisan key:generate
    ```

5. Open the `.env` file and update the database details:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. Run the migrations and seed the database:

    ```sh
    php artisan migrate:fresh --seed
    ```

7. Serve the application:

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
