
INSERT INTO `social_media`
 (`sm_facebook`, 
 `sm_whatsapp`, 
 `sm_github`, 
 `sm_linkedin`, 
 `sm_email`, 
 `sm_twitter`, 
 `sm_cv`,
  `sm_instagram`) 
  VALUES ('https://m.facebook.com/profile.php?ref=bookmarks/', 
  'https://wa.me/+201555663045?text=from%20my%20website', 
  'https://github.com/ahmed-eid-faried', 
  'https://www.linkedin.com/in/ahmed-eid-a16715228/',
   'https://mail.google.com/mail/?view=cm&fs=1&to=ahmedmady@amadytech.com&su=FromWebsite&bcc=support@amadytech.com', 'https://twitter.com/AHMEDMA65756172/', 'https://drive.google.com/file/d/1q5Vg44gRgH9Er4mCN5lYJRlVpURrBIdY/view?usp=sharing', 
 'https://www.instagram.com/ahmed_eid_ac/');


 CREATE TABLE projects_list ( 
pl_id int(11) NOT NULL AUTO_INCREMENT, 
pl_title varchar(255) NOT NULL ,
pl_body varchar(255) NOT NULL ,
pl_image varchar(255) NOT NULL ,
pl_googleplay varchar(255) NOT NULL ,
pl_appstore varchar(255) NOT NULL ,
pl_github varchar(255) NOT NULL ,
pl_doc varchar(255) NOT NULL ,
   PRIMARY KEY(pl_id)     ); 
   
    CREATE TABLE home_detials ( 
hd_id int(11) NOT NULL AUTO_INCREMENT, 
hd_name varchar(255) NOT NULL ,
hd_desc varchar(255) NOT NULL ,
hd_image varchar(255) NOT NULL ,
hd_cv varchar(255) NOT NULL ,
hd_aboutmename varchar(255) NOT NULL ,
hd_aboutmedesc varchar(255) NOT NULL ,
    PRIMARY KEY(hd_id)); 

    
 CREATE TABLE services ( 
services_id int(11) NOT NULL AUTO_INCREMENT, 
services_title varchar(255) NOT NULL ,
services_body varchar(255) NOT NULL ,
services_assets varchar(255) NOT NULL ,
services_type varchar(255) NOT NULL ,
     PRIMARY KEY(services_id)); 

INSERT INTO `projects_list`
  (`pl_title`, 
 `pl_body`, 
  `pl_image`, 
 `pl_googleplay`, 
 `pl_appstore`, 
 `pl_github`,
  `pl_doc`) 
  VALUES ('https://m.facebook.com/profile.php?ref=bookmarks/', 
  'https://wa.me/+201555663045?text=from%20my%20website', 
  'https://github.com/ahmed-eid-faried', 
  'https://www.linkedin.com/in/ahmed-eid-a16715228/',
   'https://mail.google.com/mail/?view=cm&fs=1&to=ahmedmady@amadytech.com&su=FromWebsite&bcc=support@amadytech.com', 'https://twitter.com/AHMEDMA65756172/', 'https://drive.google.com/file/d/1q5Vg44gRgH9Er4mCN5lYJRlVpURrBIdY/view?usp=sharing', 
 'https://www.instagram.com/ahmed_eid_ac/');