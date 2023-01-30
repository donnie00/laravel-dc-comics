Esempio di CSV:

John,Doe,120 jefferson st.,Riverside, NJ, 08075
Jack,McGinnis,220 hobo Av.,Phila, PA,09119
"John ""Da Man""",Repici,120 Jefferson St.,Riverside, NJ,08075
Stephen,Tyler,"7452 Terrace ""At the Plaza"" road",SomeTown,SD, 91234
,Blankman,,SomeTown, SD, 00298

Un file di tipo CSV è composto da stringhe separate da virgole e organizzati in più riughe, di solito sono il risultato dell'estrazione dei dati da un database. Ogni riga di un eventuale database corrisponderà ad una riga del file CSV, con i dati separati da virgole, con le caselle vuote indicate dalla doppia virgola ,, in modo da non sfasare l'allineamento delle colonne con il proprio dato.

Questi file in PHP possono essere letti con delle funzioni specifiche per l'apertura dei file e la loro lettura. Queste funzioni apriranno il file, leggeranno la riga e poi con un ciclo inseriranno ogni dato estratto in un array.

-   Le operazioni da eseguire sono le seguenti, in ordine:

    1. Per l'apertura del file uso 'fopen( $file, $mode )'
       $file = indico il path del file da aprire.
       $mode = indico la modalità in cui leggero il file (r per sola lettura, r+ per lettura e scrittura, w per sola scrittura).

        Questa funzione ritornerà una file pointer resource alla riuscita, FALSE in caso di errore.

    2. Per la lettura uso 'fgetcsv( $pointer, $length, $separator )'
       $pointer = il file pointer da esaminare, si usa una variabile assegnata il precedenza con fopen();
       $length = la lunghezza per la quale vogliamo leggere il file, se impostato a null la lunghezza non è limitata e il programma potrebbe risultare un pò più lento;
       $separator = il separatore da cercare per passare al prossimo record da assegnare al nuovo valore dell'array, quindi nel caso di un CSV userò la virgola.

    3. Questa operazione verrà effettuata in un ciclo che assegna i valori estratti dal file in un array, fin tanto che ce ne sono.

    4. Una volta finita questa operazione, bisogna chiudere il file aperto all'inizio con fclose($file)
       $file = dovrebbe essere la variabile che contiene il file pointer resource, in modo da terminare la lettura di quel file.

Questa serie di operazioni restituisce un array contenente dei sotto array con i record recuperati, uno per ogni riga di un ipotetico database.

<?php
   [
      [
         "0"=>"John",
         "1"=>"Doe",
         "2"=>"120 jefferson st.",
         "3"=>"Riverside",
         "4"=>"NJ",
         "5"=>"08075",
      ],
      [
         "0"=>"Jack"
         "1"=>"McGinnis"
         "2"=>"220 hobo Av."
         "3"=>"Phila"
         "4"=>"PA"
         "5"=>"09119"
      ],
      [
         "0"=>""John ""Da Man""""
         "1"=>"Repici"
         "2"=>"120 Jefferson St."
         "3"=>"Riverside"
         "4"=>"NJ"
         "5"=>"08075"
         ],
      [
         "0"=>"Stephen"
         "1"=>"Tyler"
         "2"=>""7452 Terrace ""At the Plaza"" road""
         "3"=>"SomeTown"
         "4"=>"SD"
         "5"=>"91234"
         ],
      [
         "0"=>""
         "1"=>"Blankman"
         "2"=>""
         "3"=>"SomeTown"
         "4"=>"SD"
         "5"=>"00298"
         ],
   ];
?>

Fatto ciò, posso facilmente salvare questo array in una variabile e creare un seeder per popolare un'eventuale tabella con un ciclo foreach in modo da andare a recuperare e assegnare alle singole celle tutti i dati.

$dataArray = array_appena_creato;

foreach($dataArray as $data) {
$entity = new IstanzaModello();

$entity->nome_colonna = $data[0];
$entity->nome_colonna_1 = $data[1];
$entity->nome_colonna_2 = $data[2];
$entity->nome_colonna_3 = $data[3];
$entity->nome_colonna_4 = $data[4];
$entity->nome_colonna_5 = $data[5];

$entity->save();
}

Con questo popolo il mio database con un seeder con i dati estrapolati da un file csv.
