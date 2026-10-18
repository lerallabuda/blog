A Laravel blog project built with PHP, Laravel, Tailwind CSS, and Vite.

This guide explains how to install the project from scratch on a new Windows computer. The commands can also be adapted for macOS or Linux.

## Requirements

Install these tools before starting:

- **Visual Studio Code:** https://code.visualstudio.com/
- **Git:** https://git-scm.com/downloads
- **PHP 8.3 or newer:** https://windows.php.net/download/ (choose a PHP 8.3+ x64 build suitable for your system and add its folder to `PATH`). Laravel 13 requires PHP 8.3 or newer.
- **Composer:** https://getcomposer.org/download/
- **Bun:** https://bun.sh/docs/installation

After installation, close and reopen your terminal, then check that the commands are available:

```powershell
php -v
 git --version
composer --version
bun --version
```

If any command is not recognised, check that the program's installation folder is added to your Windows `PATH`, then reopen the terminal.

## 1. Clone the repository

Replace the example URL below with the actual HTTPS or SSH URL of this repository, copied from the **Code** button on GitHub:

```powershell
git clone https://github.com/YOUR-USERNAME/mm24blog.git
cd mm24blog
```

Open the project in Visual Studio Code if desired:

```powershell
code .
```

## 2. Enable the required PHP extensions

Laravel needs several PHP extensions. On Windows, find the active PHP configuration file:

```powershell
php --ini
```

Open the **Loaded Configuration File** shown by that command (usually `php.ini`) in a text editor. If only `php.ini-development` is present, copy it to `php.ini` first. Make sure `extension_dir` points to the `ext` folder inside your PHP installation.

Find the following lines and remove the leading semicolon (`;`) to enable them. The exact formatting can vary by PHP build:

```ini
extension=curl
extension=fileinfo
extension=mbstring
extension=openssl
extension=pdo_sqlite
extension=sqlite3
extension=zip
```

If a line is missing, add it under the extensions section. Do not add a second copy if the extension is already enabled. Save `php.ini`, restart the terminal, and verify the extensions:

```powershell
php -m
```

Confirm that `curl`, `fileinfo`, `mbstring`, `openssl`, `PDO`, `pdo_sqlite`, `sqlite3`, and `zip` appear in the output. SQLite extensions are required because the example environment uses SQLite as its database.

## 3. Install PHP dependencies

From the project root, run:

```powershell
composer install
```

This installs the PHP packages listed in `composer.lock` into the `vendor` directory.

## 4. Install JavaScript dependencies

Install Bun dependencies from the project root:

```powershell
bun install
```

This installs the frontend packages used by Vite and Tailwind CSS.

## 5. Create the environment file and application key

Create your local `.env` file from the example file:

```powershell
Copy-Item .env.example .env
```

Generate the application encryption key:

```powershell
php artisan key:generate
```

The `.env` file contains local configuration and should not be committed to Git. Keep `APP_ENV=local` and `APP_DEBUG=true` for local development only.

## 6. Create the SQLite database and run migrations

The project is configured to use SQLite by default. Create an empty database file if it does not already exist:

```powershell
if (-not (Test-Path database/database.sqlite)) { New-Item database/database.sqlite -ItemType File | Out-Null }
```

Run the migrations to create the database tables:

```powershell
php artisan migrate
```

If Laravel asks for confirmation to use the database, confirm that you want to proceed in your local development environment.

## 7. Start the development server

Run the project's development command from the project root:

```powershell
composer run dev
```

Keep this terminal open while developing. When the startup messages show that the server is running, open the local URL printed in the terminal. The usual Laravel address is:

**http://localhost:8000**

If the terminal prints a different local address or port, use the address shown there.

## Troubleshooting

- **`php` is not recognised:** add the PHP installation folder to `PATH`, reopen the terminal, and run `php -v` again.
- **Composer reports a missing PHP extension:** enable the extension in the active `php.ini` file, then reopen the terminal and check `php -m`.
- **SQLite database error:** verify that `pdo_sqlite` and `sqlite3` are enabled and that `database/database.sqlite` exists.
- **Frontend assets are missing:** stop the development command, run `bun install` again, and restart with `composer run dev`.
- **The repository URL does not work:** copy the real repository URL from GitHub and use it in the `git clone` command above.

## Useful links

- Laravel documentation: https://laravel.com/docs
- Tailwind CSS documentation: https://tailwindcss.com/docs
- Bun documentation: https://bun.sh/docs
- Composer documentation: https://getcomposer.org/doc/

    
