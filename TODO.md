# TODO: Remake Database Configuration and Verify CRUD Views

## Overview
Reset database to MySQL (db_pos) via .env update (user-confirmed). Views for DataBorrow and Borrow CRUD are fully implemented with Bootstrap (tables, forms, selects for relations, error handling, pagination). Minor fix: Initialize $i in index.blade.php loops to avoid undefined variable. Proceed step-by-step, updating this file after each major step.

## Steps

1. **Clear Laravel Caches** (Ensure fresh config after .env change)
   - Run `php artisan config:clear`
   - Run `php artisan route:clear`
   - Run `php artisan view:clear`

2. **Remake Database** (Fresh migration to reset tables)
   - Run `php artisan migrate:fresh` (drops and recreates all tables, including databorrows, borrows, books, etc.)
   - Optional: Run `php artisan db:seed` if seeders exist for testing data.

3. **Fix Minor View Issues** (Ensure no PHP errors)
   - Edit `resources/views/databorrows/index.blade.php`: Add `@php $i = 0; @endphp` before `@foreach`.
   - Edit `resources/views/borrows/index.blade.php`: Add `@php $i = 0; @endphp` before `@foreach`.

4. **Test Functionality**
   - Start server: `php artisan serve`
   - Use browser to visit http://127.0.0.1:8000/databorrows (create/view/edit/delete patrons).
   - Visit http://127.0.0.1:8000/borrows (create loans with borrower/book selects, view relations).
   - Check for errors in logs; verify data persists in db_pos.

## Progress
- [x] Step 1: Clear Caches
- [x] Step 2: Remake Database
- [x] Step 3: Fix Views
- [x] Step 4: Test
