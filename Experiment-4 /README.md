# 🔐 Experiment 4: Secure Code Review of Login System

## 📌 Aim

To conduct a secure code review of a login system and identify insecure coding practices such as plain text password storage, lack of input validation, and hardcoded credentials. The goal is to analyze vulnerabilities and implement secure coding improvements.

---

## 🧠 Theory

A login system is a critical component of any application as it manages user authentication and sensitive data like passwords. If not properly secured, it can lead to unauthorized access, data breaches, and account compromise.

### 🔹 Common Insecure Practices

* Storing passwords in plain text
* Using weak hashing algorithms (MD5, SHA-1)
* No salting of passwords
* Hardcoded credentials (e.g., admin/12345)
* Lack of input validation
* No limit on login attempts
* Poor error handling

### 🔹 Secure Coding Practices

* Use strong hashing algorithms (e.g., SHA-256, bcrypt)
* Apply salting to passwords
* Validate and sanitize user input
* Use secure comparison methods
* Limit login attempts
* Implement proper error handling and logging

---

## 🧪 Methodology

### 1️⃣ Create an Insecure Login System

* Developed a basic login system with vulnerabilities
* Stored passwords in plain text
* Used fixed credentials
* No input validation or security checks

---

### 2️⃣ Perform Code Review

Analyzed the system like a security auditor and identified issues:

* Password stored in plain text
* Hardcoded credentials
* No hashing mechanism
* No input validation
* Unlimited login attempts
* No monitoring of suspicious activity

---

### 3️⃣ Simulate Attacks

* Performed brute force attempts using multiple wrong passwords
* Observed that the system allowed unlimited login attempts
* Confirmed vulnerability to brute force attacks

---

### 4️⃣ Create Secure Version

Implemented security improvements:

* Password hashing using SHA-256
* Salting to protect against rainbow table attacks
* Input validation using functions like `isalnum()`
* Secure comparison of credentials

---

### 5️⃣ Test Secure System

* Verified login with correct credentials
* Checked behavior for incorrect inputs
* Ensured invalid or special inputs are blocked
* Confirmed improved security

---

## 📊 Result & Discussion

The insecure system was vulnerable to multiple threats:

* Plain text password storage
* No hashing or salting
* Hardcoded credentials
* No input validation

After applying security measures:

* Passwords were securely stored using hashing and salting
* Input validation prevented malicious inputs
* System became resistant to common attacks like brute force and rainbow table attacks

---

## 🚀 Future Scope

* Implement stronger hashing like bcrypt
* Add login attempt limits
* Implement account lockout mechanism
* Store credentials securely in a database
* Add logging and monitoring system
* Implement multi-factor authentication (MFA)

---

## 📚 References

* OWASP Top 10
* Secure Coding Guidelines
* PHP Security Best Practices
* Authentication Security Standards

---
