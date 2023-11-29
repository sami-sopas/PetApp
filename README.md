# PetApp 

PASOS PARA COMPILAR EL PROGRAMA CON LARAGON (DE PREFERENCIA USAR EL VIRTUAL HOST QUE ESTE TRAE)

## Pasos


1. (EN CASO DE USAR LA AUTENTICACION DE GOOGLE) En laragon, ir a las configuraciones y cambiar el Hostname a esto: {name}.mx/com/uk (lo que quieras) (Esto es para el google login ya que al agregar un dominio no se puede poner un .test) Si no es el caso, puedes dejarlo como esta

2. En **C:\laragon\www** hacer un ```git clone https://github.com/sami-sopas/PetApp.git```

3. Moverse a la ruta ```cd PetApp```

4.  ```composer install```

5. ```cp .env.example .env```

6. ```php artisan key:generate```

7. ```php artisan storage:link```

8. ```LLena las credenciales del .env```

9. ```php artisan migrate --seed```

10.  ```npm install```

11. ```npm run dev```

12. ```php artisan queue:work```

12. ```php artisan schedule:work```

# Credenciales a llenar en el .env

1. Paypal
2. Pusher
3. Google
4. Base de datos

