## installation

- clone repository

```
git clone https://github.com/dmitriilopotovskii/testtask.git
```
-  <code>cd testtask</code>

- install composer dependencies <code>composer install</code>
- Copy <code>.env.example</code> file to <code>.env</code> on the root folder.
- Run  <code>php artisan key:generate</code>
- Run <code>./vendor/bin/sail up -d</code>
- Run <code>./vendor/bin/sail npm install</code>
- Run <code>./vendor/bin/sail npm run dev</code>
- Run <code>touch database/database.sqlite</code>
- Run <code>./vendor/bin/sail artisan migrate --seed</code>
- Go to <code>http://localhost/
- Go to <code>http://localhost/admin
- username:<code>test@example.com</code> password:<code>password</code>

