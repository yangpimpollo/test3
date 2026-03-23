CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    role VARCHAR(10) NOT NULL CHECK (role IN ('admin', 'user'))
);

INSERT INTO usuarios (user_name, pass, email, role) 
VALUES ('admin_user', 
        '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
        'admin@example.com', 
        'admin' );