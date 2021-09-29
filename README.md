

## Pasos proyecto laravel

1.- Crear usuarios passport
   php artisan passport:client --password -> crear un unico usuario
2.- Manejo de versiones
3.-Controlador de registro de usuario 
   php artisan make:controller Api/V1/UserController
4.- Creacion del router user
5.- Crear el usuario

6.- Creacion de nuestro modelos con base al esquema creado
    php artisan make:model Comprador/CompradorModel
    php artisan make:model Producto/ProductoModel -m

7.- Creacion de Controladores
   php artisan make:controller Api/V1/PagarController --api

8.- Creacion de las rutas con middleware

9.- Implementar propiedades a cada modelo creado

10.- Implementado relacion en los modelos

11.- Implemetacion de las referencias de las tablas existentes 
    $table->foreign('producto_id')->references('id')->on('producto_models');

12.- Crear una tabla pivote entre categoria y producto para la relacion muchos a muchos 
php artisan make:migration categoria_model_producto_model_table --create=categoria_producto

13.- Crear un resource para cada respuesta del controlador 
	php artisan make:resource V1/UserResource 

14.- Crud completo , falto el destroy