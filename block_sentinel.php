<?php
global $CFG;
require_once $CFG->dirroot . '/blocks/sentinel/lib.php';

class block_sentinel extends block_base {

    public $field;
    
    
    public function has_config() {
        return true;
    }

    public function init() {

        $this->title = get_string('pluginname', 'block_sentinel');
    }

    public function applicable_formats() {
        return array('site' => true, 'my' => false, 'course' => true);
    }

    public function get_content() {
        global $COURSE, $USER;
        if ($this->content !== null) {
            return $this->content;
        }
        
        $public   = explode(',',get_config('block_sentinel','excluded_courses'));
        $excluded = in_array($COURSE->id,$public);

        $this->content    = new stdClass();
//        $acceptableStatus = Sentinel::blnUserHasAcceptableStatus($USER->id);
//        $hasExemptRole    = Sentinel::blnUserHasExemptRole($USER->id);
//
//        if ($acceptableStatus or $hasExemptRole) {
//            return $this->content;
//        } elseif(!$excluded){
//            header("Location: /blocks/sentinel/index.php");
//        } else {
//            //what?
//        }
    }
}

?>