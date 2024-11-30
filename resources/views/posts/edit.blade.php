<x-app-layout>
    <h1>Edit post</h1>

    <form action="/posts/{{ $post->id }}/update" method="post">
        @csrf
        @method('put')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Update">
    </form>
</x-app-layout>
