<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_get_all_books()
    {
        $books = Book::factory(4)->create();

        $response = $this->getJson(route('books.index'));

       // $response->assertJsibFragment

    }

    /** @test */
    function can_get_one_book()
    {
        $book = Book::factory()->create;
    }

    /** @test */
    function can_create_books()
    {
        
    }
}
