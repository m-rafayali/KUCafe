README.md for KUCafe

# 🍽️ KUCafe – Integrated Cafeteria Management System  

KUCafe is a **full-stack digital solution** that modernizes cafeteria operations through an advanced **Point of Sale (POS) system** and a **mobile food ordering app**. Built using **Laravel, Flutter, MySQL, and Firebase**, it enhances **inventory management, real-time order processing, and cashless transactions** to improve efficiency and user experience.  

---

## 🚀 Features  

✅ **POS System (Laravel Backend)** – Manage inventory, track sales, and process orders.  
✅ **Flutter Mobile App** – Customers can browse the menu, place orders, and pay via PayPal.  
✅ **Real-Time Order Tracking** – Ensures smooth communication between customers and the cafeteria.  
✅ **Admin Dashboard** – Provides sales insights, order status, and inventory updates.  
✅ **Secure Authentication & Payments** – Integrated Firebase authentication & encrypted transactions.  
✅ **Automated Stock Management** – Keeps inventory updated based on placed orders.  

---

## 🛠️ Tech Stack  

- **Backend:** Laravel (PHP), MySQL  
- **Frontend (Mobile App):** Flutter, Dart  
- **Database:** MySQL (for POS) & Firebase (for mobile app)  
- **Authentication:** Firebase Auth  
- **Payments:** PayPal Integration  
- **Version Control:** Git & GitHub  

---

## 📂 Project Structure  

KUCafe/ │── food_app_backend/ # Laravel Backend (API, authentication, inventory, orders) │── food_app_code_level_2/ # Flutter Mobile App (Customer orders & UI) │── food_app_database.sql # SQL Database Schema for POS │── README.md # Project Documentation


---

## 🛠️ Installation & Setup Guide  

### **1️⃣ Clone the Repository**  
```bash
git clone https://github.com/your-username/KUCafe.git
cd KUCafe

2️⃣ Setup Laravel Backend

cd food_app_backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

3️⃣ Setup Flutter Mobile App

cd food_app_code_level_2
flutter pub get
flutter run

🔹 Make sure you have PHP, Composer, MySQL, Node.js, Flutter, and Dart installed.
👨‍💻 Contributors

💡 Muhammad Rafay Ali – Backend & Database Development
💡 Muhammad Ibrahim Khan – Frontend (Flutter App)
💡 Muhammad Arham Khan – POS System & Order Processing
💡 Ayan Ali – Testing, Security & Deployment
```

📝 License
- This project is licensed under the MIT License.
