
# Deployment Instructions

1. **Install Backend Dependencies**:
   Navigate to the project root and run:
   ```bash
   composer install
   ```

2. **Install Frontend Dependencies**:
   Navigate to the `client` directory and run:
   ```bash
   npm install
   npm run build
   ```

3. **Run Migrations and Seeders**:
   Run the following commands to set up the database:
   ```bash
   php artisan migrate
   php artisan db:seed --class=ProductSeeder
   ```

4. **Start the Server**:
   Use the Laravel development server:
   ```bash
   php artisan serve
   ```

5. **Access the Application**:
   Open your browser and go to `http://localhost:8000`.

The client-side app will be accessible via the same URL, as it is integrated into the Laravel application.
