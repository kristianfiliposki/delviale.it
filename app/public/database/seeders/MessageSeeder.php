<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $messages=[
            [
                'autore'=>'gianluca',
                'testo'=>'mi piacerebbe lavorare con voi',
            ],
            [
                'autore'=>'marins',
                'testo' => 'Ciao! Sono interessato al vostro servizio.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Salve, avete dei posti disponibili per uno stage?'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Buongiorno! Sto cercando collaborazioni nel campo della programmazione.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Mi piacerebbe saperne di più sulla vostra azienda.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Saluti! Sto cercando un team per lavorare su un progetto di sviluppo web.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Ciao, avete delle opportunità di lavoro aperte?'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Buongiorno! Vorrei avere informazioni sui vostri servizi di consulenza.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Sono uno sviluppatore frontend in cerca di nuove sfide professionali.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Salve! Sto cercando un partner per avviare una startup.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Buongiorno! Mi piacerebbe partecipare ai vostri eventi di networking.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Ciao, avete dei corsi di formazione disponibili?'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Saluti! Sto valutando opportunità di investimento nel settore tecnologico.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Buongiorno! Vorrei organizzare una presentazione del mio prodotto presso la vostra azienda.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Sono uno studente universitario interessato a uno stage formativo.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Ciao! Vorrei sapere di più sui vostri progetti di responsabilità sociale.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Salve, avete dei partner commerciali con cui collaborate?'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Buongiorno! Mi piacerebbe partecipare a un hackathon organizzato dalla vostra azienda.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Sto cercando informazioni sui vostri prodotti e servizi digitali.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Ciao, sono un appassionato di tecnologia e vorrei fare parte della vostra community.'
            ],
            [
                'autore'=>'marins',
                'testo' => 'Salve! Sono interessato a una consulenza per migliorare la mia presenza online.'
            ],
        ];



        foreach ($messages as $message){
            $newmessage=new Message;
            $newmessage->fill($message);
            $newmessage->save();
        }
        
    }
}
