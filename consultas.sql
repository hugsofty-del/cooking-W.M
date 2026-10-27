-- Proyecto Integrador: Cooking W.M (consultas.sql)
USE cooking_wm;

-- 1. CREATE
INSERT INTO roles (nombre_rol) VALUES ('Administrador'), ('Estudiante'), ('Chef');

INSERT INTO categorias (nombre_categoria, descripcion) VALUES 
('Recetas Dulces', 'Postres sencillos y repostería.'),
('Recetas Saladas', 'Pastas, guisos y platos tradicionales.'),
('Recetas Saludables', 'Comida balanceada y opciones integrales.');

INSERT INTO usuarios (nombre, email, password, id_rol) VALUES 
('Mitch Chef', 'mitch@cookingwm.com', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe1e843N4d.d4E1yLhZ1/N.', 1),
('Carlos Mendoza', 'c.mendoza@email.com', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe1e843N4d.d4E1yLhZ1/N.', 3),
('Cherel-2009', 'cherel@email.com', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe1e843N4d.d4E1yLhZ1/N.', 2);

INSERT INTO recetas (titulo, descripcion, imagen, id_usuario, id_categoria) VALUES 
('Torrejas Dulces Caseras', 'Deliciosas torrejas pasadas por leche y miel.', 'torrejas.png', 1, 1),
('Pollo al Curry Express', 'Pechuga de pollo con salsa cremosa de curry.', 'curry.png', 2, 2),
('Bowl de Salmón y Palta', 'Salmón fresco con vegeteles frescos.', 'salmon.png', 3, 3);

INSERT INTO cursos (titulo, descripcion, nivel) VALUES 
('Pastelería Saludable', 'Postres sin azúcar refinada.', 'principiante'),
('Cocina Express', 'Platos listos en menos de 20 minutos.', 'intermedio');

INSERT INTO inscripciones_cursos (id_usuario, id_curso) VALUES (3, 1), (3, 2);

-- 2. READ
SELECT id_receta, titulo, descripcion, created_at FROM recetas WHERE id_categoria = 1 ORDER BY created_at DESC;

SELECT 
    r.id_receta,
    r.titulo AS Receta,
    c.nombre_categoria AS Categoria,
    u.nombre AS Autor,
    u.email AS Email_Autor
FROM recetas r
INNER JOIN usuarios u ON r.id_usuario = u.id_usuario
INNER JOIN categorias c ON r.id_categoria = c.id_categoria
ORDER BY r.id_receta ASC;

-- 3. UPDATE
UPDATE recetas 
SET titulo = 'Torrejas Dulces Especiales de la Casa',
    descripcion = 'Receta renovada de torrejas caseras con canela.'
WHERE id_receta = 1;

-- 4. DELETE
DELETE FROM inscripciones_cursos WHERE id_usuario = 3 AND id_curso = 2;