<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'bookID';
    protected $allowedFields = ['title', 'author', 'genre','publication_year'];
    protected $useTimestamps = false; 
    protected $returnType = 'object';
    
    
    public function get_all_books()
    {
        return $this->findAll();
    }
   
    public function insert_book($data)
    {
        return $this->save($data);
    }
    
    
    public function update_book($id, $data)
    {
        return $this->update($id, $data);
    }
    
    public function get_book($id)
    {
        return $this->find($id);
    }
    
    public function delete_book($id)
    {
        return $this->delete($id);
    }
}