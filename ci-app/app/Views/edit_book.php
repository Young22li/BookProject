<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
    

    <h1 style="color: #2c3e50; text-align: center; margin-bottom: 30px; font-size: 2.2em; font-weight: 300;">Edit Book</h1>
    
    <form action="<?= site_url('Book/update/' . $book->bookID) ?>" method="post" style="display: flex; flex-direction: column; gap: 20px;">
        
        <div style="display: flex; flex-direction: column;">
            <label for="title" style="color: #555; font-weight: 600; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Title:</label>
            <input type="text" name="title" value="<?= $book->title ?>" required 
                   style="padding: 12px 16px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; transition: all 0.3s ease; outline: none;" 
                   onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102,126,234,0.1)'" 
                   onblur="this.style.borderColor='#e1e5e9'; this.style.boxShadow='none'">
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="author" style="color: #555; font-weight: 600; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Author:</label>
            <input type="text" name="author" value="<?= $book->author ?>" required 
                   style="padding: 12px 16px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; transition: all 0.3s ease; outline: none;" 
                   onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102,126,234,0.1)'" 
                   onblur="this.style.borderColor='#e1e5e9'; this.style.boxShadow='none'">
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="genre" style="color: #555; font-weight: 600; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Genre:</label>
            <input type="text" name="genre" value="<?= $book->genre ?>" required 
                   style="padding: 12px 16px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; transition: all 0.3s ease; outline: none;" 
                   onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102,126,234,0.1)'" 
                   onblur="this.style.borderColor='#e1e5e9'; this.style.boxShadow='none'">
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="publication_year" style="color: #555; font-weight: 600; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Publication Year:</label>
            <input type="number" name="publication_year" value="<?= $book->publication_year ?>" required 
                   style="padding: 12px 16px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; transition: all 0.3s ease; outline: none;" 
                   onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102,126,234,0.1)'" 
                   onblur="this.style.borderColor='#e1e5e9'; this.style.boxShadow='none'">
        </div>
        
        <div style="display: flex; gap: 15px; justify-content: center; margin-top: 20px;">
            <input type="submit" value="Update" 
                   style="background: linear-gradient(45deg, #667eea, #764ba2); color: white; padding: 12px 30px; border: none; border-radius: 25px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px;" 
                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(102,126,234,0.3)'" 
                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
            
            <a href="<?= site_url('/Book/view') ?>" 
               style="background: #6c757d; color: white; padding: 12px 30px; text-decoration: none; border-radius: 25px; font-size: 16px; font-weight: 600; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px; display: inline-block;" 
               onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(108,117,125,0.3)'" 
               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
               Cancel
            </a>
        </div>
    </form>
</div>