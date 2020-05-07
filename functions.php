<?php
// array che stampa ogni faq separatamente, una sotto l'altra
function stampaFaq($arrayFaq){
  foreach ($arrayFaq as $singleFaq) {
    echo '<div class="question"><h2>'.$singleFaq['q'].'</h2>';
    echo '<p>'.$singleFaq['a'].'</p></div>';
  };
};


// array che raccoglie il numero delle faq presenti
  function faqCount($arrayFaq){
    $numFaq = count($arrayFaq);
    echo $numFaq;
  }

?>
