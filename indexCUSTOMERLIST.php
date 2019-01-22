<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .thumbnail img{
        width:100%;
    }
</style>
</head>
<body>
<table border="0">
    <caption><h1>Danh sách Fitness Model</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php
    $customerlist = array(
        "1" => array("ten" => "Jeff Seid",
            "ngaysinh" => "1994-06-12",
            "diachi" => "USA",
            "anh" => "1.jpg"),
        "2" => array("ten" => "Lazar Angelov",
            "ngaysinh" => "1984-09-22",
            "diachi" => "Bulgari",
            "anh" => "2.jpg"),
        "3" => array("ten" => "Sergi Constance",
            "ngaysinh" => "1988-10-25",
            "diachi" => "Spain",
            "anh" => "3.jpg"),
        "4" => array("ten" => "Anllela Sagra",
            "ngaysinh" => "1993-10-06",
            "diachi" => "Colombia",
            "anh" => "4.jpg"),
        "5" => array("ten" => "Gal Gadot",
            "ngaysinh" => "1985-04-30",
            "diachi" => "Israel",
            "anh" => "5.jpg")
    );

    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '140px' height ='100px'/></td>";
        echo "<br>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

