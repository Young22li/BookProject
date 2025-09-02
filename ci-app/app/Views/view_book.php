<div style="font-family: Arial, sans-serif; max-width: 1200px; margin: 20px auto; padding: 20px;">
    
    <?php if (session()->getFlashdata('success')): ?>
        <div style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 8px; font-size: 16px;">
            ✅ <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    
    <?php if (session()->getFlashdata('error')): ?>
        <div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 8px; font-size: 16px;">
            ❌ <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <h1 style="color: #2c3e50; text-align: center; margin-bottom: 30px; font-size: 2.5em;">Books List</h1>
    
    <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;">
        <tr style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <th style="padding: 15px; text-align: left; font-weight: 600;">Title</th>
            <th style="padding: 15px; text-align: left; font-weight: 600;">Author</th>
            <th style="padding: 15px; text-align: left; font-weight: 600;">Genre</th>
            <th style="padding: 15px; text-align: left; font-weight: 600;">Year</th>
            <th style="padding: 15px; text-align: center; font-weight: 600;">Actions</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr style="border-bottom: 1px solid #eee; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#f8f9fa'" onmouseout="this.style.backgroundColor='white'">
            <td style="padding: 15px; color: #2c3e50; font-weight: 500;"><?= $book->title ?></td>
            <td style="padding: 15px; color: #6c757d;"><?= $book->author ?></td>
            <td style="padding: 15px; color: #6c757d;"><?= $book->genre ?></td>
            <td style="padding: 15px; color: #6c757d;"><?= $book->publication_year ?></td>
            <td style="padding: 15px; text-align: center;">
                <a href="<?= site_url('Book/edit/'.$book->bookID) ?>" 
                   style="background: linear-gradient(45deg, #28a745, #20c997); color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; margin-right: 8px; display: inline-block; font-size: 14px; transition: all 0.3s ease;" 
                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 8px rgba(40,167,69,0.3)'" 
                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                   Edit
                </a>
                <form method="POST" action="<?= site_url('Book/delete/'.$book->bookID) ?>"
                      style="display: inline-block;"
                      onsubmit="return confirm('Are you sure you want to delete this book?')">
                    <button type="submit" 
                            style="background: linear-gradient(45deg, #dc3545, #e74c3c); color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 8px rgba(220,53,69,0.3)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div style="display: flex; gap: 15px; justify-content: center; margin-top: 20px;">
            <a href="<?= site_url('/') ?>" 
               style="background: #6c757d; color: white; padding: 12px 30px; text-decoration: none; border-radius: 25px; font-size: 16px; font-weight: 600; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px; display: inline-block;" 
               onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(108,117,125,0.3)'" 
               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
               Back to Home
            </a>
        </div>
</div>