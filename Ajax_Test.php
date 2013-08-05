<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Farzad Seid Arabi
 * Date: 8/5/13
 * Time: 1:24 PM
 * To change this template use File | Settings | File Templates.
 */
if($_SERVER['REQUEST_METHOD']=='POST'){
    header('Content-Type: text/html');
    print_r($_POST['allVals']);
    /*
    Array ( [0] => 1 [1] => 2 [2] => 3 )
    */
    die;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>

    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(function() {

            var myJavascriptArray = new Array('1', '2', '3');
            //or var myJavascriptArray=["1","2","3"];

            $.ajax({
                type: "POST",
                dataType: 'html',
                url: "Ajax_Test.php",
                data: {'allVals[]=' : myJavascriptArray},
                cache: false,
                success: function(data){
                    alert(data);
                }
            });

        });
    </script>

</head>

<body>
<div id="test"></div>
</body>
</html>