<?php

require __DIR__ . '/guestbook.php';

$book = new GuestBook(__DIR__ . '/../records');

///Tests

assert( true === $book->__construct(__DIR__ . '/../records') );
assert( null === $book->__construct('') );
assert( true === is_array( $book->getData() ) );
assert( true === is_object( $book->append('text') ) );
assert( false === $book->append('') );
assert( true == $book->save() );