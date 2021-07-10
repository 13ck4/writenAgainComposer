<?php

  require_once './src/RandomQuotes.php';

  // Creates a new object of RandomQuotes class.
  $rq = new Macbookpro\WritenAgainComposer\RandomQuotes();

  // Generates a random quote.
  print_r( $rq->generate() );

  echo "\n";