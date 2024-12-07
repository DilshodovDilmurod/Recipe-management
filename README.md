<h1 align="center">\ud83c\uddf0\ufe0f Voting System \ud83c\uddf0\ufe0f</h1>

<p align="center">
   A robust voting system built with Laravel.
</p>

---

## \ud83d\udce6 Installation

### \ud83d\udd27 Requirements

Ensure your system meets the [Laravel Server Requirements](https://laravel.com/docs/10.x/deployment#server-requirements).  

---

### \ud83c\udd70\ufe0f Clone the Repository

Run the following command to clone the repository into your desired directory:
```bash
git clone https://github.com/temur0212/Voting_system.git [YourDirectoryName]
```

### \u2699\ufe0f Install PHP Dependencies

Move into the project directory and install all required PHP dependencies:
```bash
cd [YourDirectoryName]
composer install
```

### \ud83d\udee0\ufe0f Configuration

1. **Create `.env` File**  
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

2. **Generate Application Key**  
   Run the following command to generate the app key:
   ```bash
   php artisan key:generate
   ```

3. **Set Database Credentials**  
   Open the `.env` file and update the database configuration as follows:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

---

### \ud83d\udcc2 Database Setup

Run the migration command to create the necessary database tables:
```bash
php artisan migrate
```

If you need to seed the database with sample data:
```bash
php artisan db:seed
```

---

### \ud83d\udce6 Install Node Dependencies

If your project uses frontend assets (like Vue.js, React, or SCSS), install the Node.js dependencies:
```bash
npm install
```

Then, build the assets for development:
```bash
npm run dev
```

For production builds:
```bash
npm run build
```

---

### \ud83d\udcc5 Add Initial Data

Use the database seeder to populate your database with essential data:
```bash
php artisan db:seed
```

---

### \ud83d\udcdd Admin User for Testing

Use the following credentials to log in as an admin:
- **Email:** test@example.com  
- **Password:** test123  

---

### \ud83d\ude80 Run the Application

Start the Laravel development server:
```bash
php artisan serve
```

Open your browser and visit:
```text
http://localhost:8000
```

---

### \ud83d\uddbc\ufe0f Screenshots

(Add screenshots here to showcase the application interface.)

---

### \ud83d\udc96 Contributions

Feel free to contribute to this project. Fork, star, or submit a pull request to help us improve! \ud83d\ude0a
