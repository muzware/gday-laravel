# gday-laravel
A personal blog developed using Laravel 5

## How to use ...
- This site is based on a fresh installation of an empty laravel 5 site.
- I have been using the artisan server for development, hopefully it will serve you for evaluating my work.
- It is using the default database schema name 'homestead', so be careful!
- There are database seeds for each of the models to help testing
- the admin account is set to user.id 1 
- user: muzware@gmail
- pass: admin
- I hope it works for you

## Regarding my approach ...

I prefer to develop from the backend first, I hope that you can see some structure to the code (excuse the deadwood).
Consequently, the UI is clunky, and needs refinement for a much better user experience, however it has been sufficient for testing purposes.

I chose to use the name 'Entry' instead of 'Blog Post' or 'Post', to avoid confusion with other 'posts'. This family of classes are representative of where I am going with the project.
- The Entry controller implements a RESTful Laravel Controller
- The Entry tests loosely exercises the above controller, and will modify the database
- The Entry DELETE test will fail on the second run, the id is currently hardcoded

