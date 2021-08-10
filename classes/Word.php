<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $spanishWord;
    public string $answer;
   
        // construct function 
        public function __construct(string $spanishWord, string $answer)
        {
            $this->spanishWord = $spanishWord;
            $this->answer = $answer;
            // var_dump($this->answer);
        }

    public function verify(string $userChoice) :bool
    {

        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
        if ($userChoice == $this->answer) {
            return true;
        }
        else{
            return false;
        }

        
        // if ($this->randomWord == $answer){
        //     echo '¡Felicidades, your answer : ' . $_POST['translation'] .' is correcto ! 🇪🇸 '. '<br>';
        // }

        // if (empty($answer)){
        //     echo 'Fill in your answer, por favor'. '<br>';
        // }
        // else {
        //     echo 'Por desgracia, your answer : ' . $_POST['translation'] .' is incorrecto ! ❌ '. '<br>';
        // }

        // $errors = [];

        // if(isset($_POST['translation'] = $_POST['answer']))
        // {
        //     $_SESSION['translation'] = $_POST['word'];
        //     $message = '¡Felicidades, your answer : ' . $_POST['word'] .' is correcto ! 🇪🇸 '. '<br>';
        // }
        // if (empty($_POST['word'])){
        //     $errors[] = 'word';
        //     $_SESSION['word'] = $_POST['word']; 
        // } else($_SESSION['word']){
        //     $message = 'Por desgracia, your answer : ' . $_POST['translation'] .' is incorrecto ! ❌ '. '<br>'
        // }
    
        // return $errors;
    }
    
}