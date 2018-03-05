<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'wouterj_eloquent.events' shared service.

$this->services['wouterj_eloquent.events'] = $instance = new \WouterJ\EloquentBundle\Events\ServiceContainerDispatcher(new \Symfony\Component\DependencyInjection\ServiceLocator(array()), array());

$instance->listen('Illuminate\\Database\\Events\\QueryExecuted', array(0 => ${($_ = isset($this->services['wouterj_eloquent.query_listener']) ? $this->services['wouterj_eloquent.query_listener'] : $this->services['wouterj_eloquent.query_listener'] = new \WouterJ\EloquentBundle\DataCollector\QueryListener()) && false ?: '_'}, 1 => 'onQuery'));

return $instance;
