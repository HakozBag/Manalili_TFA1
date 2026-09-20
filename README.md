# Manalili_TFA1

A basic four-page Point-of-Sale system developed using CodeIgniter 4.

## Pages

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Data

Customer and user records are stored using static PHP arrays.
No database or SQL is used in this version.

## Setup

1. Install PHP and Composer.
2. Run `composer install`.
3. Configure the `.env` file and set the `app.baseURL`.
4. Start the application:

```bash
php spark serve
