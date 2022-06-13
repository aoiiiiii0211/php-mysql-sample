<?php

ini_set('display_errors',"On");

// phpはデータ型をもたない（動的データを持つ）
// MySQLiコネクタを作成

$link = mysqli_connect("localhost","root","","world");

// DBコネクションを確立
// !は反転処理記号
// dieで終了

if(!$link){
    die("コネクションエラー");
}

// SQL文を生成

$query = "SELECT CountryCode, Language, IsOfficial FROM Countrylanguage ORDER BY CountryCode LIMIT 30";

// SQl文を実行、結果を変数に格納

$result = mysqli_query($link, $query);

// DBコネクションを切断

mysqli_close($link);

?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>wwwwwwwold</title>
</head>
<body>
<form class="container" action="./search-country.php" method="post" >
    <div clacc="row mb-3">
    <label class="name" class="col-3 col-form-label">name</label>
     <div class="col-9">
     <input type="text" class="form-contry"  id="name" name= "name" value="<?php echo $name;  ?>">
     </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="search">検索</button>
</form>
<table class=></table>
<table>
    <th>CountryCode</th>
    <th>Language</th>
    <th>IsOfficial</th>
</table>

<tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?> 
    <tr>
        <td><?php echo $row[ 'CountryCode' ]; ?></td>
        <td><?php echo $row[ 'Language' ]; ?></td>
        <td><?php echo $row[ 'IsOfficial' ]; ?></td>
    </tr>
    <?php } ?> 
</tbody>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>