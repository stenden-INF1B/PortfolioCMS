# The structure of the database
This page shows all entities in the database and explains the entities properties.
<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**

- [The Entities explained](#the-entities-explained)
  - [User](#user)
  - [Student](#student)
  - [Teacher](#teacher)
  - [GuestBookMessage](#guestbookmessage)
  - [Theme](#theme)
  - [Page](#page)
  - [Portfolio](#portfolio)
  - [JobExperience](#jobexperience)
  - [Language](#language)
  - [Training](#training)
  - [UploadedFile](#uploadedfile)
  - [SlbAssignment](#slbassignment)
  - [Image](#image)
  - [Skill](#skill)
  - [Hobbies](#hobbies)
  - [Project](#project)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


![ERD portfolio CMS](https://github.com/stenden-INF1B/PortfolioCMS/blob/master/documentation/ERD/ERD_DigitalPortfolio_24-12-2016.png "ERD Digital portfolio")

## The Entities explained

### User 
_This entity is used for authenticating users_ <br>
**id** _PRIMARY KEY_<br>
password _An secret key for authenticating an user_<br>
accountCreated _An timestamp of when the account was created_<br>
lastLogin _An timestamp of the last time the user was online_<br>
email :closed_lock_with_key: _The email address of the user, also used to login_<br>
lastIpAddress :closed_lock_with_key: _The encrypted last ip address the user used to login_<br>
firstName :closed_lock_with_key: _The encrypted first name of the user_<br>
lastName :closed_lock_with_key: _The encrypted last name of the user_<br>
isAdmin _The boolean that decides if an user is of the type admin._<br>
active _Veld om gebruikter op inactief te zetten_<br>

### Student 
_This entity is an type of user_<br>
**userId** _PRIMARY KEY, FOREIGN KEY -> User( id )_<br>
street :closed_lock_with_key: _The encrypted name the street where the student lives_<br>
address :closed_lock_with_key: _The encrypted street number of the house where the student lives_<br>
zipCode :closed_lock_with_key: _The zip code of where student lives_<br>
location :closed_lock_with_key: _The place the student lives_<br>
dateOfBirth :closed_lock_with_key: _The date of birth of an student_<br>
studentCode _Unique identification field for all users that are of the type student_<br>
phoneNumber :closed_lock_with_key: _The encrypted phone number of the user_<br>

### Teacher 
_This entity is an type of user_<br>
**userId** _PRIMARY KEY, FOREIGN KEY -> User( id )_<br>
isSLBer _Field to differentiate between teachers and SLB'ers_ <br>

### GuestBookMessage 
_This entity represents an message on the guestbook_<br>
**id** _PRIMARY KEY_<br>
sender _The name of the author of the message in the guestbook_<br>
title _An subject or title for the message_<br>
message _The actual message_<br>
sendAt _The date and time the message was posted._
isAccepted _If the message is accepted by the student_ <br>
userId _FOREIGN KEY -> User( id )_<br>

### Theme 
_This entity represents an installed theme that can be used for an portfolio_<br>
**id** _PRIMARY KEY_<br>
name _An friendly name for the theme_<br>
author _The author that created the theme_<br>
description _A short description of the theme_<br>
directoryName _the name of the actual folder_<br>

### Page
_This entity represents a web page in a theme_<br>
**id** _PRIMARY KEY_<br>
name _The name of the page_<br>
fileName _The actual filename of the web page_<br>
description _An short description about what is displayed on the page_<br>
themeId _FOREIGN KEY to the entity Theme( id )_ <br>

### Portfolio 
_This entity represents an portfolio of an user_<br>
**id** _PRIMARY KEY, FOREIGN KEY -> User( id )_<br>
themeID FOREIGN KEY -> Theme( id ) <br>
title _The title that will be displayed in the tab on the browser_<br>
link _The url used in the address field in the browser_<br>
grade _The grade of the portfolio given by the SBL teacher_<br>
userId _The unique identifier to User( id )_<br>

### JobExperience
**id** _PRIMARY KEY_<br>
location _The location of the job experience_<br>
startedAt _The start date of the job_<br>
endedAt _The end date of the job_<br>
description _An description about the tasks performed at the job_<br>
isInternship _If the job experience is an internship_<br>
portfolioId _FOREIGN KEY -> Portfolio( id )_<br>

### Language
_This entity represents the languages the student masters_<br>
**id** _PRIMARY KEY_<br>
language _The name of the language_<br>
level _The level of mastery of the language_<br>
isNative _If it is the native language of the user_<br>
portfolioId _FOREIGN KEY -> Portfolio( id )_<br>

### Training
_This entity represents the training the student attended_<br>
**id** _PRIMARY KEY_<br>
title _The title of the training_<br>
institution _The institution where the student attended the training_<br>
location _The location of the institution_<br>
startedAt _The start date of the training_<br>
finishedAt _The date the student earned an certificate of the training_<br>
description _An description about the training the student attended_<br>
obtainedCertificate _An boolean representing if the student obtained an certificate for the training_<br>
currentTraining _An boolean representing if it is the current training the student is attending_<br>
portfolioId FOREIGN KEY -> Portfolio( id )<br>

### UploadedFile
_This entity represents an uploaded file like an slb assignment or picture_<br>
**id** _PRIMARY KEY_<br>
fileName _The file name of the uploaded assignment_<br>
mimeType _The mime type the uploaded file_<br>
filePath _The path of the file_<br>
portfolioId _FOREIGN KEY -> Portfolio( id )_<br>

### SlbAssignment
_This entity is an type of UploadedFile that represents an slb assignment_<br>
**uploadedFileId** _PRIMARY KEY, FOREIGN KEY -> UploadedFile( id )_<br>
name _The name of the assignment_<br>
feedback _Feedback by the SLB teacher on the assignment_<br>
uploadedFileId _FOREIGN KEY -> UploadedFile( id )_<br>

### Image
_This entity is an type of UploadedFile that represents an slb assignment_<br>
**uploadedFileId** _PRIMARY KEY, FOREIGN KEY -> UploadedFile( id )_<br>
name _An friendly name for the image_<br>
description _The description of the image that can be used in the alt tag in html_ <br>
type _This defines where the image will be used as PROFILE_IMAGE OR GALLERY_IMAGE._<br>
order _This can be used when an image is an gallery picture to set the order of display._<br>

### Skill
_This entity represents an skill the student has_<br>
**id** _PRIMARY KEY, FOREIGN KEY -> Portfolio( id )_<br>
name _The name of the skill like MS Office or PHP_<br>
levelOfExperience _The experience level as an integer so you can havel like 10 or 5 stars_<br>
portfolioId _FORGEIN KEY -> Portfolio( id )_<br>

### Hobbies
_This entity represents an hobby the student has_<br>
**id** _PRIMARY KEY, FOREIGN KEY -> Portfolio( id )_<br>
name _The name of the hobby and an short description_<br>
portfolioId _FORGEIN KEY -> Portfolio( id )_<br>

### Project
_This entity represents an project the user has worked on._<br>
**id** _PRIMERY KEY_<br>
name _The name of the project_<br>
description _An short descripton about the project_<br>
link _An link to the project_<br>
grade _The grade for the project_<br>
thumbnailImageId FOREIGN KEY -> Image( uploadedKileId ) _An thumbnail image of the project_<br>
portfolioId _FOREIGN KEY -> Portfolio( id )_<br>
 