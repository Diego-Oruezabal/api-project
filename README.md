# API Project

**API Project** es una aplicación web desarrollada con Laravel que implementa una API RESTful para gestionar recursos. Este proyecto sirve como base para construir y escalar servicios web robustos y eficientes.

Mi idea es que sirva de base para crear un blog personal , donde se puedan crear, editar, eliminar y mostrar posts. 

## ✨ Características

- ✅ Implementación de una API RESTful utilizando Laravel.
- 🔐 Gestión de autenticación y autorización de usuarios.
- 📦 Estructura modular y escalable para facilitar el mantenimiento.
- ⚡ Integración con bases de datos relacionales mediante Eloquent ORM.
- 🧪 Pruebas automatizadas para garantizar la calidad del código.

## 📸 Vista previa

*Actualmente no disponible.*

## 🚀 Instalación y uso

```bash
## Clona el repositorio:

git clone https://github.com/Diego-Oruezabal/api-project
cd api-project

## Instala las dependencias:

composer install
npm install && npm run dev

## Configura el entorno:

cp .env.example .env
php artisan key:generate

## Configura la base de datos en el archivo .env y ejecuta las migraciones:

php artisan migrate

## Inicia el servidor de desarrollo:

php artisan serve

## La aplicación estará disponible en:

http://localhost:8000

```
## 📝 Estructura del proyecto
```bash
├── app/                 # Contiene la lógica principal de la aplicación
├── bootstrap/           # Archivos de arranque de Laravel
├── config/              # Archivos de configuración
├── database/            # Migraciones y seeders de la base de datos
├── public/              # Directorio público accesible desde el navegador
├── resources/           # Vistas y archivos frontend
├── routes/              # Definición de rutas de la aplicación
├── storage/             # Archivos generados y cachés
├── tests/               # Pruebas automatizadas
├── .env.example         # Archivo de ejemplo para variables de entorno
├── artisan              # Interfaz de línea de comandos de Laravel
├── composer.json        # Dependencias de PHP
├── package.json         # Dependencias de JavaScript
└── README.md            # Documentación del proyecto
```
## 🛠 Tecnologías utilizadas
PHP

Laravel

MySQL

JavaScript

Vite

## 💬 Créditos
Creado por Diego Oruezabal.
Este proyecto fue desarrollado como parte del aprendizaje y práctica en la construcción de APIs RESTful con Laravel.
