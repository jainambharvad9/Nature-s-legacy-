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
<br>
│
<br>
├── assets/ # Images, CSS, JS files
<br>
├── pages/ # All main PHP pages
<br>
├── includes/ # Header, footer, reusable components
<br>
├── database/ # DB connection and SQL scripts
<br>
├── natures_legacy.sql # Database export file
<br>
└── README.md # Project documentation
<br>

---

## 🚀 Getting Started

Follow these steps to run the project locally.

1️⃣ **Clone the Repository**

git clone https://github.com/jainambharvad9/Nature-s-legacy-.git


2️⃣ **Setup the Database**
<br>
Open phpMyAdmin.
<br>
Create a new database named natures_legacy.
<br>
Import the provided natures_legacy.sql file.
<br>

3️⃣ **Configure the Database Connection**
<br>
Go to database/config.php and update with your MySQL credentials:
<br>
$host = "localhost";
<br>
$user = "root";
<br>
$pass = "";
<br>
$dbname = "natures_legacy";
<br>
<br>
$conn = mysqli_connect($host, $user, $pass, $dbname);
<br>
if (!$conn) {
<br>
    die("Connection failed: " . mysqli_connect_error());
    <br>
}
<br>


4️⃣ **Run the Project**
<br>
Place the project folder inside htdocs (for XAMPP) or www (for WAMP).
<br>
Start Apache and MySQL from your server control panel.
<br>
Open in your browser:
<br>
http://localhost/natures-legacy


👥 **User Roles**
<br>
**Admin**
<br>
Manage wildlife species data.
<br>
Approve/decline safari bookings.
<br>
Manage user reviews and feedback.
<br>

**Registered User**
<br>
Book safaris.
<br>
Submit reviews and feedback.
<br>
Access member-exclusive features.
<br>
Visitor
<br>
Browse wildlife showcase.
<br>
View public content.
<br>

**📜 License**
<br>
This project is licensed for educational purposes only.
You may use and modify it for personal or institutional use.

**🤝 Contributing**
<br>
Fork the repository.
<br>
Create your feature branch:
<br>
git checkout -b feature/YourFeature
<br>
Commit your changes:
<br>
git commit -m "Add YourFeature"
<br>

Push to the branch:

git push origin feature/YourFeature
<br>
Open a Pull Request.

💡 **Author** Jainam Saraiya
<br>
📧 **Email**: jainamsaraiya9@gmail.com
<br>
💼 **LinkedIn**: [https://www.linkedin.com/in/jainam-bharvad]
