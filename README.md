# 🦁 Natures-Legacy – Animal National Park Website

An interactive, wildlife-themed website designed to showcase animal species, manage safari bookings, and provide a seamless visitor experience.  
Built with **HTML**, **CSS**, **Bootstrap**, **PHP**, and **MySQL**.

---

## 🌟 Features

- **Wildlife Showcase** – Beautiful image galleries and detailed species information.
- **Safari Booking System** – Online booking with secure processing.
- **Visitor Interaction** – Contact forms, reviews, FAQs, and feedback submissions.
- **Role-Based Access** – Admin, Registered User, Visitor roles for better management.
- **Responsive UI** – Optimized for mobile, tablet, and desktop devices.
- **Secure Access Control** – Authentication and authorization for different user types.

---

## 🛠️ Technologies Used

| Category       | Technologies |
|----------------|--------------|
| Frontend       | HTML, CSS, Bootstrap |
| Backend        | PHP |
| Database       | MySQL |
| Version Control| Git, GitHub |
| Hosting (Local)| XAMPP / WAMP |

---

## 📂 Project Structure

Natures-Legacy/
│
├── assets/ # Images, CSS, JS files
├── pages/ # All main PHP pages
├── includes/ # Header, footer, reusable components
├── database/ # DB connection and SQL scripts
├── natures_legacy.sql # Database export file
└── README.md # Project documentation

yaml
Copy
Edit

---

## 🚀 Getting Started

Follow these steps to run the project locally.

### 1️⃣ Clone the Repository

git clone https://github.com/your-username/natures-legacy.git
2️⃣ Setup the Database
Open phpMyAdmin.

Create a new database named natures_legacy.

Import the provided natures_legacy.sql file.

3️⃣ Configure the Database Connection
Go to database/config.php and update with your MySQL credentials:

php

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "natures_legacy";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
4️⃣ Run the Project
Place the project folder inside htdocs (for XAMPP) or www (for WAMP).

Start Apache and MySQL from your server control panel.

Open in your browser:

arduino

http://localhost/natures-legacy
👥 User Roles
Admin

Manage wildlife species data.

Approve/decline safari bookings.

Manage user reviews and feedback.

Registered User

Book safaris.

Submit reviews and feedback.

Access member-exclusive features.

Visitor

Browse wildlife showcase.

View public content.

Example:


📜 License
This project is licensed for educational purposes only.
You may use and modify it for personal or institutional use.

🤝 Contributing
Fork the repository.

Create your feature branch:

git checkout -b feature/YourFeature
Commit your changes:


git commit -m "Add YourFeature"
Push to the branch:


git push origin feature/YourFeature
Open a Pull Request.

💡 Author
Your Name
📧 Email: jainamsaraiya9@gmail.com
💼 LinkedIn: [https://www.linkedin.com/in/jainam-bharvad]

