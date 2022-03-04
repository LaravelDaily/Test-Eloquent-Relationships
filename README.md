## Test Your Laravel Eloquent Relationships Skills

This repository is a test for you: perform a set of tasks listed below, and fix the PHPUnit tests, which are currently intentionally failing.

To test if all the functions work correctly, there are PHPUnit tests in `tests/Feature/RelationshipsTest.php` file.

In the very beginning, if you run `php artisan test`, or `vendor/bin/phpunit`, all tests fail.
Your task is to make those tests pass.

## How to Submit Your Solution

If you want to submit your solution, you should make a Pull Request to the `main` branch.
It will automatically run the tests via GitHub Actions and will show you/me if the test pass.

If you don't know how to make a Pull Request, [here's my video with instructions](https://www.youtube.com/watch?v=vEcT6JIFji0).

This task is mostly self-served, so I'm not planning review or merge the Pull Requests. This test is for yourselves to assess your skills, the automated tests will be your answer if you passed the test :)


## Questions / Problems?

If you're struggling with some tasks, or you have suggestions how to improve the task, create a GitHub Issue.

Good luck!

---

## Task 1. HasMany Defined Incorrectly.

In `app/Models/User.php` file, the relationship is missing some parameter. Fix this.

Test method `test_user_create_task()`.

---

## Task 2. BelongsTo with Empty Relationship.

In the route `/tasks`, the table is loading with error, if it can't find the user related to the task. Fix this: the table should load, still listing all the tasks, just showing an empty space where the user name should have been.

There are multiple ways how to fix this, choose whichever way works for you.

Test method `test_task_with_no_user()`.

---

## Task 3. Two-level Relationship.

In the route `/users/{user}`, the table should load the comments that are written on the task that belong to a user. Define the relationship from User to Comment in the User model, so that the Blade file users/show.blade.php would work.

Test method `test_show_users_comments()`.

---

## Task 4. BelongsToMany - Pivot Table Name.

In the route `/roles`, the table should load the roles with the number of users belonging to them. But the relationship in `app/Models/Role.php` model is defined incorrectly, fix that relationship definition.

Test method `test_show_roles_with_users()`.

---

## Task 5. BelongsToMany - Extra Fields in Pivot Table.

In the route `/teams`, the table should show the teams with users, each user with a few additional fields. Fix the relationship definition in `app/Models/Team.php` so that the Blade file `teams/index.blade.php` would show the correct data.

Test method `test_teams_with_users()`.

---

## Task 6. HasMany - Average from Field Value

In the route `/countries`, the table should show the countries with average team size. Fix the Controller to load the relationship number, as it is expected in the Blade.

Test method `test_countries_with_team_size()`.

---

## Task 7. Polymorphic Attachments

In the route `/attachments`, the table should show the filenames and the class names of Task and Comment models. Fix the `app/Models/Attachment.php` relationship to make it work.

Test method `test_attachments_polymorphic()`.

---

## Task 8. Add BelongsToMany Row

In the POST route `/projects`, the project should be saved for a logged-in user, with start_date field from $request. Write that sentence in the Controller.

Test method `test_belongstomany_add()`.

---

## Task 9. Filter BelongsToMany Rows

In the route `/users`, the list should show only the users with at least one project. Fix the Controller to add this filter.

Test method `test_filter_users()`.

---

