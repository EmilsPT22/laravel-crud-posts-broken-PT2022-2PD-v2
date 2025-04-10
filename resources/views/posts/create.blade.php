<x-app-layout>
    <h1>Create post</h1>

    <form action="/posts" method="post">
        @csrf
        @method('GET')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>

</x-app-layout>
