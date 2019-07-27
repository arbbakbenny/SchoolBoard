<?php

namespace App\Controller;

abstract class AbstractController {
    
    /**
     * @var Symfony\Component\HttpFoundation\Request
     */
    protected $request;
    
    public function __construct(\Symfony\Component\HttpFoundation\Request $request) {
        $this->request = $request;
    }
    
}
