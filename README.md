# Book Haven

This project is a simple web app for an online book store. Here are some features that we've implemented:
- User registration & login
    - Implemented using Laravel Jetstream
- A products page
    - Users can see books available for sale
- A items cart page
    - Users can see items that were added to cart
    - These books can be added to cart for purchase via **cash or credit/debit card payment**
- Admin panel
    - Add/delete book categories
    - Add new books as products
    - View/edit/delete existing books

## Getting Started

Please install these prerequisite to run the web app.

### Prerequisites

- Composer version 2.7.6
- PHP version 8.2.12
- Laravel with Jetstream v5.8.2
- XAMPP to host Apache & local MySQL database

### Installation

After installing the prerequisites, run these commands in the 'book-haven' directory:

1. npm i
2. npm run dev
3. php artisan migrate
4. php artisan serve

### Common issues

If any problems were faced in running the web app, consider doing these:

1. Set DB_DATABASE=book_haven in the .env file