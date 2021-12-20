<html>
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
<h2><?php if(strlen($_GET['string']) != 0){
    echo "Вы ввели: ". $_GET['string']. ". В нем " . strlen($_GET['string'])." символов.";
}
    else{
        echo "Текст отсутствует";
    }
    ?>



</body>
</html>