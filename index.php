    <?php
    $ip = "10.255.12.118";
    $output = shell_exec("ping $ip");
     
    echo $output;exit;
    if (strpos($output, "recibidos = 0")) {
        echo 'No Conectado';
    } else {
        echo 'Conectado';
    }
    ?>