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

        .nav-btn::before {
            content: "←";
            font-size: 15px;
        }

        table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            max-width: 500px;
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

        td:first-child {
            font-weight: 600;
            color: #c8102e;
            width: 100px;
        }
    </style>
</head>
<body>

    <h1 class="page-title">ประเภทเมนู</h1>
    <p class="page-sub">รายการประเภทเมนูทั้งหมดจากระบบ</p>

    <div class="nav-wrap">
        <a href="index.php" class="nav-btn">กลับหน้าเมนู</a>
    </div>

    <?php
        include "action/connect.php";

        $sql = "SELECT * FROM menu_types";
        $result = mysqli_query($con, $sql);
    ?>

    <table border=1>
        <thead>
            <th>รหัสประเภท</th>
            <th>ชื่อประเภท</th>
        </thead>

        <?php
            foreach($result as $type){
                ?>
                <tr>
                    <td><?= $type["type_id"] ?></td>
                    <td><?= $type["type_name"] ?></td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>