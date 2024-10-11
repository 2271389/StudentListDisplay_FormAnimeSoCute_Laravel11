# Project: StudentListDisplay_FormAnimeSoCute_Laravel11

## The project StudentListDisplay_FormAnimeSoCute_Laravel11 is a registration and login form with a cute Anime interface built with Laravel 11. It features the ability for users, after logging in or registering an account, to display a list of students and to add, delete, or edit student information if desired.

![image](https://github.com/user-attachments/assets/23528b9c-f4d9-48f9-bf90-3e1035a59256)


### 1. Install Laravel 11

-   **Command to install Laravel.** composer create-project laravel/laravel project_1
-   Laravel completes the installation process and automatically creates 3 tables: `users`, `cache`, `jobs`.
  
    ![alt text](image-1.png)
    
-   Successfully installed Laravel 11.25.0.
  
    ![alt text](image-2.png)

### 2. Design the STUDENTS Table

**The STUDENTS table** includes the following main attributes:
| Field Name | Type | Description |
|------------------|-------------|-----------------------------------------------------|
| ID | Integer | Primary key: Auto-increment. |
| NAME | String | Name |
| EMAIL | String | Email: Unique email format. |
| PASSWORD | String | Password: Cannot be empty + encrypted |
| STUDENT_CODE | Integer | Student code: Cannot be empty, 8 characters |
| CLASS | String | Class |
| FACULTY | String | Faculty |

### 3. Prepare the Database

![alt text](image-3.png)

-   Create a database name in phpMyAdmin.
  
    ![alt text](image-4.png)
    
-   Configure the database in the `.env` file within the project directory.

### 4. Create Migrations

![alt text](image-5.png)

-   Create a migration for the Students table.
-   Edit the migration: add necessary fields.
  
    ![alt text](image-6.png)
    
-   Run `php artisan migrate` to create the students table in the database.

  [alt text](image-7.png)

  ![alt text](image-8.png)

### 5. Create and Configure Model

-   **Command to create Model.**
  
   ![alt text](image-9.png)

   ![image](https://github.com/user-attachments/assets/ba49f497-f74c-478f-aeec-061883de32b1)


### 6. Create and Configure Controller

![image](https://github.com/user-attachments/assets/6d6a00c6-bd88-42f0-9d38-7a22f7b16fc8)


-   **Command to create StudentController.**
  
    ![alt text](image-10.png)
    
-   **Add Student** (Create).
  
    ![alt text](image-11.png)
    
-   **Edit Student Information** (Update).
-   **Delete Student Information** (Destroy).
  
    ![alt text](image-12.png)
    
-   Modify
  
    ![alt text](image-13.png)
    
    `AuthenticatedSessionController` so that after login, users will be redirected to the student list page.

### 7. Add Router

![alt text](image-14.png)

### 8. Create the Interface

![alt text](image-15.png)

-   Create the directory `resources/views/students` and add the following files:
    -   `index`: for navigation and containing student information.
    -   `create`: for creating/adding students.
    -   `edit`: for editing student information.

### 9. Results

-   Run `php artisan serve` to display the following results: - First, go to the welcome page allowing user login/registration.
- **Registration Form:**
  
    ![alt text](image-16.png)
  
-   Data validation result: Password must be at least 8 characters to register an account. - **Login and Register Form:**
  
    ![alt text](image-17.png)
    ![alt text](image-18.png)
    ![alt text](image-19.png)
    
-   After logging in, display the Student List page along with the user information, allowing for adding, editing, and deleting students. Users can also log out and return to the welcome page if needed.
- **Add Student Page:**

    ![alt text](image-20.png)
  
    Allows adding new students.
- **Edit Student Information Page:**
    
    ![alt text](image-21.png)
    
    Allows editing information, updating, and returning to the student list page. - Result: Added Trương Thị Lỏ to the list and edited Trường to Lê in the student list.
- **Database**
    
    ![alt text](image.png)

    After adding the new student is also displayed in the `students` table.

_Note:_ Lê Thị Thúng and Nguyễn Thị Mẹt were created in phpMyAdmin, so their passwords are not encrypted, while Lê Thị Lỏ was created through the add student function, so her password is encrypted.

### 10. Conclusion

Based on references from the Laravel documentation and especially “Chat GPT”, I have successfully:

-   Installed Laravel 11, created a database with existing tables, and added a Students table in the database named `project_1`.
-   Created an interface for user login/registration.
-   Displayed the student list after logging in.
-   Allowed adding, editing, and deleting student information.

=====================End========================
