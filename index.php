<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Kanit', 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(180deg, #fff8ee 0%, #f6ecd9 100%);
            color: #3a2d21;
            margin: 0;
            padding: 40px 20px 60px;
        }

        h1.page-title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #a3181a;
            margin: 0 0 6px;
            letter-spacing: 0.5px;
        }

        p.page-sub {
            text-align: center;
            color: #8a7360;
            font-size: 14px;
            margin: 0 0 28px;
        }

        .nav-wrap {
            max-width: 900px;
            margin: 0 auto 28px;
            display: flex;
            justify-content: center;
        }

        .nav-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #c8102e, #8f0b21);
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.3px;
            padding: 10px 22px;
            border-radius: 999px;
            box-shadow: 0 4px 12px rgba(143, 11, 33, 0.3);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(143, 11, 33, 0.4);
        }

        .nav-btn::after {
            content: "→";
            font-size: 15px;
        }

        table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(120, 70, 40, 0.12);
        }

        th, td {
            padding: 14px 16px;
            text-align: center;
            border-bottom: 1px solid #f0e4d3;
        }

        thead th {
            background: linear-gradient(135deg, #c8102e, #8f0b21);
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.3px;
            padding: 16px;
            border-bottom: none;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:nth-child(even) {
            background: #fbf5ea;
        }

        tbody tr {
            transition: background 0.15s ease;
        }

        tbody tr:hover {
            background: #fdecec;
        }

        td:nth-child(3) {
            font-weight: 600;
            color: #c8102e;
        }

        td img {
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <h1 class="page-title">เมนูอาหาร</h1>
    <p class="page-sub">รายการเมนูทั้งหมดจากระบบ</p>

    <div class="nav-wrap">
        <a href="menu_type.php" class="nav-btn">ประเภทเมนู</a>
    </div>

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