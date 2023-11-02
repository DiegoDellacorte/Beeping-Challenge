<h3>Pasos para iniciar el proyecto </h3>
<p>1_ Configurar archivo .env Las variables para la BD</p>
<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=127.0.0.1</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=challenge</p>
<p>DB_USERNAME=root</p>
<p>DB_PASSWORD=</p>
<br>
<p>2_ Ejecutar migraciones </p>
<p>php artisan migrate</p>
<br>
<p>3_ Ejecutar Seeder</p>
<p>php artisan db:seed --class=OrdersSeeder</p>
<br>
<p>4_ Calcular total</p>
<p>Correr en consola el siguiente comando</p>
<p>php artisan calculate:total-cost</p>
<br>
<p>5_ Visualizar tabla en la raiz del proyecto</p>
<p>http://challenge.test/</p>
