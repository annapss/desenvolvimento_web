<!--Código que lê o arquivo csv do campeonato brasileiro-->
<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
    }
    th {
        background-color: #2971e6;
    }
    tr.verde {
        background-color: #80d6ed;
    }
    tr.amarelo {
        background-color: #aa7eed;
    }
</style>
<table border="1" width="100%">
<?php
    $row = 1;
    $f = fopen("campeonato-brasileiro-full.csv", "r");

    if($f !== FALSE)
    {
        $data = fgetcsv($f, 1000, ";");

        while($data !== FALSE)
        {
            $num = count($data);
            if($row % 2 == 0)
            {
                echo "<tr class=verde>";
            }
            else
            {
                echo "<tr class=amarelo>";
            }

            foreach($data as $valor)
            {
                if($row === 1)
                {
                    echo "<th>$valor</th>";
                }
                else
                {
                    echo "<td>$valor</td>";
                }
            }
            echo "</tr>";
            $data = fgetcsv($f, 1000, ";");
            $row++;
        }
        fclose($f);
    }
?>
</table>