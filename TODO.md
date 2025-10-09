# TODO: Translate Laravel Project to English

## Overview
Translated all Indonesian elements to English: renamed 'Kategori' to 'Category', updated models, controllers, requests, migrations, routes, views, and messages. Database migrated fresh with new schema.

## Steps Completed

1. **Rename and Update Models/Controllers/Requests**
   - Renamed `Kategori` model to `Category`, updated table to 'categories', field to 'name'.
   - Renamed `KategoriController` to `CategoryController`.
   - Renamed `KategoriStoreRequest` to `CategoryStoreRequest`, updated rules.
   - Renamed `KategoriUpdateRequest` to `CategoryUpdateRequest`, updated rules.
   - Renamed `bookController` to `BookController` (file renamed).

2. **Update Migrations**
   - Renamed migration file to `create_categories_table.php`.
   - Updated table name to 'categories', column to 'name'.

3. **Update Controllers**
   - Updated `BookController` messages to English.
   - Updated `CategoryController` to use `Category` model and requests.
   - Updated references from `Kategori` to `Category`.

4. **Update Routes**
   - Changed use and resource route to `CategoryController`.

5. **Update Views**
   - Updated category views to use `$category` variable, `name` field.
   - Updated book views selects to use `$cat->name`.
   - Updated form names and errors.

6. **Update Book Model Relationship**
   - Changed relationship to `Category::class`, 'category', 'name'.

7. **Clear Caches and Migrate**
   - Cleared config, route, view caches.
   - Ran `migrate:fresh` successfully.

## Progress
- [x] Rename models, controllers, requests
- [x] Update migrations
- [x] Update controllers and routes
- [x] Update views
- [x] Update relationships
- [x] Clear caches and migrate
