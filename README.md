## Overview

HADES CRM is a server-side web application developed for the COMP50016-K - Server-Side Programming module. The system models a gaming peripherals business and provides core CRM and e-commerce capabilities, including customer management, product and category handling, order processing, and analytics. The application is built around Laravel's MVC architecture and Eloquent ORM, with a clear business model and supporting documentation.

![Laravel 10.13.1](https://img.shields.io/badge/Laravel-10.13.1-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP 8.1](https://img.shields.io/badge/PHP-8.1-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-square&logo=mysql&logoColor=white)
![Bootstrap 5.3.0](https://img.shields.io/badge/Bootstrap-5.3.0-7952B3?style=flat-square&logo=bootstrap&logoColor=white)

## Features

HADES CRM provides the following features:

1. **Business Model & Data Structure**

    - Documented business logic and data structure
    - Mind map illustrating the data model and system flow

2. **Database Layer**

    - Schema implemented using Laravel Eloquent ORM
    - Migrations aligned with Laravel conventions

3. **Home Page**

    - Brand-led landing page for HADES, a gaming peripheral company
    - Visual explanation of the system and its workflow

4. **Authentication**

    - Laravel default login flow
    - Registration form extended with phone number and address

5. **CRM Modules (CRUD + API)**

    - Customer management
    - Product management
    - Product category management
    - Order management
    - Customer analytics

6. **Role Management**

    - Admin and normal user roles
    - Role-based access to system components and permissions

7. **Testing**

    - Manual and automated testing for functionality, usability, and performance

8. **Quality Assurance**

    - Defined QA review process
    - Detailed test cases to ensure reliability and consistency

9. **Future Upgrade Plan**

    - Prepared roadmap for scalability, maintainability, and long-term sustainability

## Technologies Used

-   **Laravel 10.13.1**: Application framework (from `composer.lock`)
-   **PHP 8.1**: Server-side runtime (minimum required in `composer.json`)
-   **MySQL**: Relational database (version configured per environment)
-   **Bootstrap 5.3.0**: UI framework (from `package-lock.json`)

## Project Specifications

-   **Course**: COMP50016-K - Server-Side Programming
-   **Domain**: CRM for a gaming peripheral business (HADES)
-   **Architecture**: Laravel MVC with Eloquent ORM
-   **Testing**: Manual and automated coverage

## User Interfaces

### UIs

![HADES CRM UI 1](https://github.com/supunxiii/supunxiii/blob/7653f59dcf38771e7791a1cc0795c9d6b4cdcd3c/user-interfaces/hades-crm/hades-ui-1.png)

### UIs

![HADES CRM UI 2](https://github.com/supunxiii/supunxiii/blob/7653f59dcf38771e7791a1cc0795c9d6b4cdcd3c/user-interfaces/hades-crm/hades-ui-2.png)

## Getting Started

To run HADES CRM locally, follow these steps:

1. Clone the repository:

    ```shell
    git clone https://github.com/supunxiii/hades-crm.git
    ```

2. Navigate to the project directory:

    ```shell
    cd hades-crm
    ```

3. Install PHP dependencies:

    ```shell
    composer install
    ```

4. Create an environment file and generate the app key:

    ```shell
    cp .env.example .env
    php artisan key:generate
    ```

5. Configure database credentials in `.env`, then run migrations:

    ```shell
    php artisan migrate
    ```

6. Install frontend dependencies and build assets:

    ```shell
    npm install
    npm run build
    ```

7. Start the application:

    ```shell
    php artisan serve
    ```

## Project Structure

```
hades-crm/
├── app/                              # Application logic
├── bootstrap/                        # Framework bootstrapping
├── config/                           # Configuration files
├── database/                         # Migrations, seeders, factories
├── public/                           # Public web root
├── resources/                        # Views and frontend assets
├── routes/                           # Route definitions
├── storage/                          # Logs and cached files
├── tests/                            # Automated tests
├── composer.json                     # PHP dependencies
├── package.json                      # Frontend dependencies
└── vite.config.js                    # Vite build config
```

## Contributors

This project was developed by:

-   **Supun Wijesooriya** - Developer

## Contributing

Contributions are welcome. If you would like to contribute:

1. Fork the repository.
2. Create a new branch:

    ```shell
    git checkout -b feature/your-feature-name
    ```

3. Commit your changes:

    ```shell
    git commit -m "Add your commit message"
    ```

4. Push your branch:

    ```shell
    git push origin feature/your-feature-name
    ```

5. Open a pull request with a clear description of your changes.

## License

This project is open-source and is licensed under the [MIT License](LICENSE).

## Contact

For any inquiries or feedback, please contact the development team:

-   **Supun Wijesooriya**: [GitHub Profile](https://github.com/supunxiii)
-   **Project Repository**: [hades-crm](https://github.com/supunxiii/hades-crm)

---

_Designed and developed in June 2023_
