# PHP CRUD OPERATION

Welcome to the PHP CRUD Operation repository! This project demonstrates basic CRUD (Create, Read, Update, Delete) operations using PHP and MySQL.

## Features
- Perform CRUD operations on a MySQL database using PHP.
- Simple and intuitive user interface.

## Getting Started

### Prerequisites
- Install Xampp on your local Machine
- MySQL database setup

### Installation
1. **Clone the repository:**
git clone https://github.com/VijayKumar9263/PHP-CRUD-OPERATION.git

2. **Import the Database:**
- Import the `database.sql` file into your MySQL database.

3. **Configure Database Connection:**
- Open `connect.php` and update the database credentials (`DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`) according to your MySQL setup.

4. **Start the PHP Development Server:**
- Navigate to the project directory and run:
  ```
  php -S localhost:8000
  ```

## Project Structure
- `index.php`: Main page displaying CRUD operations.
- `connect.php`: Database connection file.
- `display.php`: PHP script to display stored data.
- `update.php`: PHP script to update stored data.
- `delete.php`: PHP script to perform delete operation.
- `style.css`: Stylesheet for the HTML pages.
- `assets/`: Directory for storing CSS stylesheets and JavaScript files.
- `database.sql`: SQL file for creating the database structure and sample data.

## Usage
1. **Access the Application:**
- Open your web browser and go to `http://localhost:3000/`.

2. **Perform CRUD Operations:**
- Use the navigation links on the homepage to create, read, update, and delete records from the database.

## Screenshots

### Home Page
![image](https://github.com/VijayKumar9263/PHP-CRUD-OPERATION/assets/134833144/2b09f6b9-c902-4c55-a0de-e611c4dacc6a)

### Display Page
![image](https://github.com/VijayKumar9263/PHP-CRUD-OPERATION/assets/134833144/ff3e64e4-81f3-404d-99f4-90ad85ef670f)


### Update Operation
![image](https://github.com/VijayKumar9263/PHP-CRUD-OPERATION/assets/134833144/656d42f3-8fc8-43d4-984c-d99c351b1a70)


### Delete Operation
![image](https://github.com/VijayKumar9263/PHP-CRUD-OPERATION/assets/134833144/8780a195-ded2-4ca0-8fd2-5873a6a05b04)


## Contributing
1. Fork the repository.
2. Create a new branch: `git checkout -b feature-branch`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-branch`.
5. Submit a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments
- Inspiration from various PHP and MySQL tutorials.
- Thanks to the open-source community for their valuable resources.
