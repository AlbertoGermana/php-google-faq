<?php
// funzione che stampa ogni faq separatamente, una sotto l'altra
function stampaFaq($arrayFaq){
  foreach ($arrayFaq as $singleFaq) {
    echo '<div class="question"><h2>'.$singleFaq['q'].'</h2>';
    echo '<p>'.$singleFaq['a'].'</p></div>';
  };
};

// funzione che stampa singola faq
function stampaDomanda($array, $nElemento){
  echo '<div class="question"><h2>'.$array[$nElemento]['q'].'</h2>';
  echo '<p>'.$array[$nElemento]['a'].'</p></div>';
};

// array che raccoglie il numero delle faq presenti
  function faqCount($arrayFaq){
    $numFaq = count($arrayFaq);
    echo $numFaq;
  };



?>
