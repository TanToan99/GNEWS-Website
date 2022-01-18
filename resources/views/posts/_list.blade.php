@each('posts/_show', $posts, 'post')


<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>