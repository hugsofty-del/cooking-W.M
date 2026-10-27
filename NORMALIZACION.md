# Proceso de Normalización - Proyecto Integrador Cooking W.M

## 1. Entidad / Tabla Principal sin Normalizar (0FN)

| id_receta | titulo_receta | descripcion | autor_nombre | autor_email | autor_rol | categoria_nombre | ingredientes (multivalorado) | etiquetas (multivalorado) | comentario_usuario | comentario_texto |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| 1 | Torrejas Dulces | Deliciosas torrejas caseras | Mitch | mitch@cookingwm.com | Administrador | Recetas Dulces | Pan, Leche, Huevos, Azúcar | #dulce, #casero, #postre | Carlos | ¡Quedaron riquísimas! |
| 1 | Torrejas Dulces | Deliciosas torrejas caseras | Mitch | mitch@cookingwm.com | Administrador | Recetas Dulces | Pan, Leche, Huevos, Azúcar | #dulce, #casero, #postre | Pam_zam | Me encantó la receta. |

---

## 2. Proceso de Normalización

### Primera Forma Normal (1FN)
* **Regla:** Eliminar grupos repetitivos y garantizar la atomicidad de los campos.
* **Acción:** Se separan los campos multivalorados (`ingredientes` y `etiquetas`) en registros individuales.

*Tabla Recetas (1FN):* `id_receta`, `titulo`, `descripcion`, `autor_nombre`, `autor_email`, `autor_rol`, `categoria_nombre`  
*Tabla Receta_Ingredientes (1FN):* `id_receta`, `ingrediente`  
*Tabla Receta_Etiquetas (1FN):* `id_receta`, `etiqueta`

---

### Segunda Forma Normal (2FN)
* **Regla:** Cumplir 1FN y eliminar dependencias parciales de la clave primaria compuesta.
* **Acción:** Se crean tablas independientes para `Ingredientes` y `Etiquetas`, relacionadas mediante tablas intermedias relacionales de tipo N:M.

*Tabla Recetas:* `id_receta` (PK), `titulo`, `descripcion`, `autor_nombre`, `autor_email`, `autor_rol`, `categoria_nombre`  
*Tabla Ingredientes:* `id_ingrediente` (PK), `nombre`  
*Tabla Receta_Ingrediente:* `id_receta` (FK), `id_ingrediente` (FK)  
*Tabla Etiquetas:* `id_etiqueta` (PK), `nombre`  
*Tabla Receta_Etiqueta:* `id_receta` (FK), `id_etiqueta` (FK)

---

### Tercera Forma Normal (3FN)
* **Regla:** Cumplir 2FN y eliminar dependencias transitivas.
* **Acción:** 
  1. Los datos del autor dependen del usuario (`Usuarios` y `Roles`).
  2. El nombre de la categoría se traslada a la tabla `Categorias`.

---

## 3. Listado de Tablas Resultantes

1. **`roles`**: `id_rol` (PK), `nombre_rol`
2. **`usuarios`**: `id_usuario` (PK), `nombre`, `email`, `password`, `id_rol` (FK)
3. **`categorias`**: `id_categoria` (PK), `nombre_categoria`, `descripcion`
4. **`recetas`**: `id_receta` (PK), `titulo`, `descripcion`, `imagen`, `id_usuario` (FK), `id_categoria` (FK), `created_at`, `updated_at`
5. **`cursos`**: `id_curso` (PK), `titulo`, `descripcion`, `nivel`
6. **`inscripciones_cursos`**: `id_inscripcion` (PK), `id_usuario` (FK), `id_curso` (FK), `created_at`