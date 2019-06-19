# Prueba con Laravel

### Sencillo programa realizado con Laravel

Para iniciar el servidor: 
- php artisan serve &

Para ver las rutas:
- php artisan route:list

Crear controlador:
- php artisan make:Controller Acciones

Autentificación:
- php artisan make:auth

Datos en la bbdd, en el fichero 'env', después para crear las tablas:
- php artisan migrate:install
- php artisan migrate

Para crear fichero en migration y después crear tabla alumnos:
- php artisan make:migration alumnos --table=alumnos

