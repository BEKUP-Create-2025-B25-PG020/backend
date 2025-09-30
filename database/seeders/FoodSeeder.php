<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $foods = [
            [
                'region_id' => 1, // Yogyakarta
                'category_id' => 1, // Makanan Pokok
                'name' => 'Gudeg',
                'short_description' => 'Makanan khas Yogyakarta berbahan dasar nangka muda yang dimasak dengan santan',
                'long_description' => 'Gudeg adalah hidangan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan kelapa. Proses memasaknya memakan waktu berjam-jam hingga warna berubah menjadi cokelat dan rasanya menjadi manis legit. Gudeg biasanya disajikan dengan nasi, ayam kampung, telur, tahu, tempe, dan sambal goreng krecek.',
                'food_history' => 'Gudeg diperkirakan sudah ada sejak zaman Kerajaan Mataram Islam pada abad ke-16. Konon, gudeg diciptakan oleh para abdi dalem keraton sebagai makanan yang tahan lama. Nama "gudeg" sendiri berasal dari bahasa Jawa "hangudeg" yang berarti "dimasak dalam waktu lama".',
                'interesting_facts' => 'Gudeg memiliki beberapa varian seperti Gudeg Kering dan Gudeg Basah. Ada juga Gudeg Manggar yang menggunakan bunga kelapa. Di Yogyakarta, penjual gudeg biasanya beroperasi dari tengah malam hingga pagi hari.',
                'main_image_url' => 'https://bisnisukm.com/uploads/2009/11/gudeg-720x515.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 2, // Padang
                'category_id' => 4, // Lauk Pauk
                'name' => 'Rendang',
                'short_description' => 'Masakan daging dengan bumbu rempah khas Minangkabau yang kaya rasa',
                'long_description' => 'Rendang adalah masakan daging yang menggunakan campuran dari berbagai bumbu dan rempah-rempah yang kaya. Proses memasaknya memakan waktu berjam-jam dengan api kecil hingga bumbu meresap dan daging menjadi empuk. Rendang memiliki cita rasa pedas gurih dengan aroma rempah yang kuat.',
                'food_history' => 'Rendang berasal dari tradisi merantau masyarakat Minangkabau. Makanan ini sengaja dibuat agar tahan lama sebagai bekal perjalanan jauh. Rendang pertama kali dimasak pada abad ke-16 dan menjadi hidangan penting dalam upacara adat Minangkabau.',
                'interesting_facts' => 'CNN International menyebut rendang sebagai makanan paling enak di dunia pada tahun 2011 dan 2017. Rendang bisa bertahan hingga berminggu-minggu tanpa kulkas karena rempah-rempahnya yang berlimpah. UNESCO telah memasukkan rendang dalam daftar Warisan Budaya Tak Benda.',
                'main_image_url' => 'https://www.dapurkobe.co.id/wp-content/uploads/rendang-daging.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 3, // Surabaya
                'category_id' => 1, // Makanan Pokok
                'name' => 'Rawon',
                'short_description' => 'Sup daging berkuah hitam khas Jawa Timur dengan kluwak sebagai bumbu utama',
                'long_description' => 'Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang kaya rempah. Warna hitam rawon berasal dari kluwak (keluak). Rawon biasanya disajikan dengan nasi putih, taoge, telur asin, dan kerupuk udang.',
                'food_history' => 'Rawon sudah ada sejak zaman Kerajaan Majapahit. Makanan ini awalnya merupakan hidangan kaum bangsawan dan disajikan dalam acara-acara penting. Seiring waktu, rawon menjadi makanan rakyat yang populer di Jawa Timur.',
                'interesting_facts' => 'Kluwak yang menjadi bumbu utama rawon sebenarnya beracun jika tidak diolah dengan benar. Proses pengolahan kluwak memakan waktu berhari-hari. Rawon sering disebut sebagai "sup tergelap di dunia" karena warna kuahnya yang pekat.',
                'main_image_url' => 'https://images.tokopedia.net/img/JFrBQq/2022/9/12/162440be-e80b-4381-936e-2ee5696e2626.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 4, // Palembang
                'category_id' => 2, // Jajanan
                'name' => 'Pempek',
                'short_description' => 'Makanan khas Palembang dari ikan dan sagu yang disajikan dengan kuah cuka',
                'long_description' => 'Pempek adalah makanan khas Palembang yang terbuat dari ikan dan tepung sagu. Ada berbagai jenis pempek seperti pempek kapal selam, pempek lenjer, dan pempek adaan. Pempek disajikan dengan kuah cuka yang disebut cuko, berwarna cokelat kehitaman dengan rasa asam, manis, dan pedas.',
                'food_history' => 'Pempek diperkirakan muncul pada abad ke-16 saat banyak imigran China datang ke Palembang. Seorang apek (sebutan untuk pria tua keturunan China) menciptakan makanan olahan ikan ini. Dari kata "apek" inilah nama "pempek" berasal.',
                'interesting_facts' => 'Ada lebih dari 20 jenis pempek yang berbeda. Pempek kapal selam dinamai demikian karena bentuknya yang besar dan mengapung di kuah seperti kapal selam. Cuko pempek menggunakan gula aren khas Palembang yang memberikan rasa unik.',
                'main_image_url' => 'https://www.generasimaju.co.id/articles/article/image-thumb__594928__webp/Pempek%20Palembang.webp',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 5, // Jakarta
                'category_id' => 2, // Jajanan
                'name' => 'Kerak Telor',
                'short_description' => 'Makanan khas Betawi dari telur dan beras ketan yang dipanggang',
                'long_description' => 'Kerak telor adalah makanan asli Jakarta (Betawi) yang terbuat dari beras ketan putih, telur ayam atau bebek, ebi (udang kering) yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.',
                'food_history' => 'Kerak telor sudah ada sejak zaman kolonial Belanda dan menjadi makanan favorit di kalangan masyarakat Betawi. Makanan ini sering dijual di acara-acara perayaan seperti perayaan ulang tahun Jakarta dan Lebaran Betawi.',
                'interesting_facts' => 'Kerak telor dimasak dengan cara unik yaitu menggunakan anglo (kompor arang) dan wajan yang dibalik di atas api sehingga bagian atas menjadi garing. Proses pembuatannya yang rumit membuat kerak telor menjadi salah satu jajanan yang cukup mahal.',
                'main_image_url' => '/storage/foods/kerak-telor.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 6, // Bali
                'category_id' => 4, // Lauk Pauk
                'name' => 'Ayam Betutu',
                'short_description' => 'Ayam bumbu khas Bali yang dibungkus dan dipanggang dengan bumbu rempah',
                'long_description' => 'Ayam Betutu adalah makanan khas Bali yang terbuat dari ayam yang dibumbui dengan bumbu khas Bali yang kaya rempah. Ayam kemudian dibungkus dengan daun pisang dan dipanggang atau dikukus dalam waktu yang lama hingga bumbu meresap sempurna.',
                'food_history' => 'Ayam Betutu berasal dari daerah Gilimanuk, Bali Barat. Makanan ini dulunya merupakan hidangan ritual yang disajikan dalam upacara keagamaan Hindu di Bali. Seiring waktu, ayam betutu menjadi makanan populer yang dinikmati masyarakat umum.',
                'interesting_facts' => 'Proses memasak ayam betutu yang tradisional bisa memakan waktu 6-7 jam. Bumbu betutu menggunakan lebih dari 20 jenis rempah. Ada tradisi di Bali untuk membuat ayam betutu dalam jumlah besar saat ada upacara besar.',
                'main_image_url' => 'https://asset.kompas.com/crops/VXXCLYsbMuedXEX7QTY7rexMhuQ=/0x205:911x813/1200x800/data/photo/2022/03/02/621f126f21f5c.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 7, // Makassar
                'category_id' => 1, // Makanan Pokok
                'name' => 'Coto Makassar',
                'short_description' => 'Sup jeroan sapi khas Makassar dengan kuah kacang yang gurih',
                'long_description' => 'Coto Makassar adalah sup tradisional dari Makassar yang terbuat dari jeroan sapi dengan kuah kental berwarna cokelat. Kuahnya dibuat dari campuran kacang tanah yang dihaluskan dengan bumbu rempah. Biasanya disajikan dengan ketupat atau burasa (ketupat khas Makassar).',
                'food_history' => 'Coto Makassar sudah ada sejak abad ke-16 dan merupakan pengaruh dari kuliner Arab yang dibawa pedagang dari Timur Tengah. Makanan ini berkembang menjadi kuliner khas Makassar dengan adaptasi bumbu lokal.',
                'interesting_facts' => 'Coto Makassar menggunakan hampir semua bagian sapi termasuk jeroan. Proses memasaknya memakan waktu berjam-jam agar daging empuk dan bumbu meresap. Di Makassar, coto sering dijadikan menu sarapan.',
                'main_image_url' => 'https://lingkar.news/wp-content/uploads/2023/03/Resep-coto-makassar-kuah-kental-Makanan-Tradisional-Indonesia.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 8, // Semarang
                'category_id' => 2, // Jajanan
                'name' => 'Lumpia Semarang',
                'short_description' => 'Lumpia khas Semarang dengan isian rebung dan telur',
                'long_description' => 'Lumpia Semarang adalah jajanan khas Semarang yang berupa lumpia berisi rebung, telur, ayam atau udang yang dibungkus dengan kulit lumpia tipis. Ada dua jenis lumpia Semarang: lumpia basah (tidak digoreng) dan lumpia goreng (digoreng kering).',
                'food_history' => 'Lumpia Semarang diperkenalkan oleh imigran China di Semarang pada abad ke-19. Makanan ini kemudian beradaptasi dengan lidah Indonesia dengan menambahkan bumbu lokal dan cara penyajian yang khas.',
                'interesting_facts' => 'Gang Lombok di Semarang terkenal sebagai pusat penjualan lumpia legendaris. Lumpia basah yang khas Semarang hanya ada di kota ini. Kulit lumpia yang tipis dan tidak mudah sobek adalah kunci kelezatan lumpia Semarang.',
                'main_image_url' => 'https://asset.kompas.com/crops/UxROXDbwKoZ9Vr57w4sc0qHVfnM=/59x38:939x625/1200x800/data/photo/2022/05/05/62733af9841d8.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ]
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
