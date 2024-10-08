<?php
// Define las rutas para la aplicación web
Flight::route('/', function () {
    renderWithLayout('index', ['title' => 'Inicio']);
});

Flight::route('/login/', function () {
    if (isset($_SESSION['user'])) {
        Flight::redirect('/');
    }
    renderWithLayout('login', ['title' => 'Ingresar']);
});

Flight::route('/about', function () {
    renderWithLayout('about', ['title' => 'Acerca']);
});
Flight::route('/lessons', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/index', ['title' => 'Leccinoes']);
});

Flight::route('/lessons/computer', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/computer/index', ['title' => 'El Computador y sus Partes']);
});

Flight::route('/lessons/computer/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/computer/index', ['title' => 'Evaluación: El Computador y sus Partes']);
});

Flight::route('/lessons/preventive', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/preventive/index', ['title' => 'Mantenimiento Preventivo']);
});

Flight::route('/lessons/preventive/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/preventive/index', ['title' => 'Evaluación: Mantenimiento Preventivo']);
});

Flight::route('/lessons/corrective', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/corrective/index', ['title' => 'Mantenimiento Correctivo']);
});

Flight::route('/lessons/corrective/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/corrective/index', ['title' => 'Evaluación: Mantenimiento Correctivo']);
});

Flight::route('/lessons/tics', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/tics/index', ['title' => 'El Uso de las TICs']);
});

Flight::route('/lessons/tics/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/tics/index', ['title' => 'Evaluación: El Uso de las TICs']);
});

Flight::route('/lessons/word', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/word/index', ['title' => 'Word, Herramienta para Documentación']);
});

Flight::route('/lessons/word/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/word/index', ['title' => 'Evaluación: Word, Herramienta para Documentación']);
});

Flight::route('/lessons/powerpoint', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/powerpoint/index', ['title' => 'PowerPoint, Crea tus Presentaciones']);
});

Flight::route('/lessons/powerpoint/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/powerpoint/index', ['title' => 'Evaluación: PowerPoint, Crea tus Presentaciones']);
});

Flight::route('/lessons/excel', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('lessons/excel/index', ['title' => 'Excel, Herramienta Avanzada de Análisis y Visualización de Datos']);
});

Flight::route('/lessons/excel/evaluation', function () {
    if (!isset($_SESSION['user'])) {
        Flight::redirect('/login');
    }
    renderWithLayout('evaluations/excel/index', ['title' => 'Evaluación: Excel, Herramienta Avanzada de Análisis y Visualización de Datos']);
});


// 404 Not Found
Flight::route('*', function () {
    renderWithLayout('404');
});
