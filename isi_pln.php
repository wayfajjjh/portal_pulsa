<?php
$url = 'https://portalpulsa.com/api/connect/';

$header = array(
'portal-userid: P46745',
'portal-key: c02590aed217b13b65b0a2e3f628e78f', // lihat hasil autogenerate di member area
'portal-secret: 66ec95fde0febed84019d34fc9f819440bbccefb3273ac24bcabd86d570e59e5', // lihat hasil autogenerate di member area
);

$data = array(
'inquiry' => 'PLN', // konstan
'code' => $_POST['kode'], // kode produk
'phone' => $_POST['nomor'], // nohp pembeli
'idcust' => $_POST['id'], // nomor meter atau id pln
'trxid_api' => $_POST['api'], // Trxid / Reffid dari sisi client
'no' => $_POST['jumlah'], // untuk isi lebih dari 1x dlm sehari, isi urutan 2,3,4,dst
);

//echo json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);

echo $result;