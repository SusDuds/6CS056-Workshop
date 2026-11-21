# 6CS056 — Workshop 1

**Application:** Training Institute Management System  
**Scope:** Workshop 1 only — Student CRUD and Course CRUD using Laravel, Blade, Eloquent, MySQL and closure-based routes.

## Start here

1. Read [`WORKSHOP1-SETUP.md`](WORKSHOP1-SETUP.md) from the top. It covers WSL, PHP/Composer, MySQL, DBeaver, `.env`, migrations, running the app and GitHub push.
2. The full ZIP includes Composer dependencies in `vendor/`. Run `composer install` to verify them, then copy `.env.example` to `.env` and enter the MySQL password you created for `workshop_user`. Never commit `.env`.
3. Run `composer install`, `php artisan key:generate`, `php artisan migrate:fresh`, then `php artisan serve`.
4. Open `http://127.0.0.1:8000/students` and `http://127.0.0.1:8000/courses`.

## Workshop 1 requirements included

- Student fields: name, email, phone, address and date of birth.
- Course fields: name, description, duration in weeks, fee, difficulty and active status.
- Create, list, view, edit and delete for both resources.
- Validation, CSRF protection, MySQL migrations and Eloquent models.

This is deliberately the Workshop 1 closure-route implementation. It does not include the Workshop 2 controller/MVC refactor.
