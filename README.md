# Laravel Authors & Books CRUD App

A simple Laravel application with full CRUD functionality for Authors and Books, including a basic chatbot using real-time data.

## 🚀 Setup Instructions

Follow these steps to get the project up and running:

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
```

### 2. Install Dependencies

Make sure you have Composer and Node.js/npm installed, then run:

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### 3. Setup Environment

Copy the `.env.example` file and create your `.env`:

```bash
cp .env.example .env
```

Generate the app key:

```bash
php artisan key:generate
```

### 4. Use SQLite for Database

This project uses **SQLite** for easy setup:

* Create a new SQLite file:

```bash
touch database/database.sqlite
```

* In `.env`, set the DB connection like this:

```
DB_CONNECTION=sqlite
DB_DATABASE=${DB_DATABASE_PATH}/database/database.sqlite
```

You can also set an absolute path like: `DB_DATABASE=/full/path/to/database/database.sqlite`

### 5. Run Migrations and Seeders

```bash
php artisan migrate --seed
```

This will create the tables and seed the database with real book and author data.

### 6. Compile Assets

Compile the frontend assets (including Tailwind CSS):

```bash
# For development
npm run dev

# For production
npm run build
```

### 7. Start the Local Development Server

```bash
php artisan serve
```