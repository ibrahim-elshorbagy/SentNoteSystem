# Sent Note System

This is a simple note system project built with Laravel, Tailwind, Alpine, Livewire . It allows users to send notes to others via email.

## Features

- **Create Notes**: Users can create new notes.
- **Send Notes via Email**: Notes can be sent to recipients via email.
- **Scheduled Sending**: Notes can be scheduled to be sent at a later date and time.
- **View Notes**: Recipients can view notes by clicking on the provided link in the email.

## Installation

1. Clone the repository:

    ```
    git clone https://github.com/ibrahim-elshorbagy/SentNoteSystem.git
    ```

2. Navigate to the project directory:

    ```
    cd SentNoteSystem
    ```

3. Install PHP dependencies:

    ```
    composer install
    ```

4. Install frontend dependencies :

    ```
    npm install
    ```

5. Set up your environment variables:

    - Copy the `.env.example` file to `.env`:

        ```
        cp .env.example .env
        ```

    - Update the `.env` file with your database and email configuration.



6. Migrate the database:

    ```
    php artisan migrate
    ```

7. Start the development server:

    ```
    php artisan serve
    ```

## Usage

1. Register an account and log in.
2. Create a new note and specify the recipient's email address.
3. The note will be sent to the recipient via email.
4. Recipients can view the note by clicking on the link provided in the email.

