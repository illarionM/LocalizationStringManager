### Project requirements:
 - Docker Desktop

### Setup project (from root folder):
```
./vendor/bin/sail up
```

### Access URL after project installation:
http://localhost/

### Connect to project docker container:
```
docker exec -it localization-string-manager-laravel.test-1 bash
```

### Run DB seeder (from container):
```
php artisan db:seed
```

### Login credentials:
```
admin@test.com
Testing123!
```

