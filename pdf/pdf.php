<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <style>
        @page{
            margin: 100%;
            font-family: 'Impact';
        }
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #fff;
            width: 100%;
        }
        table{
            width: 100%;
        }
        table td{
            width: 100%;
            vertical-align: bottom;
        }
    </style>
</head>
<body>
<?php switch( count($words) ):
    case 1:?>

        <table>
            <tr>
                <td style="font-size: 124px; text-align: center; height: 12cm;">
                    <?php print_r( $words[0] );?>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; height: 7cm; vertical-align: center;">
                    <img src="./user/right-arrow.png" width="15cm" />
                </td>
            </tr>
            <tr>
                <td style="padding-left: 50px;">
                    letterland.ru
                </td>
            </tr>
        </table>

    <?php break;
        case 2:?>

        <table>
            <tr>
                <td style="font-size: 124px; text-align: center; height: 9cm;">
                    <?php print_r( $words[0] );?>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; height: 4cm; vertical-align: center;">
                    <img src="./user/right-arrow.png" width="15cm" />
                </td>
            </tr>
            <tr >
                <td style="border-bottom:1px dashed #000000 ; padding: 0px 0px 20px 50px;">
                    letterland.ru
                </td>
            </tr>
            <tr>
                <td style="font-size: 124px; text-align: center; height: 9cm;">
                    <?php print_r( $words[1] );?>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; height: 4cm; vertical-align: center;">
                    <img src="./user/right-arrow.png" width="15cm" />
                </td>
            </tr>
            <tr>
                <td style=" padding: 0px 0px 20px 50px;">
                    letterland.ru
                </td>
            </tr>
        </table>

        <?php break;
            case 4:?>
            <table>
                <tr>
                    <td style="width: 50%; height: 20%;">
                        <table style="border-right: 1px dashed #000;border-bottom: 1px dashed #000;">
                            <tr>
                                <td style="font-size: 124px; text-align: center; height: 5.71cm;">
                                    <?php print_r( $words[0] );?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; height: 4cm; vertical-align: center;">
                                    <img src="./user/right-arrow.png" width="15cm" />
                                </td>
                            </tr>
                            <tr style="border-bottom:1px solid #000000 ;">
                                <td style="padding: 0px 0px 15px 25px;">
                                    letterland.ru
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%; height: 20%;">
                        <table style="border-bottom: 1px dashed #000;">
                            <tr>
                                <td style="font-size: 124px; text-align: center; height: 5.71cm;">
                                    <?php print_r( $words[1] );?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; height: 4cm; vertical-align: center;">
                                    <img src="./user/right-arrow.png" width="15cm" />
                                </td>
                            </tr>
                            <tr style="border-bottom:1px solid #000000 ;">
                                <td style="padding: 0px 0px 15px 25px;">
                                    letterland.ru
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">
                        <table style="border-right: 1px dashed #000;">
                            <tr>
                                <td style="font-size: 124px; text-align: center; height: 5.71cm;">
                                    <?php print_r( $words[2] );?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; height: 4cm; vertical-align: center;">
                                    <img src="./user/right-arrow.png" width="15cm" />
                                </td>
                            </tr>
                            <tr style="border-bottom:1px solid #000000 ;">
                                <td style="padding: 0px 0px 15px 25px;">
                                    letterland.ru
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%;">
                        <table>
                            <tr>
                                <td style="font-size: 124px; text-align: center; height: 5.71cm;">
                                    <?php print_r( $words[3] );?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; height: 4cm; vertical-align: center;">
                                    <img src="./user/right-arrow.png" width="15cm" />
                                </td>
                            </tr>
                            <tr style="border-bottom:1px solid #000000 ;">
                                <td style="padding: 0px 0px 15px 25px;">
                                    letterland.ru
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <?php break;?>
<?php endswitch;?>
</body>
</html>