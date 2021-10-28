<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejutereraan Awam Dengan Kepujian' => [
            'STPM',
            'Matrikulasi',
            'Diploma',
        ],
        'Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan) Dengan Kepujian' => [
            'STPM',
            'Matrikulasi',
            'Diploma',
        ],
        'Diploma Kejuruteraan Awam' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Geomatik' => [
            'SPM',
            'Sijil Kolej Komuniti',
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangkaji Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }

        .prog {
            background-color: orangered;
            color: white;
        }

        .poli {
            background-color: orange;
        }
    </style>
</head>

<body>
    <h1>Senarai Program di Politeknik</h1>

    <!-- <pre><?php print_r($program); ?></pre> -->

    <ul>
        <?php
        foreach ($program as $poli => $value) {
            echo "<li>$poli";
            echo "<ul>";
            foreach ($value as $course => $syarat) {
                echo "<li>$course";
                echo "<ul>";
                foreach ($syarat as $kelayakan) {
                    echo "<li>$kelayakan</li>";
                }
                echo '<br>';
                echo "</ul>";
                echo "</li>";
            }
            echo '</ul>';
            echo "</li>";
        }
        ?>
    </ul>

    <!-- <ul>
        <li>Politeknik Ungku Omar</li>
        <ul>
            <li></li>
            <li></li>
        </ul>
    </ul> -->

    <table>
        <tr>
            <th class="prog">PROGRAM</th>
            <th class="prog">KELAYAKAN</th>
        </tr>
        <tr>
            <th class="poli" colspan="2">POLITEKNIK UNGKU OMAR</th>
        </tr>
        <tr>
            <td>Sarjana Muda Teknologi Kejutereraan Awam Dengan Kepujian</td>
            <td>STPM<br>Matrikulasi<br>Diploma</td>
        </tr>
        <tr>
            <td>Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan) Dengan Kepujian</td>
            <td>STPM<br>Matrikulasi<br>Diploma</td>
        </tr>
        <tr>
            <td>Diploma Kejuruteraan Awam</td>
            <td>SPM<br>Sijil Kolej Komuniti</td>
        </tr>
        <tr>
            <td>Diploma Seni Bina</td>
            <td>SPM<br>Sijil Kolej Komuniti</td>
        </tr>
        <tr>
            <th class="poli" colspan="2">POLITEKNIK SULTAN HAJI AHMAD SHAH</th>
        </tr>
        <tr>
            <td>Diploma Kejuruteraan Awam</td>
            <td>SPM<br>Sijil Kolej Komuniti</td>
        </tr>
        <tr>
            <td>Diploma Seni Bina</td>
            <td>SPM<br>Sijil Kolej Komuniti</td>
        </tr>
        <tr>
            <td>Diploma Geomatik</td>
            <td>SPM<br>Sijil Kolej Komuniti</td>
        </tr>
    </table>

    <br>

    <table>
        <tr >
            <th class="prog">PROGRAM</th>
            <th class="prog">KELAYAKAN</th>
        </tr>
        <?php
        foreach ($program as $poli => $value) {
            echo "<th colspan=2>$poli</th>";
            echo "<tr>";
            foreach ($value as $course => $syarat) {
                echo "<td rowspan=2>$course</td>";
                foreach ($syarat as $kelayakan) {
                    echo "<td>$kelayakan</td>";
                    echo "<tr>";
                }
                echo '</td>';
                echo "</tr>";
            }
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>