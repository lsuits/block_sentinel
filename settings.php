<?php

defined('MOODLE_INTERNAL') || die;
global $DB;

if ($ADMIN->fulltree) {

    $roles = role_get_names(null, null, true);

    $exemptRoles = array('student');

    
    $settings->add(
            new admin_setting_configmultiselect(
                    'block_sentinel/roleselection',
                    get_string('roleselection_label', 'block_sentinel'),
                    get_string('roleselection_description', 'block_sentinel'),
                    $exemptRoles,
                    $roles
            )
    );

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/excluded_courses',
                    get_string('excluded_courses', 'block_sentinel'),
                    get_string('excluded_courses_description', 'block_sentinel'),
                    ''
            )
    );
    
    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/landing_course',
                    get_string('landing_course', 'block_sentinel'),
                    get_string('landing_course_description', 'block_sentinel'),
                    ''
            )
    );
}
?>
