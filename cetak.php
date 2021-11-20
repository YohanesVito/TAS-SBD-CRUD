
<?php
    require "fpdf.php";
    include "config.php";

    $id = $_GET["id"];

    $id_asal = query("select asal from trip natural join trip_order where id_order = '$id' ")[0]['asal'];
    $id_tujuan = query("select tujuan from trip natural join trip_order where id_order = '$id' ")[0]['tujuan'];
    $id_jam = query("select jam from trip natural join trip_order where id_order = '$id' ")[0]['jam'];
    $id_harga = query("select harga_tiket from trip natural join trip_order where id_order = '$id' ")[0]['harga_tiket'];

    $id_tanggal = query("select tanggal from trip_order where id_order = '$id' ")[0]['tanggal'];
    $id_jemput = query("select alamat_jemput from trip_order where id_order = '$id' ")[0]['alamat_jemput'];

    $jemput_pendek = substr($id_jemput,0,30);
    

    $id_antar = query("select alamat_antar from trip_order where id_order = '$id' ")[0]['alamat_antar'];
    $antar_pendek = substr($id_antar,0,30);

    $id_seat = query("select seat from seat natural join trip_order where id_order = '$id' ")[0]['seat'];

    $id_nama = query("select nama_pelanggan from pelanggan natural join trip_order where id_order = '$id' ")[0]['nama_pelanggan'];
    $id_telp = query("select no_telp from pelanggan natural join trip_order where id_order = '$id' ")[0]['no_telp'];
    
    $id_diskon = query("select diskon from diskon natural join trip_order where id_order = '$id' ")[0]['diskon'];

    $id_total = $id_harga - $id_diskon;

    $pdf = new FPDF("p","cm","a5");
    $pdf->AddPage();

    $pdf->Image('bg-cetak.jpg',0,0,-299);
    //$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
    
    $pdf->SetFont("courier","B",20);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(10,3.5,"            ",0,2,"R");

    $pdf->SetFont("courier","B",14);

    $pdf->Cell(-4,-1.6,"",0,2);
    $pdf->Cell(-4,3,   "",0,2);

    $pdf->Cell(-4,-1.6,"",0,2);
    $pdf->Cell(-4,3,   "",0,2);

    $pdf->Cell(-4,-1.6,"    $id",0,2);

    $pdf->Cell(-4,-1.6,"",0,2);
    $pdf->Cell(-4,3,   "",0,2);

    $pdf->Cell(-4,3,   " Asal       : $id_asal",0,2);
    $pdf->Cell(-4,-1.6," Tujuan     : $id_tujuan",0,2);
    $pdf->Cell(-4,3,   " Tanggal    : $id_tanggal",0,2);
    $pdf->Cell(-4,-1.6," Jam        : $id_jam",0,2);
    $pdf->Cell(-4,3,   " No. Kursi  : $id_seat",0,2);
    $pdf->Cell(-4,-1.6," Nama       : $id_nama",0,2);
    $pdf->Cell(-4,3,   " No. Telp   : $id_telp",0,2);

    $pdf->Cell(-4,-1.6," Al.Jemput  : ",0,0);

    $pdf->SetFont("courier","B",12);
    $pdf->Cell(-4,-1.6,   "                                $jemput_pendek",0,1);

    $pdf->SetFont("courier","B",14);
    $pdf->Cell(-4,3," Al.Antar   : ",0,0);

    $pdf->SetFont("courier","B",12);
    $pdf->Cell(-4,3,    "                                $antar_pendek",0,1);

    $pdf->SetFont("courier","B",14);
    $pdf->Cell(-4,-1.6," Harga      : Rp$id_harga",0,2);
    $pdf->Cell(-4,3,   " Diskon     : Rp$id_diskon",0,2);
    $pdf->Cell(-4,-1.6," Total      : Rp$id_total.00",0,2);

    $pdf->Output();
?>

