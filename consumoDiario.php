<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>21 MEGAS</title>
</head>

<body>
    <form action="" method="GET">

        <div class="form-group-row">
            <div class="col-sm-10">
                <label for="identificador">Farm ID: </label>
                <input type="number" name="identificador">
            </div>
        </div>


        <div class="form-group-row">
            <div class="col-sm-10">
                <label for="date_request">Date request: </label>
                <input type="date" name="date_request">
            </div>
        </div>

        <!--button type="submit">Date request</button-->
        <div class="form-group-row">
            <div class="col-sm-10">
                <label for="type_report_requested">Type report requested: </label>
                <label for="Obtener">(0 => Daily, 2 => Monthly, 3 => Yearly)</label>
                <input type="Number" name="type_report_requested">
            </div>
        </div>
        
        <!--button type="submit">Type report requested</button-->
        <div class="form-group-row">
            <div class="col-sm-10">
                <button type="submit" name="boton1" value="Imprime 1" class="btn btn-outline-success">Consultar</button>
                <button type="submit" name="boton2" value="Imprime 2" class="btn btn-outline-primary">Descargar Tabla</button>
            </div>
        </div>

        <br><br>
    </form>

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

        $token_iusasol = "7Qsw7Z8yl-3I-Hl9F35DSnhJBoYsYQiw8VYu6ZF5LXn652qDyNtRzBj8JqWxEFd4_HMQ1gE7dEFoKsb1bMtH42g_qNOPXpQ0A4nUJIV6OK5zsoIWTogg1LSDFMBf2ZV2Pw4U51rPE8rGdXdMRdA5zJg2s0c83gCuDJCyaqtMgr5ZMZxdcWa1znFAceO2gnvW1AiY9UipxRkdNKaH4unriZbCzgf4ww7oGpIBgq0uNCZitnCXyiHMl5uFwLv9cQAhfh8wAVZ7SN7RhYHvZwFJXAm4207ezHkv1XX90JSM2Ofk6fz9ysnor84xPnhuA7hnjOdRJVp928xzxON1s4MsuRiGccvoJTErJTEW05oBkhCbsvPEvFSl_Hka5_6slCiA21IQn4DLfPHh_FyYQcm_DaEeWX9CeOb_BNp0hD5AG2M2u_ds1_5x2CCzugKeplyH-lLxwvwx7Ozw7FeEdhCW_A";

        $url_iusasol = "https://monitor.iusasol.mx/api/v2/ISOL/Farm/" . $identificador . "/ALL/" . $date_request . "/" . $type_report_requested . "?token=" . $token_iusasol;

        $json_iusasol = file_get_contents($url_iusasol);

        $array_iusasol = json_decode($json_iusasol, true);
    }
}



if ($boton2) {
    if (isset($_GET['date_request'])) {

        $date_request = $_GET['date_request'];

        $token_iusasol = "7Qsw7Z8yl-3I-Hl9F35DSnhJBoYsYQiw8VYu6ZF5LXn652qDyNtRzBj8JqWxEFd4_HMQ1gE7dEFoKsb1bMtH42g_qNOPXpQ0A4nUJIV6OK5zsoIWTogg1LSDFMBf2ZV2Pw4U51rPE8rGdXdMRdA5zJg2s0c83gCuDJCyaqtMgr5ZMZxdcWa1znFAceO2gnvW1AiY9UipxRkdNKaH4unriZbCzgf4ww7oGpIBgq0uNCZitnCXyiHMl5uFwLv9cQAhfh8wAVZ7SN7RhYHvZwFJXAm4207ezHkv1XX90JSM2Ofk6fz9ysnor84xPnhuA7hnjOdRJVp928xzxON1s4MsuRiGccvoJTErJTEW05oBkhCbsvPEvFSl_Hka5_6slCiA21IQn4DLfPHh_FyYQcm_DaEeWX9CeOb_BNp0hD5AG2M2u_ds1_5x2CCzugKeplyH-lLxwvwx7Ozw7FeEdhCW_A";

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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>