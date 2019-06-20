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

Para crear fichero en migration y después crear una tabla llamada alumnos:
- php artisan make:migration alumnos --table=alumnos
- Después crearemos en la function up(), los campos de la tabla. Schema::create('alumnos', function (Blueprint $table) { ... }
- En down(), modificamos el código, para que elimine la tabla si exisitiera.
- Ejecutamos: php artisan migrate (tabla creada)
- Para volver a ejecutar, en el caso de que hubiéramos modificado algún camnpo: php artisan migrate:refresh
- Para eliminarla: php artisan migrate:rollback

Para poder gestionar las tablas, podemos usar modelos Tendremos que crear un modelo para cada tabla
- php artisan make:Model Alumno (creamos el modelo). Se relacionará con la tabla alumnos automáticamente

Insertar registros (poblar) en la tabla:
- php artisan make:seeder PoblarAlumnos (creamos la clase PoblarAlumnos)
- Descomentamos el método run en DataBaseSeeder
- En PoblarAlumnos generamos el método create con los datos de los alumnos
- php artisan db:seed
