<?php

$router instanceof AltoRouter;

$router->map("GET", "/students/[i:id]", "App\Controller\StudentController#getStudent");
