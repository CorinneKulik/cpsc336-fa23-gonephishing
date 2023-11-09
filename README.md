# cpsc336-fa23-gonephishing
Project: option 2
Group Members and Jobs: Corinne Kulik (project manager), Maddie Bounds (developing the application), Zachary Langford (development environment), Matthew Wakhweya (production environments)

# Initial Project Information 
Development environment:
ANALYSIS
This application will simply list (read), add, and delete items from inventory. The item table will have an id, a Name and a quantity.
Virtualization - 2 machines
Machine 1 (Left)
network configuration: NAT and internal
install apache2
install php
install mysql-client
ssh banner indicating it is a development server, provide team name, and contact email
Machine 2 (Right)
network configuration: internal
install mysql-server
Production environment:
AWS EC2 instance
accessible from any networked device - specifically mobile phones
low cost ec2
ssh banner should indicate unauthorized users are not allowed on the server, provide a team name, and contact email
RDS instance
should be MySQL
security groups → enable access to all ports from 137.155.0.0/16
webroot should be git repository that is pulled from remote repository (pushed from development environment)
connect php needs to be created with connection info for the production db servers
Application development:
html form depicting 3 use cases: add product, delete product, list products
php
add.php
remove.php
reset.php
count.php (?)
mode = add
mode = reset
mode = remove
