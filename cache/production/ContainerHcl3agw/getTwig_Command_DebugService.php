<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.command.debug' shared service.

$this->services['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, '/application');

$instance->setName('debug:twig');

return $instance;
