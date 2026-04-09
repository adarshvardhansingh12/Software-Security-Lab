# 🔐 Experiment 1: Analysis of Security Vulnerabilities in Code

## 📌 Aim

To analyze sample code snippets and identify basic security flaws. The experiment focuses on studying C/Python programs to detect common vulnerabilities such as buffer overflow, insecure input handling, format string vulnerabilities, command injection, and hardcoded credentials.

---

## 🧠 Theory

Software vulnerabilities are weaknesses present in code that attackers can exploit. These weaknesses usually arise due to improper input handling, unsafe functions, or insecure programming practices.

Some common vulnerabilities include:

### 🔹 Buffer Overflow

Occurs when the input size exceeds the allocated memory capacity, leading to memory corruption and possible execution of malicious code.

### 🔹 Format String Vulnerability

Happens when user input is directly used in functions like `printf()` without proper format specification, allowing unintended memory access.

### 🔹 Command Injection (CWE-78)

Occurs when user input is directly passed into system commands, enabling attackers to execute unauthorized commands on the system.

### 🔹 Hardcoded Credentials (CWE-259)

Refers to storing sensitive information such as usernames and passwords directly in source code, which can lead to serious security risks if exposed.

---

## 🧪 Methodology

1. Selected vulnerable C and Python programs for analysis
2. Conducted manual code inspection to identify unsafe functions
3. Used static analysis techniques/tools to detect security issues
4. Identified and categorized different types of vulnerabilities
5. Compared insecure code with secure coding practices

---

## ⚙️ Tools Used

* C / Python programming
* Static analysis tools
* Manual code review

---

## 📊 Result

The experiment successfully identified multiple common vulnerabilities in sample programs. It demonstrated how insecure coding practices can lead to serious security threats and how these issues can be detected through analysis.

---

## 🔐 Conclusion

This experiment provided a clear understanding of common software vulnerabilities and their causes. It emphasized the importance of secure coding practices, proper input validation, and avoiding unsafe functions to build secure applications.

---

## 🚀 Future Scope

* Use automated vulnerability scanning tools
* Implement secure coding standards
* Apply real-world penetration testing techniques
* Explore advanced vulnerabilities like XSS and CSRF

---

## 📚 References

* OWASP Top 10
* CWE (Common Weakness Enumeration)
* Secure Coding Guidelines
* PHP, C, and Python Documentation

---
