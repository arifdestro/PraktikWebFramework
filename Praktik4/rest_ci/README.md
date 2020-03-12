##########################
Belajar Penerapan REST API
##########################

******************
Pengertian singkat
******************

“ REST, singkatan bahasa Inggris dari Representational State Transfer, adalah suatu gaya arsitektur perangkat lunak untuk untuk pendistibusian sistem hipermedia seperti www. Istilah ini diperkenalkan pertama kali pada tahun 2000 pada disertasi doktoral Roy Fielding. Pada arsitektur REST, REST server menyediakan resources (sumber daya/data) dan REST client mengakses dan menampilkan resource tersebut untuk penggunaan selanjutnya. “

**************
Sumber Rujukan
**************

Sumber materi diambil dari `CodePolitan
<https://www.codepolitan.com/rest-api-server-sederhana-dengan-codeigniter-58901f324a29f>`_.

**************************
Konfigurasi untuk rest api
**************************

Dalam pembuatan Rest API server diperlukan :

    Webserver XAMPP
    Framework Codeigniter dan Library REST server dapat di unduh di link ini: https://github.com/ardisaurus/ci-restserver
    Postman

Setelah semua tools yang diperlukan sudah siap,install Postman, kemudian extract Codeigniter dan library REST server yang telah didownload dan pindah ke dalam direktori xampp/htdocs ubah nama direktori hasil ekstrakan tadi dengan nama rest_ci. Hidupkan xampp webserver, masukkan link http://127.0.0.1/rest_ci/index.php/rest_server ke addres bar browser, jika berhasil maka akan muncul halaman utama Rest Server Tests.

Buat database baru dengan nama "kontak" :

CREATE DATABASE kontak;

Buat tabel baru dengan nama "telepon" dengan field id (int 11 AUTO_INCREMENT), nama (varchar 30), nomor (varchar 11):

USE kontak;
CREATE TABLE IF NOT EXISTS `telepon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

Masukan beberapa data contoh :

USE kontak;
INSERT INTO `telepon` (`id`, `nama`, `nomor`) VALUES
(1, 'Orion', '08576666762'),
(2, 'Mars', '08576666770'),
(7, 'Alpha', '08576666765');

Buka database.php pada rest_ci/application/config ubah menjadi

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

****************
Metode penerapan
****************


