# CRUD Operations with Vue.js and Laravel

## Overview

This project demonstrates a full-stack application with CRUD (Create, Read, Update, Delete) operations using Vue.js for the front end and Laravel for the back end. Additionally, it includes functionality for exporting data to `.csv` and `.xlsx` files.

## Project Structure

- **Frontend**: Vue.js application
- **Backend**: Laravel application

## Prerequisites

- **Node.js** and **npm** (for Vue.js)
- **PHP** and **Composer** (for Laravel)
- **MySQL** or any other database supported by Laravel

## Installation

### Backend (Laravel)

1. **Clone the Repository**

    ```bash
    git clone https://github.com/yourusername/your-repository.git
    cd your-repository/backend
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Set Up Environment**

    Copy the example environment file and configure it:

    ```bash
    cp .env.example .env
    ```

    Edit `.env` to configure your database and other settings.

4. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**

    ```bash
    php artisan migrate
    ```

6. **Seed the Database** (Optional)

    ```bash
    php artisan db:seed
    ```

7. **Start the Laravel Development Server**

    ```bash
    php artisan serve
    ```

    The server will run on `http://localhost:8000` by default.

### Frontend (Vue.js)

1. **Navigate to the Frontend Directory**

    ```bash
    cd ../frontend
    ```

2. **Install Dependencies**

    ```bash
    npm install
    ```

3. **Run the Vue.js Development Server**

    ```bash
    npm run serve
    ```

    The Vue.js app will run on `http://localhost:8080` by default.

## Usage

### CRUD Operations

- **Create**: Use the form on the "Create User" page to add a new user.
- **Read**: View users on the "User List" page.
- **Update**: Edit user details on the "Edit User" page.
- **Delete**: Remove users from the "User List" page.

### Export Data

#### Export to CSV

1. **Export Data**

    You can export user data to a `.csv` file using the `exportCsv` endpoint in Laravel:

    ```bash
    GET http://localhost:8000/api/users/export/csv
    ```

2. **Download**

    This will prompt a download of the `.csv` file with the user data.

#### Export to XLSX

1. **Export Data**

    You can export user data to an `.xlsx` file using the `exportXlsx` endpoint in Laravel:

    ```bash
    GET http://localhost:8000/api/users/export/xlsx
    ```

2. **Download**

    This will prompt a download of the `.xlsx` file with the user data.

## API Endpoints

- **GET /api/users**: List all users
- **GET /api/users/{id}**: Get user by ID
- **POST /api/users**: Create a new user
- **PUT /api/users/{id}**: Update an existing user
- **DELETE /api/users/{id}**: Delete a user
- **GET /api/users/export/csv**: Export users to CSV
- **GET /api/users/export/xlsx**: Export users to XLSX

## Configuration

- **Vue.js** Configuration: Edit `src/config.js` to set your API base URL.
- **Laravel** Configuration: Update `.env` file to set database and other configurations.

## Development

1. **Frontend Development**

    - Start Vue.js development server: `npm run serve`
    - The app will be available at `http://localhost:8080`.

2. **Backend Development**

    - Start Laravel development server: `php artisan serve`
    - The API will be available at `http://localhost:8000`.

## Contributing

Feel free to open issues and submit pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Vue.js](https://vuejs.org/) - Progressive JavaScript Framework
- [Laravel](https://laravel.com/) - PHP Framework for Web Artisans
- [Laravel Excel](https://laravel-excel.com/) - Export data to Excel and CSV files
