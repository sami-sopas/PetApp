# PetApp 

PASOS PARA COMPILAR EL PROGRAMA CON LARAGON

## Pasos

1. En **C:\laragon\www** hacer un ```git clone https://github.com/sami-sopas/PetApp.git```

2. Moverse a la ruta ```cd PetApp```

3.  ```composer install```

4. ```cp .env.example .env```

5. ```php artisan key:generate```

6. ```php artisan storage:link```

7. ```php artisan migrate --seed```

8. ```npm install```

9. ```npm run dev```

10. ```php artisan queue:work```

# Credenciales a llenar en el .env

1. Paypal
2. Pusher
3. Base de datos

