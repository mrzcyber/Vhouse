# VHouse - Premium & Luxury Real Estate Platform

VHouse is a modern, luxury real estate landing page and property management application built with Laravel, Tailwind CSS, Alpine.js, and Filament. It offers an elegant user interface to showcase premium properties alongside a powerful admin panel for property listing management.

---

## 🌟 Key Features

### 💻 Client Side (Landing Page & Detail Page)
*   **Luxury & Premium Design**: Clean dark and warm cream themes with elegant typography (Playfair Display & Poppins).
*   **Animate On Scroll (AOS)**: Smooth entrance animations integrated globally across sections.
*   **Modular Architecture**: Reusable Blade components for clean layouts (`x-navbar`, `x-footer`, `x-layout`).
*   **Smooth Navigation**: Integrated page anchors for Home, Product (Properties), About, and Contact sections with smooth scrolling.
*   **Interactive Property Gallery**: Lightbox Modal built with Alpine.js to view property photos in full-screen view (with escape-key and outside-click dismiss, and floating close button).
*   **Direct Inquiry**: One-click WhatsApp link integrated with dynamic property information.

### 🛡️ Admin Panel (Filament)
*   **Property Management**: Easily create, read, update, and delete premium properties.
*   **Smart Slug Generation**: Automatic unique slug creation from the property name. If identical names exist, it auto-appends a progressive suffix (e.g., `-$index`) to ensure URL uniqueness.
*   **Price Validation**: Hard limit validation rule to prevent inputting prices above Rp 20 Billion.
*   **Public Storage Uploads**: Explicit public disk upload setup to ensure thumbnails and gallery images are served correctly in client views.
*   **Streamlined UX**: Custom redirection after creation to bring the admin straight back to the properties index list instead of the edit view.

---

## 🛠️ Technology Stack

*   **Framework**: Laravel 13.x
*   **Administration**: Filament (v3)
*   **Frontend Styles**: Tailwind CSS
*   **Frontend Logic / Interactions**: Alpine.js
*   **Scroll Animations**: Animate On Scroll (AOS) JS
*   **Database**: MySQL / SQLite

---

## 🚀 Installation & Setup

Follow these steps to set up the project locally:

1.  **Clone the Repository**:
    ```bash
    git clone https://github.com/mrzcyber/Vhouse.git
    cd Vhouse
    ```

2.  **Install PHP Dependencies**:
    ```bash
    composer install
    ```

3.  **Install Node Dependencies**:
    ```bash
    npm install
    ```

4.  **Environment Configuration**:
    Copy the environment template:
    ```bash
    cp .env.example .env
    ```
    Configure your database credentials and set `FILESYSTEM_DISK=public` in `.env`.

5.  **Generate App Key**:
    ```bash
    php artisan key:generate
    ```

6.  **Run Database Migrations & Seeders**:
    ```bash
    php artisan migrate --seed
    ```

7.  **Create Public Storage Symbolic Link**:
    ```bash
    php artisan storage:link
    ```

8.  **Compile Assets**:
    ```bash
    npm run build
    ```

9.  **Run Local Server**:
    ```bash
    php artisan serve
    ```

---

## 📸 Core Modules Structure

```
├── app/
│   ├── Filament/                  # Filament Admin resource definitions
│   │   └── Resources/Properties/  # Properties form schemas and tables
│   ├── Http/Controllers/          # Front-end Controllers (PropertyController)
│   └── Models/                    # Eloquent Models (Property, PropertyImage)
├── resources/
│   ├── css/                       # Application stylesheet (app.css)
│   ├── js/                        # Javascript with AOS initialization (app.js)
│   └── views/                     # Blade views
│       ├── components/            # Reusable components (layout, navbar, footer)
│       └── properties/            # Property detail view (show.blade.php)
```

---

## 📄 License

The VHouse platform is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
