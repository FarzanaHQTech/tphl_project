CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id INT UNSIGNED NOT NULL, 
    title VARCHAR(255) NOT NULL,
    description TEXT NULL,
    start_date DATE,
    deadline DATETIME,  

    employee_accept TINYINT(1) DEFAULT 0,  
    status ENUM('pending','in_progress','completed','expired') DEFAULT 'pending',
    progress INT DEFAULT 0, 
    priority ENUM('low','medium','high','urgent') DEFAULT 'medium',
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    
    FOREIGN KEY (employee_id) REFERENCES employees(id),
    INDEX idx_employee_id (employee_id)
) ENGINE=InnoDB;


CREATE TABLE departments (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    status TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE designations (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department_id INT UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE employees (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(200) NOT NULL,
    employee_id VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    father_name VARCHAR(100) NULL,
    phone VARCHAR(20) NOT NULL,
    emergency_contact VARCHAR(20) NULL,
    qualification VARCHAR(100) NULL,
    photo VARCHAR(200) NULL,
    experience TEXT NULL,
    address TEXT NOT NULL,
    pass_num VARCHAR(100) NULL,
    department_id INT UNSIGNED NOT NULL,
    designation_id INT UNSIGNED NULL,
    joining_date DATE NULL,
    account_holder_name VARCHAR(100) NULL,
    account_number VARCHAR(50) NULL,
    bank_name VARCHAR(100) NULL,
    branch_name VARCHAR(100) NULL,
    social_media1 VARCHAR(255) DEFAULT NULL,
    social_media2 VARCHAR(255) DEFAULT NULL,
    social_media3 VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE,
    FOREIGN KEY (designation_id) REFERENCES designations(id) ON DELETE SET NULL
) ENGINE=InnoDB;

