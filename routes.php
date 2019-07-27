<?php

$router instanceof AltoRouter;

$router->map("GET", "/", "App\Controller\StudentController#listStudents");
