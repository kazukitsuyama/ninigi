<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Marble LS T #Orange',
                'description' => '単色で表現したマーブルモチーフを背面にプリントしました。胸元にはブランドイニシャル『NNG』を刺繍しています。',
                'image' => '/images/1.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble LS T #Yellow',
                'description' => '単色で表現したマーブルモチーフを背面にプリントしました。胸元にはブランドイニシャル『NNG』を刺繍しています。',
                'image' => '/images/2.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble LS T #Black',
                'description' => '単色で表現したマーブルモチーフを背面にプリントしました。胸元にはブランドイニシャル『NNG』を刺繍しています。',
                'image' => '/images/3.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble LS T #White',
                'description' => '単色で表現したマーブルモチーフを背面にプリントしました。胸元にはブランドイニシャル『NNG』を刺繍しています。',
                'image' => '/images/4.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble Logo LS T #YellowWhite',
                'description' => 'バックには“Marble”を、フロントには新たに作成したロゴをプリントしたアイテムです。Tシャツの生地はオープンエンド糸を使用し、ざっくりとした質感「アメリカ感」のあるボディになっています。',
                'image' => '/images/5.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble Logo LS T #BlueWhite',
                'description' => 'バックには“Marble”を、フロントには新たに作成したロゴをプリントしたアイテムです。Tシャツの生地はオープンエンド糸を使用し、ざっくりとした質感「アメリカ感」のあるボディになっています。',
                'image' => '/images/6.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble Logo LS T #BlackGreen',
                'description' => 'バックには“Marble”を、フロントには新たに作成したロゴをプリントしたアイテムです。Tシャツの生地はオープンエンド糸を使用し、ざっくりとした質感「アメリカ感」のあるボディになっています。',
                'image' => '/images/7.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'Marble Logo LS T #WhiteGreen',
                'description' => 'バックには“Marble”を、フロントには新たに作成したロゴをプリントしたアイテムです。Tシャツの生地はオープンエンド糸を使用し、ざっくりとした質感「アメリカ感」のあるボディになっています。',
                'image' => '/images/8.jpg',
                'price' =>'6000'
            ],
            [
                'name' => 'SOGEN WIDE T',
                'description' => '2000年代を彷彿とさせるグラフィック。あえて画質を落としてプリントしています。',
                'image' => '/images/9.jpg',
                'price' =>'5500'
            ],
        ]);
    }
}
