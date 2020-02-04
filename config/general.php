<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => 'admin',
        'resourceTrigger' => 'resources',
        'actionTrigger' 	=> 'actions',
        'pageTrigger' 		=> 'p',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),

        // Whether to save the project config out to config/project.yaml
        // (see https://docs.craftcms.com/v3/project-config.html)
        'useProjectConfigFile' => false,

        // Member login info duration
        // http://www.php.net/manual/en/dateinterval.construct.php
        'userSessionDuration'           => 'P1M',
        'rememberedUserSessionDuration' => 'P1M',
        'rememberUsernameDuration'      => 'P1M',

        // User account related paths
        'loginPath'              => 'login',
        'logoutPath'             => 'logout',
        'setPasswordPath'        => 'setpassword',
        'setPasswordSuccessPath' => '',
        'activateAccountPath'    => 'activate',
        'activateFailurePath'    => '',
        // Manage our routes in the craft/config/routes.php file
        // 'siteRoutesSource'   => 'file',
    ],

    '.local' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'siteUrl' => 'http://quintexservices.local/',
        ),
    ),
    'quintexservices.com' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'siteUrl' => 'http://quintexservices.com/',
        ),
    ),
    'staging.quintexservices.com' => array(
        'environmentVariables' => array(
            'siteUrl' => 'http://staging.quintexservices.com/',
        ),
    ),
    // Dev environment settings
    'dev' => [
        // Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
        'devMode' => true,
    ],

    // Staging environment settings
    'staging' => [
        // Set this to `false` to prevent administrative changes from being made on staging
        'allowAdminChanges' => true,
    ],

    // Production environment settings
    'production' => [
        // Set this to `false` to prevent administrative changes from being made on production
        'allowAdminChanges' => true,
    ],
];
