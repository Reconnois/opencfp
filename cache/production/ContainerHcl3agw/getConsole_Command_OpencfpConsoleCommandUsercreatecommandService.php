<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.opencfp_console_command_usercreatecommand' shared autowired service.

return $this->services['console.command.opencfp_console_command_usercreatecommand'] = new \OpenCFP\Console\Command\UserCreateCommand(${($_ = isset($this->services['OpenCFP\Domain\Services\AccountManagement']) ? $this->services['OpenCFP\Domain\Services\AccountManagement'] : $this->getAccountManagementService()) && false ?: '_'});
