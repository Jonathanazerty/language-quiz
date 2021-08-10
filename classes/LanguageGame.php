<?php

class LanguageGame
{
    private array $words = [];
    public Word $randomWord;
    public string $message = '';

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $spanishTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $word = new Word ($spanishTranslation, $englishTranslation);
            //var_dump($word);

            array_push($this->words, $word);
        }
    }

    public function run()
    {
        // TODO: check for option A or B
        $submitChoice = isset($_POST["submit"]) && !empty($_POST["translation"]);
        if (!$submitChoice){
            $this->giveRandomWord();
        } else {
            $this->choiceSubmitted();
        }
    }

    private function giveRandomWord()
    {
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate

        $this->randomWord = $this->words[array_rand($this->words, 1)];
        $_SESSION['translation'] = serialize($this->randomWord);
        var_dump($this->randomWord->answer);
    }

    private function choiceSubmitted()
    {
        // Option B: user has just submitted an answer
        $this->randomWord = unserialize($_SESSION['translation']);
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        $userChoice = $_POST["translation"];

        // TODO: generate a message for the user that can be shown
        if ($this->randomWord->verify($userChoice) === true){
            $this->message = "¡Felicidades, your answer is correcto ! 🇪🇸 <br>";
        } else {
            $this->message = "Por desgracia, your answer is incorrecto ! ❌ <br>";
        }
    }


        // $word->verify($_SESSION['answer'], $_SESSION['word']);

}