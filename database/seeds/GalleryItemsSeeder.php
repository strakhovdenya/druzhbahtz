<?php

use App\Models\Employees;
use App\Models\GalleryItems;
use Illuminate\Database\Seeder;

class GalleryItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images1 = [
            'folder1_date04_08_2015_07_07_37_560575.jpg',
            'folder1_date04_08_2015_07_08_08_170733.jpg',
            'folder1_date04_08_2015_07_08_12_902590.jpg',
            'folder1_date04_08_2015_07_08_47_248744.jpg',
            'folder1_date04_08_2015_07_09_03_208547.jpg',
            'folder1_date04_08_2015_07_09_03_682135.jpg',
            'folder1_date04_08_2015_07_09_25_224295.jpg',
            'folder1_date04_08_2015_07_09_25_250979.jpg',
            'folder1_date04_08_2015_07_09_25_310368.jpg',
            'folder1_date04_08_2015_07_09_25_451238.jpg',
            'folder1_date04_08_2015_07_09_25_504299.jpg',
            'folder1_date04_08_2015_07_09_25_629877.jpg',
            'folder1_date04_08_2015_07_09_25_633938.jpg',
            'folder1_date04_08_2015_07_09_25_668180.jpg',
            'folder1_date04_08_2015_07_09_25_668578.jpg',
            'folder1_date04_08_2015_07_09_25_801617.jpg',
            'folder1_date04_08_2015_07_09_25_830210.jpg',
            'folder1_date04_08_2015_07_09_25_909278.jpg',
            'folder1_date04_08_2015_07_09_51_164433.jpg',
            'folder1_date04_08_2015_07_09_51_206305.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images1) {
            $item->gallery_head_id = 1;
            $item->folder          = 'nasha_komanda';
            $item->image           = $images1[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }
}
