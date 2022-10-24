<h1>
    edit post {{ $post->title }}
</h1>
<x-posts.post-form :is-edit-post="true" :post="$post" :form-action="'/update-post'"></x-posts.post-form>
