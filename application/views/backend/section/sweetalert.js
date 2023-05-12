// This code delete data accourding to id 
<script>
$('.royal-btn').click(function(e) {
    e.preventDefault();
    const deleteUrl = $(this).attr('href');
    const royalClub = $(this).closest('.royal-club');
    // Show confirmation dialog
    Swal.fire({
        title: 'Are you sure?',
        text: 'You want to delete this data',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#009E60',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
    }).then((result) => {
       // Send delete request if user confirms
        if (result.isConfirmed) {
            $.ajax({
                url: deleteUrl,
                type: 'DELETE',
                dataType: 'json',
                // Remove the deleted royal club booking item from the view
                success: (response) => {
                    toastr.success(response.message);
                    royalClub.remove();
                },
                // Show toastr message if there is an error in the response
                error: () => {
                    toastr.warning(response.message);
                }
            });
        }
    });
});
</script>


