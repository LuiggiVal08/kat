<link rel="stylesheet" href="/kat/interface/css/temas.css">
<div class="max-width">
    <div class="lesson__content">
        <?php
        // Obtener la URL solicitada
        $request = $_SERVER['REQUEST_URI'];
        if (strpos($request, '/kat/') === 0) {
            // Elimina '/kat/' de la URL
            $request = substr($request, strlen('/kat'));
        }
        // Verifica si la URL comienza con '/lesson/'
        if (preg_match('/^\/lesson\/([a-zA-Z0-9-]+)$/', $request, $matches)) {
            $lessonName = $matches[1]; // El identificador de la lección está en $matches[1]

            // Aquí puedes usar $lessonId para cargar la lección correspondiente
            // echo "Mostrando la lección con ID: " . htmlspecialchars($lessonName) . '</br>';
            switch ($lessonName) {
                case 'el-computador-y-sus-partes':
                    echo '<title>' . $nameSystem . ' | El Computador y sus Partes' . '</title>';
                    // echo ' El Computador y sus partes';
                    include __DIR__ . '/lessons/computador.php';
                    break;
                case 'mantenimiento-preventivo':
                    echo '<title>' . $nameSystem . ' | Manteniemito Preventivo' . '</title>';
                    // echo ' El Computador y sus partes';
                    include __DIR__ . '/lessons/preventivo.php';
                    break;
                case 'mantenimiento-correctivo':
                    echo '<title>' . $nameSystem . ' | Manteniemito Correctivo' . '</title>';
                    // echo ' El Computador y sus partes';
                    include __DIR__ . '/lessons/correctivo.php';
                    break;



                    echo '<title>' . $nameSystem . ' | About' . '</title>';
                    include __DIR__ . $dir . 'views/index.php';
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
</div>