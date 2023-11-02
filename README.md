Pasos para iniciar el proyecto 
1_ Configurar archivo .env Las variables para la BD
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=challenge
DB_USERNAME=root
DB_PASSWORD=

2_ Ejecutar migraciones 
php artisan migrate

3_ Ejecutar Seeder
php artisan db:seed --class=OrdersSeeder

4_ Calcular total
Correr en consola el siguiente comando
php artisan calculate:total-cost

5_ Visualizar tabla en la raiz del proyecto
http://challenge.test/
