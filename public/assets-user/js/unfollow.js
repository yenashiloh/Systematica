document.addEventListener('DOMContentLoaded', function () {
    const followButtons = document.querySelectorAll('.follow-button, .follow-btn');

    followButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const userId = this.getAttribute('data-user-id');
            const isFollowing = this.textContent.trim() === 'Following';

            if (isFollowing) {
                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to follow this user automatically!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, unfollow!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send the unfollow request
                        fetch(`/friends/unfollow/${userId}`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Content-Type': 'application/json',
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Update the button text to 'Follow'
                                this.textContent = 'Follow';
                                Swal.fire(
                                    'Unfollowed!',
                                    'You have unfollowed the user.',
                                    'success'
                                );
                            }
                        })
                        .catch(error => console.error('Error:', error));
                    } else {
                        // If the cancel button is clicked, do nothing
                        event.preventDefault(); // Prevent any default action (though not needed here)
                    }
                });
            } else {
                // Implement the follow logic here (if needed)
            }
        });
    });
});
