# Praktikum Tugas Web Framework

Nama : Muhammad Arif A.F /
NIM  : E41181232

# CRUD-With-Codeigniter
CRUD dengan Template Admin LTE menggunakan Codeigniter

!["AdminLTE Presentation"](https://adminlte.io/AdminLTE3.png "AdminLTE Presentation")

Fitur : 
  1. CRUD with Ajax
  2. Datatable
  3. Export dan Import ke Excel
  4. Chart
  
Akun Login :
  1. username : arif1299 / password : arif1299
  2. username : nurhadi123 / password : nurhadi123

## Cara Penggunaan
1. Jalankan XAMPP anda atau yang lain
2. Buat Repository dan Masukkan hasil download anda kedalam repository
3. Panggil Repository dengan http://localhost/(sesuai direktori anda) 
4. Buat database baru dan import dari direktori folder database **DATABASE** dengan nama `sipedes.sql`
5. Pastikan kode pada file `application/config/database.php` telah sama seperti baris kode berikut :

``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'sipedes',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

