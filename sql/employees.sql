CREATE TABLE employees (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    hours DECIMAL(5,2) NOT NULL,
    age INT(3) NOT NULL,  
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,     
    gender VARCHAR(50) NOT NULL,     
    address VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (email)
);
