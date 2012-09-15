<?php
/*
 * Copyright MADE/YOUR/DAY <mail@madeyourday.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MadeYourDay\SVG;

use Symfony\Component\Console\Application;
use MadeYourDay\SVG\IconFontGeneratorCLI\CreateFontCommand;

/**
 * SVG Icon Font Generator Command Line Application
 *
 * @author ausi <martin@madeyourday.co>
 */
class IconFontGeneratorCLI extends Application{

	/**
	 * constructor, sets up application information and commands
	 */
	public function __construct(){

		parent::__construct('SVG Icon Font Generator', '0.1.0');

		$this->add(new CreateFontCommand);

	}

}
