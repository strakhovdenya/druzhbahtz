<?php

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
        $this->setGalleryItem1();
        $this->setGalleryItem2();
        $this->setGalleryItem3();
        $this->setGalleryItem4();
        $this->setGalleryItem5();
        $this->setGalleryItem6();
        $this->setGalleryItem7();
        $this->setGalleryItem8();
        $this->setGalleryItem9();
        $this->setGalleryItem10();
        $this->setGalleryItem11();
        $this->setGalleryItem12();
    }

    /**
     *
     */
    private function setGalleryItem1(): void
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

    /**
     *
     */
    private function setGalleryItem2(): void
    {
        $images = [
            'folder2_date08_07_2015_06_38_21_476600.jpg',
            'folder2_date08_07_2015_06_38_38_379415.jpg',
            'folder2_date08_07_2015_06_38_38_647446.jpg',
            'folder2_date08_07_2015_06_38_53_426028.jpg',
            'folder2_date08_07_2015_06_38_53_634291.jpg',
            'folder2_date08_07_2015_06_38_53_682893.jpg',
            'folder2_date08_07_2015_06_39_58_490420.jpg',
            'folder2_date08_07_2015_06_39_58_614853.jpg',
            'folder2_date08_07_2015_06_39_58_718937.jpg',
            'folder2_date08_07_2015_06_40_10_153592.jpg',
            'folder2_date08_07_2015_06_40_10_158441.jpg',
            'folder2_date08_07_2015_06_40_10_188616.jpg',
            'folder2_date08_07_2015_06_40_10_196530.jpg',
            'folder2_date08_07_2015_06_40_10_200590.jpg',
            'folder2_date08_07_2015_06_40_10_240775.jpg',
            'folder2_date08_07_2015_06_40_10_315021.jpg',
            'folder2_date08_07_2015_06_40_10_463770.jpg',
            'folder2_date08_07_2015_06_40_10_492911.jpg',
            'folder2_date08_07_2015_06_40_10_497501.jpg',
            'folder2_date08_07_2015_06_40_10_557247.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 2;
            $item->folder          = 'kubok_kremenchuga';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem3(): void
    {
        $images = [
            'folder3_date26_07_2015_07_00_11_202476.jpg',
            'folder3_date26_07_2015_07_00_11_354197.jpg',
            'folder3_date26_07_2015_07_00_11_530033.jpg',
            'folder3_date26_07_2015_07_00_11_854484.jpg',
            'folder3_date26_07_2015_07_00_11_947544.jpg',
            'folder3_date26_07_2015_07_04_25_120025.jpg',
            'folder3_date26_07_2015_07_04_25_136709.jpg',
            'folder3_date26_07_2015_07_04_25_171806.jpg',
            'folder3_date26_07_2015_07_04_25_182307.jpg',
            'folder3_date26_07_2015_07_04_25_228124.jpg',
            'folder3_date26_07_2015_07_04_25_269900.jpg',
            'folder3_date26_07_2015_07_04_25_327468.jpg',
            'folder3_date26_07_2015_07_04_25_387606.jpg',
            'folder3_date26_07_2015_07_04_25_408692.jpg',
            'folder3_date26_07_2015_07_04_25_470297.jpg',
            'folder3_date26_07_2015_07_04_25_505768.jpg',
            'folder3_date26_07_2015_07_04_25_510082.jpg',
            'folder3_date26_07_2015_07_04_25_597955.jpg',
            'folder3_date26_07_2015_07_04_25_728989.jpg',
            'folder3_date26_07_2015_07_04_25_749814.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 3;
            $item->folder          = 'letniy_lagerj_2014';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem4(): void
    {
        $images = [
            'folder4_date21_10_2015_12_08_42_144779.jpg',
            'folder4_date21_10_2015_12_08_42_159855.jpg',
            'folder4_date21_10_2015_12_08_42_188253.jpg',
            'folder4_date21_10_2015_12_08_42_242133.jpg',
            'folder4_date21_10_2015_12_08_42_244114.jpg',
            'folder4_date21_10_2015_12_08_42_285651.jpg',
            'folder4_date21_10_2015_12_08_42_377463.jpg',
            'folder4_date21_10_2015_12_08_42_517554.jpg',
            'folder4_date21_10_2015_12_08_42_674297.jpg',
            'folder4_date21_10_2015_12_08_42_694879.jpg',
            'folder4_date21_10_2015_12_08_42_723969.jpg',
            'folder4_date21_10_2015_12_08_42_744858.jpg',
            'folder4_date21_10_2015_12_08_42_767606.jpg',
            'folder4_date21_10_2015_12_08_42_849232.jpg',
            'folder4_date21_10_2015_12_08_42_876135.jpg',
            'folder4_date21_10_2015_12_08_42_976990.jpg',
            'folder4_date21_10_2015_12_08_42_991206.jpg',
            'folder4_date21_10_2015_12_09_20_485001.jpg',
            'folder4_date21_10_2015_12_09_20_493734.jpg',
            'folder4_date21_10_2015_12_09_20_534178.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 4;
            $item->folder          = 'turnir_g_odessa';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem5(): void
    {
        $images = [
            'folder6_date05_11_2015_08_08_40_572295.jpg',
            'folder6_date05_11_2015_08_12_32_362914.jpg',
            'folder6_date05_11_2015_08_12_32_681211.jpg',
            'folder6_date05_11_2015_08_12_32_768186.jpg',
            'folder6_date05_11_2015_08_12_32_831923.jpg',
            'folder6_date05_11_2015_08_12_32_915502.jpg',
            'folder6_date05_11_2015_08_12_32_976131.jpg',
            'folder6_date05_11_2015_08_13_01_322433.jpg',
            'folder6_date05_11_2015_08_13_01_718899.jpg',
            'folder6_date05_11_2015_08_16_00_343758.jpg',
            'folder6_date05_11_2015_08_16_00_488112.jpg',
            'folder6_date05_11_2015_08_16_00_571808.jpg',
            'folder6_date05_11_2015_08_16_00_578332.jpg',
            'folder6_date05_11_2015_08_16_00_610671.jpg',
            'folder6_date05_11_2015_08_16_00_627060.jpg',
            'folder6_date05_11_2015_08_16_21_212532.jpg',
            'folder6_date05_11_2015_08_16_21_962066.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 17)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 5;
            $item->folder          = 'futboljniy_match';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem6(): void
    {
        $images = [
            'folder7_date09_12_2015_01_00_44_102658.jpg',
            'folder7_date09_12_2015_01_00_44_176768.jpg',
            'folder7_date09_12_2015_01_00_44_190528.jpg',
            'folder7_date09_12_2015_01_00_44_206314.jpg',
            'folder7_date09_12_2015_01_00_44_235014.jpg',
            'folder7_date09_12_2015_01_00_44_305279.jpg',
            'folder7_date09_12_2015_01_00_44_441879.jpg',
            'folder7_date09_12_2015_01_00_44_492981.jpg',
            'folder7_date09_12_2015_01_00_44_545219.jpg',
            'folder7_date09_12_2015_01_00_44_622849.jpg',
            'folder7_date09_12_2015_01_00_44_633008.jpg',
            'folder7_date09_12_2015_01_00_44_897151.jpg',
            'folder7_date09_12_2015_01_18_18_186711.jpg',
            'folder7_date09_12_2015_01_18_18_495187.jpg',
            'folder7_date09_12_2015_01_18_18_564775.jpg',
            'folder7_date09_12_2015_01_18_18_567851.jpg',
            'folder7_date09_12_2015_01_18_18_572911.jpg',
            'folder7_date09_12_2015_01_18_18_602101.jpg',
            'folder7_date09_12_2015_01_18_18_611187.jpg',
            'folder7_date09_12_2015_01_18_18_726854.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 6;
            $item->folder          = 'turnir_herson';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem7(): void
    {
        $images = [
            'folder8_date18_01_2016_10_01_00_203213.jpg',
            'folder8_date18_01_2016_10_01_00_160223.jpg',
            'folder8_date18_01_2016_10_01_00_202767.jpg',
            'folder8_date18_01_2016_10_01_00_273982.jpg',
            'folder8_date18_01_2016_10_01_00_311195.jpg',
            'folder8_date18_01_2016_10_01_00_330408.jpg',
            'folder8_date18_01_2016_10_01_00_373734.jpg',
            'folder8_date18_01_2016_10_01_00_395935.jpg',
            'folder8_date18_01_2016_10_01_00_561494.jpg',
            'folder8_date18_01_2016_10_01_00_699324.jpg',
            'folder8_date18_01_2016_10_01_00_718411.jpg',
            'folder8_date18_01_2016_10_01_00_736949.jpg',
            'folder8_date18_01_2016_10_01_00_741110.jpg',
            'folder8_date18_01_2016_10_01_00_760360.jpg',
            'folder8_date18_01_2016_10_01_00_765550.jpg',
            'folder8_date18_01_2016_10_01_00_802536.jpg',
            'folder8_date18_01_2016_10_01_00_806440.jpg',
            'folder8_date18_01_2016_10_01_00_830454.jpg',
            'folder8_date18_01_2016_10_01_00_880313.jpg',
            'folder8_date18_01_2016_10_01_00_896409.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 7;
            $item->folder          = 'led_htz';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem8(): void
    {
        $images = [
            'folder9_date17_05_2016_09_06_07_104605.jpg',
            'folder9_date17_05_2016_09_06_07_123283.jpg',
            'folder9_date17_05_2016_09_06_07_204519.jpg',
            'folder9_date17_05_2016_09_06_07_252527.jpg',
            'folder9_date17_05_2016_09_06_07_395667.jpg',
            'folder9_date17_05_2016_09_06_07_581865.jpg',
            'folder9_date17_05_2016_09_06_07_604541.jpg',
            'folder9_date17_05_2016_09_06_07_669979.jpg',
            'folder9_date17_05_2016_09_06_07_697480.jpg',
            'folder9_date17_05_2016_09_06_07_818498.jpg',
            'folder9_date17_05_2016_09_06_07_849175.jpg',
            'folder9_date17_05_2016_09_06_07_893986.jpg',
            'folder9_date17_05_2016_09_06_44_169329.jpg',
            'folder9_date17_05_2016_09_06_44_258177.jpg',
            'folder9_date17_05_2016_09_06_44_387728.jpg',
            'folder9_date17_05_2016_09_06_44_422673.jpg',
            'folder9_date17_05_2016_09_06_44_456684.jpg',
            'folder9_date17_05_2016_09_06_44_498808.jpg',
            'folder9_date17_05_2016_09_06_44_513885.jpg',
            'folder9_date17_05_2016_09_06_44_565030.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 8;
            $item->folder          = 'turnir_super_kontik';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem9(): void
    {
        $images = [
            'folder10_date24_05_2016_11_00_17_112237.jpg',
            'folder10_date24_05_2016_11_00_17_114490.jpg',
            'folder10_date24_05_2016_11_00_17_187516.jpg',
            'folder10_date24_05_2016_11_00_17_300488.jpg',
            'folder10_date24_05_2016_11_00_17_307167.jpg',
            'folder10_date24_05_2016_11_00_17_361205.jpg',
            'folder10_date24_05_2016_11_00_17_417109.jpg',
            'folder10_date24_05_2016_11_00_17_451310.jpg',
            'folder10_date24_05_2016_11_00_17_463235.jpg',
            'folder10_date24_05_2016_11_00_17_472861.jpg',
            'folder10_date24_05_2016_11_00_17_500891.jpg',
            'folder10_date24_05_2016_11_00_17_538447.jpg',
            'folder10_date24_05_2016_11_00_17_595878.jpg',
            'folder10_date24_05_2016_11_00_17_714151.jpg',
            'folder10_date24_05_2016_11_00_17_760210.jpg',
            'folder10_date24_05_2016_11_00_17_841193.jpg',
            'folder10_date24_05_2016_11_00_17_847913.jpg',
            'folder10_date24_05_2016_11_00_17_932452.jpg',
            'folder10_date24_05_2016_11_00_17_987253.jpg',
            'folder10_date24_05_2016_11_00_17_997376.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 9;
            $item->folder          = 'krivbass2007';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem10(): void
    {
        $images = [
            'folder11_date22_02_2019_03_15_37_563462.jpg',
            'folder11_date22_02_2019_03_15_42_541401.jpg',
            'folder11_date22_02_2019_03_15_49_932725.jpg',
            'folder11_date22_02_2019_03_16_02_429820.jpg',
            'folder11_date22_02_2019_03_16_02_489922.jpg',
            'folder11_date22_02_2019_03_16_02_497742.jpg',
            'folder11_date22_02_2019_03_16_02_558118.jpg',
            'folder11_date22_02_2019_03_16_02_677080.jpg',
            'folder11_date22_02_2019_03_16_02_697986.jpg',
            'folder11_date22_02_2019_03_16_02_774072.jpg',
            'folder11_date22_02_2019_03_16_02_793322.jpg',
            'folder11_date22_02_2019_03_16_02_949248.jpg',
            'folder11_date22_02_2019_03_16_02_971172.jpg',
            'folder11_date22_02_2019_03_16_23_398595.jpg',
            'folder11_date22_02_2019_03_16_23_858493.jpg',
            'folder11_date22_02_2019_03_16_33_254403.jpg',
            'folder11_date22_02_2019_03_16_33_411778.jpg',
            'folder11_date22_02_2019_03_16_33_432939.jpg',
            'folder11_date22_02_2019_03_16_33_442306.jpg',
            'folder11_date22_02_2019_03_16_33_511683.jpg',
        ];

        $galleryItems = factory(GalleryItems::class, 20)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 10;
            $item->folder          = 'drujba_donbass';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem11(): void
    {
        $images = [
            'folder12_date20_05_2019_12_32_33_252469.jpeg',
            'folder12_date20_05_2019_12_32_33_496710.jpeg',
            'folder12_date20_05_2019_12_39_07_198181.jpeg',
            'folder12_date20_05_2019_12_39_07_228528.jpeg',
            'folder12_date20_05_2019_12_39_07_474343.jpeg',
            'folder12_date20_05_2019_12_39_07_842572.jpeg',
            'folder12_date20_05_2019_12_39_07_941265.jpeg',
            'folder12_date20_05_2019_12_39_07_954118.jpeg',
        ];

        $galleryItems = factory(GalleryItems::class, 8)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 11;
            $item->folder          = 'sezon_2018_2019';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }

    /**
     *
     */
    private function setGalleryItem12(): void
    {
        $images = [
            'folder13_date03_12_2019_04_28_56_126247.jpeg',
            'folder13_date03_12_2019_04_28_56_225658.jpeg',
            'folder13_date03_12_2019_04_28_56_253615.jpeg',
            'folder13_date03_12_2019_04_28_56_289526.jpeg',
            'folder13_date03_12_2019_04_28_56_322088.jpeg',
            'folder13_date03_12_2019_04_28_56_360133.jpeg',
            'folder13_date03_12_2019_04_28_56_440683.jpeg',
            'folder13_date03_12_2019_04_28_56_478581.jpeg',
            'folder13_date03_12_2019_04_28_56_492539.jpeg',
            'folder13_date03_12_2019_04_28_56_517825.jpeg',
            'folder13_date03_12_2019_04_28_56_568722.jpeg',
            'folder13_date03_12_2019_04_28_56_621366.jpeg',
            'folder13_date03_12_2019_04_28_56_687009.jpeg',
            'folder13_date03_12_2019_04_28_56_724993.jpeg',
            'folder13_date03_12_2019_04_28_56_749968.jpeg',
            'folder13_date03_12_2019_04_28_56_758064.jpeg',
            'folder13_date03_12_2019_04_28_56_816429.jpeg',
        ];

        $galleryItems = factory(GalleryItems::class, 17)->make()->each(static function (GalleryItems $item, $key) use ($images) {
            $item->gallery_head_id = 12;
            $item->folder          = 'phl_2007_mvіnnitsya';
            $item->image           = $images[$key];
        })->toArray();
        GalleryItems::insert($galleryItems);
    }
}
