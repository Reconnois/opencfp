<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'OpenCFP\Http\Action\Reviewer\Talk\RateAction' shared autowired service.

return $this->services['OpenCFP\Http\Action\Reviewer\Talk\RateAction'] = new \OpenCFP\Http\Action\Reviewer\Talk\RateAction(${($_ = isset($this->services['OpenCFP\Domain\Talk\TalkHandler']) ? $this->services['OpenCFP\Domain\Talk\TalkHandler'] : $this->load(__DIR__.'/getTalkHandlerService.php')) && false ?: '_'});
