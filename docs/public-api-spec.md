# Mantra API Documentation

## Base URL
```
https://mantra.aerossky.com/api/v1
```

## Standard Response Format

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

---

## 🏠 HOME SCREEN ENDPOINTS

### Get Featured Foods
**GET** `/foods/featured`

**Description:** Ambil makanan unggulan untuk ditampilkan di home screen

**Response:**
```json
{
  "success": true,
  "message": "Featured foods retrieved successfully",
  "data": [
    {
      "id": 1,
      "name": "Gudeg Yogya",
      "slug": "gudeg-yogya",
      "short_description": "Makanan khas Yogyakarta yang berbuat dari nangka muda",
      "main_image_url": "https://mantra.aerossky.com/storage/foods/gudeg.jpg",
      "likes_count": 156,
      "region": {
        "id": 1,
        "region_name": "Yogyakarta",
        "province": "DI Yogyakarta"
      },
      "category": {
        "id": 1,
        "name": "Makanan Pokok"
      }
    },
    {
      "id": 2,
      "name": "Rendang Padang",
      "slug": "rendang-padang",
      "short_description": "Masakan daging sapi yang dimasak dalam waktu lama",
      "main_image_url": "https://mantra.aerossky.com/storage/foods/rendang.jpg",
      "likes_count": 234,
      "region": {
        "id": 2,
        "region_name": "Padang",
        "province": "Sumatera Barat"
      },
      "category": {
        "id": 1,
        "name": "Makanan Pokok"
      }
    }
  ],
  "meta": null
}
```

---

## 🔍 SEARCH & EXPLORE ENDPOINTS

### Global Search Foods
**GET** `/foods/search`

**Description:** Search makanan berdasarkan nama, kategori, atau daerah

**Query Parameters:**
- `q` (required): Search query
- `page` (optional): Page number (default: 1)
- `per_page` (optional): Items per page (default: 10)

**Examples:**
- `/foods/search?q=gudeg` - Search "gudeg"
- `/foods/search?q=yogyakarta` - Search makanan dari Yogyakarta
- `/foods/search?q=jajanan` - Search makanan kategori jajanan
- `/foods/search?q=jawa&page=2` - Search di pulau Jawa, page 2

**Response:**
```json
{
  "success": true,
  "message": "Search results retrieved successfully",
  "data": [
    {
      "id": 1,
      "name": "Gudeg Yogya",
      "slug": "gudeg-yogya",
      "short_description": "Makanan khas Yogyakarta yang berbuat dari nangka muda",
      "main_image_url": "https://mantra.aerossky.com/storage/foods/gudeg.jpg",
      "likes_count": 156,
      "region": {
        "id": 1,
        "region_name": "Yogyakarta",
        "province": "DI Yogyakarta"
      },
      "category": {
        "id": 1,
        "name": "Makanan Pokok"
      },
      "search_relevance": "food_name" // atau "category", "region"
    }
  ],
  "meta": {
    "current_page": 1,
    "total_pages": 3,
    "per_page": 10,
    "total_items": 25,
    "has_next": true,
    "search_query": "gudeg"
  }
}
```

### Get All Foods (with Filters)
**GET** `/foods`

**Description:** Get all foods dengan optional filters (tanpa search)

**Query Parameters:**
- `page` (optional): Page number (default: 1)
- `per_page` (optional): Items per page (default: 10)
- `region_id` (optional): Filter by specific region ID
- `category_id` (optional): Filter by specific category ID

**Filter Examples:**
- `/foods` - Get all foods (page 1)
- `/foods?page=2&per_page=5` - Get page 2 with 5 items
- `/foods?region_id=1` - Makanan dari region ID 1 saja
- `/foods?category_id=2` - Makanan dari kategori ID 2 saja
- `/foods?region_id=1&category_id=2` - Kombinasi filter

**Response:**
```json
{
  "success": true,
  "message": "Foods retrieved successfully",
  "data": [
    {
      "id": 1,
      "name": "Gudeg Yogya",
      "slug": "gudeg-yogya",
      "short_description": "Makanan khas Yogyakarta yang berbuat dari nangka muda",
      "main_image_url": "https://mantra.aerossky.com/storage/foods/gudeg.jpg",
      "likes_count": 156,
      "region": {
        "id": 1,
        "region_name": "Yogyakarta",
        "province": "DI Yogyakarta"
      },
      "category": {
        "id": 1,
        "name": "Makanan Pokok"
      }
    }
  ],
  "meta": {
    "current_page": 1,
    "total_pages": 5,
    "per_page": 10,
    "total_items": 50,
    "has_next": true
  }
}
```

### Get All Regions
**GET** `/regions`

**Response:**
```json
{
  "success": true,
  "message": "Regions retrieved successfully",
  "data": [
    {
      "id": 1,
      "region_name": "Yogyakarta",
      "regency_city": "Kota Yogyakarta",
      "province": "DI Yogyakarta",
      "island": "Jawa",
      "region_code": "YK"
    },
    {
      "id": 2,
      "region_name": "Padang",
      "regency_city": "Kota Padang",
      "province": "Sumatera Barat",
      "island": "Sumatera",
      "region_code": "PDG"
    }
  ],
  "meta": null
}
```

### Get All Categories
**GET** `/categories`

**Response:**
```json
{
  "success": true,
  "message": "Categories retrieved successfully",
  "data": [
    {
      "id": 1,
      "name": "Makanan Pokok",
      "description": "Makanan utama yang biasanya dikonsumsi sebagai hidangan pokok",
      "icon_url": "https://mantra.aerossky.com/storage/icons/makanan_pokok.svg",
      "status": "active"
    },
    {
      "id": 2,
      "name": "Jajanan Tradisional",
      "description": "Camilan dan jajanan khas daerah",
      "icon_url": "https://mantra.aerossky.com/storage/icons/jajanan.svg",
      "status": "active"
    }
  ],
  "meta": null
}
```

---

## 📱 DETAIL SCREEN ENDPOINTS

### Get Food Detail
**GET** `/foods/{id}`

**Example:** `/foods/1`

**Response:**
```json
{
  "success": true,
  "message": "Food detail retrieved successfully",
  "data": {
    "id": 1,
    "name": "Gudeg Yogya",
    "slug": "gudeg-yogya",
    "short_description": "Makanan khas Yogyakarta yang berbuat dari nangka muda",
    "long_description": "Gudeg adalah makanan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan. Proses memasak gudeg memakan waktu berjam-jam hingga kuah menjadi kental dan berwarna coklat.",
    "food_history": "Gudeg pertama kali dikenal pada masa Kerajaan Mataram Islam. Konon, gudeg diciptakan oleh para abdi dalem keraton yang ingin membuat makanan yang tahan lama.",
    "interesting_facts": "Gudeg biasanya dimakan dengan nasi, ayam, tahu, tempe, dan sambal krecek. Di Yogyakarta, gudeg dijual dari malam hingga pagi hari.",
    "main_image_url": "https://mantra.aerossky.com/storage/foods/gudeg.jpg",
    "likes_count": 156,
    "view_count": 1250,
    "is_featured": true,
    "region": {
      "id": 1,
      "region_name": "Yogyakarta",
      "regency_city": "Kota Yogyakarta",
      "province": "DI Yogyakarta",
      "island": "Jawa",
      "region_code": "YK"
    },
    "category": {
      "id": 1,
      "name": "Makanan Pokok",
      "description": "Makanan utama yang biasanya dikonsumsi sebagai hidangan pokok",
      "icon_url": "https://mantra.aerossky.com/storage/icons/makanan_pokok.svg",
      "status": "active"
    },
    "galleries": [
      {
        "id": 1,
        "food_id": 1,
        "image_url": "https://mantra.aerossky.com/storage/galleries/gudeg_1.jpg",
        "main_photo": false,
        "timestamp": "2025-01-15T10:30:00Z"
      },
      {
        "id": 2,
        "food_id": 1,
        "image_url": "https://mantra.aerossky.com/storage/galleries/gudeg_2.jpg",
        "main_photo": false,
        "timestamp": "2025-01-15T10:30:00Z"
      }
    ]
  },
  "meta": null
}
```

### Get Food Galleries
**GET** `/foods/{id}/galleries`

**Example:** `/foods/1/galleries`

**Response:**
```json
{
  "success": true,
  "message": "Food galleries retrieved successfully",
  "data": [
    {
      "id": 1,
      "food_id": 1,
      "image_url": "https://mantra.aerossky.com/storage/galleries/gudeg_1.jpg",
      "main_photo": false,
      "timestamp": "2025-01-15T10:30:00Z"
    },
    {
      "id": 2,
      "food_id": 1,
      "image_url": "https://mantra.aerossky.com/storage/galleries/gudeg_2.jpg",
      "main_photo": false,
      "timestamp": "2025-01-15T10:30:00Z"
    }
  ],
  "meta": null
}
```

### Like Food
**POST** `/foods/{id}/like`

**Example:** `POST /foods/1/like`

**Request Body:**
```json
{}
```

**Response:**
```json
{
  "success": true,
  "message": "Food liked successfully",
  "data": {
    "likes_count": 157
  },
  "meta": null
}
```

---

## 🔍 SEARCH IMPLEMENTATION NOTES

### Global Search Logic
Parameter `search` akan mencari di multiple fields:
1. **Nama makanan** (foods.name)
2. **Nama kategori** (categories.name) 
3. **Nama daerah** (regions.region_name)
4. **Nama provinsi** (regions.province)
5. **Nama pulau** (regions.island)

### Search Priority (untuk relevance)
1. **Exact match** di nama makanan (priority tinggi)
2. **Partial match** di nama makanan
3. **Match** di kategori
4. **Match** di region/provinsi/pulau

### Backend Implementation Hint
```sql
-- Example query structure
SELECT foods.*, regions.region_name, categories.name as category_name
FROM foods 
JOIN regions ON foods.region_id = regions.id
JOIN categories ON foods.category_id = categories.id
WHERE 
  foods.name LIKE '%search%' OR
  categories.name LIKE '%search%' OR 
  regions.region_name LIKE '%search%' OR
  regions.province LIKE '%search%' OR
  regions.island LIKE '%search%'
ORDER BY 
  -- Prioritize exact match in food name
  CASE WHEN foods.name LIKE '%search%' THEN 1 ELSE 2 END,
  foods.likes_count DESC
```

### 404 - Not Found
```json
{
  "success": false,
  "message": "Food not found",
  "data": null,
  "meta": null,
  "errors": [
    {
      "field": "id",
      "message": "Food with ID 999 not found"
    }
  ]
}
```

### 422 - Validation Error
```json
{
  "success": false,
  "message": "Validation failed",
  "data": null,
  "meta": null,
  "errors": [
    {
      "field": "q",
      "message": "Search query is required"
    }
  ]
}
```

---

## 📝 NOTES FOR FRONTEND TEAM

### Image Handling
- Semua image URL sudah full path
- Bisa langsung dipakai di `Image.network()`
- Ada fallback untuk image yang error

### Search Handling
- Global search mencari di nama makanan, kategori, dan daerah
- Backend return relevance-based results
- Frontend tampilkan hasil dengan highlight search term

### Performance Notes
- Search dengan 3+ karakter untuk performa optimal
- Combine search + filter untuk hasil lebih spesifik
- Backend implement pagination untuk large results

### Error Handling
- Always check `success` field first
- Display `message` to user
- `errors` array untuk detailed validation errors

### Like System
- Simple increment system - no duplicate prevention
- POST request ke `/foods/{id}/like` tanpa body
- Response berisi updated `likes_count`

---

## 🔄 CHANGELOG

### Version 1.0.0 (Current)
- Initial API specification
- All basic CRUD operations
- Simple like functionality
- Pagination support
