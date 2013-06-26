<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Widget_sidebarmenu extends Widgets
{
    // The widget title,  this is displayed in the admin interface
    public $title = 'Sub Menu';

    //The widget description, this is also displayed in the admin interface.  Keep it brief.
    public $description =  'Display sub menu.';

    // The author's name
    public $author = 'aji_gondronk';

    // The authors website for the widget
    public $website = 'aji_gondronk@yahoo.com';

    //current version of your widget
    public $version = '1.0.0';

    /**
     * $fields array fore storing widget options in the database.
     * values submited through the widget instance form are serialized and
     * stored in the database.
     */
    public $fields = array(
        array(
            'field'   => 'submenu',
            'label'   => 'Submenu',
            'rules'   => 'required'
        )
    );

    /**
     * the $options param is passed by the core Widget class.  If you have
     * stored options in the database,  you must pass the paramater to access
     * them.
     */
    public function run($options)
    {
        if(empty($options['submenu']))
        {
            //return an array of data that will be parsed by views/display.php
            return array('output' => '');
        }

        // Store the feed items
        return array('output' => $options['html']);
    }

    /**
     * form() is used to prepare/pass data to the widget admin form
     * data returned from this method will be available to views/form.php
     */
    public function form()
    {
        $stuff = $this->db->get_stuff();
        return array('stuff' => $stuff);
    }

    /**
     * save() is used to alter submited data before their insertion in database
     */
    public function save($options)
    {
       if(isset($options['foo']) && !isset($options['bar']){
           $options['bar'] = $options['foo'];
       }
       return $options;
    }
}