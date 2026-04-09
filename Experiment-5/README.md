# 🌐 Experiment 5: Network Traffic Analysis Using Wireshark

## 📌 Aim

To capture and analyze network traffic of a PHP-based login page using Wireshark and observe how sensitive data (username and password) is transmitted over the network.

---

## 🧠 Background

During the login process, sensitive information such as usernames and passwords is transmitted from the client to the server. If this communication occurs over HTTP (without encryption), the data is sent in plain text.

This makes the system vulnerable to interception, as attackers can use packet sniffing tools like Wireshark to capture and read confidential information.

---

## 🧪 Procedure

### 1️⃣ Start Wireshark

* Open Wireshark on the system
* Select the appropriate network interface (e.g., loopback interface)
* Start capturing network traffic

---

### 2️⃣ Perform Login Activity

* Open the web browser
* Access the PHP login page
* Enter valid credentials
* Submit the login form

---

### 3️⃣ Apply Filter in Wireshark

Use the following filter to capture HTTP POST requests:

```
http.request.method == "POST"
```

---

### 4️⃣ Analyze Packets

* Identify the HTTP POST request packet
* Inspect packet details
* Observe transmitted credentials (username and password) in plain text

---

## 📊 Result

The captured packets revealed that login credentials were transmitted in plain text when using HTTP. This makes sensitive data easily readable and exposes it to potential security threats through packet sniffing.

---

## 💬 Discussion

This experiment demonstrates that transmitting data over unsecured protocols like HTTP can lead to serious security risks. Sensitive information can be intercepted by attackers during transmission.

To prevent such risks, secure protocols like HTTPS must be used. HTTPS encrypts the data, ensuring confidentiality and integrity during communication.

---

## 🚀 Future Scope

* Implement HTTPS to secure communication
* Study encryption techniques in network security
* Implement secure session handling
* Analyze encrypted traffic vs unencrypted traffic
* Use advanced tools for network monitoring and intrusion detection

---

## ⚙️ Tools Used

* Wireshark
* PHP
* XAMPP Server
* Web Browser

---

## 📚 References

* Wireshark Documentation
* OWASP Top 10
* Network Security Fundamentals
* HTTP vs HTTPS Security Concepts

---
