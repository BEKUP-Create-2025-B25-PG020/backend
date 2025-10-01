# 🍜 Mantra API

**Mantra** adalah API untuk eksplorasi makanan tradisional Indonesia. API ini menyediakan data lengkap tentang makanan khas dari berbagai daerah di Indonesia beserta sejarah, fakta menarik, dan galeri foto.

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 🚀 Features

- **Search & Filter** - Pencarian makanan berdasarkan nama, kategori, atau daerah
- **Featured Foods** - Makanan unggulan untuk home screen
- **Detail Information** - Info lengkap tentang sejarah dan fakta makanan
- **Gallery** - Multiple foto untuk setiap makanan
- **Like System** - Sistem like untuk makanan favorit
- **Regional Data** - Data lengkap daerah asal makanan
- **Category Management** - Kategorisasi makanan tradisional
- **Pagination** - Support pagination untuk performa optimal

## 📚 Documentation

Dokumentasi lengkap API tersedia di file [API_DOCUMENTATION.md](API_DOCUMENTATION.md)

### Base URL
```
https://mantra.aerossky.com/api/v1
```

### Quick Examples

**Get Featured Foods:**
```bash
GET /api/v1/foods/featured
```

**Search Foods:**
```bash
GET /api/v1/foods/search?q=gudeg
```

**Get Food Detail:**
```bash
GET /api/v1/foods/1
```

**Like a Food:**
```bash
POST /api/v1/foods/1/like
```

## 🛠️ Tech Stack

- **Framework:** Laravel 11.x
- **Database:** MySQL
- **PHP Version:** 8.2+
- **Authentication:** Sanctum (optional untuk future features)

## 📦 Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- MySQL 8.0 or higher
- Node.js & NPM (untuk asset compilation)

### Setup

1. **Clone repository**
```bash
git clone https://github.com/yourusername/mantra-api.git
cd mantra-api
```

2. **Install dependencies**
```bash
composer install
```

3. **Environment configuration**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure database di `.env`**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mantra_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run migrations & seeders**
```bash
php artisan migrate --seed
```

6. **Storage link**
```bash
php artisan storage:link
```

7. **Start development server**
```bash
php artisan serve
```

API akan berjalan di `http://localhost:8000`

## 🗄️ Database Structure

### Main Tables
- `foods` - Data makanan tradisional
- `regions` - Data daerah/wilayah
- `categories` - Kategori makanan
- `galleries` - Galeri foto makanan

Lihat file migrations untuk struktur detail.

## 🧪 Testing

Run tests dengan command:
```bash
php artisan test
```

## 📱 API Response Format

### Success Response
```json
{
  "success": true,
  "message": "Data retrieved successfully",
  "data": {...},
  "meta": {...}
}
```

### Error Response
```json
{
  "success": false,
  "message": "Error message",
  "data": null,
  "meta": null,
  "errors": [...]
}
```

## 🔐 Security

- Input validation pada semua endpoints
- SQL injection protection via Eloquent ORM
- XSS protection via Laravel sanitization
- CORS configuration untuk frontend access

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Risky Goh** - *Initial work* - [@Aerossky](https://github.com/Aerossky)

## 🙏 Acknowledgments

- Data makanan tradisional dari berbagai sumber terpercaya
- Laravel community untuk framework yang amazing
- Semua kontributor yang telah membantu project ini

## 📧 Contact

Project Link: [https://github.com/yourusername/mantra-api](https://github.com/yourusername/mantra-api)

API Documentation: [https://mantra.aerossky.com/docs](https://mantra.aerossky.com/docs)

---

**Made with ❤️ for Indonesian Traditional Food**
