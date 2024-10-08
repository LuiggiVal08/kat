<link rel="stylesheet" href="/kat/interface/css/test.css">
<div class="max-width">
    <?php
    $request = $_SERVER['REQUEST_URI'];
    if (strpos($request, '/kat/') === 0) {
        $request = substr($request, strlen('/kat'));
    }
    if (preg_match('/^\/test\/([a-zA-Z0-9-]+)$/', $request, $matches)) {
        $lessonName = $matches[1];

        switch ($lessonName) {
            case 'el-computador-y-sus-partes':
                echo '<title>' . $nameSystem . ' | El Computador y sus Partes' . '</title>';
                include __DIR__ . '/test/computador.php';
                break;
            case 'mantenimiento-preventivo':
                echo '<title>' . $nameSystem . ' | Manteniemito Preventivo' . '</title>';
                include __DIR__ . '/test/preventivo.php';
                break;
            case 'mantenimiento-correctivo':
                echo '<title>' . $nameSystem . ' | Manteniemito Correctivo' . '</title>';
                include __DIR__ . '/test/correctivo.php';
                break;

            default:

                echo '<title>' . $nameSystem . ' | 404 Not Found' . '</title>';
                // include __DIR__ . '/views/404.php';

                echo '</br> not found';
                break;
        }
    } else {
        echo "Lección no encontrada.";
    }
    ?>
</div>