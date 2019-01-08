<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=> 'Смартфон Huawei P20, 128Gb, Black',
            'category_id'=> 1,
            'brand_name'=> 'Huawei',
            'price' => 189900,
            'description'=> 'Размер экрана, дюйм 5.8/Разрешение экрана 1080 x 2244/Объем оперативной памяти 4 Гб/Объем 
                встроенной памяти 128 Гб/Модель процессора Kirin 970/Частота процессора 2.36 ГГц + 1.8 ГГц/Разрешение 
                основной камеры 12 Мп + 20 Мп/Разрешение фронтальной камеры 24 Мп/Беспроводные интерфейсы Wi-Fi; Bluetooth; 
                NFC/Емкость аккумулятора 3400 мАч',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Смартфон ZTE Blade A6 Max, 16Gb, Black',
            'category_id'=> 1,
            'brand_name'=> 'ZTE',
            'price' => 35900,
            'description'=> 'Размер экрана, дюйм 5.5/Разрешение экрана 1280 x 720 [16:9]/Тип матрицы TFT/Объем оперативной 
                памяти 2 Гб/Объем встроенной памяти 16 Гб/Модель процессора Snapdragon 210/Частота процессора 1.1 
                ГГц/Разрешение основной камеры 8 Мп/Разрешение фронтальной камеры 5 Мп/Беспроводные интерфейсы Wi-Fi; 
                Bluetooth/Емкость аккумулятора 4000 мАч',
            'available'=> 1,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Смартфон Apple iPhone Xr, 128Gb, Black',
            'category_id'=> 1,
            'brand_name'=> 'Apple',
            'price' => 407900,
            'description'=> 'Размер экрана, дюйм 6.1/Разрешение экрана 1792 х 828 /Тип матрицы IPS; Liquid Retina
                HD/Объем оперативной памяти 3 Гб/Объем встроенной памяти 128 Гб/Модель процессора A12 Bionic/Разрешение 
                основной камеры 12 Мп/Разрешение фронтальной камеры 7 Мп/Беспроводные интерфейсы Wi-Fi; Bluetooth; NFC',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Смартфон Doogee S70 Lite, 64Gb, Black',
            'category_id'=> 1,
            'brand_name'=> 'Doogee',
            'price' => 119900,
            'description'=> 'Размер экрана, дюйм 5.99/Разрешение экрана 2160 x 1080 [18:9]/Тип матрицы IPS/Объем 
                оперативной памяти 4 Гб/Объем встроенной памяти 64 Гб/Модель процессора Helio P23/Частота процессора 
                2.5 ГГц/Разрешение основной камеры 13 Мп + 8 Мп/Разрешение фронтальной камеры 8 Мп/Беспроводные 
                интерфейсы Wi-Fi; Bluetooth; NFC/Емкость аккумулятора 5500 мАч',
            'available'=> 0,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Компьютер HP ProDesk 800 G3 TWR (1NE20EA)',
            'category_id'=> 2,
            'brand_name'=> 'HP',
            'price' => 563900,
            'description'=> 'Тип MicroTower/Процессор Intel Core i7/Тактовая частота, ГГц 3.6/Оперативная память 8 
                Гб/Оптическое устройство DVD+R/RW&CDRW/Жесткий диск 256 Гб (SSD)/Тип видеоадаптера Встроенный; 
                Дискретный/Встроенный видеоадаптер Intel HD Graphics 630/Дискретный видеоадаптер AMD Radeon 
                RX480/Дополнительные аксессуары Проводная мышь; Проводная клавиатура/Операционная система Microsoft 
                Windows 10 Pro',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Компьютер Dell Inspiron 3670 MT (210-ANZR)',
            'category_id'=> 2,
            'brand_name'=> 'Dell',
            'price' => 291300,
            'description'=> 'Тип MiniTower/Процессор Intel Core i5/Тактовая частота, ГГц 2.8/Оперативная память 8 
                Гб/Оптическое устройство DVD+R/RW&CDRW/Жесткий диск 1 Тб/Тип видеоадаптера Встроенный; Дискретный/Встроенный 
                видеоадаптер Intel UHD Graphics 630/Дискретный видеоадаптер NVIDIA GeForce GTX1050/Дополнительные аксессуары 
                Проводная мышь; Проводная клавиатура/Операционная система Linux',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Компьютер HP EliteDesk 800 G3 TWR (1HK28EA)',
            'category_id'=> 2,
            'brand_name'=> 'HP',
            'price' => 372900,
            'description'=> 'Тип MiddleTower/Процессор Intel Core i7/Тактовая частота, ГГц 3.6/Оперативная память 4 
                Гб/Оптическое устройство DVD+R/RW&CDRW/Жесткий диск 500 Гб/Тип видеоадаптера Встроенный/Встроенный 
                видеоадаптер Intel HD Graphics 630/Дополнительные аксессуары Проводная мышь; Проводная клавиатура/Операционная 
                система Microsoft Windows 10 Pro',
            'available'=> 0,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Ноутбук HP ProBook 430 G5 (2UB74EA)',
            'category_id'=> 3,
            'brand_name'=> 'HP',
            'price' => 441700,
            'description'=> 'Процессор Intel Core i7/Частота процессора, ГГц 1.8/Объем оперативной памяти 8 Гб/Жесткий 
                диск Отсутствует/SSD 256 Гб/Интегрированная в процессор графика Intel UHD Graphics 620/Диагональ экрана, 
                дюйм 14/Разрешение экрана 1920 x 1080 Full HD/Операционная система Microsoft Windows 10 Pro (x64)/Вес 1.7 кг',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Ноутбук ASUS N705UD (90NB0GA1-M02810)',
            'category_id'=> 3,
            'brand_name'=> 'ASUS',
            'price' => 347700,
            'description'=> 'Процессор Intel Core i5/Частота процессора, ГГц 1.6/Объем оперативной памяти 8 Гб/Жесткий 
                диск 1 Тб HDD/SSD Отсутствует/Интегрированная в процессор графика Intel UHD Graphics 620/Модель дискретной 
                видеокарты GeForce GTX 1050/Чипсет дискретной видеокарты NVIDIA/Диагональ экрана, дюйм 17.3/Разрешение экрана 
                1920 x 1080 Full HD/Операционная система Linux/Вес 2.1 кг',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Ноутбук DELL Inspiron 5370 (5370-5416)',
            'category_id'=> 3,
            'brand_name'=> 'Dell',
            'price' => 234900,
            'description'=> 'Процессор Intel Core i3/Частота процессора, ГГц 2.2/Объем оперативной памяти 4 Гб/Жесткий 
                диск Отсутствует/SSD 128 Гб/Интегрированная в процессор графика Intel UHD Graphics 620/Диагональ экрана, 
                дюйм 13.3/Разрешение экрана 1920 x 1080 Full HD/Операционная система Microsoft Windows 10 Home (x64)/Вес 1.4 кг',
            'available'=> 1,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Ноутбук DELL Inspiron 5370 (5370-5416)',
            'category_id'=> 3,
            'brand_name'=> 'Dell',
            'price' => 234900,
            'description'=> 'Процессор Intel Core i3/Частота процессора, ГГц 2.2/Объем оперативной памяти 4 Гб/Жесткий 
                диск Отсутствует/SSD 128 Гб/Интегрированная в процессор графика Intel UHD Graphics 620/Диагональ экрана, 
                дюйм 13.3/Разрешение экрана 1920 x 1080 Full HD/Операционная система Microsoft Windows 10 Home (x64)/Вес 1.4 кг',
            'available'=> 1,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Планшет iPad 2018 Apple c дисплеем Retina, 32Gb, Wi-Fi+4G, Space Gray',
            'category_id'=> 4,
            'brand_name'=> 'Apple',
            'price' => 191900,
            'description'=> 'Размер экрана, дюйм 9.7/Разрешение экрана 2048 x 1536/Тип матрицы IPS; Retina/Объем 
                оперативной памяти 2 Гб/Объем встроенной памяти 32 Гб/Процессор Apple/Частота процессора, ГГц 2.3 
                ГГц/Навигация A-GPS; ГЛОНАСС/Мобильный интернет 3G; 4G/Операционная система iOS/Разрешение основной камеры 8 Мп',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Планшет Acer Iconia One 10, 16Gb, Wi-Fi+4G, White',
            'category_id'=> 4,
            'brand_name'=> 'Acer',
            'price' => 64900,
            'description'=> 'Размер экрана, дюйм 10.1/Разрешение экрана 1280 x 800/Тип матрицы IPS/Объем оперативной 
            памяти 2 Гб/Объем встроенной памяти 16 Гб/Процессор MediaTek/Частота процессора, ГГц 1.3/Мобильный интернет 
            3G; 4G/Операционная система Android/Разрешение основной камеры 5 Мп',
            'available'=> 0,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Планшет Lenovo Tab 7 TB-7504X, 16Gb, Wi-Fi+4G, Black',
            'category_id'=> 4,
            'brand_name'=> 'Lenovo',
            'price' => 56400,
            'description'=> 'Размер экрана, дюйм 7/Разрешение экрана 1280 x 720/Тип матрицы IPS/Объем оперативной 
                памяти 1 Гб/Объем встроенной памяти 16 Гб/Процессор MediaTek/Частота процессора, ГГц 1.3/Навигация GPS; 
                A-GPS/Мобильный интернет 3G; 4G/Операционная система Android/Разрешение основной камеры 5 Мп',
            'available'=> 1,
            'recommended'=> 0
        ]);

        DB::table('products')->insert([
            'name'=> 'Телевизор Xiaomi Mi TV 4, 65"',
            'category_id'=> 5,
            'brand_name'=> 'Xiaomi',
            'price' => 64900,
            'description'=> 'Производитель Changhong/Тип телевизора LED телевизор/Диагональ 32" (81.2 см)/Максимальное 
                разрешение 1280 х 720/Индекс улучшения изображения 60/Технология Smart Нет/Технология 3D Нет/Количество HDMI 2',
            'available'=> 1,
            'recommended'=> 1
        ]);

        DB::table('products')->insert([
            'name'=> 'Телевизор Toshiba 39S2750EV',
            'category_id'=> 5,
            'brand_name'=> 'Toshiba',
            'price' => 109900,
            'description'=> 'Производитель Toshiba/Тип телевизора LED телевизор/Диагональ 39" (99 см)/Максимальное 
                разрешение 1366 x 768 (HD)/Технология Smart Нет/Технология 3D Нет/Количество HDMI 3',
            'available'=> 0,
            'recommended'=> 0
        ]);
    }
}
