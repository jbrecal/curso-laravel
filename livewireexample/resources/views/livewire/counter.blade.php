<div>
    <input type="text" wire:model="note" />
    <button wire:click="store">Save note</button>
    <p style="color: red">{{ $feedback }}</p>
    @foreach ($notes as $note)
        <p>{{ $note->content }}
            <button wire:click="update('{{ $note->id }}')">Update</button>
            <button wire:click="destroy('{{ $note->id }}')">Delete</button>
        </p>
    @endforeach
</div>
