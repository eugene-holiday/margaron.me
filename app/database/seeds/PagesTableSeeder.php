<?php

use Margaron\Pages\Page;
use Faker\Factory as Faker;

class PagesTableSeeder extends Seeder {

	public function run()
	{

        DB::table('pages')->delete();

        Page::create([
            'slug' => 'about',
            'title' => 'Страничка обо мне',
            'content' => 'Ut ut quod perferendis doloremque. Corporis et voluptate quos perferendis qui alias asperiores. Ipsam illo ipsum quos nam laudantium animi. Harum praesentium labore nesciunt id. Soluta sunt temporibus tempora nobis vel. Fugiat tenetur sapiente voluptatum animi quibusdam. Iure quidem consequatur voluptate quo quibusdam aut. Neque ea ratione asperiores aliquam quidem libero totam. Dicta cupiditate id tempora est molestias placeat iusto.'
        ]);

        Page::create([
            'slug' => 'contact',
            'title' => 'Страничка с контактами',
            'content' => 'Gummi bears gummies I love sugar plum apple pie. Marzipan donut liquorice sesame snaps. I love tiramisu oat cake fruitcake. Marshmallow liquorice bear claw pastry. Jelly beans candy sweet dragée apple pie. Cotton candy I love marshmallow sugar plum jelly. Tiramisu chocolate cake wafer. Fruitcake I love I love. Bonbon macaroon biscuit sugar plum toffee danish jujubes. Powder tiramisu I love candy marzipan applicake liquorice tootsie roll tootsie roll. Tart gummies lollipop tiramisu. Brownie pie I love pie I love I love. Gummi bears cheesecake cotton candy soufflé.
                    <div id="map">
                        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=nqrvbAujOsuSueMsmgDJrGGp52sZ7TUr&width=600&height=450"></script>
                    </div>'
        ]);

	}

}