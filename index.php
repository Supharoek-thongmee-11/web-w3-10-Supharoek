<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: #f6f1e9;
            color: #3a2d21;
            margin: 0;
            padding: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        th, td {
            border: 1px solid #e0d6c5;
            padding: 10px 14px;
            text-align: center;
        }

        thead th {
            background: #b5231e;
            color: #ffffff;
            font-weight: 600;
        }

        tbody tr:nth-child(even) {
            background: #faf6ee;
        }

        tbody tr:hover {
            background: #fdeaea;
        }

        td img {
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <?php
        //แสดง error

    // Report all PHP errors
    error_reporting(E_ALL);

    // Force errors to be displayed on the screen
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

        include "action/connect.php";

        $sql = "SELECT * FROM menus";
        $result = mysqli_query($con, $sql);
    //   var_dump($result);

    ?>

    <table border=1>
        <thead>
            <th>รหัสเมนู</th>
            <th>ชื่อเมนู</th>
            <th>ราคา</th>
            <th>ภาพ</th>
            <th>ประเภท</th>
        </thead>

        <?php
            foreach($result as $menu){
                ?>
                <tr>
                    <td><?= $menu["menu_id"] ?></td>
                    <td><?= $menu["menu_name"] ?></td>
                    <td><?= $menu["menu_price"] ?></td>
                    <td>
                        <img src="<?= $menu["menu_image"] ?>" alt="" style="width:200px">
                    </td>
                    <td><?= $menu["type_id"] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>