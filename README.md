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
```bash
.env.example > .env
```

Executar:
```bash
composer install
```

Caso de erro com a chave, rodar:
```bash
php artisan key:generate
```

Caso erro no .env:
```bash
php artisan cache:clear
```
```bash
php artisan config:clear
```

```bash
php artisan config:cache
```