function validateForm() {
    var title = document.getElementById('title').value;
    var description = document.getElementById('description').value;
    var image_url = document.getElementById('image_url').value;
    
    if (title === "" || description === "" || image_url === "") {
        alert("Semua elemen tidak boleh kosong");
        return false;
    }
    return true;
}
