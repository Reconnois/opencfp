<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'OpenCFP\Http\Action\Forgot\IndexAction' shared autowired service.

return $this->services['OpenCFP\Http\Action\Forgot\IndexAction'] = new \OpenCFP\Http\Action\Forgot\IndexAction(\OpenCFP\Http\Form\FormFactory::create(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, 'OpenCFP\\Http\\Form\\ForgotFormType'));
