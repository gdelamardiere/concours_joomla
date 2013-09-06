<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 // import Joomla controller library
jimport('joomla.application.component.controller');

 /**
 * General Controller of concours component
 */
class concoursController extends JController{
        /**
         * display task
         *
         * @return void
         */
        function display($cachable = false) 
        {
                // set default view if not set
                if(JRequest::getCmd('view', 'ConcoursList')=="concours" && JRequest::getCmd('layout', 'default')!="edit"){
                        JRequest::setVar('view', 'ConcoursList');
                }
                else{
                      JRequest::setVar('view', JRequest::getCmd('view', 'ConcoursList'));  
                }               
 
                // call parent behavior
                parent::display($cachable);
        }
}