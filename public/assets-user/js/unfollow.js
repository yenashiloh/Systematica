document.addEventListener('DOMContentLoaded', function () {
    const followButtons = document.querySelectorAll('.follow-button, .follow-btn');

    followButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const userId = this.getAttribute('data-user-id');
            const isFollowing = this.textContent.trim() === 'Following';

            if (isFollowing) {
                Swal.fire({
                    title: 'Unfollow',
                    text: "Are you sure you want to follow this user?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, unfollow!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
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
                        event.preventDefault(); 
                    }
                });
            } else {
            }
        });
    });
});
