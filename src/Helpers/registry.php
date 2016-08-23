<?php
/**
 * ©[2016] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */
// @codeCoverageIgnoreStart

$entryPoints = array(
    //GET API Endpoints
    'ping' => 'GET\\Ping',
    'getRecord' => 'GET\\ModuleRecord',
    'getAttachment' => 'GET\\ModuleRecordFileField',
    'getChangeLog' => 'GET\\ModuleRecordAudit',
    'filterRelated' => 'GET\\ModuleRecordRelationship',
    'getRelated' => 'GET\\ModuleRecordLinkRecord',
    'me' => 'GET\\Me',
    'search' => 'GET\\Search',

    //POST API Endpoints
    'oauth2Token' => 'POST\\OAuth2Token',
    'oauth2Refresh' => 'POST\\RefreshToken',
    'createRecord' => 'POST\\Module',
    'filterRecords' => 'POST\\ModuleFilter',
    'attachFile' => 'POST\\ModuleRecordFileField',
    'oauth2Logout' => 'POST\\OAuth2Logout',
    'createRelated' => 'POST\\ModuleRecordRelationship',
    'linkRecords' => 'POST\\ModuleRecordLinkRecord',
    'bulk' => 'POST\\Bulk',

    //PUT API Endpoints
    'updateRecord' => 'PUT\\ModuleRecord',
    'favorite' => 'PUT\\ModuleRecordFavorite',

    //DELETE API Endpoints
    'deleteRecord' => 'DELETE\\ModuleRecord',
    'unfavorite' => 'DELETE\\ModuleRecordFavorite',
    'deleteFile' => 'DELETE\\ModuleRecordFileField',
    'unlinkRecords' => 'DELETE\\ModuleRecordLinkRecord'
);

// @codeCoverageIgnoreEnd
