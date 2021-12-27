<html lang="ru">
<style>
    body{
        background-color: darkgray;
    }
    h2{
        color: white;
    }
</style>
<body>
<br>
<h2><?php if(isset($_GET['string']) && trim($_GET['string']) != ''){
    echo "Вы ввели: ". $_GET['string']. ". В нем " . mb_strlen(trim($_GET['string']))." символов.";
}
    else{
        echo "Текст отсутствует";
    }
    ?>



</body>
</html>