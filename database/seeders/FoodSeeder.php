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
        $foods = [
            // Data 1-8 (Data Asli dari Anda)
            [
                'region_id' => 1, // Yogyakarta
                'category_id' => 1, // Makanan Pokok
                'name' => 'Gudeg',
                'short_description' => 'Makanan khas Yogyakarta berbahan dasar nangka muda yang dimasak dengan santan',
                'long_description' => 'Gudeg adalah hidangan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan kelapa. Proses memasaknya memakan waktu berjam-jam hingga warna berubah menjadi cokelat dan rasanya menjadi manis legit. Gudeg biasanya disajikan dengan nasi, ayam kampung, telur, tahu, tempe, dan sambal goreng krecek.',
                'food_history' => 'Gudeg diperkirakan sudah ada sejak zaman Kerajaan Mataram Islam pada abad ke-16. Konon, gudeg diciptakan oleh para abdi dalem keraton sebagai makanan yang tahan lama. Nama "gudeg" sendiri berasal dari bahasa Jawa "hangudeg" yang berarti "dimasak dalam waktu lama".',
                'interesting_facts' => 'Gudeg memiliki beberapa varian seperti Gudeg Kering dan Gudeg Basah. Ada juga Gudeg Manggar yang menggunakan bunga kelapa. Di Yogyakarta, penjual gudeg biasanya beroperasi dari tengah malam hingga pagi hari.',
                'main_image_url' => 'https://asset.kompas.com/crops/O_yO-g_E2s34i2z2l2v1K_7d_3A=/0x0:1000x667/750x500/data/photo/2021/04/18/607c3ea4a56a6.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 2, // Padang (Sumatra Barat)
                'category_id' => 4, // Lauk Pauk
                'name' => 'Rendang',
                'short_description' => 'Masakan daging dengan bumbu rempah khas Minangkabau yang kaya rasa',
                'long_description' => 'Rendang adalah masakan daging yang menggunakan campuran dari berbagai bumbu dan rempah-rempah yang kaya. Proses memasaknya memakan waktu berjam-jam dengan api kecil hingga bumbu meresap dan daging menjadi empuk. Rendang memiliki cita rasa pedas gurih dengan aroma rempah yang kuat.',
                'food_history' => 'Rendang berasal dari tradisi merantau masyarakat Minangkabau. Makanan ini sengaja dibuat agar tahan lama sebagai bekal perjalanan jauh. Rendang pertama kali dimasak pada abad ke-16 dan menjadi hidangan penting dalam upacara adat Minangkabau.',
                'interesting_facts' => 'CNN International menobatkan rendang sebagai makanan paling enak di dunia pada tahun 2011 dan 2017. Filosofi rendang melambangkan musyawarah mufakat masyarakat Minang.',
                'main_image_url' => 'https://www.dapurkobe.co.id/wp-content/uploads/rendang-daging.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 3, // Surabaya (Jawa Timur)
                'category_id' => 1, // Makanan Pokok
                'name' => 'Rawon',
                'short_description' => 'Sup daging berkuah hitam khas Jawa Timur dengan kluwak sebagai bumbu utama',
                'long_description' => 'Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang kaya rempah. Warna hitam rawon berasal dari kluwak (keluak). Rawon biasanya disajikan dengan nasi putih, taoge pendek, telur asin, dan kerupuk udang.',
                'food_history' => 'Rawon merupakan salah satu hidangan tertua dalam sejarah kuliner Indonesia, disebutkan dalam Prasasti Taji (901 M) di Ponorogo, Jawa Timur. Ini menunjukkan hidangan ini sudah ada lebih dari seribu tahun yang lalu.',
                'interesting_facts' => 'Kluwak yang menjadi bumbu utama rawon sebenarnya beracun jika tidak diolah dengan benar. Proses fermentasi dan perebusan menghilangkan racunnya. Rawon sering disebut sebagai "Indonesian Black Soup".',
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
                'interesting_facts' => 'Kunci kelezatan pempek terletak pada kualitas cukonya. Cuko yang baik terbuat dari gula aren berkualitas tinggi, cuka, cabai, dan bawang putih. Ada lebih dari 20 jenis pempek yang berbeda.',
                'main_image_url' => 'https://asset.kompas.com/crops/v9hfF2C6rfPMRJHg-fW-1fBCe_A=/0x0:1000x667/750x500/data/photo/2022/07/20/62d7c585c5de3.jpg',
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
                'food_history' => 'Kerak telor sudah ada sejak zaman kolonial Belanda. Konon, makanan ini tercipta secara tidak sengaja dari hasil coba-coba sekelompok masyarakat Betawi di daerah Menteng. Makanan ini menjadi ikon saat Pekan Raya Jakarta (PRJ) digelar.',
                'interesting_facts' => 'Kerak telor dimasak dengan cara unik yaitu menggunakan anglo (kompor arang) dan wajan yang dibalik menghadap bara api agar matang merata dan menghasilkan kerak yang garing. Ini adalah atraksi utama saat membelinya.',
                'main_image_url' => 'https://asset.kompas.com/crops/Zq_m8i3sA-Y1d-QyW2o2Q_9s5dY=/0x0:1000x667/750x500/data/photo/2022/06/15/62a96937559c5.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 6, // Bali
                'category_id' => 4, // Lauk Pauk
                'name' => 'Ayam Betutu',
                'short_description' => 'Ayam bumbu khas Bali yang dibungkus dan dipanggang dengan bumbu rempah',
                'long_description' => 'Ayam Betutu adalah makanan khas Bali yang terbuat dari ayam atau bebek utuh yang dibumbui dengan "basa gede", bumbu khas Bali yang sangat kaya rempah. Ayam kemudian dibungkus dengan daun pisang dan dipanggang dalam api sekam atau dikukus dalam waktu yang lama hingga sangat empuk.',
                'food_history' => 'Betutu berasal dari kata "tutu" yang berarti "tumbuk". Makanan ini dulunya merupakan hidangan ritual yang disajikan dalam upacara keagamaan Hindu di Bali, terutama di daerah Gianyar dan Gilimanuk. Resepnya diwariskan secara turun temurun.',
                'interesting_facts' => 'Proses memasak ayam betutu yang tradisional bisa memakan waktu hingga 8 jam untuk memastikan dagingnya lepas dari tulang. Bumbu betutu menggunakan lebih dari 15 jenis rempah, termasuk kencur, lengkuas, dan kunyit.',
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
                'long_description' => 'Coto Makassar adalah sup tradisional dari Makassar yang terbuat dari jeroan sapi dengan kuah kental berwarna cokelat. Kuahnya dibuat dari campuran kacang tanah yang dihaluskan dengan aneka rempah (tauco, serai, lengkuas, dll). Biasanya disajikan dengan ketupat atau burasa.',
                'food_history' => 'Coto Makassar diyakini sudah ada sejak zaman Kerajaan Gowa pada abad ke-16. Makanan ini dipengaruhi oleh kuliner Tionghoa dan menjadi hidangan yang disajikan untuk para prajurit kerajaan sebelum berperang.',
                'interesting_facts' => 'Secara tradisional, Coto Makassar menggunakan sekitar 40 jenis rempah yang dikenal dengan sebutan "Rampah Patang Pulo". Penjual Coto yang otentik seringkali menyajikannya dalam mangkuk kecil.',
                'main_image_url' => 'https://lingkar.news/wp-content/uploads/2023/03/Resep-coto-makassar-kuah-kental-Makanan-Tradisional-Indonesia.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 8, // Semarang
                'category_id' => 2, // Jajanan
                'name' => 'Lumpia Semarang',
                'short_description' => 'Lumpia khas Semarang dengan isian rebung, ayam, dan udang',
                'long_description' => 'Lumpia Semarang adalah jajanan khas Semarang yang berupa lumpia berisi rebung (tunas bambu), telur, ayam, dan udang yang dibungkus dengan kulit lumpia tipis. Disajikan dengan saus kental manis, acar, dan daun bawang.',
                'food_history' => 'Lumpia Semarang adalah hasil akulturasi budaya Tionghoa dan Jawa. Makanan ini diciptakan oleh seorang Tionghoa bernama Tjoa Thay Joe yang menikah dengan seorang wanita Jawa pada abad ke-19. Mereka menggabungkan resep lumpia Tiongkok dengan cita rasa lokal.',
                'interesting_facts' => 'Aroma khas rebung pada lumpia Semarang didapat dari proses memasak rebung yang benar untuk menghilangkan bau pesingnya. Ada dua jenis lumpia Semarang: basah (tidak digoreng) dan goreng.',
                'main_image_url' => 'https://asset.kompas.com/crops/UxROXDbwKoZ9Vr57w4sc0qHVfnM=/59x38:939x625/1200x800/data/photo/2022/05/05/62733af9841d8.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            // Data 9-20 (Data Tambahan Hasil Riset)
            [
                'region_id' => 9, // Aceh
                'category_id' => 1, // Makanan Pokok
                'name' => 'Mie Aceh',
                'short_description' => 'Mie kuning tebal dengan bumbu rempah pedas khas Aceh',
                'long_description' => 'Mie Aceh adalah masakan mie pedas khas Aceh. Mie kuning tebal ini disajikan dengan irisan daging sapi, kambing, atau makanan laut seperti udang dan cumi. Disajikan dalam tiga bentuk: goreng kering, tumis (basah), atau rebus (kuah). Kuahnya kaya rempah seperti kapulaga, jintan, dan lada.',
                'food_history' => 'Kuliner Mie Aceh merupakan perpaduan budaya yang beragam, dipengaruhi oleh kuliner Melayu, India, dan Tionghoa. Penggunaan rempah yang kuat adalah ciri khas masakan India, sementara mie sendiri berasal dari Tiongkok.',
                'interesting_facts' => 'Ciri khas Mie Aceh adalah penggunaan rempah yang sangat kuat dan rasa pedas yang tajam. Biasanya disajikan dengan emping melinjo, irisan bawang merah, mentimun, dan jeruk nipis.',
                'main_image_url' => 'https://asset.kompas.com/crops/9T2p-N025go76558flwBL5W3bYw=/0x0:1000x667/750x500/data/photo/2022/12/26/63a9254c46f12.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 10, // Banjarmasin (Kalimantan Selatan)
                'category_id' => 1, // Makanan Pokok
                'name' => 'Soto Banjar',
                'short_description' => 'Soto ayam bening khas Banjar dengan aroma harum dari kayu manis dan cengkeh',
                'long_description' => 'Soto Banjar adalah soto khas suku Banjar, Kalimantan Selatan. Soto ini memiliki kuah bening yang kaya akan aroma rempah karena menggunakan bumbu seperti kayu manis, cengkeh, dan pala. Isiannya terdiri dari suwiran daging ayam, soun, telur rebus, dan perkedel singkong.',
                'food_history' => 'Soto ini diyakini mendapat pengaruh dari para pedagang rempah yang singgah di pelabuhan Banjarmasin pada masa lampau. Penggunaan rempah seperti cengkeh dan pala yang tidak umum untuk soto di Jawa menjadi ciri khasnya.',
                'interesting_facts' => 'Soto Banjar unik karena bisa disantap dengan nasi atau lontong. Penggunaan perkedel dari singkong, bukan kentang, juga menjadi pembeda utamanya. Ada versi kuah yang dicampur susu untuk rasa lebih creamy.',
                'main_image_url' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/07/11/IMG_20230711_080036-3982823611.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 11, // Papua & Maluku
                'category_id' => 1, // Makanan Pokok
                'name' => 'Papeda',
                'short_description' => 'Bubur sagu kental khas Indonesia Timur yang disantap dengan kuah kuning',
                'long_description' => 'Papeda adalah makanan pokok berupa bubur sagu yang memiliki tekstur lengket dan bening seperti lem. Terbuat dari tepung sagu yang disiram air panas mendidih. Rasanya tawar, sehingga berfungsi sebagai pengganti nasi dan disantap dengan lauk kaya bumbu, terutama ikan kuah kuning.',
                'food_history' => 'Papeda telah menjadi makanan pokok masyarakat adat di Maluku dan Papua selama berabad-abad, jauh sebelum nasi populer. Papeda tidak hanya makanan, tetapi juga bagian penting dari ritual dan upacara adat setempat.',
                'interesting_facts' => 'Cara makan papeda sangat unik, yaitu dengan menggulungnya menggunakan dua garpu atau sumpit khusus (gata-gata) dan langsung ditelan tanpa dikunyah. Papeda dipercaya kaya serat dan rendah kolesterol.',
                'main_image_url' => 'https://asset.kompas.com/crops/a7-eXqX-sI620d4fOkZ4s_Tj0v0=/0x0:1000x667/750x500/data/photo/2021/04/05/606ad048d86f9.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 5, // Jakarta
                'category_id' => 1, // Makanan Pokok
                'name' => 'Gado-gado',
                'short_description' => 'Salad sayuran rebus khas Indonesia yang disiram dengan saus kacang',
                'long_description' => 'Gado-gado adalah salah satu makanan khas Jakarta yang berisi sayur-sayuran yang direbus seperti kentang, kangkung, tauge, dan labu siam, dicampur dengan lontong, tahu, tempe, dan telur. Semua bahan ini kemudian disiram dengan saus kacang yang gurih, manis, dan sedikit pedas.',
                'food_history' => 'Asal-usul gado-gado memiliki banyak versi, salah satunya adalah hidangan ini muncul pada abad ke-17 sebagai adaptasi dari salad Eropa (terutama Belanda) yang disesuaikan dengan bahan dan selera lokal, yaitu menggunakan saus kacang.',
                'interesting_facts' => 'Nama "gado-gado" secara harfiah berarti "campur-campur". Meskipun mirip dengan pecel atau lotek, saus kacang gado-gado umumnya menggunakan santan agar lebih gurih dan teksturnya lebih halus.',
                'main_image_url' => 'https://cdn.shopify.com/s/files/1/0278/1934/8395/products/GadoGadoSquare_500x500.jpg?v=1612952851',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 12, // Madura (Jawa Timur)
                'category_id' => 4, // Lauk Pauk
                'name' => 'Sate Madura',
                'short_description' => 'Sate ayam dengan bumbu kacang khas Madura yang legit dan meresap',
                'long_description' => 'Sate Madura adalah sate ayam yang sangat populer di Indonesia. Ciri khasnya adalah potongan daging ayam yang lebih kecil, dibakar hingga matang sempurna, dan disajikan dengan bumbu kacang yang kental, manis, dan legit. Disajikan dengan lontong, irisan bawang merah mentah, dan sambal.',
                'food_history' => 'Sate ini berasal dari para perantau suku Madura yang menyebar ke seluruh Nusantara. Mereka memperkenalkan cara memanggang daging dengan bumbu kacang yang khas. Penjualnya identik dengan gerobak berbentuk perahu.',
                'interesting_facts' => 'Kunci kelezatan Sate Madura terletak pada bumbu kacangnya yang dihaluskan bersama petis udang dan kemiri, memberikan rasa yang lebih kompleks. Penjual sate Madura yang asli biasanya mengipasi sate dengan kipas anyaman bambu.',
                'main_image_url' => 'https://assets.unileversolutions.com/v1/1183353.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 13, // Solo (Jawa Tengah)
                'category_id' => 1, // Makanan Pokok
                'name' => 'Nasi Liwet Solo',
                'short_description' => 'Nasi gurih yang dimasak dengan santan, disajikan dengan sayur labu siam dan suwiran ayam',
                'long_description' => 'Nasi Liwet adalah hidangan nasi khas Solo yang dimasak dengan santan kelapa, daun salam, dan serai, sehingga menghasilkan rasa nasi yang gurih. Disajikan di atas pincuk daun pisang dengan lauk berupa sayur labu siam pedas (sambal goreng jipang), suwiran ayam opor, telur pindang, dan areh (santan kental).',
                'food_history' => 'Nasi Liwet adalah makanan tradisional yang sudah ada sejak ratusan tahun lalu di masyarakat agraris Jawa. Awalnya, ini adalah hidangan untuk upacara atau ritual tertentu, namun kini menjadi makanan sehari-hari dan ikon kuliner Kota Solo.',
                'interesting_facts' => 'Penjual Nasi Liwet yang khas di Solo adalah ibu-ibu yang menggunakan bakul gendong dan berkeliling atau mangkal di pinggir jalan pada malam hari. Areh, santan kental yang disiramkan di atas nasi, menjadi kunci utama kenikmatannya.',
                'main_image_url' => 'https://asset.kompas.com/crops/vj4A52y2-0Iwyk-vG4aE9NVsV1k=/0x0:1000x667/750x500/data/photo/2021/04/09/606fe8c2144c8.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 14, // Lombok (NTB)
                'category_id' => 4, // Lauk Pauk
                'name' => 'Ayam Taliwang',
                'short_description' => 'Ayam bakar khas Lombok dengan bumbu pedas yang sangat kuat',
                'long_description' => 'Ayam Taliwang adalah hidangan ayam bakar yang dibuat dari ayam kampung muda. Ayam dibakar setengah matang, lalu dicelupkan ke dalam minyak panas dan diolesi bumbu khas yang terbuat dari cabai merah kering, bawang, terasi, dan kencur, lalu dibakar lagi hingga matang. Rasanya sangat pedas dan gurih.',
                'food_history' => 'Nama "Taliwang" berasal dari nama sebuah kerajaan di Sumbawa. Resep ini dibawa ke Lombok oleh masyarakat dari Taliwang dan menjadi sangat populer. Makanan ini melambangkan perdamaian antara dua kerajaan di masa lalu.',
                'interesting_facts' => 'Ayam Taliwang paling nikmat disantap bersama Plecing Kangkung, yaitu kangkung rebus yang disiram sambal tomat dan taburan kacang. Tingkat kepedasan sambalnya bisa membuat siapa pun berkeringat.',
                'main_image_url' => 'https://awsimages.detik.net.id/community/media/visual/2022/07/20/resep-ayam-bakar-taliwang_43.jpeg?w=1200',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => true
            ],
            [
                'region_id' => 15, // Bandung (Jawa Barat)
                'category_id' => 3, // Kue
                'name' => 'Serabi',
                'short_description' => 'Pancake tradisional dari tepung beras yang dimasak di atas tungku arang',
                'long_description' => 'Serabi atau surabi adalah jajanan pasar khas Indonesia. Serabi Bandung terbuat dari adonan tepung beras dan santan. Secara tradisional dimasak menggunakan tungku tanah liat dan arang. Ada dua varian utama: serabi manis dengan kuah kinca (gula merah cair) dan serabi asin dengan taburan oncom pedas.',
                'food_history' => 'Serabi adalah salah satu kue tertua di Indonesia, diperkirakan mendapat pengaruh dari kue apem India. Nama "serabi" berasal dari bahasa Sunda "sura" yang berarti besar.',
                'interesting_facts' => 'Memasak serabi di atas tungku tanah liat memberikan aroma khas yang tidak bisa didapatkan jika dimasak dengan wajan teflon. Saat ini, topping serabi sudah sangat modern, seperti keju, cokelat, bahkan sosis.',
                'main_image_url' => 'https://asset.kompas.com/crops/M0J11ctX2n7_2v1_Zt8EwYFZMkE=/2x0:898x597/750x500/data/photo/2021/03/16/605007355c3d2.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 11, // Medan (Sumatera Utara)
                'category_id' => 3, // Kue
                'name' => 'Bika Ambon',
                'short_description' => 'Kue basah bersarang khas Medan dengan rasa legit dan aroma pandan',
                'long_description' => 'Bika Ambon adalah kue basah berwarna kuning dengan tekstur kenyal dan berserat seperti sarang lebah. Terbuat dari adonan tepung tapioka, telur, gula, santan, dan air nira. Fermentasi air nira inilah yang menciptakan serat-serat cantik pada kue.',
                'food_history' => 'Meskipun namanya "Ambon", kue ini adalah ikon kuliner dari Medan. Salah satu teori populer menyebutkan nama "Ambon" berasal dari nama sebuah jalan di Medan (Jalan Ambon-Sei Kera) tempat kue ini pertama kali dijual dan populer.',
                'interesting_facts' => 'Struktur sarang pada Bika Ambon terbentuk karena adonan difermentasi sebelum dipanggang. Kualitas sarangnya menjadi penentu keberhasilan pembuatan kue ini. Selain rasa original, kini ada varian rasa pandan, durian, dan keju.',
                'main_image_url' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/07/28043651/Praktis-dan-Mudah-Dibuat-Ini-Resep-Kue-Bika-Ambon-yang-Lezat.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 7, // Makassar
                'category_id' => 1, // Makanan Pokok
                'name' => 'Sop Konro',
                'short_description' => 'Sup iga sapi khas Makassar dengan kuah coklat kehitaman yang kaya rempah',
                'long_description' => 'Sop Konro adalah masakan sup iga sapi khas suku Bugis dan Makassar. Iga sapi direbus hingga empuk lalu dimasak dengan bumbu rempah yang kuat. Ciri khasnya adalah kuah berwarna coklat kehitaman yang berasal dari kluwek, sama seperti rawon, namun dengan tambahan ketumbar yang lebih dominan.',
                'food_history' => 'Sop Konro adalah hidangan tradisional yang sudah ada sejak lama di kalangan masyarakat Bugis-Makassar. Awalnya disajikan saat acara-acara adat seperti pernikahan atau upacara keagamaan.',
                'interesting_facts' => 'Selain disajikan sebagai sup (Sop Konro), ada juga varian "Konro Bakar" di mana iga sapi yang sudah empuk dibakar dan disajikan terpisah dengan kuah sopnya. Sop Konro dipercaya dapat meningkatkan stamina.',
                'main_image_url' => 'https://awsimages.detik.net.id/community/media/visual/2021/04/21/sop-konro_43.jpeg?w=1200',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
            [
                'region_id' => 16, // Manado (Sulawesi Utara)
                'category_id' => 1, // Makanan Pokok
                'name' => 'Tinutuan (Bubur Manado)',
                'short_description' => 'Bubur khas Manado yang berisi campuran aneka sayuran hijau',
                'long_description' => 'Tinutuan atau Bubur Manado adalah bubur nasi yang dimasak dengan berbagai macam sayuran seperti labu kuning, kangkung, bayam, daun gedi, dan jagung. Bubur ini tidak mengandung daging sama sekali. Biasanya disajikan dengan ikan asin, sambal roa, dan perkedel nike.',
                'food_history' => 'Tinutuan konon lahir pada masa krisis ekonomi di zaman kolonial Belanda. Masyarakat Manado saat itu memanfaatkan hasil kebun yang ada untuk menciptakan makanan yang sehat dan mengenyangkan tanpa harus menggunakan bahan mahal seperti daging.',
                'interesting_facts' => 'Daun gedi yang menjadi salah satu sayuran kunci dalam Tinutuan berfungsi sebagai pengental alami bubur. Makanan ini sangat populer sebagai menu sarapan yang sehat di Manado.',
                'main_image_url' => 'https://www.masakapahariini.com/wp-content/uploads/2018/04/tinutuan-bubur-manado-780x440.jpg',
                'likes_count' => 0,
                'view_count' => 0,
                'is_featured' => false
            ],
             [
                'region_id' => 5, // Jakarta
                'category_id' => 2, // Jajanan
                'name' => 'Asinan Betawi',
                'short_description' => 'Asinan sayuran segar khas Betawi dengan saus kacang, cuka, dan cabai',
                'long_description' => 'Asinan Betawi terdiri dari berbagai sayuran mentah yang diacar seperti tauge, kol, sawi asin, selada, dan tahu putih. Semua bahan ini kemudian disiram dengan saus kacang yang dicampur cuka dan cabai, lalu ditaburi kacang tanah goreng dan kerupuk mie kuning.',
                'food_history' => 'Asinan merupakan hasil pengaruh kuliner Tionghoa di Indonesia, khususnya tradisi mengawetkan sayuran dengan garam dan cuka. Masyarakat Betawi kemudian mengadaptasinya dengan menambahkan bumbu kacang yang khas.',
                'interesting_facts' => 'Perbedaan utama antara Asinan Betawi dan Asinan Bogor adalah pada kuahnya. Asinan Betawi menggunakan bumbu kacang yang kental, sementara Asinan Bogor menggunakan kuah cuka cabai yang bening dan encer.',
                'main_image_url' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/08/02043003/Ini-Resep-Asinan-Betawi-yang-Segar-dan-Mudah-Dibuat-di-Rumah.jpg.webp',
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
