## TIARA ZAHIRA (20230803056) sistem CRUD untuk menunjang Toko Bunga TIARA's FLORIST

### langkah langkah membuat system Toko Bunga TIARA's FLORIST

1. memakai package dari raugadh : 
```
 composer create-project --prefer-dist raugadh/fila-starter .
```
2. membuat migration dan model : 
```
php artisan make:model -m Product
```
3. lalu setelah itu membuat Filament Resource 
```
php artisan make:filament-resource Product --generate
```
4. setelah itu sudah jadilah system Toko Bunga TIARA's FLORIST

# TERIMAKASIH