# TODO List for DataBorrow Validation and Form Updates

## Completed Tasks
- [x] Update `resources/views/databorrows/create.blade.php`:
  - [x] Add maxlength="60" and pattern for name_borrower to allow only letters and spaces, max 60 chars.
  - [x] Change class input to dropdown with options: X PPLG, X PMN, X HTL, XI PPLG, XI PMN, XI HTL, XI TJKT.
  - [x] Update no_hp input to have +62 prefix, pattern for 10-13 digits, maxlength, inputmode.
- [x] Update `app/Http/Requests/DataBorrowStoreRequest.php`:
  - [x] Change name_borrower validation to max:60 and regex /^[a-zA-Z\s]+$/.
  - [x] Change class validation to in: the specified options.
  - [x] Change no_hp validation to regex /^[0-9]{10,13}$/.
- [x] Update `resources/views/databorrows/index.blade.php`:
  - [x] Format phone number display as +62 XXX-XXXX-XXXXX using accessor.
- [x] Update `app/Http/Requests/DataBorrowUpdateRequest.php`:
  - [x] Add the same validation rules as store.
- [x] Update `resources/views/databorrows/edit.blade.php`:
  - [x] Apply same changes as create for name_borrower, class, no_hp.
- [x] Update `resources/views/databorrows/show.blade.php`:
  - [x] Format phone number display as +62 XXX-XXXX-XXXXX using accessor.
- [x] Update `app/Models/DataBorrow.php`:
  - [x] Add `getFormattedPhoneNumberAttribute` accessor to remove leading zero and format phone number.

## Followup Steps
- [ ] Test the validation by attempting to create/edit a data borrow with invalid inputs.
- [ ] Verify the phone number formatting in index and show views, including cases with and without leading zero.
- [ ] Ensure no errors in Laravel logs.
