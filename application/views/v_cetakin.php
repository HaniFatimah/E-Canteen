<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Transaksi</title>
</head>
    <style>
        body{
            margin:60px;
        }

        table{
            border-collapse: collapse;
        }

        td{
            padding:20px;
        }
    </style>
<body onload="window.print()">
<table class="table table-bordered" width="100%" border="1px" cellspacing="0" cellpadding="8px">
        <th align="center">TRANSAKSI</th>
</table>
<br><br>
    <table>

    <tr>
    <td>Id Transaksi</td>
    <td>:</td>
    <td><?php echo $data->id_transaksi?></td>
    </tr>

    <tr>
    <td>Tanggal Transaksi</td>
    <td>:</td>
    <td><?php echo $data->tanggal_transaksi?></td>
    </tr>


    <tr>
    <td>Sub Total</td>
    <td>:</td>
    <td><?php echo $data->sub_total?></td>
    </tr>

    <tr>
    <td>Id User</td>
    <td>:</td>
    <td><?php echo $data->id_user?></td>
    </tr>

    </table>
    
</body>
</html>