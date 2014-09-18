ansible-openinfoman-hwr
=========

Installs [openinfoman](https://github.com/openhie/openinfoman) and [openinfoman-hwr](https://github.com/openhie/openinfoman-hwr).

Requirements
------------

Works best with Ubunut 14.04

Role Variables
--------------

    # Directory basex folder will be installed to (will create basex subdirectory inside here)
    basex_dir: /opt
    # Directory openeinfo man will be installed to
    openinfoman_dir: /opt/openinfoman
    # Directory openinfoman-hwr will be installed to
    openinfoman_hwr_dir: /opt/openinfoman-hwr
    # Directory openinfoman-pr is installed to
    openinfoman_pr_dir: /opt/openinfoman-pr
    # Directory iHris will be installed to
    ihris_dir: /opt/ihris

    # User that will run basex
    basex_user: basex

    # Databse config
    openinfoman_db_root_pwd: openinfomandbroot
    # mysql user pwd for user: ihris
    openinfoman_db_ihris_pwd: openinfmandbihris

    # Add demo data after install and config
    openinfoman_demo_data: true

    # Deploy openinfoman (you probably don't want this)
    openinfoman_deploy: false
    # Archive of openinfoman to deploy if above is true
    openinfoman_archive_loc:
    # Archive of openinfoman-hwr to deploy
    openinfoman_hwr_archive_loc:


Example Playbook
----------------

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    - hosts: servers
      roles:
         - ansible-openinfoman-hwr

      vars:
        openinfoman_db_root_pwd: password
	openinfoman_db_ihris_pwd: notpassword

License
-------

Apache v2

Author Information
------------------

Ryan Yates
