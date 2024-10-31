CREATE TABLE `visitor_logs` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `ip_address` VARCHAR(45) NOT NULL,
    `http_referer` VARCHAR(255) DEFAULT NULL,
    `visit_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
