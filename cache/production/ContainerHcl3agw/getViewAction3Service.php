<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'OpenCFP\Http\Action\Reviewer\Talk\ViewAction' shared autowired service.

return $this->services['OpenCFP\Http\Action\Reviewer\Talk\ViewAction'] = new \OpenCFP\Http\Action\Reviewer\Talk\ViewAction(${($_ = isset($this->services['OpenCFP\Domain\Talk\TalkHandler']) ? $this->services['OpenCFP\Domain\Talk\TalkHandler'] : $this->load(__DIR__.'/getTalkHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});