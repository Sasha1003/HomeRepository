<!Doctype html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Резюме</title>
    <link href="main.css" rel="stylesheet"  type="text/css" >
</head>
<body background="1129340.jpg">
<table align="center"; border="2"; width="80%" cellpadding ="13">

    <tr class="www">
        <td  colspan="2"> <h1 align="center"> <u>Резюме</u></h1>  </td>

    </tr>
    <tr>
        <td  width="70%" > <h3>

                <!--PHP-->

            <?php $fio = 'Пригодский Александр Николаевич';
echo $fio;
?>
        </h3> </td>
        <td rowspan="2"   align="center"> <h3>Я в соц.сетях:</h3>
            <a href="http://vk.com/alexandr_prigodsky" target="_blank">
                 <img src="w512h5121384975213MezhdunarodnylogotipVK.png" alt="VK" title="VK" width="54"></a>
            <a href="http://facebook.com/aleksandr.prigodskij" target="_blank">
                <img src="Facebook.png"  title="Facebook" width="50"> </a>
            <img src="w_5cd2c35f.jpg" width="240" alt="Photo" title="Photo Profile" border="2"> </td>
    </tr>

    <tr class="www">
        <td  width="70%" > <h2> <u>

                    <!--PHP-->

            <?php $table_1 = 'Должность';
echo $table_1;?>
        </u></h2> </br>
            <?PHP $table_2 = "Junior developer    8000 UAN";
$table_3 = "Полная занятость, неполная занятость";
$table_4 = "Дата рождения: 10.03.1994";
$table_5 = "Город: Киев";
echo $table_2;
echo '<br/>';
            echo $table_3;
            echo "<br/>";
            echo $table_4;
            echo "<br/>";
            echo $table_5; ?> </td>

    </tr>
    <tr>
        <td colspan="2"> <h2> <u>

                    <!--PHP-->

            <?PHP $contacn = "Контактная информация";
echo $contacn; ?> </u></h2><br/>
            <?php $adress = "Адрес: Киев, Проспект Правды 10, кв 146.";
echo $adress;
            echo "<br/>";
            $adress_1 = "Телефон: 0930256387";
            echo $adress_1;
            echo "<br/>";
            $adress_3 = "Электроанная почта:";
            echo $adress_3;?> <a class="mail" href="http://mail.ru" target="_blank"> alejandropato@inbox.ru
        </td>
    </tr>
    <tr class="www">
        <td colspan="2"> <h2> <u>

                    <!--PHP-->
            <?php $Exp = "Опыт работы";
echo $Exp; ?> </u> </h2> <br/>

            <!--PHP-->

            <?php $exp_1 = "Курсы \"PHP-интенсив\" в PHP-academy";
echo $exp_1; ?> </td>
    </tr >
    <tr>
        <td colspan="2"> <h2> <u>

                    <!--PHP-->

            <?php $stud_1 = "Образование";
echo $stud_1; ?>
        </u> </h2>
            <ol>
                <li>
                    <!--PHP-->

                    <?php $stud_2 = "Oзерненская гимназия (2000 - 2011 гг.)";
echo $stud_2; ?>
                </li>
                <li>

                    <!--PHP-->
                    <?php $stud_3 = "НУПТ, Отельно-ресторанное дело (2011-2017 гг.)";
echo $stud_3; ?> </li>
            </ol>
        </td>

    </tr>
    <tr class="www">
        <td colspan="2"> <h2> <u>
                    <!--PHP-->
            <?php $lang = "Владение языками";
echo $lang; ?>
        </u> </h2>
            <ol>
                <li>

                    <!--heredoc-->

                    <?php $s = <<<EOL
Украинский - разговорный, письменный (высокий)

EOL;
                    echo $s;
?>
 </li>
                <li> <!--heredoc-->

                    <?php $s = <<<EOL
Русский - разговорный (выскоий)

EOL;
                    echo $s;
                    ?> </li>
                <li> <!--heredoc-->

                    <?php $s = <<<EOL
Английский - разговорный (средний)

EOL;
                    echo $s;
                    ?> </li>

            </ol>
        </td>
    </tr>
    <tr >
        <td colspan="2"> <h2> <u>Дополнительная информация </u> </h2><br/>
            Очень хочу обучаться программированию и готов работать за мин.плату для накопления опыта.
        </td>

    </tr>
</table>


</body>
</html>