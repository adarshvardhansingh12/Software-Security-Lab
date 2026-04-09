# 🔐 Experiment 4: Insecure Web Application (Authentication System)

## 📌 Aim

The aim of this experiment is to design and implement a basic web-based authentication system and analyze its security vulnerabilities. This experiment helps in understanding how insecure coding practices can lead to serious security risks.

---

## 🛠️ Tools & Technologies Used

* PHP
* MySQL
* XAMPP / WAMP Server
* Web Browser (Chrome/Firefox)

---

## 📂 Files Included

* `connect.php` → Handles database connection
* `register.php` → User registration functionality
* `login.php` → User login system
* `dashboard.php` → User dashboard after login
* `logout.php` → Session termination
* `webapp-pentest-toolkit.txt` → Notes/tools for testing

---

## ⚙️ Description

This project implements a simple login and registration system using PHP and MySQL. Users can create an account, log in, and access a dashboard.

However, the system is intentionally designed with security flaws for learning purposes. These flaws help demonstrate how attackers can exploit weak implementations.

---

## ⚠️ Identified Vulnerabilities

* Plain text password storage
* SQL Injection vulnerability
* No input validation or sanitization
* Lack of password hashing
* Weak session management

---

## 🧪 Testing & Analysis

The application can be tested using basic penetration testing techniques such as:

* SQL Injection (`' OR '1'='1`)
* Manual input manipulation
* Session testing

---

## 🔐 Conclusion

This experiment highlights the importance of secure coding practices in web development. It demonstrates how even a simple login system can become vulnerable if proper security measures are not implemented.

---

## 🚀 Future Scope

* Implement password hashing (e.g., bcrypt)
* Use prepared statements to prevent SQL Injection
* Add input validation and sanitization
* Improve session security
* Implement HTTPS and secure cookies

---

## 📚 References

* OWASP Top 10
* PHP Official Documentation
* MySQL Documentation
* Web Security Academy (PortSwigger)

---
