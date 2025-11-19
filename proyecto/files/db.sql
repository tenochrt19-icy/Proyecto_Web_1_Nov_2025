-- crear la base de datos 
create database crud_app

-- seleccionar db
use crud_app

-- crear la tabla 
create table usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL, 
    telefono VARCHAR(15) NOT NULL
);

CREATE TABLE 'users' (
    'id' int (11) NOT NULL AUTO_INCREMENT,
    'username' varchar(50) NOT NULL,
    'password' varchar(255) NOT NULL,
    PRIMARY KEY ('id'),
    UNIQUE KEY 'username' ('username')
)ENGIE = InnoDB DEFAULT CHARSET = latin1;


INSERT INTO `login_db`.`users` (`id`, `username`, `password`) VALUES ('1', 'nat', '12345');
SELECT COUNT(*) AS contar FROM users";