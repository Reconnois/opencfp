<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'OpenCFP\Http\Controller\ForgotController' shared autowired service.

$a = ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'};

return $this->services['OpenCFP\Http\Controller\ForgotController'] = new \OpenCFP\Http\Controller\ForgotController(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['OpenCFP\Domain\Services\AccountManagement']) ? $this->services['OpenCFP\Domain\Services\AccountManagement'] : $this->getAccountManagementService()) && false ?: '_'}, new \OpenCFP\Domain\Services\ResetEmailer(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load(__DIR__.'/getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'}, $a, 'cgrandval@darkmira.com.br', 'Darkmira Tour PHP 2018'), $a, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
