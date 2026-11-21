# Workshop 2 — Ready-to-use MVC project

This package is based on your uploaded `6CS056-Workshop` project. It retains the original Laravel project, existing Student/Course tables and UI, and refactors the application for the Workshop 2 MVC requirements in the supplied course guide.

## What is included

- StudentController and CourseController with all seven resource methods
- `Route::resource()` routes and route model binding
- Named routes throughout the views
- Centralised validation rules in each controller
- Student date cast and calculated `age` accessor
- Course boolean and decimal casts
- Shared `layouts/app.blade.php`, navbar and footer partials
- Reusable alert, delete-form, form-input and form-textarea Blade components
- Shared Student and Course form partials
- Existing visual design and CSS retained
- Composer `vendor/` dependencies included so Composer install is not normally needed

## Important: local configuration is intentionally not included

The `.env` file contains your private app key and database password. It is deliberately excluded from this ZIP. When applying this package over your existing project, keep your existing `.env` file unchanged. The existing database is `WorkshopDB`; Workshop 2 does not add or alter tables, so do not create a second database and do not run `migrate:fresh`.

The `.git` folder is also excluded so this package cannot overwrite your existing repository history, branch configuration, or GitHub remote.

## Apply to your existing WSL project

1. Back up the existing project folder first.
2. Extract this ZIP into `~/6CS056/` so the contents go into `~/6CS056/6CS056-Workshop/` and merge/overwrite the provided application files.
3. Do not delete or replace your existing `.env` or `.git` folder.
4. Open Ubuntu and run:

```bash
cd ~/6CS056/6CS056-Workshop
php artisan --version
php artisan route:list --except-vendor
```

5. Check that `.env` still points to your existing MySQL database `WorkshopDB` and contains the correct local MySQL username/password. Do not share this file or commit it.
6. Check migration status, then run normal migrations only if Laravel reports pending migrations:

```bash
php artisan migrate:status
php artisan migrate
```

There are no new Workshop 2 migrations in this package. Do not run `php artisan migrate:fresh` because it deletes existing tables and data.

7. Start the app:

```bash
php artisan serve
```

8. Open `http://127.0.0.1:8000`, then test `/students` and `/courses`.

## GitHub workflow

The expected repository is still `SusDuds/6CS056-Workshop`. Keep Workshop 1 history. After applying the code and checking that the working tree is clean of secrets, create Workshop2 from the existing Workshop1 branch:

```bash
git status
git switch Workshop1
git switch -c Workshop2
```

Commit related work in meaningful stages, for example:

```bash
git add app/Http/Controllers/StudentController.php app/Models/Student.php resources/views/student routes/web.php
git commit -m "Refactor students into MVC architecture"

git add app/Http/Controllers/CourseController.php app/Models/Course.php resources/views/course resources/views/components resources/views/layouts resources/views/partials public/css/app.css resources/views/welcome.blade.php
git commit -m "Add course MVC and reusable Blade views"
```

Review `git status` before every `git add`. Never add `.env`, credentials, local databases, `vendor/`, or runtime logs. Then push:

```bash
git push -u origin Workshop2
```

On GitHub create a Pull Request from `Workshop2` into `main`, select **Create a merge commit**, merge it, and keep the Workshop2 branch.

## Note about environment

The archive includes PHP vendor dependencies, but it cannot include or install your WSL PHP/MySQL services, configure your machine's MySQL account, or transfer a live MySQL server database. Reuse the environment and WorkshopDB you already set up for Workshop 1.
