# 🚀 AWS Scalable Web System (PHP + MySQL)

## 📌 Overview

This project demonstrates deploying a containerized web application (PHP + MySQL) on AWS with scalability, high availability, and automated infrastructure.

---

## 🧱 Architecture

User → Load Balancer → EC2 → Docker (Web + MySQL)

---

## ⚙️ Components

* **EC2** – Hosts the application
* **Docker & Docker Compose** – Containerized deployment
* **Elastic Load Balancer (ELB)** – Distributes incoming traffic
* **Auto Scaling Group** – Automatically scales instances based on load
* **CloudWatch** – Monitoring and alerting

---

## 🔧 Deployment Steps

### 1. Prepare Application

* Build Docker image
* Configure docker-compose

### 2. Deploy to EC2

* Launch EC2 instance
* Install Docker & Docker Compose
* Run application using docker-compose

### 3. Configure Load Balancer

* Create ELB
* Attach EC2 instances

### 4. Setup Auto Scaling

* Create launch template
* Configure scaling policy (CPU-based)

---

## 💻 Application Details (PHP + MySQL)

### 🔹 Features

* Homepage with banner, featured posts, and article list
* Article detail page with related posts
* Category page
* Admin panel:

  * Login / Logout
  * Manage categories (CRUD)
  * Manage posts (CRUD + thumbnail upload)
  * Manage sliders (upload or URL)

---

### 🔹 Local Setup (Development)

1. Copy source to:
   `c:/wamp64/www/hoi_sinh_vien`

2. Create database using phpMyAdmin:

   * Create DB: `hoi_sinh_vien`
   * Import file: `database.sql`

3. Configure database connection:

   * File: `config/database.php`

4. Access application:

   * Frontend: `http://localhost/hoi_sinh_vien`
   * Admin: `http://localhost/hoi_sinh_vien/admin/login.php`

---

### 🔹 Default Admin Account

* Username: `admin`
* Password: `admin123`

---

### 🔹 Upload Directories

* Post images: `uploads/posts`
* Slider images: `uploads/slides`

Ensure write permission is enabled for these directories.

---

## 📈 Result

* Application deployed on AWS EC2
* System can scale automatically based on traffic
* Load is distributed across instances
* High availability achieved
* Reduced manual deployment effort

---

## 📸 Screenshots (Add later)

* EC2 instance running
* Docker containers
* Load balancer configuration
* Auto Scaling group

---

## 🛠 Tech Stack

* AWS EC2
* Elastic Load Balancer
* Auto Scaling
* CloudWatch
* Docker, Docker Compose
* PHP, MySQL

---

## 🎯 Key Learning

* Deploying containerized applications on AWS
* Designing scalable and highly available systems
* Infrastructure automation and monitoring
