# LotusTasks
# LotusTasks

LotusTasks es una aplicación web diseñada para ayudarte a gestionar tus tareas diarias de manera eficiente y efectiva. La aplicación permite crear, actualizar, eliminar y marcar tareas como completadas.

## Tabla de Contenidos

- [Descripción](#descripción)
- [Características](#características)
- [Requisitos Previos](#requisitos-previos)
- [Instalación](#instalación)
- [Configuración de la Base de Datos](#configuración-de-la-base-de-datos)
- [Uso](#uso)

## Descripción

LotusTasks es una herramienta de gestión de tareas desarrollada con Laravel y Bootstrap. Permite a los usuarios organizar sus tareas, estableciendo prioridades y manteniéndolas al día.

## Características

- Crear, leer, actualizar y eliminar tareas.
- Marcar tareas como completadas.
- Interfaz de usuario intuitiva y responsive.
- Gestión de usuarios con autenticación y autorización.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado en tu sistema:

- PHP >= 7.4
- Composer
- npm
- MySQL

## Instalación

1. Clona el repositorio en tu máquina local.
   ```bash
   git clone https://github.com/tu-usuario/lotustasks.git
   cd lotustasks
   
2. Instala las dependencias de PHP con Composer.
   composer install
3. Instala las dependencias de Node.js.
      npm install
      npm run dev
4. cp .env.example .env
    php artisan key:generate

## CONFIGURACIÓN DE LA BASE DE DATOS
#1 Configura la conexión a la base de datos en el archivo .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306// mirar en XAMPP puerto 
DB_DATABASE=ToDo //Nuestra base se llase ToDo, aca deberia ver su nombre de bd
DB_USERNAME=root //tu-usuario
DB_PASSWORD=      //tu-contraseña
#2 Luego, ejecuta las migraciones:
-> php artisan migrate
*************Script SQL para la Base de Datos*******************
-- Crear la base de datos ToDo

CREATE DATABASE ToDo;

-- Usar la base de datos ToDo
USE ToDo;

-- Crear la tabla Users (ajustar según necesidades), 
CREATE TABLE Users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Crear la tabla Tasks,

    CREATE TABLE Tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    descrip TEXT,
    isDone BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);



-- Insertar registros en la tabla Tasks


INSERT INTO Tasks (title, descrip) VALUES
('Revisar correos electrónicos', 'Dedicar 30 minutos a revisar y responder correos electrónicos importantes.'),
('Preparar presentación', 'Crear una presentación para la reunión del equipo sobre el progreso del proyecto.'),
('Desarrollar nueva funcionalidad', 'Implementar la nueva funcionalidad de búsqueda en la aplicación y realizar pruebas.'),
('Planificar reunión con el cliente', 'Establecer agenda y preparar puntos de discusión para la próxima reunión con el cliente.'),
('Actualizar documentación del proyecto', 'Revisar y actualizar la documentación del proyecto para reflejar los cambios recientes.');



-- Insertar registros en la tabla Tasks con fechas específicas
INSERT INTO Tasks (title, descrip, created_at, updated_at) VALUES
('Revisar correos electrónicos', 'Dedicar 30 minutos a revisar y responder correos electrónicos importantes.', '2023-07-15 10:00:00', '2023-07-15 10:00:00'),
('Preparar presentación', 'Crear una presentación para la reunión del equipo sobre el progreso del proyecto.', '2023-08-20 14:00:00', '2023-08-20 14:00:00');


## *USO*
-- Inicia el servidor de desarrollo.
--> php artisan serve
