<div>
    <p>{{ $message }}</p>

    <input type="text" name="message" id="message" wire:model="message">

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br><br>
    @endforeach
</div>
