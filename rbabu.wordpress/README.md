# Table of contents 
- [Wordpress Ansible Playbook]
- [This is an ansible playbook that contains Roles to install, configure and run WordPress on a standalone ubuntu target machine]
- [What are the roles this playbook provide ? ](#What-are-the-roles-this-playbook-provide-?)
- [How to run](#How-to-run-?)


## What are the roles this playbook provide ?

The roles include:

rbabu.php 				# This role will install the php
rbabu.python3			# This role will install python3
rbabu.mysql 			# Fresh install and configure of MySQL database on target machine 
rbabu.nginx				# This role will install nginx 
rbabu.wordpress			# Deploy and run wordpress 



## How to run ? 
```bash
#Run below command on ansible master 
ansible@ansiblemaster01:~/rbabu.wordpress$ ansible-playbook -i inventory.txt wordpress-playbook.yaml 