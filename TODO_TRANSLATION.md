# TODO: Translate Project to English

## Overview
Translate all Indonesian elements to English, including renaming models, controllers, files, database fields, messages, and updating views/routes.

## Steps

1. **Translate messages in BookController**
   - Change 'Buku berhasil disimpan!' to 'Book saved successfully!'
   - 'Buku berhasil diupdate!' to 'Book updated successfully!'
   - 'Buku berhasil dihapus!' to 'Book deleted successfully!'

2. **Rename bookController.php to BookController.php**
   - Rename file
   - Ensure routes use correct class

3. **Rename and update KategoriController**
   - Rename KategoriController.php to CategoryController.php
   - Update class name to CategoryController
   - Update use statements

4. **Rename and update Kategori model**
   - Rename Kategori.php to Category.php
   - Update class name to Category
   - Change table name to 'categories'
   - Change fillable to ['name']

5. **Rename request classes**
   - KategoriStoreRequest.php to CategoryStoreRequest.php
   - KategoriUpdateRequest.php to CategoryUpdateRequest.php
   - Update class names and rules (kategori to name)

6. **Update migration**
   - Rename 2025_09_22_033102_create_kategoris_table.php to create_categories_table.php
   - Update table name to 'categories'
   - Update column name from 'kategori' to 'name'

7. **Update Book model relationship**
   - Change belongsTo(Kategori::class, 'kategori', 'kategori') to Category::class, 'category', 'name'

8. **Update routes/web.php**
   - Change use KategoriController to CategoryController
   - Change parameter ['categories' => 'kategori'] to ['categories' => 'category']
   - Translate comment to English

9. **Update views**
   - categories/create.blade.php: change label to 'Category', placeholder to 'Enter Category'
   - books/index.blade.php: change $cat->kategori to $cat->name
   - Update any routes from kategoris to categories
   - Check other views for Indonesian text

10. **Update any remaining references**
    - Search for 'Kategori' and replace with 'Category'
    - Update database if needed (migrate:fresh)

## Progress
- [ ] Step 1
- [ ] Step 2
- [ ] Step 3
- [ ] Step 4
- [ ] Step 5
- [ ] Step 6
- [ ] Step 7
- [ ] Step 8
- [ ] Step 9
- [ ] Step 10
