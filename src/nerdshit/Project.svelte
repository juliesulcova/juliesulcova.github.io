<script>
    import PopUp from "./PopUp.svelte";

    export let thumbnail;
    export let name; 
    let opened = false;
</script>

<div class="relative w-75 shrink-0 text-center" on:click={() => opened = true}>

    <img src="{thumbnail}" alt="{name}" class="">

    <div class="absolute w-full h-full bg-black top-0 opacity-50"></div>

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white">{name}</div>
</div>

{#if opened}
    <PopUp bind:state={opened}>
        <div class="bg-white w-screen m-1 sm:w-3/4 h-3/4 p-2">
            <div class="w-full flex justify-end pr-1 cursor-pointer" on:click={() => opened = false}>
                X 
            </div>
            <slot></slot>
        </div>
    </PopUp>
{/if}
