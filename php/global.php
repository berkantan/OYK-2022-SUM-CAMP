<form action="results.php " method="POST">
    isim:
    <input type="text" placeholder="İSİM" name="name">
    <br>
    yas:
    <input type="text" placeholder="YIL" name="years">
    <br>
    konum:
    <input type="text" placeholder=" KONUM  " name="location" range="sec">
    <br>

    <select name="location">
        <option value="ankara">ANKARA</option>
        <option value="kayseri">KAYSERİ</option>
        <option value="sivas">SİVAS</option>
    </select>
    <br>
    <button type="submit ">Gönder</button>


</form>