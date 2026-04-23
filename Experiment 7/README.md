# 🔐 Secure Authentication System with Password Hashing

## 📌 Experiment Overview
This experiment focuses on exploring authentication mechanisms and implementing a secure login system using **password hashing**. It demonstrates how user credentials can be safely stored and verified.

---

## 🎯 Objective
- To understand authentication mechanisms  
- To implement login and registration functionality  
- To secure passwords using hashing techniques  
- To demonstrate secure authentication practices  

---

## 📚 Theory

### 🔍 What is Password Hashing?
Hashing is a technique used to secure passwords by converting them into a fixed-length string (hash). This ensures that original passwords are not stored in plain text.

### 🔑 Common Hashing Algorithms
- SHA-256  
- MD5 (not recommended for modern systems)  
- bcrypt (recommended)  
- argon2 (recommended)  

Hashing is often combined with **salting** to improve security and prevent attacks like rainbow table attacks.

---

## 🧩 System Components
- Login Form (User Input)
- Registration Form
- PHP Backend
- MySQL Database
- Session Management System

---

## ⚙️ Methodology

### Step 1: Setup Backend
- Write PHP code  
- Connect to MySQL database  

### Step 2: Design Forms
- Create login form  
- Create registration form  

### Step 3: Registration Process
- Validate user inputs  
- Check for existing usernames  
- Hash password using `password_hash()`  
- Store hashed password in database  

### Step 4: Login Process
- Retrieve stored hashed password  
- Verify using `password_verify()`  
- Start session on successful login  

### Step 5: Logout
- Destroy session using `session_destroy()`  

### Step 6: Security Enhancements
- Use prepared statements (prevent SQL injection)  
- Sanitize user input  
- Implement proper error handling  

---

## 🔐 Key Features
- Secure password storage using hashing  
- User authentication system  
- Session-based login management  
- Protection against common vulnerabilities  

---

## ⚠️ Security Considerations
- Never store passwords in plaintext  
- Use strong hashing algorithms (bcrypt/argon2)  
- Implement HTTPS  
- Use input validation and sanitization  
- Protect against SQL injection  
- Manage sessions securely  

---

## 📊 Conclusion
This experiment demonstrates how secure authentication systems work using password hashing. By implementing hashing and verification techniques, we can protect user credentials and enhance application security.

---

## 📎 References
- PHP Documentation (`password_hash`, `password_verify`)  
- OWASP Authentication Guidelines  
