<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
use App\BorrowLog;
use App\User;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample Penulis
        $author1 = Author::create(['name'=>'Dheri Firmansyah']);
        $author2 = Author::create(['name'=>'Agung Sugianto']);
        $author3 = Author::create(['name'=>'M Junika Berli']);
        $author4 = Author::create(['name'=>'Luthfi Alfikri']);

        //Sample Buku
        $book1 = Book::create(['title'=>'Surga Didepan Mata','amount'=>'10','authors_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Seorang Muslim Yang Pandai','amount'=>'2','authors_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Perang Dunia Ke II','amount'=>'4','authors_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Muslim Abad -1','amount'=>'10','authors_id'=>$author4->id]);

        //Sample User
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book3->id, 'is_returned' => 1]);
    }
}
