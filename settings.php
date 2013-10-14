<?php

defined('MOODLE_INTERNAL') || die;
global $DB;

if ($ADMIN->fulltree) {

    $roles = role_get_names(null, null, true);

    $exemptRoles = array('student');

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/profilefield_shortname',
                    get_string('profilefield_shortname', 'block_sentinel'),
                    get_string('profilefield_shortname_description', 'block_sentinel'),
                    ''
            )
    );
    
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

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/sentinel_token',
                    get_string('sentinel_token', 'block_sentinel'),
                    get_string('sentinel_token_description', 'block_sentinel'),
                    ''
            )
    );
    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/sentinel_api',
                    get_string('sentinel_api', 'block_sentinel'),
                    get_string('sentinel_api_description', 'block_sentinel'),
                    ''
            )
    );

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/credentials_location',
                    get_string('credentials_location', 'block_sentinel'),
                    get_string('credentials_location_description', 'block_sentinel'),
                    ''
            )
    );

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/localwebservice_url',
                    get_string('localwebservice_url', 'block_sentinel'),
                    get_string('localwebservice_url_description', 'block_sentinel'),
                    ''
            )
    );

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/localwebservice_userexists_servicename',
                    get_string('localwebservice_userexists_servicename', 'block_sentinel'),
                    get_string('localwebservice_userexists_servicename_description', 'block_sentinel'),
                    ''
            )
    );
    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/localwebservice_fetchuser_servicename',
                    get_string('localwebservice_fetchuser_servicename', 'block_sentinel'),
                    get_string('localwebservice_fetchuser_servicename_description', 'block_sentinel'),
                    ''
            )
    );

    $settings->add(
            new admin_setting_configtext(
                    'block_sentinel/stu_profile',
                    get_string('stu_profile', 'block_sentinel'),
                    get_string('stu_profile_description', 'block_sentinel'),
                    '')
    );

    $settings->add(
            new admin_setting_configcheckbox(
                    'block_sentinel/bool_cron',
                    get_string('cron_run', 'block_sentinel'),
                    get_string('cron_desc', 'block_sentinel'),
                    true, true, false)
    );
}
?>
