# ✈ Flight Booking System

## 📌 Overview
The **Flight Booking System** is a software application that allows users to search for available flights, view flight details, book tickets, and manage reservations.  
This project demonstrates how to design and implement a booking system using **Python** and **Database Management Systems**, incorporating concepts like CRUD operations, user authentication, and data persistence.

The aim is to simulate a real-world airline booking system for learning purposes, helping students and developers understand backend logic, database handling, and integration.

---

## 🗂 Table of Contents
1. [Project Motivation](#-project-motivation)
2. [Features](#-features)
3. [Technologies Used](#-technologies-used)
4. [Project Workflow](#-project-workflow)
5. [Database Schema](#-database-schema)
6. [Installation](#-installation)
7. [How to Run](#-how-to-run)
8. [Evaluation](#-evaluation)
9. [Sample Output](#-sample-output)
10. [Future Enhancements](#-future-enhancements)
11. [Contributing](#-contributing)
12. [License](#-license)

---

## 🎯 Project Motivation
In the modern travel industry, flight booking systems are essential for managing reservations efficiently.  
This project is built as a **mini-application** for educational purposes, helping learners understand:
- How to structure and manage databases
- How to implement user authentication
- How to connect backend logic with a frontend or CLI

---

## ✨ Features
- **User Registration & Login**
- **Search Flights** by source, destination, date
- **Book Tickets** with passenger details
- **View Booking History**
- **Cancel Reservations**
- **Admin Panel** to add/remove flights
- **Database Integration** for persistent storage

---

## 🛠 Technologies Used
- **Programming Language:** Python 3.x  
- **Database:** MySQL / SQLite  
- **Libraries:**  
  - `pandas` (for data handling)  
  - `mysql-connector-python` or `sqlite3` (for DB connection)  
  - `tabulate` (for table-like output in CLI)  
- **Environment:** Jupyter Notebook / Command-line Python

---

## 📋 Project Workflow
1. **Requirement Analysis** – Define features and database needs  
2. **Database Design** – Create tables for users, flights, bookings  
3. **Backend Development** – Implement Python functions for each feature  
4. **Integration** – Connect user inputs to database operations  
5. **Testing** – Verify booking flow and error handling  
6. **Evaluation** – Measure performance, check edge cases

---

## 🗄 Database Schema
**Tables:**
1. **Users**  
   - `user_id` (PK)  
   - `name`  
   - `email`  
   - `password`  
   - `role` (user/admin)

2. **Flights**  
   - `flight_id` (PK)  
   - `source`  
   - `destination`  
   - `date`  
   - `time`  
   - `price`  
   - `seats_available`

3. **Bookings**  
   - `booking_id` (PK)  
   - `user_id` (FK)  
   - `flight_id` (FK)  
   - `passenger_name`  
   - `status` (confirmed/cancelled)

---

## ⚙ Installation
```bash
# Clone the repository
git clone https://github.com/yourusername/Flight-Booking-System.git

# Navigate to the project directory
cd Flight-Booking-System

# Install dependencies
pip install -r requirements.txt


▶ How to Run
Option 1: Command-line
python main.py

Option 2: Jupyter Notebook
jupyter notebook Flight_Booking_System.ipynb

📏 Evaluation

The system can be evaluated based on:

Functionality: All booking operations work as expected

Performance: Fast flight search and booking confirmation

Data Accuracy: Bookings correctly stored in the database

Error Handling: Handles invalid inputs and duplicate bookings gracefully

Example:

# Example: Search flights
from system import search_flights
results = search_flights("New York", "London", "2025-08-20")
print(results)

🖥 Sample Output
Available Flights:
+-----------+------------+-------------+------------+--------+---------+
| Flight ID | Source     | Destination | Date       | Time   | Price   |
+-----------+------------+-------------+------------+--------+---------+
| FL123     | New York   | London      | 2025-08-20 | 10:00  | $550    |
| FL145     | New York   | London      | 2025-08-20 | 14:30  | $600    |
+-----------+------------+-------------+------------+--------+---------+

🚀 Future Enhancements

Web-based UI using Flask/Django

Payment Gateway Integration

Email/SMS Booking Confirmations

Dynamic Pricing based on demand

Multi-city Booking Support
