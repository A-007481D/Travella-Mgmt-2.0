# Enhanced Reservation System

## Project Overview

The Enhanced **Travella** Reservation System is designed to modernize travel reservation management for a travel agency. By incorporating a user-friendly UI and a robust authentication mechanism, it offers a secure and scalable solution for administrators and clients. The system ensures seamless management of activities and reservations while enhancing the user experience.

---

## 🎯 Project Context

This project aims to streamline:

- **User Management**: Support for distinct roles (Administrator, Client).
- **Activity Management**: Manage offers such as flights, hotels, and tours.
- **Reservation Management**: Facilitate booking, editing, and cancellation of reservations.

---

## 🚀 Key Features

### 🔐 Authentication and Authorization
- Secure registration and login system for clients.
- Role-based access control:
  - **Administrator**: Access to activity and user management functionalities.
  - **Authenticated Client**: Ability to make and manage reservations.
  - **Visitor**: View available activities without registration.

### 👤 User Stories

#### 🛠️ As an Administrator:
- **User and Role Management**:
  - Create secure accounts for system access.
  - Assign roles to users.
- **Activity Management**:
  - Add or delete activities.
- **Reservation Management**:
  - View ongoing reservations.
  - Confirm reservations as needed.
- **User Management**:
  - Ban users by deleting their accounts.

#### 👥 As an Authenticated Client:
- **Browse Activities**:
  - Search and explore available activities (flights, hotels, tours).
- **Personalized Reservations**:
  - Make reservations with customizable options.
- **Manage Reservations**:
  - View and cancel existing reservations from the user profile.

#### 👀 As a Visitor:
- **Browse Activities**:
  - Explore available offerings without logging in.
- **Register**:
  - Create an account to access advanced functionalities, such as booking.

---

## 🏗️ Technology Stack

### Frontend
- **HTML**, **CSS** for an interactive user interface.

### Backend
- **PHP** (OOP approach) for robust server-side functionality.

### Database
- **MySQL** for storing and managing user, activity, and reservation data.

---

## 💻 Installation and Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/A-007481D/Travella-Mgmt-2.0.git
   ```
2. Set up the database:
   - Import the provided SQL file to create the required database and tables.
3. Configure the backend:
   - Update the database connection details in the `config.php` file.
4. Run the application:
   - Launch a local server (e.g., XAMPP, WAMP) to test the application.

---

## 🤝 Contributors

- **Mahdi**
- **Abdelmalek**

---

## 📜 License

This project is licensed under the [MIT License](LICENSE).

