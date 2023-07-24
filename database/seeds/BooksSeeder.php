<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
use App\BorrowLog;
use App\User;

class BooksSeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    public function run()
    {
        // Sample penulis
        $author1 = Author::create(['name'=>'H. Habbiburahman El Shirazy']);
        $author2 = Author::create(['name'=>'Suwarsih Djojopuspito']);
        $author3 = Author::create(['name'=>'NH. Dini']);

        // Sample buku
        $book1 = Book::create(['title'=>'Ayat-Ayat Cinta', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Empat Serangkai', 'amount'=>3, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Pada Sebuah Kapal', 'amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Namaku Hiroko', 'amount'=>2, 'author_id'=>$author3->id]);

        // Sample peminjaman buku
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book3->id, 'is_returned' => 1]);
    }
}
