CREATE DATABASE voyage_v2;
USE voyage_v2;
CREATE TABLE client (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(100),
    last_name varchar(100),
    email varchar(150) UNIQUE,
    number varchar(15),
    password varchar(150),
    date_of_birth date
);
CREATE TABLE activite (
    id_activite INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    img varchar(150);
    description text,
    price DECIMAL(10, 2) NOT NULL,
    date_start DATETIME NOT NULL,
    date_fin DATETIME NOT NULL,
    places_desponsibles int NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE reservation (
    id_reservation int(11) AUTO_INCREMENT PRIMARY KEY,
    id_client int(11),
    id_activite int(11),
    reservation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status enum('Pending', 'Confirmed', 'Cancelled') DEFAULT 'Pending' ,
    FOREIGN KEY (id_client) REFERENCES client(id_client),
    FOREIGN KEY (id_activite) REFERENCES activite(id_activite) 
);

CREATE TABLE role (
    id int AUTO_INCREMENT PRIMARY KEY,
    id_client int(11),
    role enum('client', 'admin');
    FOREIGN KEY (id_client) REFERENCES client(id_client)
)