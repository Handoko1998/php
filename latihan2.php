<?php
 $nim       = " 192520033 ";
 $nama      = " Wawan Prasetyo Handoko "; 
 $alamat    = " Jalan Tanjung Anom no.80 Kutoarjo, Purworejo.";
 $email     = " Prastyawawan20@gmail.com ";
 $minat     = " Konsultan IT ";
 $image     = "wawan.jpg";
?>

<html>
    <head>
        <style>
            th, td{
                border: 1px solid black;
            }
            .pt{
                padding-top:20px;
            }
            .img{
                width:250px;
            }
            .table{
                margin: auto;
                width: 50%;
                padding: 50px 10px 10px 10px;
            }
            .text-center{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center pt" colspan="3"><h2>Data Mahasiswa</h2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" colspan="3"><img class="img" src="<?php echo $image ?>"></td>
                </tr>
                <tr>
                    <td>NIM </td>
                    <td class="text-center"> : </td>
                    <td> <?php echo $nim ?> </td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td class="text-center"> : </td>
                    <td> <?php echo $nama ?> </td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td class="text-center"> : </td>
                    <td> <?php echo $alamat ?> </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td class="text-center"> : </td>
                    <td> <?php echo $email ?> </td>
                </tr>
                <tr>
                    <td>Minat </td>
                    <td class="text-center"> : </td>
                    <td> <?php echo $minat ?> </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>