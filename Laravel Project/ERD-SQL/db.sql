CREATE DATABASE isp_management;
USE isp_management;

-- 1. Users (Admin login)
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin') DEFAULT 'admin'
);

-- 2. Customers
CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  address TEXT,
  phone VARCHAR(20),
  email VARCHAR(100),
  status ENUM('active','inactive') DEFAULT 'active',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Packages
CREATE TABLE packages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  package_name VARCHAR(100) NOT NULL,
  speed VARCHAR(50),
  duration VARCHAR(50),
  price DECIMAL(10,2) NOT NULL,
  status ENUM('available','unavailable') DEFAULT 'available'
);

-- 4. Connections
CREATE TABLE connections (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  package_id INT,
  start_date DATE,
  end_date DATE,
  status ENUM('active','inactive','pending') DEFAULT 'pending',
  FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE,
  FOREIGN KEY (package_id) REFERENCES packages(id) ON DELETE SET NULL
);

-- 5. Bills
CREATE TABLE bills (
  id INT AUTO_INCREMENT PRIMARY KEY,
  connection_id INT,
  bill_month VARCHAR(20),
  amount DECIMAL(10,2),
  due_date DATE,
  status ENUM('paid','unpaid') DEFAULT 'unpaid',
  FOREIGN KEY (connection_id) REFERENCES connections(id) ON DELETE CASCADE
);

-- 6. Payments
CREATE TABLE payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  bill_id INT,
  payment_date DATE,
  amount DECIMAL(10,2),
  method VARCHAR(50),
  note TEXT,
  FOREIGN KEY (bill_id) REFERENCES bills(id) ON DELETE CASCADE
);
