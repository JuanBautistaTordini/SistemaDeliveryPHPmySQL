CREATE TABLE roles (
    id_rol INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol VARCHAR (255) NOT NULL UNIQUE KEY,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL
) ENGINE = InnoDB;

CREATE TABLE usuarios (
    id_usuarios INT (20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rol_id INT (11) NOT NULL,
    email VARCHAR (255) NOT NULL UNIQUE KEY,
    password TEXT NOT NULL,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,

    FOREIGN KEY (rol_id) REFERENCES roles (id_rol) ON delete no action ON update cascade
) ENGINE = InnoDB;


-- creacion de roles

INSERT INTO roles (nombre_rol, fyh_creacion) VALUES ('ADMINISTRADOR', '2024-12-12 22:31:39', NULL);
INSERT INTO roles (nombre_rol, fyh_creacion) VALUES ('OPERADOR', '2024-12-12 22:31:39', NULL);
INSERT INTO roles (nombre_rol, fyh_creacion) VALUES ('MOTOQUERO', '2024-12-12 22:31:39', NULL);
INSERT INTO roles (nombre_rol, fyh_creacion) VALUES ('CLIENTE', '2024-12-12 22:31:39', NULL);

-- creacion de usuario
INSERT INTO usuarios (rol_id, email, password, fyh_creacion, fyh_actualizacion) VALUES ('1', 'admin@admin.com', '12345678', '2024-12-12 22:33:22', '2024-12-12 22:33:22');