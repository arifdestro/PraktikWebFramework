# Belajar Penerapan REST API


******************
Pengertian singkat
******************

“ REST, singkatan bahasa Inggris dari Representational State Transfer, adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia seperti www. Istilah ini diperkenalkan pertama kali pada tahun 2000 pada disertasi doktoral Roy Fielding. Pada arsitektur REST, REST server menyediakan resources (sumber daya/data) dan REST client mengakses dan menampilkan resource tersebut untuk penggunaan selanjutnya. “

**************
Sumber Rujukan
**************

Sumber materi diambil dari [CodePolitan](https://www.codepolitan.com/rest-api-server-sederhana-dengan-codeigniter-58901f324a29f)

**************************
Konfigurasi untuk rest api
**************************

Dalam pembuatan Rest API server diperlukan :

    Webserver XAMPP
    Framework Codeigniter dan Library REST server dapat di unduh di link ini: https://github.com/ardisaurus/ci-restserver
    Postman

### Konfigurasi database
* Buat database dengan nama "kontak" :
```
CREATE DATABASE kontak;
```
* Buat tabel baru dengan nama "telepon" :
```
USE kontak;
CREATE TABLE IF NOT EXIST `telepon`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(13) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8;
```
* Masukkan contoh beberapa data :
```
USE kontak;
INSERT INTO `telepon` (`id`, `nama`, `nomor`) VALUES
(1, 'Orion', '08576666762'),
(2, 'Mars', '08576666770'),
(7, 'Alpha', '08576666765');
```
* Lakukan config database pada file database.php pada rest_ci/application/config :
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'kontak',
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

### Penerapan Metode Rest 

- GET
  	`Get adalah sebuah akses untuk membaca sebuah inputan dari database.`

- POST
	`Post adalah sebuah akses untuk menambahkan data ke database.`
	
- PUT
	`Put adalah sebuah akses untuk merubah data yang telah tersimpan dalam database.`
	
