# TODO: Simplify Laravel Project and Recreate Database with Simple Roles

## Steps to Complete

1. **Edit Migration**: Update `2025_10_06_061315_add_role_to_users_table.php` to change role enum to ['user', 'admin'].
2. **Edit UserSeeder**: Remove staff user creation, keep only admin and user.
3. **Edit Auth Config**: Remove staff guard and provider from `config/auth.php`.
4. **Edit RoleMiddleware**: Change to check Auth::user()->role instead of separate guards.
5. **Edit Routes**: Remove staff login routes from `routes/web.php`.
6. **Delete StaffLoginController**: Remove `app/Http/Controllers/Auth/StaffLoginController.php`.
7. **Remove Staff Routes**: Remove staff group routes from `routes/web.php`.
8. **Run Migrations Fresh**: Execute `php artisan migrate:fresh --seed` to recreate database.
9. **Remove Unnecessary Views**: Delete staff-related views in `resources/views/Staff/`.
10. **Test Application**: Verify login and role-based access work.

## Progress
- [x] Step 1
- [x] Step 2
- [x] Step 3
- [x] Step 4
- [x] Step 5
- [x] Step 6
- [x] Step 7
- [x] Step 8
- [x] Step 9
- [x] Step 10
