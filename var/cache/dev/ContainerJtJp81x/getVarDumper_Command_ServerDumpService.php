<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'var_dumper.command.server_dump' shared service.

$a = new \Symfony\Bridge\Monolog\Logger('debug');
$a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

$this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Component\VarDumper\Command\ServerDumpCommand(new \Symfony\Component\VarDumper\Server\DumpServer('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->load('getVarDumper_ContextualizedCliDumper_InnerService.php'))), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

$instance->setName('server:dump');

return $instance;
