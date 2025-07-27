# Test Assignment: Build a Filament Admin Panel and a Front-Facing Page

This is a Laravel 11 application built as a test assignment, utilizing Filament 3 for the admin panel. The application is designed to manage two primary models: `CharacteristicCategories` and `Characteristics`.

## Models and Database Schema

### 1. `CharacteristicCategory`

- `id` (primary key)
- `name` (string)
- `Timestamps` (created_at, updated_at)

### 2. Relationships (`CharacteristicCategory`)

- `Has many Characteristics` (one-to-many)

### 3. `Characteristic`

- `id` (primary key)
- `name` (string)
- `meta_data` (JSON) — This field is structured to contain:
  - `description` (a textual description)
  - `type` (which can be `boolean`, `integer`, `string`, or any future extension)
- `characteristic_category_id` (foreign key to `characteristic_categories` table)
- `Timestamps` (created_at, updated_at)

### 4. Relationships (`Characteristic`)

- `Belongs to CharacteristicCategory` (one-to-many)

## Requirements

### 1. Filament Admin Panel

- Create a Filament resource for `CharacteristicCategories` that allows:
  - Listing categories
  - Creating / Editing / Deleting categories
- Create a Filament resource for `Characteristics` that allows:
  - Listing characteristics
  - Creating / Editing / Deleting characteristics
- Ensure that the `meta_data` field can be managed in a sensible way (e.g., handles `description` and `type` appropriately, including dynamic field types based on `type` selection).

### 2. Front-Facing Page (outside of Filament)

- A route (`/characteristics`) that displays a list of `CharacteristicCategories` and their `Characteristics`.
- This page uses Tailwind CSS (Laravel 11 + Vite integration).
- The exact route and controller structure is organized following Laravel best practices.

### 3. General Notes

- The application is built using Laravel 11 and Filament 3.
- Follows standard Laravel best practices in organizing routes/controllers and overall code structure.
- Utilizes Tailwind CSS for any necessary styling beyond Filament’s default admin styling.
- No special styling or layout is required beyond the basics, with some creative enhancements applied.

## Acceptance Criteria

1. `CharacteristicCategories` and `Characteristics` management pages exist in Filament.
2. Ability to create, edit, and delete records for both resources in the Filament admin.
3. The `meta_data` (JSON) can handle `description` and `type` values, with `type` influencing the input for `description` (e.g., boolean values as a select, integer as a number input).
4. A public-facing page (`/characteristics`) shows all categories and the characteristics in each category in a Tailwind-styled layout.
5. Code is well-structured, easy to understand, and follows Laravel best practices (including Domain-Driven Design principles with Service and Repository layers).

## Getting Started

Follow these steps to set up and run the application locally.

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm (or Yarn)
- MySQL or other compatible database

### Installation

1. **Clone the repository:**

   ```bash
   git clone <repository-url>
   cd Admin-Panel
   ```

   (If you already have the project files, skip cloning and `cd` into your project root.)
2. **Install PHP dependencies:**

   ```bash
   composer install
   ```

   (If you are using `composer.phar` directly, use `php composer.phar install`)
3. **Configure environment variables:**
   Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```
4. **Generate application key:**

   ```bash
   php artisan key:generate
   ```
5. **Database Setup:**
   Configure your database credentials in the `.env` file (e.g., `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
6. **Run migrations and seed the database:**
   To create the necessary tables and populate them with initial data (including an admin user and sample characteristics):

   ```bash
   php artisan migrate:fresh --seed
   ```

   **WARNING:** `migrate:fresh` will delete all existing tables and data in your configured database. Use `php artisan migrate --seed` if you only want to run new migrations and seed data without deleting existing tables.
7. **Install Node.js dependencies and compile assets:**

   ```bash
   npm install
   npm run dev
   ```

   Keep `npm run dev` running in a separate terminal window to compile Tailwind CSS and other assets.
8. **Start the Laravel development server:**

   ```bash
   php artisan serve
   ```

## Usage

- **Front-Facing Page:** Access the main application at `http://127.0.0.1:8000/`.
- **Characteristics Page:** View the list of characteristics at `http://127.0.0.1:8000/characteristics`.
- **Filament Admin Panel:** Access the admin panel at `http://127.0.0.1:8000/admin`.
  - **Admin Credentials:**
    - Email: `roman@matviy.pp.ua`
    - Password: `password`

## About the Developer

This project was developed by Roman Matviy.

- **My CV:** [roman.matviy.pp.ua](https://roman.matviy.pp.ua)
