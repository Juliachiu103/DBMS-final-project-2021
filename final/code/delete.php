<!doctype html>
<html>
<style>
    html{-webkit-text-size-adjust: none;
        -ms-text-size-adjust: 100%;
        min-height: 100%;
        background: #f0f5fb;
        background-image: initial;
        background-position-x: initial;
        background-position-y: initial;
        background-size: initial;
        background-repeat: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: rgb(240, 247, 251);}
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>檔案刪除結果</title>
</head>
<link rel="stylesheet" type="text/css" href="css/person.css">
<style type="text/css">
    .table{
        position: relative;
        left:100px;
        width: 1200px;
    }
    a{
        text-decoration: none;
    }
    #bt{
        border: 1px solid #000000;
        border-bottom-color: #000000;
        border-radius: 5px;
    }
</style>


<body>
    <h1 align="center">檔案刪除結果</h1>
    <style>
        body {font-size: 18px; font-family: "微軟正黑體",Arial, Helvetica, sans-serif,Verdana,Geneva; font-weight:300; font-size: 18px;}
    </style>

    <div>

            <table class="table" border="1">
                
                <thead>
                    <tr>
                        <th>識別碼</th>
                        <th>活動名稱</th>
                        
                        <th>開始時間</th>
                        <th>結束時間</th>
                        
                        <th>活動地點</th>
                       
                    </tr>
                </thead>

                <tbody>


<?php
    $link = mysqli_connect("localhost", "dk0508", "yo109354022", "final_project");
    $link -> set_charset("UTF8"); // 設定語系避免亂碼


    if (!empty($_POST)){
        $link->query("DELETE FROM activity 
                      WHERE `UID` = '$_POST[uid]' and 
                            `ac_name` = '$_POST[name]' and 
                            `starttime` = '$_POST[startt]' and 
                            `endtime` = '$_POST[endt]' and
                            `lo_name` = '$_POST[locate]'"); 
        
    }

    
    
    echo "<tr>"  ;
    echo "<td>" . "$_POST[uid]" . "</td>";
    echo "<td>" . "$_POST[name]" . "</td>";
    echo "<td>" . "$_POST[startt]" . "</td>";
    echo "<td>" . "$_POST[endt]" ."</td>";
    echo "<td>" . "$_POST[locate]" ."</td>";
    echo "</tr>" ;    




           
?>



</tr>
</tbody>

</table>
<br>
<center><button value="返回" id="bt"><a href="home.php">返回</a></button></center>
</form>

</div>
</body>

</html>