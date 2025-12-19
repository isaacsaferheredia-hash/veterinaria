<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Evaluacion– Desarrollo en Plataformas

**Estudiante:** Jonathan Heredia  
**Fecha:** 17/12/2025  
**Paralelo:** 2

---

## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:**  
`mascotas`

**Campos:**

| Campo | Tipo | ¿Obligatorio? |
|---|---|---|
| id | bigint (auto incremental) | Sí |
| nombreMascota | string(15) | Sí |
| especie | string(15) | Sí |
| raza | string(14) | Sí |
| edad | int | Sí |
| nombreDueño | string(15) | Sí |
| apellidoDueño | string(15) | Sí |
| telefóno | string(10) | Sí |
| observaciones | text(100) | No |
| estado | varchar(10) | Sí |
| created_at | timestamp | Sí |
| updated_at | timestamp | Sí |

---

### 3. ¿Se puede eliminar registros?

**Respuesta:**  
No se eliminan físicamente los registros.

**Razón (1 línea):**  
Se aplica borrado lógico mediante el campo `estado`, marcando los registros como INACTIVO para mantener el historial y la trazabilidad de la información porque también al leer del caso podemos considerar que las máscotas pueden morir y es una buena idea no borrar el registro sino dejarlo como inactivo y solo mostrar los activos.
## 📸 Capturas del Sistema

### Listado de mascotas
![Listado de mascotas](capturas/listado.png)

### Registro de mascotas
![Registro de mascotas](capturas/registrarMascota.png)

### Mascota registrado
![Mascota registrada](capturas/mascotaregistrada.png)

### Edición de mascotas
![Edición de mascotas](capturas/editarMascota.png)

### mascota actualizada
![Mascota actualizada](capturas/mascotaActualizada.png)

### Eliminación de  mascota (borrado lógico)
![Eliminación de mascota](capturas/eliminarMascota.png)

### mascota marcado como inactivo
![Vehículo eliminado](capturas/BorradoLogicoBD.png)

###  deleted at en la base de datos
![Borrado lógico en la base de datos](capturas/deletedat.png)

### Vista móvil
![Vista móvil](capturas/movil.png)

link del git
