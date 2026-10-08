# Portify – Online Portfolio Template Generator

> A Laravel-based web application that allows users to create, manage, customize, and generate professional online portfolios using reusable portfolio templates.

**Live Demo:** https://online-portfolio-template-generator-production.up.railway.app

**GitHub Repository:** https://github.com/shankyle-bot/Online-Portfolio-Template-Generator

---

## 📌 Project Overview

**Portify** is an Online Portfolio Template Generator developed using the Laravel framework.

The application allows users to create and manage their personal portfolio information through a simple web interface. Users can enter their personal details, skills, education, experience, projects, and other portfolio information, then view their information using portfolio templates.

The project demonstrates the use of **Laravel MVC architecture, CRUD operations, Blade templates, database migrations, PostgreSQL, CSS styling, Vite, GitHub, and Railway deployment**.

---

## ✨ Features

### 🏠 Home Page

* Clean and responsive landing page
* Portify branding
* Navigation menu
* Quick access to portfolio creation and portfolio management

### ➕ Create Portfolio

Users can create a new portfolio by entering their information.

### 📁 Portfolio Management

Users can:

* Create portfolios
* View portfolios
* Edit portfolios
* Delete portfolios
* Manage saved portfolio information

### 🎨 Portfolio Templates

The application supports portfolio templates that can be selected and used to display portfolio information in different designs.

### 💾 Database Storage

Portfolio information is stored in a PostgreSQL database using **Neon PostgreSQL** in production.

### 📱 Responsive Interface

The application uses custom CSS to provide a clean and user-friendly interface across different screen sizes.

### ☁️ Online Deployment

The application is deployed online using **Railway**, allowing the project to be accessed through a public URL.

---

## 🛠️ Technologies Used

| Technology        | Purpose                            |
| ----------------- | ---------------------------------- |
| **Laravel 13**    | Backend web framework              |
| **PHP 8.4**       | Programming language               |
| **Blade**         | Laravel's templating engine        |
| **PostgreSQL**    | Production database                |
| **Neon**          | Cloud PostgreSQL database provider |
| **SQLite**        | Local development database         |
| **CSS3**          | Application styling                |
| **Vite**          | Frontend asset building            |
| **Node.js / npm** | Frontend dependency management     |
| **Composer**      | PHP dependency management          |
| **Git**           | Version control                    |
| **GitHub**        | Source code repository             |
| **Railway**       | Application deployment             |

---

## 🏗️ Project Architecture

Portify follows the **MVC (Model-View-Controller)** architecture provided by Laravel.

```text
                    ┌─────────────────────┐
                    │       User          │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │   Laravel Routes    │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │    Controllers      │
                    └──────────┬──────────┘
                               │
                    ┌──────────┴──────────┐
                    ▼                     ▼
             ┌─────────────┐      ┌─────────────┐
             │   Models    │      │    Blade    │
             │             │      │    Views    │
             └──────┬──────┘      └─────────────┘
                    │
                    ▼
             ┌─────────────┐
             │  PostgreSQL │
             │    Neon     │
             └─────────────┘
```

---

## 📂 Important Project Structure

```text
Online-Portfolio-Template-Generator/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   └── css/
│       └── portfolio.css
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── portfolios/
│           ├── create.blade.php
│           ├── edit.blade.php
│           ├── index.blade.php
│           ├── show.blade.php
│           └── templates/
│               └── simple.blade.php
│
├── routes/
│   └── web.php
│
├── composer.json
├── composer.lock
├── package.json
├── vite.config.js
└── README.md
```

---

## 🔀 Main Routes

The application provides routes for portfolio management.

| Method | URL                                 | Route Name                  | Purpose                     |
| ------ | ----------------------------------- | --------------------------- | --------------------------- |
| GET    | `/`                                 | `home`                      | Display home page           |
| GET    | `/portfolios`                       | `portfolios.index`          | Display portfolios          |
| POST   | `/portfolios`                       | `portfolios.store`          | Save a portfolio            |
| GET    | `/portfolios/create`                | `portfolios.create`         | Show creation form          |
| GET    | `/portfolios/{portfolio}`           | `portfolios.show`           | Display portfolio           |
| GET    | `/portfolios/{portfolio}/edit`      | `portfolios.edit`           | Show edit form              |
| PUT    | `/portfolios/{portfolio}`           | `portfolios.update`         | Update portfolio            |
| DELETE | `/portfolios/{portfolio}`           | `portfolios.destroy`        | Delete portfolio            |
| PATCH  | `/portfolios/{portfolio}/template`  | `portfolios.selectTemplate` | Select portfolio template   |
| GET    | `/portfolios/{portfolio}/templates` | `portfolios.templates`      | Display available templates |

---

## 🔄 CRUD Operations

Portify implements the four basic CRUD operations.

### Create

Users can create a new portfolio by submitting the portfolio form.

```text
Create Portfolio
       ↓
POST /portfolios
       ↓
Controller
       ↓
Model
       ↓
Database
```

### Read

Saved portfolios can be viewed from the portfolio management page.

```text
GET /portfolios
       ↓
Controller
       ↓
Database
       ↓
Blade View
```

### Update

Users can edit an existing portfolio.

```text
Edit Portfolio
       ↓
PUT /portfolios/{portfolio}
       ↓
Controller
       ↓
Database updated
```

### Delete

Users can delete a portfolio that they no longer need.

```text
Delete Portfolio
       ↓
DELETE /portfolios/{portfolio}
       ↓
Controller
       ↓
Database record deleted
```

---

## 🗄️ Database

### Local Development

The project uses **SQLite** during local development.

```env
DB_CONNECTION=sqlite
```

### Production

The deployed application uses **PostgreSQL through Neon**.

```env
DB_CONNECTION=pgsql
DB_PORT=5432
```

The production database is hosted separately from the Laravel application.

```text
Laravel Application
       │
       │ PostgreSQL connection
       ▼
Neon PostgreSQL
       │
       ▼
Portfolio Data
```

### Database Migrations

The project uses Laravel migrations to create and manage database tables.

The main migrations include:

```text
create_users_table
create_cache_table
create_jobs_table
create_portfolios_table
```

Migrations allow the database structure to be reproduced consistently across development and production environments.

---

## 🎨 Frontend

Portify uses **Blade templates** for its frontend.

The main application layout is:

```text
resources/views/layouts/app.blade.php
```

The application uses a custom stylesheet:

```text
public/css/portfolio.css
```

The layout provides common elements such as:

* Navigation bar
* Portify logo
* Home link
* Create Portfolio link
* My Portfolios link
* Page title
* CSS loading

---

## ⚡ Vite

The project uses **Vite** to build frontend assets.

The production build command is:

```bash
npm run build
```

The project's frontend dependencies are managed through:

```text
package.json
```

---

## 🚀 Installation and Local Setup

### 1. Clone the Repository

```bash
git clone https://github.com/shankyle-bot/Online-Portfolio-Template-Generator.git
```

Enter the project directory:

```bash
cd Online-Portfolio-Template-Generator
```

---

### 2. Install PHP Dependencies

```bash
composer install
```

---

### 3. Install Node Dependencies

```bash
npm install
```

---

### 4. Create the Environment File

Copy the example environment file:

```bash
cp .env.example .env
```

For Windows, you can also manually copy `.env.example` and rename it to:

```text
.env
```

---

### 5. Generate the Application Key

```bash
php artisan key:generate
```

---

### 6. Configure the Database

For local development, configure SQLite in `.env`.

Example:

```env
DB_CONNECTION=sqlite
```

Make sure the SQLite database file exists:

```text
database/database.sqlite
```

---

### 7. Run Database Migrations

```bash
php artisan migrate
```

---

### 8. Build Frontend Assets

```bash
npm run build
```

---

### 9. Start Laravel

```bash
php artisan serve
```

The application will normally be available at:

```text
http://localhost:8000
```

---

## 🌐 Production Deployment

Portify is deployed using **Railway**.

The production architecture is:

```text
GitHub
   │
   │ Push
   ▼
Railway
   │
   │ Laravel Application
   ▼
Neon PostgreSQL
```

### Railway Build Command

```bash
composer install --no-dev --optimize-autoloader && npm install && npm run build
```

### Railway Pre-Deploy Command

```bash
php artisan migrate --force
```

The `--force` option allows Laravel migrations to run in the production environment without requiring an interactive confirmation.

### Railway Start Command

```bash
php artisan serve --host=0.0.0.0 --port=$PORT
```

Railway provides the `$PORT` environment variable used by the application.

---

## 🔐 Environment Variables

Production configuration is stored in Railway environment variables rather than committing sensitive information to GitHub.

Important variables include:

```env
APP_NAME=Portify
APP_ENV=production
APP_DEBUG=false
APP_KEY=********
APP_URL=https://online-portfolio-template-generator-production.up.railway.app

DB_CONNECTION=pgsql
DB_HOST=********
DB_PORT=5432
DB_DATABASE=********
DB_USERNAME=********
DB_PASSWORD=********
```

> **Security:** Database passwords, application keys, API keys, and other secrets should never be committed to GitHub or included directly in this README.

---

## 🧪 Testing the Application

After deployment, the following features should be tested:

* [x] Home page loads
* [x] Navigation works
* [x] Create Portfolio works
* [x] Portfolio data can be saved
* [x] My Portfolios displays saved portfolios
* [x] Portfolio details can be viewed
* [x] Portfolio can be edited
* [x] Portfolio can be deleted
* [x] Portfolio template selection works
* [x] CSS styling loads correctly
* [x] Production database connection works
* [x] Railway deployment works

---

## 📸 Screenshots

Add screenshots of the application below.

### Home Page

Place your screenshot here:

```text
![Portify Home Page](screenshots/home.png)
```

### Create Portfolio

```text
![Create Portfolio](screenshots/create-portfolio.png)
```

### My Portfolios

```text
![My Portfolios](screenshots/my-portfolios.png)
```

### Portfolio Template

```text
![Portfolio Template](screenshots/portfolio-template.png)
```

### Edit Portfolio

```text
![Edit Portfolio](screenshots/edit-portfolio.png)
```

> Create a `screenshots` folder in the repository and place the corresponding images inside it.

---

## 💡 Why Laravel?

Laravel was selected because it provides a complete framework for building modern PHP web applications.

Laravel provides:

* MVC architecture
* Routing
* Controllers
* Models
* Database migrations
* Blade templates
* Validation
* Eloquent ORM
* Artisan commands
* Security features

These features make Laravel suitable for developing a CRUD-based portfolio management application.

---

## 💡 Why PostgreSQL and Neon?

PostgreSQL was selected as the production database because it is a reliable relational database system suitable for web applications.

**Neon** provides a cloud-hosted PostgreSQL database, allowing the deployed Laravel application on Railway to store portfolio data remotely.

This means the application does not depend on the local SQLite database after deployment.

---

## 💡 Why Railway?

Railway was used to deploy the Laravel application because it provides a convenient cloud environment for hosting web applications.

The deployment process connects the GitHub repository to Railway.

When changes are pushed to GitHub, Railway can build and deploy the updated application.

---

## 🔧 Development Workflow

The development workflow used for this project is:

```text
1. Edit Laravel project
        ↓
2. Test locally
        ↓
3. Git add
        ↓
4. Git commit
        ↓
5. Git push
        ↓
6. Railway builds project
        ↓
7. Railway deploys application
        ↓
8. Test live website
```

Typical Git commands:

```bash
git add .
git commit -m "Update portfolio application"
git push
```

---

## 📚 Learning Objectives

This project demonstrates practical knowledge of:

* PHP
* Laravel
* MVC architecture
* CRUD operations
* Blade templating
* Laravel routing
* Controllers
* Eloquent models
* Database migrations
* PostgreSQL
* SQLite
* CSS
* Vite
* npm
* Composer
* Git
* GitHub
* Cloud deployment
* Railway
* Neon PostgreSQL

---

## 🎓 Academic Project

**Project:** Online Portfolio Template Generator
**Application Name:** Portify
**Framework:** Laravel 13
**Language:** PHP 8.4
**Database:** PostgreSQL / Neon
**Deployment:** Railway
**Version Control:** GitHub

---

## 🔗 Project Links

### Live Application

https://online-portfolio-template-generator-production.up.railway.app

### GitHub Repository

https://github.com/shankyle-bot/Online-Portfolio-Template-Generator

---

## 👨‍💻 Developer

**Shankyle-Bot**

GitHub:

https://github.com/shankyle-bot

---

## 📄 License

This project was developed as an academic/project application.

You may modify and use the source code for educational purposes.
