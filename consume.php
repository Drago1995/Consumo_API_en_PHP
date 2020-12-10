<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>21 Megas</title>
    <!--Agrgando chart.JS-->
    <!--script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script-->
</head>

<body>
    <form action="" method="GET">

        <label for="identificador">Farm ID:</label>
        <input type="number" name="identificador">

        <br>
        <label for="date_request">Date request</label>
        <input type="date" name="date_request">
        <!--button type="submit">Date request</button-->
        <br>
        <label for="type_report_requested">Type report requested</label>
        <label for="Obtener">(0 => Daily, 2 => Monthly, 3 => Yearly)</label>
        <input type="Number" name="type_report_requested">
        <!--button type="submit">Type report requested</button-->
        <br>

        <button type="submit" name="boton1" value="Imprime 1">Consultar</button>
        <button type="submit" name="boton2" value="Imprime 2">Descargar Tabla</button>

        <br><br>
    </form>







    <!-- BOTÓN 1 CONSULTAR DATOS SEGUN LA FECAH SELECCIONADA -->
    <!-- CREACION DE EVENTO PARA DESCARGAR LOS 21 MEGAS AL PULSAR EL BOTÓN 2 -->

    <?php

    $boton1 = "";
    $boton2 = "";

    if ($boton1 = "") {
        echo "Error intentalo de nuevo";
    } else if ($boton2 = "") {
        echo "Error vuelve a intentarlo";
    }

    if (isset($_GET['boton1'])) $boton1 = $_GET['boton1'];
    if (isset($_GET['boton2'])) $boton2 = $_GET['boton2'];



    if ($boton1) {
        //$data = json_decode(file_get_contents("https://monitor.iusasol.mx/api/v2/ISOL/Farm/1/All/2020-01-20/2?token=D8lPzOtELTSn4B_KwAfWfgYepKIWuYP4N3LB0RJfdnZMuh16CcjR86mdrD6Urn8g4iCA31D5ezz-jjLEZVWCNXWIWpT-Hgn8DzxSNciUbW6BTG3CtFDj3uD5_Vgz_SStRVHmiGXfGdr0lps1QnxYFMGWIovJlpHolGfmAqhMSA6uCRW83ZjDu0Mfj6dRe4ypD9krTQ6Lh9uSumx6sh8tnZuUXaQmDyBasvMMwz5_-EKOJHy0gLm9ruPU0iUXfaGi4h93qR3FpVnIrKEZ7QEzqiHBKsWVTfs9gDk95wvjZdQNBLPs5K7hSYQUrP2aUHj2eDBMRqb81wXBFtNiKsL4ZNH-EX2unBhsaeoioeTJ0C3cnXRwYi3f7MJt8zvD4RFeQOMz1_dkKV7-E-ii2vmgor1j3CYn7aLxjSeUrrrahfl_qTPn8NVGeXdHwp0cxHw40ChOyDPDAvIGhQoufXCeZg#"), true);
        //echo $data;
        //print_r($data);

        if (isset($_GET['identificador'])) {

            $identificador = $_GET['identificador'];
            $date_request = $_GET['date_request'];
            $type_report_requested = $_GET['type_report_requested'];


            print_r("Los datos introducidos: <br>Farm ID: " . $identificador . "<br>Date Request: " . $date_request . "<br>Type Report Requested: " . $type_report_requested . "<br><br>");

            $token_iusasol = "a_AOyd9RXX1efslX7fh8gOjueczgOJ6rr-ReaTS3LSOGE8eN8KaRG4xFao2zTQWKPqOULyqzEddhP2u5elQzUAs6AXT-nARnU14J2AIcCXffbYCOerHDl0L8rQ1dJ9TSE533c3EZw-tnKXCrB8Xrgcr9TLWBCj0jk5xPzWdqIOvSZThE7-INB3TAh9wFPeOrRhZFItOPB4GBL6rh12T-3YkH7dOqkErH60ALy-sSmd3e4rjmaWpB0N87YIb9Eki9N7rAXch04XbbmeA6NtyCoR_rqlvoC3IUHhtcN_aFBqdQh--pgbFJuiePIJYvzuHi7WYQwgNuxp4lxu1BCUAwowrpjT4pYYXy6v-s4slMEajxKjpWxghsPhNmdy9dxmd-pny2kTVee4AUVDEb8bAWdxBGqPAUlgshskJSVXvoxQ6-u2KJPhk56uNgNc572WG92ir6kYirVm_vu7scCE14lg";

            $url_iusasol = "https://monitor.iusasol.mx/api/v2/ISOL/Farm/" . $identificador . "/ALL/" . $date_request . "/" . $type_report_requested . "?token=" . $token_iusasol;

            $json_iusasol = file_get_contents($url_iusasol);

            $array_iusasol = json_decode($json_iusasol, true);
        }
    }



    if ($boton2) {
        if (isset($_GET['date_request'])) {

            $date_request = $_GET['date_request'];

            $token_iusasol = "hzwptz3a_5gwhgdsbPdrveLbn8Cdlc-yaS9rcyUK_1OvOhOMWlcRVuLJKVOXnZR6iMN043ZgGPUOiCn5Z-T7p3zHxPaV5HH_JwSGqdDyc2Ahq8f40m3eWrXerm1wN5oqtF8Md8g3nvVZ7r3dLFixj-IWJJ7z1JCbnAk-qcC0OSdn-foD3xdssczctEwG0gCKvPXeo7rh54P6vlvEOQ5kqXvZCUMNIegEEVuLjRIXsxOvbx30quiZToZqjUPZtVyaTNhQFnJJTCNXL1mCo3EfPO7pjXzdqiOnZi7uwvQI2xSO7FcgxlVTp88Hm8ORn5NknHhxJc8gYU_TxWZikJ_oA-KOqdpw_yJh60KZSxBa5HXbI-GYJcu7DpYHwKzP4ZqSmUhZMnPUE9jiSBOSneerogPSd_eTZccVUY-0T_ouUgCK3rITiSh6XPOticgQL8VgzsZPwPP_Dd3EXTOE06vXXw";

            $url_iusasol = "https://monitor.iusasol.mx/api/v2/ISOL/Farm/1/ALL/" . $date_request . "/0?token=" . $token_iusasol;

            $json_iusasol = file_get_contents($url_iusasol);

            $array_iusasol = json_decode($json_iusasol, true);
        }
        // Descarga de la tabla en Excel       
        header("Pragma: public");
        header("Expires: 0");
        $filename = "21_MEGAS.xls";
        header("Content-type: application/x-msdownload");
        header("Content-Disposition: attachment; filename=$filename");
        header("Pragma: no-cache");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    }

    ?>


    <fieldset>
        <table class="egt">

            <tr>

                <th>HORA</th>

                <th>Mega 1</th>
                <th>Mega 2</th>
                <th>Mega 3</th>
                <th>Mega 4</th>
                <th>Mega 5</th>
                <th>Mega 6</th>
                <th>Mega 7</th>
                <th>Mega 8</th>
                <th>Mega 9</th>
                <th>Mega 10</th>
                <th>Mega 11</th>
                <th>Mega 12</th>
                <th>Mega 13</th>
                <th>Mega 14</th>
                <th>Mega 15</th>
                <th>Mega 16</th>
                <th>Mega 17</th>
                <th>Mega 18</th>
                <th>Mega 19</th>
                <th>Mega 20</th>
                <th>Mega 21</th>

            </tr>

            <tr>

                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r("(");
                        print_r($array_iusasol['meters'][0]['profiles'][$i]['date']);
                        print_r(")<br>");
                    }
                    ?>
                </td>

                <!--MEGA 1-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][0]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 2-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][1]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 3-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][2]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 4-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][3]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 5-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][4]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 6-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][5]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 7-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][6]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 8-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][7]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 9-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][8]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 10-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][9]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 11-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][10]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 12-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][11]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <!--MEGA 13-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][12]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 14-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][13]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 15-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][14]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 16-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][15]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 17-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][16]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 18-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][17]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 19-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][18]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 20-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][19]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>
                <!--MEGA 21-->
                <td>
                    <?php
                    for ($i = 0; $i <= 287; $i++) {
                        print_r($array_iusasol['meters'][20]['profiles'][$i]['channels'][0]);
                        print_r("<br>");
                    }
                    ?>
                </td>

            </tr>

        </table>
    </fieldset>


    <fieldset>
        <legend>IDENTIFICADOR DE MEGAS</legend>

        <table>
            <tr>
                <th>NICK NAME</th>
                <th>SERIAL</th>
                <th>MTYPE</th>
            </tr>

            <tr>
                <td>
                    <?php
                    for ($i = 0; $i <= 20; $i++) {
                        print_r($array_iusasol['meters'][$i]['meter']['nick']);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <td>
                    <?php
                    for ($i = 0; $i <= 20; $i++) {
                        print_r($array_iusasol['meters'][$i]['meter']['serial']);
                        print_r("<br>");
                    }
                    ?>
                </td>

                <td>
                    <?php
                    for ($i = 0; $i <= 20; $i++) {
                        print_r($array_iusasol['meters'][$i]['meter']['mtype']);
                        print_r("<br>");
                    }
                    ?>
                </td>
            </tr>
        </table>

    </fieldset>

</body>

</html>