<?php

use ClanCats\Container\Container as ClanCatsContainere782a472586f7789fb67cdae0d016746;

class GameContainer extends ClanCatsContainere782a472586f7789fb67cdae0d016746 {

protected array $parameters = array (
  'project.name' => 'Flappyphphant',
  'project.version' => 'v0.1',
  'runtime.ticks_per_second' => 60,
  'window.default_widht' => 1280,
  'window.default_height' => 720,
  'input.action.map.game' => 
  array (
    'jump' => '@Key::SPACE',
    'reset' => '@Key::R',
  ),
  'visu.maker.command_namespace' => 'App/Command',
  'visu.maker.path_commands_ctn' => 'commands.ctn',
);

protected array $serviceAliases = array (
);

protected array $metadata = array (
  'on' => 
  array (
    'signal.handler.window_actions' => 
    array (
      0 => 
      array (
        0 => 'input.key',
        'call' => 'handleWindowKey',
      ),
    ),
  ),
  'command' => 
  array (
    'visu.command.cache_clear' => 
    array (
      0 => 
      array (
        0 => 'cache:clear',
      ),
    ),
    'visu.command.dump_container' => 
    array (
      0 => 
      array (
        0 => 'container:dump',
      ),
    ),
    'visu.command.available' => 
    array (
      0 => 
      array (
        0 => 'commands:available',
      ),
    ),
    'visu.command.maker' => 
    array (
      0 => 
      array (
        0 => 'make',
      ),
    ),
    'visu.command.dump_signal_handlers' => 
    array (
      0 => 
      array (
        0 => 'signals:dump',
      ),
    ),
  ),
);
protected array $metadataService = array (
  'signal.handler.window_actions' => 
  array (
    0 => 'on',
  ),
  'visu.command.cache_clear' => 
  array (
    0 => 'command',
  ),
  'visu.command.dump_container' => 
  array (
    0 => 'command',
  ),
  'visu.command.available' => 
  array (
    0 => 'command',
  ),
  'visu.command.maker' => 
  array (
    0 => 'command',
  ),
  'visu.command.dump_signal_handlers' => 
  array (
    0 => 'command',
  ),
);

protected array $serviceResolverType = ['window.main.hints' => 0, 'window.main' => 0, 'GL' => 0, 'game' => 0, 'game_loop.main' => 0, 'shaders' => 0, 'profiler' => 0, 'input' => 0, 'input.context' => 0, 'input.actions.game' => 0, 'signal.handler.window_actions' => 0, 'visu.dispatcher' => 0, 'visu.cli' => 0, 'visu.command.registry' => 0, 'visu.command.cli_loader' => 0, 'visu.command.cache_clear' => 0, 'visu.command.dump_container' => 0, 'visu.command.available' => 0, 'visu.command.maker' => 0, 'visu.command.dump_signal_handlers' => 0, 'visu.maker.generator_class' => 0, 'visu.maker.generator_command' => 0, 'visu.maker' => 0];

protected array $resolverMethods = ['window.main.hints' => 'resolveWindowMainHints', 'window.main' => 'resolveWindowMain', 'GL' => 'resolveGL', 'game' => 'resolveGame', 'game_loop.main' => 'resolveGameLoopMain', 'shaders' => 'resolveShaders', 'profiler' => 'resolveProfiler', 'input' => 'resolveInput', 'input.context' => 'resolveInputContext', 'input.actions.game' => 'resolveInputActionsGame', 'signal.handler.window_actions' => 'resolveSignalHandlerWindowActions', 'visu.dispatcher' => 'resolveVisuDispatcher', 'visu.cli' => 'resolveVisuCli', 'visu.command.registry' => 'resolveVisuCommandRegistry', 'visu.command.cli_loader' => 'resolveVisuCommandCliLoader', 'visu.command.cache_clear' => 'resolveVisuCommandCacheClear', 'visu.command.dump_container' => 'resolveVisuCommandDumpContainer', 'visu.command.available' => 'resolveVisuCommandAvailable', 'visu.command.maker' => 'resolveVisuCommandMaker', 'visu.command.dump_signal_handlers' => 'resolveVisuCommandDumpSignalHandlers', 'visu.maker.generator_class' => 'resolveVisuMakerGeneratorClass', 'visu.maker.generator_command' => 'resolveVisuMakerGeneratorCommand', 'visu.maker' => 'resolveVisuMaker'];

public function resolveWindowMainHints() : \VISU\OS\WindowHints {
	if (isset($this->resolvedSharedServices['window.main.hints'])) return $this->resolvedSharedServices['window.main.hints'];
	$instance = new \VISU\OS\WindowHints();
	$instance->setFocused(true);
	$instance->setFocusOnShow(true);
	$instance->setResizable(true);
	$this->resolvedSharedServices['window.main.hints'] = $instance;
	return $instance;
}
public function resolveWindowMain() : \VISU\OS\Window {
	if (isset($this->resolvedSharedServices['window.main'])) return $this->resolvedSharedServices['window.main'];
	$instance = new \VISU\OS\Window($this->getParameter('project.name'), $this->getParameter('window.default_widht'), $this->getParameter('window.default_height'), $this->resolvedSharedServices['window.main.hints'] ?? $this->resolvedSharedServices['window.main.hints'] = $this->resolveWindowMainHints());
	$this->resolvedSharedServices['window.main'] = $instance;
	return $instance;
}
public function resolveGL() : \VISU\Graphics\GLState {
	if (isset($this->resolvedSharedServices['GL'])) return $this->resolvedSharedServices['GL'];
	$instance = new \VISU\Graphics\GLState();
	$this->resolvedSharedServices['GL'] = $instance;
	return $instance;
}
public function resolveGame() : \App\Game {
	if (isset($this->resolvedSharedServices['game'])) return $this->resolvedSharedServices['game'];
	$instance = new \App\Game($this);
	$this->resolvedSharedServices['game'] = $instance;
	return $instance;
}
public function resolveGameLoopMain() : \VISU\Runtime\GameLoop {
	if (isset($this->resolvedSharedServices['game_loop.main'])) return $this->resolvedSharedServices['game_loop.main'];
	$instance = new \VISU\Runtime\GameLoop($this->resolvedSharedServices['game'] ?? $this->resolvedSharedServices['game'] = $this->resolveGame(), $this->getParameter('runtime.ticks_per_second'));
	$this->resolvedSharedServices['game_loop.main'] = $instance;
	return $instance;
}
public function resolveShaders() : \VISU\Graphics\ShaderCollection {
	if (isset($this->resolvedSharedServices['shaders'])) return $this->resolvedSharedServices['shaders'];
	$instance = new \VISU\Graphics\ShaderCollection($this->resolvedSharedServices['GL'] ?? $this->resolvedSharedServices['GL'] = $this->resolveGL(), $this->getParameter('visu.path.resources.shader'));
	$instance->enableVISUIncludes();
	$instance->addVISUShaders();
	$instance->scanShaderDirectory($this->getParameter('visu.path.resources.shader'));
	$this->resolvedSharedServices['shaders'] = $instance;
	return $instance;
}
public function resolveProfiler() : \VISU\Instrument\CompatGPUProfiler {
	if (isset($this->resolvedSharedServices['profiler'])) return $this->resolvedSharedServices['profiler'];
	$instance = new \VISU\Instrument\CompatGPUProfiler();
	$this->resolvedSharedServices['profiler'] = $instance;
	return $instance;
}
public function resolveInput() : \VISU\OS\Input {
	if (isset($this->resolvedSharedServices['input'])) return $this->resolvedSharedServices['input'];
	$instance = new \VISU\OS\Input($this->resolvedSharedServices['window.main'] ?? $this->resolvedSharedServices['window.main'] = $this->resolveWindowMain(), $this->resolvedSharedServices['visu.dispatcher'] ?? $this->resolvedSharedServices['visu.dispatcher'] = $this->resolveVisuDispatcher());
	$this->resolvedSharedServices['input'] = $instance;
	return $instance;
}
public function resolveInputContext() : \VISU\OS\InputContextMap {
	if (isset($this->resolvedSharedServices['input.context'])) return $this->resolvedSharedServices['input.context'];
	$instance = new \VISU\OS\InputContextMap($this->resolvedSharedServices['visu.dispatcher'] ?? $this->resolvedSharedServices['visu.dispatcher'] = $this->resolveVisuDispatcher());
	$instance->register('game', $this->resolvedSharedServices['input.actions.game'] ?? $this->resolvedSharedServices['input.actions.game'] = $this->resolveInputActionsGame());
	$instance->switchTo('game');
	$this->resolvedSharedServices['input.context'] = $instance;
	return $instance;
}
public function resolveInputActionsGame() : \VISU\OS\InputActionMap {
	if (isset($this->resolvedSharedServices['input.actions.game'])) return $this->resolvedSharedServices['input.actions.game'];
	$instance = new \VISU\OS\InputActionMap();
	$instance->importArrayMap($this->getParameter('input.action.map.game'));
	$this->resolvedSharedServices['input.actions.game'] = $instance;
	return $instance;
}
public function resolveSignalHandlerWindowActions() : \App\SignalHandler\WindowActionsHandler {
	if (isset($this->resolvedSharedServices['signal.handler.window_actions'])) return $this->resolvedSharedServices['signal.handler.window_actions'];
	$instance = new \App\SignalHandler\WindowActionsHandler();
	$this->resolvedSharedServices['signal.handler.window_actions'] = $instance;
	return $instance;
}
public function resolveVisuDispatcher() : \VISU\Signal\Dispatcher {
	if (isset($this->resolvedSharedServices['visu.dispatcher'])) return $this->resolvedSharedServices['visu.dispatcher'];
	$instance = new \VISU\Signal\Dispatcher();
	$instance->readSignalsFromContainer($this);
	$this->resolvedSharedServices['visu.dispatcher'] = $instance;
	return $instance;
}
public function resolveVisuCli() : \League\CLImate\CLImate {
	if (isset($this->resolvedSharedServices['visu.cli'])) return $this->resolvedSharedServices['visu.cli'];
	$instance = new \League\CLImate\CLImate();
	$this->resolvedSharedServices['visu.cli'] = $instance;
	return $instance;
}
public function resolveVisuCommandRegistry() : \VISU\Command\CommandRegistry {
	if (isset($this->resolvedSharedServices['visu.command.registry'])) return $this->resolvedSharedServices['visu.command.registry'];
	$instance = new \VISU\Command\CommandRegistry($this);
	$instance->readCommandsFromContainer($this);
	$this->resolvedSharedServices['visu.command.registry'] = $instance;
	return $instance;
}
public function resolveVisuCommandCliLoader() : \VISU\Command\CommandLineInterfaceLoader {
	if (isset($this->resolvedSharedServices['visu.command.cli_loader'])) return $this->resolvedSharedServices['visu.command.cli_loader'];
	$instance = new \VISU\Command\CommandLineInterfaceLoader($this->resolvedSharedServices['visu.command.registry'] ?? $this->resolvedSharedServices['visu.command.registry'] = $this->resolveVisuCommandRegistry(), $this->resolvedSharedServices['visu.cli'] ?? $this->resolvedSharedServices['visu.cli'] = $this->resolveVisuCli());
	$this->resolvedSharedServices['visu.command.cli_loader'] = $instance;
	return $instance;
}
public function resolveVisuCommandCacheClear() : \VISU\Command\CacheClearCommand {
	if (isset($this->resolvedSharedServices['visu.command.cache_clear'])) return $this->resolvedSharedServices['visu.command.cache_clear'];
	$instance = new \VISU\Command\CacheClearCommand();
	$this->resolvedSharedServices['visu.command.cache_clear'] = $instance;
	return $instance;
}
public function resolveVisuCommandDumpContainer() : \VISU\Command\ContainerDumpCommand {
	if (isset($this->resolvedSharedServices['visu.command.dump_container'])) return $this->resolvedSharedServices['visu.command.dump_container'];
	$instance = new \VISU\Command\ContainerDumpCommand($this);
	$this->resolvedSharedServices['visu.command.dump_container'] = $instance;
	return $instance;
}
public function resolveVisuCommandAvailable() : \VISU\Command\AvailableCommand {
	if (isset($this->resolvedSharedServices['visu.command.available'])) return $this->resolvedSharedServices['visu.command.available'];
	$instance = new \VISU\Command\AvailableCommand($this->resolvedSharedServices['visu.command.registry'] ?? $this->resolvedSharedServices['visu.command.registry'] = $this->resolveVisuCommandRegistry());
	$this->resolvedSharedServices['visu.command.available'] = $instance;
	return $instance;
}
public function resolveVisuCommandMaker() : \VISU\Command\MakerCommand {
	if (isset($this->resolvedSharedServices['visu.command.maker'])) return $this->resolvedSharedServices['visu.command.maker'];
	$instance = new \VISU\Command\MakerCommand($this->resolvedSharedServices['visu.maker'] ?? $this->resolvedSharedServices['visu.maker'] = $this->resolveVisuMaker());
	$this->resolvedSharedServices['visu.command.maker'] = $instance;
	return $instance;
}
public function resolveVisuCommandDumpSignalHandlers() : \VISU\Command\SignalDumpCommand {
	if (isset($this->resolvedSharedServices['visu.command.dump_signal_handlers'])) return $this->resolvedSharedServices['visu.command.dump_signal_handlers'];
	$instance = new \VISU\Command\SignalDumpCommand($this->resolvedSharedServices['visu.dispatcher'] ?? $this->resolvedSharedServices['visu.dispatcher'] = $this->resolveVisuDispatcher());
	$this->resolvedSharedServices['visu.command.dump_signal_handlers'] = $instance;
	return $instance;
}
public function resolveVisuMakerGeneratorClass() : \VISU\Maker\Generator\ClassGenerator {
	if (isset($this->resolvedSharedServices['visu.maker.generator_class'])) return $this->resolvedSharedServices['visu.maker.generator_class'];
	$instance = new \VISU\Maker\Generator\ClassGenerator();
	$this->resolvedSharedServices['visu.maker.generator_class'] = $instance;
	return $instance;
}
public function resolveVisuMakerGeneratorCommand() : \VISU\Maker\Generator\CommandGenerator {
	if (isset($this->resolvedSharedServices['visu.maker.generator_command'])) return $this->resolvedSharedServices['visu.maker.generator_command'];
	$instance = new \VISU\Maker\Generator\CommandGenerator();
	$instance->setPathCommandsCtn($this->getParameter('visu.maker.path_commands_ctn'));
	$instance->setCommandNamespace($this->getParameter('visu.maker.command_namespace'));
	$this->resolvedSharedServices['visu.maker.generator_command'] = $instance;
	return $instance;
}
public function resolveVisuMaker() : \VISU\Maker\Maker {
	if (isset($this->resolvedSharedServices['visu.maker'])) return $this->resolvedSharedServices['visu.maker'];
	$instance = new \VISU\Maker\Maker();
	$instance->bind($this->resolvedSharedServices['visu.maker.generator_class'] ?? $this->resolvedSharedServices['visu.maker.generator_class'] = $this->resolveVisuMakerGeneratorClass());
	$instance->bind($this->resolvedSharedServices['visu.maker.generator_command'] ?? $this->resolvedSharedServices['visu.maker.generator_command'] = $this->resolveVisuMakerGeneratorCommand());
	$this->resolvedSharedServices['visu.maker'] = $instance;
	return $instance;
}

/**
 * Override the debug info function so that we do not end in an infinite recrusion.
 */
public function __debugInfo() : array
{
    return ['services' => $this->available()];
}

}