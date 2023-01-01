<?php
use CRM_Accountsync_ExtensionUtil as E;

$entities = [
  [
    'name' => 'Navigation_Accountsync',
    'entity' => 'Navigation',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'domain_id' => 'current_domain',
        'label' => 'Accounts Integration',
        'name' => 'Accounts_System',
        'url' => NULL,
        'icon' => NULL,
        'permission' => [
          'administer CiviCRM data',
          'administer CiviCRM system',
        ],
        'permission_operator' => 'OR',
        'parent_id.name' => 'CiviContribute',
        'is_active' => TRUE,
        'has_separator' => 0,
        'weight' => 19,
      ],
    ],
  ],
  [
    'name' => 'Navigation_Accountsync_Errors',
    'entity' => 'Navigation',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'domain_id' => 'current_domain',
        'label' => E::ts('Errors'),
        'name' => 'Accounts_Errors',
        'url' => NULL,
        'icon' => NULL,
        'permission' => [
          'administer CiviCRM system',
        ],
        'permission_operator' => 'OR',
        'parent_id.name' => 'Accounts_System',
        'is_active' => TRUE,
        'has_separator' => 0,
        'weight' => 3,
      ],
    ],
  ],
  [
    'name' => 'Navigation_Accountsync_Invoice_Errors',
    'entity' => 'Navigation',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'domain_id' => 'current_domain',
        'label' => E::ts('Invoice Errors'),
        'name' => 'Accounts_Invoice_Errors',
        'url' => 'civicrm/accounting/errors/invoices',
        'icon' => NULL,
        'permission' => [
          'administer CiviCRM system',
        ],
        'permission_operator' => 'OR',
        'parent_id.name' => 'Accounts_Errors',
        'is_active' => TRUE,
        'has_separator' => 0,
        'weight' => 2,
      ],
    ],
  ],
  [
    'name' => 'Navigation_Accountsync_Contact_Errors',
    'entity' => 'Navigation',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'domain_id' => 'current_domain',
        'label' => E::ts('Contact Errors'),
        'name' => 'Accounts_Contact_Errors',
        'url' => 'civicrm/accounting/errors/contacts',
        'icon' => NULL,
        'permission' => [
          'administer CiviCRM system',
        ],
        'permission_operator' => 'OR',
        'parent_id.name' => 'Accounts_Errors',
        'is_active' => TRUE,
        'has_separator' => 0,
        'weight' => 1,
      ],
    ],
  ],
  [
    'name' => 'Navigation_Accountsync_Synchronize_Contacts',
    'entity' => 'Navigation',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'domain_id' => 'current_domain',
        'label' => E::ts('Match Contacts (legacy)'),
        'name' => 'Accountsync_Contact_Match_Legacy',
        'url' => 'civicrm/a/#/accounts/contact/sync',
        'icon' => NULL,
        'permission' => [
          'administer CiviCRM system',
        ],
        'permission_operator' => 'AND',
        'parent_id.name' => 'Accounts_System',
        'is_active' => TRUE,
        'has_separator' => 0,
        'weight' => 2,
      ],
    ],
  ],
  [
    'name' => 'Navigation_Accountsync_Match_Contacts',
    'entity' => 'Navigation',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'domain_id' => 'current_domain',
        'label' => E::ts('Match Contacts'),
        'name' => 'Accountsync Contact Match',
        'url' => 'civicrm/admin/accountsync/contactmatch',
        'icon' => NULL,
        'permission' => [
          'administer CiviCRM system',
        ],
        'permission_operator' => 'AND',
        'parent_id.name' => 'Accounts_System',
        'is_active' => TRUE,
        'has_separator' => 0,
        'weight' => 1,
      ],
    ],
  ],
];
return $entities;
