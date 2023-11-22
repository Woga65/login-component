# login-component

A simple login component with user verification via email based on PHP, MySql and JavaScript.
For easy integration I have written this login system as a native Web Component.

# events + state

The window event `loginchange` is triggered whenever a user loggs in or out or the verification state of a logged-in user changes.
The current state can be obtained via `window.wsLogin.state`.
The current language setting which represents either the ACCEPT-LANGUAGE http-header or the user's choice is available as an array `window.wsLogin.languages` in the format `['en-us', 'en', 'de']`.

## Installation

- Have a look at the code to get/modify the data fields to your needs
- Create a database with phpmyadmin or the tools provided by your hosting company
- Edit the file classes/dbh.class.php (database credentials)
- Edit lines 8-11 in the file classes/email-auth.class.php (verification email)
- Edit lines 29, 34, 40 in the file verify.php (path to your index.html)
- If you want a guest account, sign up with `Username: Guest / Password: 123456` otherwise add `.guest-button { display: none; }` to the file `component/ws-login.css`
- Make any changes you like. For example you might want to take measures that the user chooses a strong password
- In your CSS set the vars `--primary-font`, `--secondary-font`, `--font-size`, `--primary-bgr`, `--secondary-bgr`, `--primary-color`, `--secondary-color`, `--primary-accent`, `--secondary-accent` according to your needs. For the colors use the `#rrggbb` notation.
- Inside the `<head>` of your HTML place `<script type="module" src="./component/ws-login.js"></script>`
- Inside the `<body>` of your HTML place `<ws-login></ws-login>`
- for reference look into the files `index.html` and `css/global-styles.css` provided with this project
- Upload the project files and folders to your PHP enabled web server 

