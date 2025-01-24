document.getElementById('select-all').addEventListener('click', function(e) {
      const checkboxes = document.querySelectorAll('input[name="ids[]"]');
      checkboxes.forEach(checkbox => {
          checkbox.checked = e.target.checked;
      });
}); 

document.addEventListener('DOMContentLoaded', function() {
      const selectAllCheckbox = document.getElementById('select-all');
      const checkboxes = document.querySelectorAll('.select-item');
      const deleteButtonContainer = document.getElementById('delete-button-container');
  
      // Fungsi untuk mengecek apakah ada checkbox yang dipilih
      function toggleDeleteButton() {
          const selectedCheckboxes = document.querySelectorAll('.select-item:checked');
          if (selectedCheckboxes.length > 0) {
              deleteButtonContainer.style.display = 'block';  // Tampilkan tombol delete
          } else {
              deleteButtonContainer.style.display = 'none';   // Sembunyikan tombol delete
          }
      }
  
      // Event listener untuk checkbox "Pilih Semua"
      selectAllCheckbox.addEventListener('click', function(e) {
          checkboxes.forEach(function(checkbox) {
              checkbox.checked = e.target.checked;
          });
          toggleDeleteButton();  // Periksa setelah klik
      });
  
      // Event listener untuk checkbox individu
      checkboxes.forEach(function(checkbox) {
          checkbox.addEventListener('change', toggleDeleteButton);
      });
  
      // Inisialisasi tampilan tombol delete
      toggleDeleteButton();
  });
  