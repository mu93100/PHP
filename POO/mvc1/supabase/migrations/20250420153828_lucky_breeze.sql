-- Create database
CREATE DATABASE IF NOT EXISTS MVC;
USE MVC;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    is_admin BOOLEAN DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert admin user (password: admin123)
INSERT INTO users (username, email, password, is_admin) VALUES 
('admin', 'admin@example.com', '$2y$10$Nt0rz6ZaB3SYwHI.eCG6M.MGbuFoOobrDjWw9h1xU1F7L.s8B8MiC', 1);

-- Insert regular user (password: user123)
INSERT INTO users (username, email, password, is_admin) VALUES 
('user', 'user@example.com', '$2y$10$vG8cqtJgFxZKPgREKHXcCuA34H.mXNNYC03ZbXQGvZfQIqTZHKmLW', 0);

-- Insert sample products
INSERT INTO products (name, description, price, image) VALUES 
('Smartphone', 'Latest smartphone with advanced features', 699.99, 'smartphone.jpg'),
('Laptop', 'High-performance laptop for work and gaming', 1299.99, 'laptop.jpg'),
('Headphones', 'Wireless noise-cancelling headphones', 199.99, 'headphones.jpg'),
('Smartwatch', 'Fitness tracker and smartwatch', 249.99, 'smartwatch.jpg'),
('Tablet', '10-inch tablet with high-resolution display', 399.99, 'tablet.jpg');