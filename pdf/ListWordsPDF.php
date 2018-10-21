<?php
$letter_list;
$list_number = (int) $_GET['id_list_number'];
switch ( $list_number ){
    case 1:
        $letter_list = 'First';
        break;
    case 2:
        $letter_list = 'Second';
        break;
    case 3:
        $letter_list = 'Third';
        break;
    case 4:
        $letter_list = 'Fourth';
        break;
    case 5:
        $letter_list = 'Fifth';
        break;
    case 6:
        $letter_list = 'Sixth';
        break;
    case 7:
        $letter_list = 'Seventh';
        break;
    case 8:
        $letter_list = 'Eighth';
        break;
    case 9:
        $letter_list = 'Ninth';
        break;
    case 10:
        $letter_list = 'Tenth';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Comics;
        }
        body{
            background-color: #fff;
            width: 100%;
        }
        table{
            width: 100%;
            text-align: center;
        }
        table td{
            width: 25%;
            vertical-align: bottom;
        }
        table td.word{
            font-size: 18pt;
            font-weight: bold;
        }
        h1{
            color: #eb1a5f;
        }
        h2, td.word{
            color: #3d68b2;
        }

    </style>
</head>
<body>
    <table align="center">
        <tr>
            <td colspan="4" style="padding-top: 50px;"><h1>Fry Sight Words</h1></td>
        </tr>
        <tr>
            <td colspan="4" style="padding-bottom: 30px;"><h2><?php echo $letter_list?> 100 Words (#<?php echo ( ( $list_number - 1 ) * 100 ) + 1?>-<?php echo ($list_number*100)?>)</h2></td>
        </tr>
        <tr>
            <?php foreach ( $words  as $key => $value ):?>
        <?php if( $key%4 === 0 ):?></tr><tr><?php endif;?>
                <td class="word"><?php echo $value?></td>
            <?php endforeach;?>
        </tr>
        <tr>
            <td colspan="4" style="text-align: right;padding-top: 50px;padding-right: 50px;">letterland.ru</td>
        </tr>
    </table>
</body>
</html>