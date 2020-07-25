# Delivery
Projeto para estudo de relacionamentos N:N no Laravel e buscas e filtros

# Models
- Empresa
- Tag

# Tabelas
- empresas
- tags
- empresa_produto

# Instalação
Copiar o aquivo:
```.env.example > .env```

Executar:
```composer install```

Caso de erro com a chave, rodar:
```php artisan key:generate```

Caso erro no .env:
```php artisan cache:clear```
```php artisan config:clear```
```php artisan config:cache```