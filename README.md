# 📚 FilamentPHP Book Management App

A Laravel + FilamentPHP project built as part of a 5-Day Developer Challenge. This app provides an admin dashboard to manage books with advanced UI features, file uploads, role-based access control, and a public API.

## 🚀 Features

- 📘 Full CRUD for Books using Filament Resources
- 🧠 Custom dashboard widgets (e.g., total books)
- 📂 File uploads with validation (images or PDFs)
- 🔐 Role-based access control using `spatie/laravel-permission`
- 🌐 REST API to list books
- 📊 Filament Charts plugin integration





# 1. Clone the repository
git clone https://github.com/ahmedcuseyb/Deploy-project.git
cd Deploy-project

# 2. Install backend dependencies
composer install

# 3. Copy the .env file and generate app key
cp .env.example .env
php artisan key:generate

# 4. Configure your .env
# Set database credentials and other environment values
# Example:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=filament_books
# DB_USERNAME=root
# DB_PASSWORD=yourpassword

# 5. Run database migrations and seeders
php artisan migrate --seed

# 6. Link storage for uploaded files
php artisan storage:link

# 7. (Optional) Install frontend dependencies
npm install
npm run build

# 8. Serve the application
php artisan serve
