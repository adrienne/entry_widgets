<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package 		ExpressionEngine 2: Widgets
 * @subpackage 		RSS Feed Widget
 * @author			Phil Sturgeon - PyroCMS Development Team
 * 
 * Show RSS feeds in your site
 */

class Widget_Html extends Entry_widgets
{
	public $title = 'HTML';
	public $description = 'Create blocks of custom HTML.';
	public $author = 'Phil Sturgeon';
	public $website = 'http://philsturgeon.co.uk/';
	public $version = '1.0';
	
	public $fields = array(
		array(
			'field'   => 'html',
			'label'   => 'HTML',
			'rules'   => 'required'
		)
	);

	public function run($options)
	{
		if(empty($options['html']))
		{
			return array('output' => '');
		}
		
		// Store the feed items
		return array('output' => $options['html']);
	}
	
}
