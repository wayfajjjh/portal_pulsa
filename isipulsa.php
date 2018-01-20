<?php
$url = 'https://portalpulsa.com/api/connect/';

$header = array(
'portal-userid: P33769',
'portal-key: c9f53d91bde2fa8043a5fb19e9f831a1', // lihat hasil autogenerate di member area
'portal-secret: 6979458cbe1266bdf6910f1453fe18e778b30162b60609d8c3f8a0997b0aa796', // lihat hasil autogenerate di member area
);

$data = array( 
'inquiry' => 'I', // konstan
'code' => 'I5', // kode produk
'phone' => '085727700650', // nohp pembeli
'trxid_api' => '123', // Trxid / Reffid dari sisi client
'no' => '1', // untuk isi lebih dari 1x dlm sehari, isi urutan 1,2,3,4,dst
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);

echo $result;