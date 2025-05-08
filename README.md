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

Make sure you have Composer installed, then run:

```bash
composer install
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

### 6. Start the Local Development Server

```bash
php artisan serve
```

Your application will be available at http://127.0.0.1:8000

## 📚 Features

- **Authors Management**: Create, read, update, and delete author profiles
- **Books Management**: Full CRUD operations for books with author relationships
- **Interactive Chatbot**: Query your book database through a simple chat interface
- **Responsive Design**: Works on desktop and mobile devices

## 🔧 Technologies Used

- Laravel 10.x
- SQLite
- Blade Templates
- Bootstrap 5
- JavaScript/jQuery

## 📁 Project Structure

```
├── app/                      # Application code
│   ├── Http/                 # Controllers, Middleware
│   ├── Models/               # Eloquent models
│   └── Services/             # Custom service classes
├── database/                 
│   ├── migrations/           # Database migrations
│   └── seeders/              # Database seeders
├── resources/
│   ├── views/                # Blade templates
│   ├── js/                   # JavaScript files
│   └── css/                  # CSS files
├── routes/                   # Application routes
└── tests/                    # Test cases
```

## 🔄 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET    | /api/authors | Get all authors |
| GET    | /api/authors/{id} | Get author by ID |
| POST   | /api/authors | Create new author |
| PUT    | /api/authors/{id} | Update author |
| DELETE | /api/authors/{id} | Delete author |
| GET    | /api/books | Get all books |
| GET    | /api/books/{id} | Get book by ID |
| POST   | /api/books | Create new book |
| PUT    | /api/books/{id} | Update book |
| DELETE | /api/books/{id} | Delete book |

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch: `git checkout -b feature-name`
3. Commit your changes: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin feature-name`
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 📧 Contact

For any questions or feedback, please reach out to [your-email@example.com](mailto:your-email@example.com)