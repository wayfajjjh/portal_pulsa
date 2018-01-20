<?php
$url = 'https://portalpulsa.com/api/connect/';

$header = array(
'portal-userid: P33769',
'portal-key: c9f53d91bde2fa8043a5fb19e9f831a1', // lihat hasil autogenerate di member area
'portal-secret: 6979458cbe1266bdf6910f1453fe18e778b30162b60609d8c3f8a0997b0aa796', // lihat hasil autogenerate di member area
);

$data = array( 
'inquiry' => 'STATUS', // konstan
'trxid_api' => '123', // Trxid atau Reffid dari sisi client saat transaksi pengisian
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