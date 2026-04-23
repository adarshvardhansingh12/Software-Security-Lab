# 🔐 Threat Modeling using STRIDE (Web Application Login System)

## 📌 Experiment Overview
This experiment focuses on designing and analyzing a threat model for a web application login system using the **STRIDE model**. It identifies potential security threats and suggests mitigation strategies to improve system security.

---

## 🎯 Objective
- To understand threat modeling concepts  
- To apply the **STRIDE framework** on a web application  
- To identify vulnerabilities in a login system  
- To propose security improvements  

---

## 📚 Theory

### 🔍 What is Threat Modeling?
Threat modeling is a systematic process used to identify, evaluate, and mitigate security risks in a system. It helps developers understand how attackers can exploit vulnerabilities.

---

## 🛡️ STRIDE Model

STRIDE is a widely used threat modeling framework developed by Microsoft. It categorizes threats into six types:

| Category | Description |
|----------|------------|
| **S – Spoofing** | Impersonating a user or system |
| **T – Tampering** | Unauthorized modification of data |
| **R – Repudiation** | Denying actions without traceability |
| **I – Information Disclosure** | Exposure of sensitive data |
| **D – Denial of Service** | Making system unavailable |
| **E – Elevation of Privilege** | Gaining unauthorized access |

---

## 🧩 System Components
- Web Browser (Client)
- Web Server (Login System)
- Database (User Credentials)

---

## ⚙️ Methodology

### Step 1: Identify Components
- User interface (login form)
- Authentication system
- Database

### Step 2: Identify Attack Surface
- Login form inputs  
- HTTP requests  
- Authentication mechanism  
- Database queries  
- Session management  

### Step 3: STRIDE Analysis

| STRIDE Category | Threat Example | Impact |
|----------------|--------------|--------|
| **Spoofing** | Credential sniffing, brute force | Unauthorized login |
| **Tampering** | SQL injection on login form | Database compromise |
| **Repudiation** | No logging of login attempts | No accountability |
| **Information Disclosure** | Plaintext passwords, error messages | Data leakage |
| **Denial of Service** | Repeated login attempts | Server overload |
| **Elevation of Privilege** | Authentication bypass | Admin access |

---

## 🔐 Security Recommendations

- Use HTTPS for secure communication  
- Implement strong authentication mechanisms  
- Hash passwords using bcrypt or argon2  
- Use input validation and parameterized queries (prevent SQL injection)  
- Enable logging and monitoring  
- Implement rate limiting to prevent brute force attacks  
- Use secure session management  
- Apply role-based access control (RBAC)  

---

## 📊 Conclusion
The STRIDE model provides a structured way to identify and mitigate threats in a web application. By applying this model, we can significantly improve the security of login systems and reduce vulnerabilities.

---

## 📎 References
- Microsoft STRIDE Model Documentation  
- OWASP Top 10 Security Risks  
