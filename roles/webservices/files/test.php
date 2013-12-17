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

require_once("PR_LDAP.php");

$options = array(
    'dn'=>'dc=moh,dc=gov,dc=rw',
    'ldap_pass'=>'{{ ldap_pass }}'
    );

$ldap = new LDAP_WebService_Lookup($options);


$searches = array(
    'nid'=> array(6243516,5409880,2114184),
    'cn'=>array('Laputh Beafreaw')
    );
$attrs = array('nid','cn','givenName','sn','dateOfBirth','entryUUID');
echo "<ul>";

foreach ($searches as $search_key=>$values) {
    echo "<li>Doing Search on <b>$search_key</b></li>";
    echo "<ul>";

    foreach ($values as $value) {
        echo "<li>Looking for $value";
        $attributes = $ldap->getAttributesFromKeyValue(array($search_key=> $value),$attrs,true);
        if (!is_array($attributes)) {
            echo "--FAILED";
        } else {
            echo "<ul>";
            foreach ($attributes as $key=>$val) {
                if (count($val) > 1) {
                    echo "<li>$key (" . count($val)  . "):" . implode(",", $val) . "</li>";
                } else {
                    echo "<li>$key:" . implode(",", $val) . "</li>";
                }
            }
            echo "</ul>";
        }
        echo "</li>";
    }    
    echo "</ul></li>";
}


