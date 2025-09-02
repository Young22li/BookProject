<?php

namespace App\Controllers;


class Book extends BaseController
{
    protected $bookModel;

    
    public function add() 
    {
        echo view('header');
        echo view('add_book');
        echo view('footer');
    }

    public function save()
    {
        $title = $this->request->getPost('title');
        $author = $this->request->getPost('author');
        $genre = $this->request->getPost('genre');
        $publication_year = $this->request->getPost('publication_year');

        
        $data = [
            'title' => $title,
            'author' => $author,
            'genre' => $genre,
            'publication_year' => $publication_year
        ];

        
        $bookModel = model('BookModel');
        $bookModel->insert_book($data);
        session()->setFlashdata('success', 'Book add successfully!');
        return redirect()->to('/Book/view');
    }

    public function view()
    {
        
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->get_all_books();
        echo view('header');
        echo view('view_book', $data); 
        echo view('footer');
    }

    public function edit($id)
    {
        $bookModel = model('BookModel');
        $data['book'] = $bookModel->get_book($id);
        echo view('header');
        echo view('edit_book', $data);
        echo view('footer');
    }

    public function update($id)
    {
        $bookModel = model('BookModel');
        
        $data = [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'genre' => $this->request->getPost('genre'),
            'publication_year' => $this->request->getPost('publication_year')
        ];
        
        $bookModel->update_book($id, $data);
        session()->setFlashdata('success', 'Book updated successfully!');
        return redirect()->to('/Book/view');
    }

    public function delete($id)
    {
        $bookModel = model('BookModel');
        $bookModel->delete_book($id);
        session()->setFlashdata('success', 'Book deleted successfully!');
        return redirect()->to('/Book/view');
    }
}