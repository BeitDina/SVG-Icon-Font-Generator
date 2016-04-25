<?php
/*
 * Copyright MADE/YOUR/DAY <mail@madeyourday.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$pharPath = __DIR__.'/svg-icon-font-generator.phar';

if(file_exists($pharPath)){
	unlink($pharPath);
}

$phar = new Phar($pharPath);

$phar->setStub($phar->createDefaultStub('run.php'));

$files = new AppendIterator;
$files->append(new ArrayIterator(array(
	'run.php' => __DIR__.'/run.php',
)));
$files->append(new RecursiveIteratorIterator(
	new RecursiveDirectoryIterator(__DIR__.'/src', FilesystemIterator::SKIP_DOTS)
));
$files->append(new RecursiveIteratorIterator(
	new RecursiveDirectoryIterator(__DIR__.'/vendor', FilesystemIterator::SKIP_DOTS)
));

$phar->buildFromIterator($files, __DIR__);

echo "created svg-icon-font-generator.phar\n";
