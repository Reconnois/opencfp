<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'wouterj_eloquent.commands.migrate_fresh' shared service.

$this->services['wouterj_eloquent.commands.migrate_fresh'] = $instance = new \WouterJ\EloquentBundle\Command\MigrateFreshCommand(${($_ = isset($this->services['wouterj_eloquent.database_manager']) ? $this->services['wouterj_eloquent.database_manager'] : $this->load(__DIR__.'/getWouterjEloquent_DatabaseManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['wouterj_eloquent.migrator']) ? $this->services['wouterj_eloquent.migrator'] : $this->load(__DIR__.'/getWouterjEloquent_MigratorService.php')) && false ?: '_'}, '/application/classes/migrations', 'production');

$instance->setName('eloquent:migrate:fresh');

return $instance;
