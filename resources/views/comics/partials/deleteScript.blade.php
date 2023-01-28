<script>
   const forms = document.querySelectorAll('.deleteForm');

   forms.forEach((formEl) => {

      formEl.addEventListener('submit', function(e) {

         e.preventDefault();

         const deleteCheck = confirm('Are you sure you want to delete this item?')

         if (deleteCheck) {
            formEl.submit();
         }
      })

   });
</script>
