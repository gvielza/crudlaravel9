## cmds
php artisan make:migration create_tareas_table
php artisan migrate
## controlador con metodos basicos y especificando el modelo para que inyecte
php artisan make:controller TareaControler -r --model=Tarea

##debajo del form
@csrf

##componente
php artisan make:component TareaFormBody

##request
php artisan make:request TareaRequest

##Intalar Livewire

##todas las rutas
Route::resource('tarea',TareaControler::class);
php artisan route:list

