<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'OpenCFP\Http\Controller\Admin\ExportsController' shared autowired service.

return $this->services['OpenCFP\Http\Controller\Admin\ExportsController'] = new \OpenCFP\Http\Controller\Admin\ExportsController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
