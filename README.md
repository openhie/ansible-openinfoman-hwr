ansible-openinfoman-hwr
=========

Installs [openinfoman](https://github.com/openhie/openinfoman) and [openinfoman-hwr](https://github.com/openhie/openinfoman-hwr).

Requirements
------------

Works best with Ubuntu 14.04

Role Variables
--------------
````
# Install openinfoman
openinfoman_install: true
# Install ihris HWR
openinfoman_hwr_install: true


# Default install dirs (Change only when using deploy)
openinfoman_dir: /var/lib/openinfoman
ihris_dir: /var/lib/iHRIS

````


Example Playbook
----------------

````
- hosts: servers
   roles:
    - ansible-openinfoman-hwr
   vars:
    
````	


License
-------

Apache v2

Author Information
------------------

Ryan Yates
