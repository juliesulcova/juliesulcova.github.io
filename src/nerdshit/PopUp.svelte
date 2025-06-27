<script>
    import { blur } from 'svelte/transition';

    export let state;
</script>

<div class="fixed z-100 top-0 left-0 w-screen h-screen bg-black/50 flex items-center justify-center" transition:blur={{ amount: 1 }} on:click={(e) => {if (e.srcElement.id === 'dim-background') {state = false}}} id="dim-background">
    <slot></slot>
</div>
