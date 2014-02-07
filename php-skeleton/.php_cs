<?php
use Symfony\CS\FixerInterface;

$finder = Symfony\CS\Finder\DefaultFinder::create()
	->exclude('.settings')
	->notName('.buildpath')
	->notName('.gitignore')
	->notName('.php_cs')
	->notName('.project')
	->notName('build.xml')
	->notName('composer.*')
	->notName('License.txt')
	->notName('phpcs.xml')
	->notName('phpdox.xml.dist')
	->notName('phpmd.xml')
	->notName('phpunit.xml.dist')
	->notName('README.md')
	->exclude('vendor')
	->in(__DIR__)
	;

return Symfony\CS\Config\Config::create()
//	->fixers()
	->finder($finder)
	;
