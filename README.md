# Laravel SaaS Project with Stripe & Filament

This project is a complete SaaS application built with Laravel, featuring admin and user dashboards, with Stripe integration for subscriptions.

## Key Features
- **Admin Dashboard:** Built with Filament for managing users and plans.
- **User Dashboard:** Allows users to manage their subscriptions.
- **Stripe Integration:** Full integration with Laravel Cashier for subscription and payment management.
- **Role Management:** Uses Spatie Permission for defining roles (Admin, User).
- **SQL Database:** SQLite is used for easy initial setup, and can be easily switched to MySQL.

## Requirements
- PHP 8.1+
- Composer
- SQLite (or another SQL engine)

## Installation Steps
1. Clone the project.
2. Run `composer install`.
3. Configure the `.env` file (pre-configured to use SQLite).
4. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
5. Start the development server:
   ```bash
   php artisan serve
   ```

## Demo Login Credentials
- **Admin:**
  - Email: `admin@example.com`
  - Password: `password`
  - URL: `/admin`
- **User:**
  - Email: `user@example.com`
  - Password: `password`
  - URL: `/app`

## Stripe Setup
Update the Stripe keys in the `.env` file:
```env
STRIPE_KEY=your_public_key
STRIPE_SECRET=your_secret_key
```

## Project Links
- GitHub Repository: [moalarbi/laravel-saas-project](https://github.com/moalarbi/laravel-saas-project)
