# PetApp 

PASOS PARA COMPILAR EL PROGRAMA CON LARAGON

## Pasos


1. En laragon, ir a las configuraciones y cambiar el Hostname a esto: {name}.mx (Esto es para el google login, en caso de que el dominio sea petapp.mx, si no se va usar, se puede usar el .test, no olvidar cambiarlo en el .env)

2. En **C:\laragon\www** hacer un ```git clone https://github.com/sami-sopas/PetApp.git```

3. Moverse a la ruta ```cd PetApp```

4.  ```composer install```

5. ```cp .env.example .env```

6. ```php artisan key:generate```

7. ```php artisan storage:link```

8. ```php artisan migrate --seed```

9. ```npm install```

10. ```npm run dev```

11. ```php artisan queue:work```

# Credenciales a llenar en el .env

1. Paypal
2. Pusher
3. Google
4. Base de datos

