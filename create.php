<?php
    //data siswa 1
    $data [] = array(
        'no'    => 1,
        'nama'  => 'Salsa',
        'kelas' => 'XII RPL 5',
        'absen' => 39
    );
    //data siswa 1
    $data [] = array(
        'no'    => 2,
        'nama'  => 'Bila',
        'kelas' => 'XII RPL 5',
        'absen' => 40
    );
    //data siswa 1
    $data [] = array(
        'no'    => 3,
        'nama'  => 'Siti',
        'kelas' => 'XII RPL 5',
        'absen' => 41
    );
    //data siswa 1
    $data [] = array(
        'no'    => 4,
        'nama'  => 'Mubarani',
        'kelas' => 'XII RPL 5',
        'absen' => 42
    );

    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    echo $jsonfile;
?>