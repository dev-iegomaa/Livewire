<div>
    <h1>Counter Component</h1>

    <p>{{ $count }}</p>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

    <hr>

    <p>Live</p>

    <input type="text" wire:model.live="name">

    <p>Hi! My name is {{ $name }}</p>

    <hr>

    <p>Lazy</p>

    <input type="text" wire:model.lazy="email">

    <p>Hi! My email is {{ $email }}</p>

    <hr>

    <p>After 500 ms <b style="color: red;">(500 ms = .5 s)</b></p>

    <input type="text" wire:model.live.debounce.500ms="phone">

    <p>Hi! My phone is {{ $phone }}</p>
</div>
