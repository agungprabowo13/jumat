<div class="max-w-xl mx-auto mt-10 text-center">
    @isset($kelipatan)
    @if ($hitungan % $kelipatan == 0 && $kelipatan != 0)
    <audio src="sound.wav" autoplay>    </audio>
    @endif
    @if ($hitungan == $batas && $batas != 0)
    <div role="alert" class="alert alert-success mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>You have reach {{ $batas }}</span>
    </div>
    <audio src="sound.wav" autoplay></audio>
    @endif
    @endisset
    <button id="hitungan" wire:click='tambah'
        class="bg-slate-100 rounded-full w-96 h-96 text-8xl font-semibold text-slate-500 mb-5">{{ $hitungan }}</button>
    <br>
    <button class="mb-5 btn btn-lg btn-accent text-white rounded-xl" wire:click='kosongkan'>Reset</button>
    <form>
        <input id="kelipatan" type="number" wire:model='kelipatan' class="input input-bordered"
            placeholder="Setting Kelipatan" >
        <input id="batas" type="number" wire:model='batas' class="input input-bordered" placeholder="Setting Batas"
            wire:model='batas'>
    </form>

</div>