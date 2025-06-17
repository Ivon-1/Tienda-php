# Tienda PHP

Este es un proyecto de tienda desarrollado en PHP puro, utilizando una arquitectura MVC (Modelo-Vista-Controlador).

## Requisitos Previos 📋

* PHP >= 7.4
* Servidor web (Apache/Nginx) o PHP built-in server
* Composer (Gestor de dependencias de PHP)
* MySQL/MariaDB

## Instalación 🔧

1. Clonar el repositorio:
```bash
git clone https://github.com/[tu-usuario]/Tienda-php.git
cd Tienda-php
```

2. Instalar dependencias con Composer:
```bash
composer install
```

3. Configurar la base de datos:
   - Crear una base de datos en MySQL
   - Configurar las credenciales de la base de datos en el archivo de configuración correspondiente

## Ejecutar el Proyecto 🚀

Hay dos formas de ejecutar el proyecto:

### 1. Usando el servidor integrado de PHP:
```bash
php -S localhost:8000 -t public
```
Luego, abre tu navegador y visita: `http://localhost:8000`

### 2. Usando XAMPP/Apache:
- Copia el proyecto en la carpeta `htdocs` de XAMPP
- Inicia Apache desde el panel de control de XAMPP
- Visita: `http://localhost/Tienda-php/public`

## Estructura del Proyecto 📁

```
Tienda-php/
├── controller/     # Controladores de la aplicación
├── model/         # Modelos y lógica de negocio
├── view/          # Vistas y templates
├── public/        # Punto de entrada y archivos públicos
└── vendor/        # Dependencias de Composer
```

## Tecnologías Utilizadas 🛠️

- PHP (Backend)
- HTML, CSS (Frontend)
- MySQL/MariaDB (Base de datos)

## Licencia 📄

Este proyecto está bajo la Licencia MIT - mira el archivo [LICENSE.md](LICENSE.md) para detalles 