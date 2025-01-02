# Databases and Web Services Project

## Overview
This repository contains the artifacts and code for a project focused on designing, implementing, and analyzing a database-driven web application. The project revolves around a book-selling platform, with features for searching, browsing, and purchasing books, as well as managing user interactions and feedback. 

## Features
- **Database Design**: Entity-Relationship (ER) and relational schema design for a robust database structure.
- **Web Application**: User-friendly interface for book browsing, purchase history, and feedback collection.
- **SQL Queries**: Complex queries for analyzing user interactions, stock levels, and book popularity.
- **Security Enhancements**: Suggested improvements to mitigate vulnerabilities such as SQL injection.

---

## Contents
### 1. Assignments
#### - **Assignment 1: Entity-Relationship and Relational Design**
  - Design an ER diagram for a recipe application.
  - Translate the ER diagram into a relational schema with SQL.
  - Tasks include:
    - Defining entities like Recipe, Ingredient, and Category.
    - Establishing relationships and constraints.

#### - **Assignment 2: Initial Project Specification**
  - Define the project's purpose and functionality.
  - Deliverables include:
    - Web application user perspectives.
    - ER diagram of the data model.
    - User interaction outlines.

#### - **Assignment 3: Logical Database Schema**
  - Convert the conceptual ER model into SQL `CREATE TABLE` statements.
  - Test and validate the schema using MySQL.
  - Deliverables include:
    - SQL scripts for schema creation.
    - Documentation of the mapping approach.

#### - **Assignment 4: Project Data and Queries**
  - Focus on query development and testing.
  - Requirements include:
    - Complex queries with joins, aggregations, and grouping.
    - Populate the database with sufficient sample data.

#### - **Assignment 5: Web Application Design**
  - Develop a web application layout adhering to usability principles and GDPR compliance.
  - Deliverables include:
    - HTML and CSS for homepage and imprint pages.
    - Corporate Design description.

### 2. Code Files
#### - **Database Interaction Scripts**
  - Scripts for CRUD operations across various entities like books, categories, and users.
  - Key scripts include:
    - `app_out.php`: Inserts new app records.
    - `ebook_out.php`: Associates ebooks with items.
    - `news_out.php`: Handles news item creation.
  - Common issues addressed:
    - SQL injection vulnerabilities.
    - Lack of input validation and CSRF protection.

#### - **Forms and Views**
  - PHP forms for user interactions such as:
    - Associating items with categories (`item_category_form.php`).
    - Linking ebooks to apps (`ebook_app_form.php`).

---

## Database Schema
- **Entities**: Books, Categories, Users, Orders, Items, News, Apps.
- **Relationships**:
  - Books and eBooks are stored as items.
  - Categories link to items and news.
  - Users interact through purchases and borrowing.
- **Key Features**:
  - ISA relationships for normalized design.
  - Extended schema to support complex queries.

---

## SQL Queries
- Analyze and manage data with scripts for:
  - Determining item popularity.
  - Tracking user purchases.
  - Identifying low inventory items.
  - Sorting books by price.
  - Fetching recent news and updates.

---

## Security Recommendations
- Use prepared statements to prevent SQL injection.
- Implement CSRF protection for forms.
- Validate and sanitize user inputs.
- Securely hash passwords using algorithms like `password_hash()`.

---

## Getting Started
### Prerequisites
- MySQL Database Server
- PHP and a web server (e.g., Apache)
- HTML and CSS for web interface

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/MHarshit24/Databases-and-Webservices.git
