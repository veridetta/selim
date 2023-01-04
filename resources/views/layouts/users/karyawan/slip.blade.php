<style>
    *{
        margin-left: auto;
        margin-right: auto;
        font-family: sans-serif;
    }

    table{
        border-collapse: collapse;
    }

    table tr td{
        padding:10px;
    }
</style>
<html>
<head>
    <title> Form Slip Gaji Karyawan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form method="post" action="uts_proses.php" style="padding-left:20px;padding-right:20px;padding-top:5px;padding-bottom:5px">
    <table>
        <tr>
            <td colspan="7" align="center" style="padding-bottom: 2px !important"><h3 style="margin-bottom: 1px !important">SLIP GAJI KARYAWAN<br></h3></td>
        </tr>
        <tr>
            <td colspan="7" align="center" style="padding-top: 2px !important"><h5>Periode {{$data['bulan'].' - '.$data['tahun']}}<br></h5></td>
        </tr>
        <tr>
            <td width="200">Nama Karyawan</td>
            <td>:</td>
            <td>
               {{$data['nama']}}
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td width="200">NIP</td>
            <td>:</td>
            <td>
               {{$data['nip']}}
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td width="160" align="center" colspan="3" style="font-weight:bold;text-decoration:underline">PENGHASILAN</td>
            <td></td>
            <td width="160" align="center" colspan="3" style="font-weight:bold;text-decoration:underline">POTONGAN</td>
        </tr>
        <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td align="right"><?php echo number_format($data['gaji_kotor']); ?></td>
            <td width="150px"></td>
            <td>BPJS Kesehatan</td>
            <td>:</td>
            <td>{{$data['bpjs']}}</td>
        </tr>
        <tr>
            <td>Tj. Jabatan</td>
            <td>:</td>
            <td align="right"><?php echo number_format(0); ?></td>
            <td></td>
            <td>Jamsostek</td>
            <td>:</td>
            <td>{{$data['jamsos']}}</td>
        </tr>
        <tr>
            <td>Tj. Shift</td>
            <td>:</td>
            <td align="right"><?php echo number_format(0); ?></td>
            <td></td>
            <td>PPh 22</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Tj. Transport</td>
            <td>:</td>
            <td align="right"><?php echo number_format(0); ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td align="right"><?php echo number_format($data['gaji_kotor']); ?></td>
            <td></td>
            <td>Total</td>
            <td>:</td>
            <td align="right"><?php echo number_format($data['total_pot']); ?></td>
        </tr>
        <tr>
            <td align="center" colspan="7" style="font-weight:bold;text-decoration:underline;border:0.5px solid !important;">PENERIMAAN BERSIH : <?php echo number_format($data['gaji']); ?></td> 
        </tr>
    </table>
    <table>
        <tr>
            <td colspan="4">
            <td  align="center">{{$data['sekarang']}}</td>
        </tr>
        <tr>
            <td  height="80px" align="center" style="vertical-align: top;">Bagian SDM</td>
            <td width="50px"></td>
            <td  align="center"style="vertical-align: top;">Karyawan</td>
            <td width="50px"></td>
            <td align="center"style="vertical-align: top;">Manajer HRD</td>
        </tr>
        <tr>
            <td align="center">Nama Bagian SDM</td>
            <td width="50px"></td>
            <td  align="center">{{$data['nama']}}</td>
            <td width="50px"></td>
            <td  align="center">Nama Manajer HRD</td>
        </tr>
    </table>
</form>
</body>
</html>