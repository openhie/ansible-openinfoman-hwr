playbook-ohie-pr
================

Ansible playbook for deploying the provider registry component of the [OpenHIE](http://ohie.org) stack.

## What it does
* Installs ldap, and apache2.
* Sets up a test databse.

## Requirements
* Ansible **1.2+** installed on client.
* Debian based distro installed on target machine (tested with Ubuntu 12.04 LTS).
* root username/password on target machine, ssh installed and running.
* **If you do not having the required python packages uncomment the `# - bootstrap` line in the `site.yml` file.**

## Vars and setup
You will need to copy `group_vars/all.example` to `group_vars/all` then edit the variables in`group_vars/all`. Make sure to generate the LDAP password hash.

Also copy `hosts.example` to `hosts` and enter the ip or hostname of your server in place of the ip.

By default we try to login with root via ssh, if you have another user with sudo access on your server(e.g. AWS) edit `site.yml` and change the user and uncomment the sudo line.

## Running the play
`ansible-playbook -k -i hosts site.yml`

Drop the -k if you are logging in with a public/private key. 

`ansible-playbook -i hosts site.yml`

After this is complete point your browser to http://ip_or_hostname/webservices/lookupbyid/epid/?id_type=NID&id_number=6223158.  If you get a number back then the REST service is working correctly.
