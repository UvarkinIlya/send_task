<?php
    echo "1Hello2";

    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $comment = $_POST['comment'];

    $to      = 'uvarkin77@gmail.com';
    $subject = 'Заявка с сайта';
    $message = "'Имя: '. $name . '\nТелефон: ' . $phone . '\nКомментарий: ' . $comment";

    echo $name;

    if (mail('uvarkin77@gmail.com' , 'Заявка с сайта' , 'Имя: '. $name . '\nТелефон: ' . $phone . '\nКомментарий: ' . $comment)){
        echo "SEs";
    }else{
        echo "error";
    }
?>