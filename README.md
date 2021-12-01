# CV Data Manager
Application for CV data managing. <br>

Functionality:
- Create new CV.<br>
- See list of stored CV's each with three buttons - Print, Edit, Delete <br>
- Print button opens CV print preview layout page.<br>
- Edit button - opens view where you can edit personal data and address. 
Also, here you can add(and delete) multiple fields - education, work experience, skills to CV.  <br>

## How To Run Project
Clone project or download as Zip archive. <br>
Open project with IDE and from terminal run `composer install` and after that run `npm install`.<br>
Create your own local database and connect it by editing `.env.example` file. <br> 
When it's done - rename it to `.env`.<br>
Then from terminal run following commands: <br>
1.`php artisan key:generate`<br>
2.`php artisan migrate`<br>
3.`php artisan serve`

Finally, in browser open http://127.0.0.1:8000/ .<br>
There can be other port if :8000 port is already in use. 
