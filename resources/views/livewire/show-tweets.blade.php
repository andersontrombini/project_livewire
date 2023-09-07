<div>
    <p>{{ $content }}</p>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        {{ $errors->has('content') ? $errors->first('content') : '' }}
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br><br>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links()}}
    </div>
</div>
