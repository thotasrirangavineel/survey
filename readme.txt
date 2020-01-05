Application Name : Survey Time

Rest API : Yes

Methods used : POST, GET (Because of limitations of HTML)

Languages used : PHP, MySQL, HTML

Interface language : English

Used tools : XAMPP(Apache and MySQL)

Files : survey.rar

Structure :
		/survey/
			editor/
				index.php
				edit.php
				delete.php
			take/
				index.php
				taking.php
			results/
				index.php
			listSurveys/
				index.php
			db/
				index.php
				survey_db.sql
			index.php
			survey_db.rar
			readme.txt

-----------------------------------------------------------------------------------

Installation guide :

	1. Install XAMPP in windows 10
	2. Goto XAMPP directory and navigate to /htdocs/
	3. Create new folder with name "survey" and extract survey.rar into it
	4. Run XAMPP as administrator
	5. Click on start for Apache and sql services
	6. If any errors open cmd as administarator and enter "net stop was /y"
	   Else XAMPP installation is successful and required services have started successfully.
	7. Open chrome and enter "localhost/"
	8. Click on PHPMYAdmin on top right
	9. Click on new database, enter survey_db into it and click create/go.
	10. click on import in the upper row
	11. Browse the file in /survey_db.sql.rar or /db/survey_db.sql and click go
	12. Upon success we have created the required database to store data. 
	    (For checking how database is changing and storing navigate through database here without closing the tab.)
	13. Now in the chrome open "localhost/survey/" and now you will be able to use the Survey Time
	14. Please delete survey_db.rar and survey_db.sql files from the survey structure for security concerns

Up Comings:
	1. Easy to use
	2. Can create/delete any number of surveys/questions in it
	3. Check results of any survey with the questions and stats
	4. Get names of existing list of surveys and their attempted stat
	5. Take any survey
	6. Status of your actions are appended to URL for your information
	7. No SQL injections and no files accessiblity

Short Comings:
	1. No frontend styles (Needs CSS formatting to make it attractive)
	2. Have to copy and paste every question while taking survey (Can be corrected if latest frontend language is used but is still has it's own functionality)
	3. If multiple options are selected, it chooses one them automatically (Can be corrected if latest frontend language is used but is still has it's own functionality)
	4. No authentication (Time constraint)

Functionalities:
	1. Create a survey
		Create a name for survey and using the name add questions
	2. Delete a survey
		You can delete questions from survey or delete the whole survey using its name
	3. Take survey with it's name
	4. See results and questions of any survey with it's name
	5. See available list of survey names
	6. Can check the status of your action which is appended to your url

------------------------------------------------------------------------------------------------------

Note :
	For further details or assistance contact me by Ph.No/Whatsapp = 7470849010/ Email ID : thotasrirangavineel@gmail.com

