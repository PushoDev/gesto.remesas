# Gesto Remesas

================

Proyecto de gestión de remesas desarrollado con Laravel y FilamentPHP.

## Descripción

---

Gesto Remesas es un sistema de gestión de remesas diseñado para ayudar a las empresas a gestionar sus remesas de manera eficiente y segura. El sistema permite a los usuarios crear, editar y eliminar remesas, así como asignarles a los remitentes y destinatarios.

## Características

---

-   Creación, edición y eliminación de remesas
-   Asignación de remitentes y destinatarios a las remesas
-   Gestión de remesas en diferentes estados (pendiente, en curso, finalizado)
-   Notificaciones para los usuarios sobre cambios en las remesas
-   Integración con FilamentPHP para una interfaz de usuario intuitiva

## Requisitos

---

-   PHP 8.2 o superior
-   Node
-   Composer
-   Laravel 9.x
-   FilamentPHP 2.x
-   Base de datos SQLite

## Instalación

---

1.  Clona el repositorio desde GitHub: `git clone https://github.com/PushoDev/gesto.remesas.git`
2.  `cd gesto.remesas`
3.  Instala las dependencias de npm: `npm install`
4.  Instala las dependencias de Composer: `composer install`
5.  Configura la base de datos en el archivo `.env`
6.  Ejecuta las migraciones: `php artisan migrate`
7.  Ejecuta `php artisan make:filament-user`
8.  Inicia el servidor de desarrollo: `composer run dev`

## Uso

---

1.  Accede a la interfaz de usuario en `http://localhost:8000/admin/login`
2.  Inicia sesión con tus credenciales de usuario
3.  Puedes crear, editar y eliminar remesas desde la sección de "Remesas"
4.  Puedes asignar remitentes y destinatarios a las remesas desde la sección de "Remitentes" y "Destinatarios"

## Contribuciones

---

Si deseas contribuir al proyecto, por favor crea un fork del repositorio y envía una solicitud de pull con tus cambios. Asegúrate de seguir las convenciones de código y las reglas de estilo del proyecto.

## Licencia

---

Gesto Remesas está bajo la licencia MIT. Puedes encontrar la licencia en el archivo `LICENSE` del repositorio.

## Autores

---

-   [PushoDev] (https://github.com/PushoDev)

## Contacto

---

Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos en [bethocubans1990@gmail.com] (bethocubans1990@gmail.com).

## Credenciales de usuario

-   Usuario: `admin`
-   Contraseña: `password`
-   Tus Credenciales a la hora ade crear

## Acceso a la interfaz de usuario

-   Accede a la interfaz de usuario en `http://localhost:8000/admin/login`
-   Inicia sesión con las credenciales de usuario: `admin` y `password`
