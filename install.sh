cd c:laragon/www/PetApp
composer install
cp .env.example .env
npm install
php artisan migrate
npm run dev
echo "Done!"