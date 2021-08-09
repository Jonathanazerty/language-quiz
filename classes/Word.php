<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $pan;
    public string $gnomo;
    public string $huevo;
    public string $arbusto;
    public string $sombrero;
    public string $puerta;
    public string $música;
    public string $galleta;

        // construct function 
        public function __construct()
        {
            // $this->pan = $pan;
            // $this->gnomo = $gnomo;
            // $this->huevo = $huevo;
            // $this->arbusto = $arbusto;
            // $this->sombrero = $sombrero;
            // $this->puerta = $puerta;
            // $this->música = $música;
            // $this->galleta = $galleta;

            $pan -> pan = 'bread';
            $gnomo-> gnomo = 'garden gnome';
            $huevo-> huevo = 'egg';
            $arbusto-> arbusto = 'bush';
            $sombrero-> sombrero = 'hat';
            $puerta-> puerta = 'door';
            $música-> música = 'music';
            $galleta-> galleta = 'cookie';
    
        }

    public function verify(string $answer)
    {
        if ($userInput == $pan){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $gnomo){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $huevo){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $arbusto){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $sombrero){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $puerta){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $música){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }

        if ($userInput == $galleta){
            $message .= "Your answer {$userInput}, is correct, gran trabajo !! 🇪🇸" . "<br>";
        } else {
            $message .= "Your answer {$userInput}, is wrong ❌" . "<br>";
        }
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}