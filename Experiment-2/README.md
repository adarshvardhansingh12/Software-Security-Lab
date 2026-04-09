# 🔐 Experiment 2: Input-Based Attacks and Their Prevention

## 📌 Aim

To simulate input-based attacks such as SQL Injection and Cross-Site Scripting (XSS) on a web application and implement necessary protection mechanisms like input validation and sanitization.

---

## 🧠 Theory

Input-based attacks occur when a web application accepts user input without proper validation or sanitization. Attackers exploit these weaknesses to manipulate application behavior.

Two common types of input-based attacks are:

### 🔹 SQL Injection

SQL Injection occurs when malicious input is inserted into input fields (such as login forms) and directly included in SQL queries. This allows attackers to:

* Bypass authentication
* Access sensitive data
* Modify or delete database records

### 🔹 Cross-Site Scripting (XSS)

XSS occurs when malicious scripts are injected into web pages and executed in a user’s browser. This can lead to:

* Session hijacking
* Data theft
* Unauthorized actions

---

## 🧪 Methodology

1. Installed XAMPP and started Apache and MySQL services
2. Created a local web application with login functionality
3. Tested the application with normal user credentials
4. Performed SQL Injection using payloads like `' OR '1'='1`
5. Verified that authentication was bypassed (vulnerability confirmed)
6. Modified the code using prepared statements and input validation
7. Tested the application again to ensure the vulnerability was fixed

---

## ⚙️ Tools Used

* PHP
* MySQL
* XAMPP Server
* Web Browser
* (Optional) DVWA or similar vulnerable platforms

---

## 📊 Result

The experiment successfully demonstrated how input-based attacks like SQL Injection can compromise a web application. After applying security measures such as prepared statements and input validation, the vulnerability was mitigated.

---

## 🔐 Conclusion

This experiment highlights the importance of validating and sanitizing user inputs in web applications. It shows how insecure coding practices can lead to serious vulnerabilities and how they can be prevented using secure coding techniques.

---

## 🚀 Future Scope

* Implement advanced input validation techniques
* Use frameworks with built-in security features
* Perform automated security testing using tools like SQLmap
* Extend analysis to other attacks like CSRF and command injection

---

## 📚 References

* OWASP Top 10
* SQL Injection Documentation
* XSS Prevention Cheat Sheet (OWASP)
* PHP Official Documentation

---
