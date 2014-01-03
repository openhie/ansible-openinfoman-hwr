<?php
/*
 * © Copyright 2012 IntraHealth International, Inc.
 * 
 * This File is part of RHEA Provider Registry
 * 
 * RHEA Provider Registry is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(dirname(__FILE__) . "/../../PR_LDAP.php");

$options = array(
    'connection'=> array(
        'dn'=>'dc=moh,dc=gov,dc=rw',
        'pass'=>'{{ ldap_pass }}'
        ),
    'allowed_lookup_keys' => array(
        'NID'=>'nid',
        'APN'=>'mutuelle',
        'PPN'=>'passport',
        'SSN'=>'csr'
        ),
    'base_filter'=>'objectClass=providerPerson',
    'lookup_key'=>'id_type',
    'lookup_value'=>'id_number',
    'lookup_result'=>'entryUUID'
    );

$service = new LDAP_WebService_Lookup($options);
if (__FILE__ == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    $service->init();
    $service->run($_GET);
}
