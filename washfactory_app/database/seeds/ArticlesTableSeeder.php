<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Hoe vaak moet je een hoofdkussen wassen?',
            'content' => 'Zelfs als je een kussensloop gebruikt, trekken zweetdruppeltjes vrij snel in je hoofdkussen. Meer zelfs: een hoofdkussen kan nog net dat tikkeltje vuiler zijn dan je denkt. De zweetdruppels in je hoofdkussen zijn een voedingsbron voor bacteriën en de dode huidcellen worden maar wat graag opgesmuld door huisstofmijt. Belangrijk is dat je het kussen op z’n minst geregeld een wasbeurt geeft. Hoe vaak, hangt volledig van jou af. Als je sneller zweet in je slaap is het aan te raden om je kussen vaker te wassen. Doe het bijvoorbeeld één keer per seizoen of één keer per twee maanden. Heb je een huisstofmijtallergie, dan kun je de kussens in bed beter vaker wassen. De meeste hoofdkussens (katoen, synthetisch of met dons gevuld), kun je perfect in de wasmachine doen. Volg gewoon de instructies op het waslabel. Is het label onleesbaar geworden? Kies dan het programma die Washfactory voorzien heeft.',
            'image' => 'img/articles/hoofdkussen-artikel.jpg',
            'publication_date' => '2018-06-18'
        ]);
    }
}
