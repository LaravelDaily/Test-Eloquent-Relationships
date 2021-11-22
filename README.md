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

In the route `/tasks`, the table is loading with error, if it can't find the user related to the task. Fix this: the table should load and just show empty space in case of no user.

There are multiple ways how to fix this, choose whichever way works for you.

Test method `test_task_with_no_user()`.

---

