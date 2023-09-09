<div>

    <h1>Upload Foto Perfil</h1>
    <form action="" method="post" wire:submit.prevent="uploadPhoto">
        <input type="file" name="photo" id="photo" wire:model="photo">
        {{ $errors->has('photo') ? $errors->first('photo') : '' }}
        <br>
        <button type="submit">Upload Foto</button>
    </form>
</div>
