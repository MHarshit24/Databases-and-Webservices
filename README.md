# Databases and Web Services Project

## Overview
This repository contains the implementation and documentation for a project focused on databases and web services. It involves designing, developing, and testing a web application with a relational database backend. The application primarily revolves around managing and selling books, while also demonstrating concepts like ER modeling, SQL queries, and secure web application development.

---

## Contents

### Assignments
The repository includes various assignment documents detailing the progression of the project:

1. **Assignment 1: Entity-Relationship and Relational Design**  
   - Focus: Design an ER diagram and translate it into a relational schema.
   - Tasks:
     - Define entities and relationships (e.g., Recipe, Ingredient, Category, Feedback).
     - Write SQL statements with primary and foreign key constraints.

2. **Assignment 2: Initial Project Specification**  
   - Focus: Define the purpose and functionality of the web application.
   - Tasks:
     - Specify user interactions and system data models.
     - Deliver an initial design document.

3. **Assignment 3: Logical Database Schema**  
   - Focus: Transition the conceptual schema into SQL statements.
   - Tasks:
     - Implement `CREATE TABLE` statements with necessary constraints.
     - Test the schema on a MySQL server.

4. **Assignment 4: Project Data and Queries**  
   - Focus: Develop and test complex SQL queries.
   - Tasks:
     - Write queries involving joins, aggregation, and `GROUP BY` clauses.
     - Populate the database with sample data and validate the queries.

5. **Assignment 5: Web Application Design**  
   - Focus: Build the front-end interface for the web application.
   - Tasks:
     - Create HTML and CSS layouts for a homepage and imprint page.
     - Ensure compliance with GDPR and usability principles.

### Scripts
Various PHP scripts are included to handle database interactions and user inputs:
- **`app_out.php`**: Insert a new app record.
- **`book_form.php`**: Form for selecting an item and its quantity.
- **`ebook_form.php`**: Form for associating an ebook with an app.
- **`news_category_out.php`**: Insert a new record linking news items to categories.
- Security concerns:
  - SQL Injection vulnerabilities due to direct use of user input in SQL queries.
  - Lack of CSRF protection and input validation.

### Database Schema
The schema includes tables for managing:
- Books, eBooks, users, purchases, and news.
- Relationships between items, categories, and users.
- Highlights:
  - ISA relationships for database normalization.
  - Separate handling for books and news categories.

### Queries
Key operations include:
- Analyzing book popularity and stock levels.
- Sorting books by price.
- Tracking user purchase histories.

---

## Security Recommendations
- Use prepared statements to prevent SQL injection.
- Implement CSRF protection for forms.
- Hash user passwords securely (`password_hash()`).
- Centralize database connection logic in a configuration file.

---

## Getting Started
### Prerequisites
- PHP 7.4 or later
- MySQL 5.7 or later
- A web server like Apache or Nginx

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/MHarshit24/Databases-and-Webservices.git
