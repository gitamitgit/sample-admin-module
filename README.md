# sample-admin-module
Sample Admin Module, to generate Grid and Form with model and database connection 

## File Creation Flow Top to Bottom -
	
###### - A2bizz/Sample/registration.php
###### - A2bizz/Sample/etc/module.xml
###### - A2bizz/Sample/etc/adminhtml/routes.xml
###### - A2bizz/Sample/etc/adminhtml/menu.xml
###### - A2bizz/Sample/Controller/Adminhtml/Sample/Index.php

## Further now we are going to add a database table and sample Data to it.
###### - A2bizz/Sample/Setup/InstallSchema.php
###### - A2bizz/Sample/Setup/InstallData.php
###### - A2bizz/Sample/Model/Sample.php
###### - A2bizz/Sample/Model/ResourceModel/Sample.php
	
## Now Starting Process of Viewing Data on Grid
###### - A2bizz/Sample/view/adminhtml/layout/a2bizz_sample_sample_index.xml
###### - A2bizz/Sample/view/adminhtml/ui_component/a2bizz_sample_sample_listing.xml

#### Note: After Adding above layout xml files when you try to load the custom module URL for Grid, you will get error - "Not registered handle", this is because in "a2bizz_sample_sample_listing.xml" file you have define "a2bizz_sample_sample_listing_data_source" actually it is looking for datasource from where data to grid will come, this should be define in di.xml file, after this your admin grid page will load in an easy manner

###### - A2bizz/Sample/etc/adminhtml/di.xml


	
	
