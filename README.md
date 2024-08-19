https://github.com/arjunregmi/myblog

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Approach and Challenges i faced while doing this project

# MyBlog Project

## Report

### Approach

1. **Project Setup**:

    - I started by setting up a new Laravel 11 project, following the lecture videos as a guide.
    - Initially, I attempted to install Laravel 11 but faced compatibility issues even though my PHP version was higher than 8.2. I conducted extensive research online and found solutions on Stack Overflow to resolve these installation issues.

2. **Database Setup**:

    - During the setup process, I followed the lecture instructions to configure a MongoDB environment for my project.
    - Later, I realized that MongoDB was not required for Assignment 1, so I switched to a MySQL environment. This switch caused my project to crash. Fortunately, I had pushed my code to GitHub, allowing me to restore it and continue working without significant delays.

3. **Core Functionality**:
    - I implemented the core functionalities of creating and displaying posts as shown in the lecture videos.
    - Beyond what was covered in the lectures, I added features for editing and deleting posts to enhance the application's usability.

### Challenges Faced

1. **Laravel 11 Installation Issues**:

    - Despite having a compatible PHP version, I encountered problems installing Laravel 11. This required considerable research and troubleshooting, relying heavily on community forums and resources.

2. **Database Environment Changes**:

    - Switching from MongoDB to MySQL led to a project crash. Recovering from this crash was only possible because I had the foresight to push my code to GitHub, demonstrating the importance of version control.

3. **Discrepancies Between Lecture and Practical Application**:
    - The code provided in the lecture worked seamlessly on the instructor's machine but not on mine. This discrepancy necessitated additional research and problem-solving to ensure the code functioned correctly on my setup.

### Extra Features

In addition to the core functionalities, I implemented the following extra features:

1. **Pagination**:

    - I added pagination to the posts display page, ensuring a better user experience by not overwhelming the user with too much information at once.

2. **Enhanced Post Display**:
    - The method for displaying posts was improved to include a summary view with a "Read More" link, making the interface more user-friendly and intuitive.

### Bonus Point Justification

I believe I deserve the extra bonus point for the following reasons:

1. **Pagination Feature**:

    - Implementing pagination significantly enhances the usability of the application, making it more professional and scalable for handling a larger number of posts.

2. **Problem-Solving and Resilience**:

    - The challenges I faced and overcame, such as the Laravel 11 installation issues and the database environment switch, demonstrate my determination and problem-solving skills.

3. **Extra Functionality Beyond Requirements**:
    - Adding edit and delete functionalities, along with pagination, showcases my initiative to go beyond the basic requirements and provide a more comprehensive solution.

Thank you for considering my work for the extra bonus point. I am proud of the additional features and the resilience demonstrated throughout the project.

###################################################################################################

# Project README

## Overview

This project is a web application developed using Laravel 11 that allows users to view posts from authors and admins, while restricting editing and deleting capabilities to admins and authors. The application is structured to support different user roles, including admin, author, and regular user, with specific functionalities and permissions assigned to each role.

## Approach

### 1. Setup and Configuration

-   **Laravel Installation**: The project was set up using Laravel 11, leveraging its built-in features for authentication and role management.
-   **Role Management**: Implemented roles (`admin`, `author`, and `user`) using a combination of middleware and policies to manage access control.
-   **Authentication**: Utilized Laravel's built-in authentication for user management and role-based access.

### 2. Routes and Controllers

-   **Admin and Author Controllers**:
    -   Created controllers for managing posts and users with CRUD operations.
    -   Implemented middleware to restrict access based on user roles.
-   **User Post Viewing**:
    -   Developed a `UserPostController` to allow users to view posts authored by admins and authors.
    -   Added routes to display posts while restricting editing and deleting capabilities.

### 3. Views

-   **Admin Views**:
    -   Created views for managing posts and users, including `create.blade.php`, `edit.blade.php`, `show.blade.php`, and `index.blade.php`.
    -   Implemented admin-specific layouts and navigation.
-   **User Views**:
    -   Developed a view for users to list all posts without the ability to edit or delete.

## Challenges Faced

### 1. Handling Role-Based Access

-   **Complex Access Control**: Ensuring that users had the correct permissions to view, edit, or delete posts required a careful setup of middleware and policies. Ensuring that users could view posts from specific roles while restricting editing and deletion presented a significant challenge.
-   **Middleware Implementation**: Implementing middleware to restrict access based on roles involved creating custom middleware and integrating it with route definitions.

### 2. View and Controller Coordination

-   **Consistency Across Views**: Ensuring that views for different roles (admin, author, user) were consistent with their respective functionalities required careful coordination between controllers and views.
-   **Dynamic Content Handling**: Handling dynamic content in views, such as lists of posts, required implementing pagination and dynamic data loading, which was a challenge in terms of both performance and user experience.

### 3. Testing and Debugging

-   **Debugging Issues**: Debugging issues related to middleware and role-based access required thorough testing and debugging. Ensuring that routes and views were correctly restricted based on user roles demanded careful attention to detail.
-   **Performance Considerations**: Ensuring that the application performed well with dynamic content and pagination required optimizing database queries and implementing efficient data retrieval strategies.

## Installation and Setup

1. Clone the repository:
    ```bash
    git clone https://github.com/your-repo/your-project.git
    ```
2. Navigate to the project directory:
    ```bash
    cd your-project
    ```
3. Install dependencies:
    ```bash
    composer install
    npm install
    ```
4. Set up the environment file:
    ```bash
    cp .env.example .env
    ```
5. Generate the application key:
    ```bash
    php artisan key:generate
    ```
6. Run migrations and seed the database:
    ```bash
    php artisan migrate --seed
    ```
7. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

-   **Admin**: Can create, edit, delete, and view posts.
-   **Author**: Can create and edit their own posts, and view all posts.
-   **User**: Can view all posts created by admins and authors.

## Contribution

Feel free to fork the repository and submit pull requests for any improvements or bug fixes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
