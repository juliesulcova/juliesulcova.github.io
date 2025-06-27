<script>
    import PopUp from "./PopUp.svelte";
    import { preferences } from "../preferences";

    export let thumbnail;
    export let cz; 
    export let en;
    let name = $preferences == 'en' ? en : cz; // TODO JAZYKY
    let opened = false;
</script>

<div class="text-white w-75 h-75 text-center bg-black/50 bg-blend-overlay flex items-center justify-center" on:click={() => opened = true} style="background-image: url({thumbnail}); background-size: cover; background-position: center">
    {name} 
</div>

{#if opened}
    <PopUp bind:state={opened}>
        <div class="bg-white w-screen m-1 sm:w-3/4 h-5/6 p-4 overflow-scroll">
            <div class="w-full flex justify-between pr-2 mb-2 cursor-pointer" on:click={() => opened = false}>
                <h2>{name}</h2>
                <div>X</div> 
            </div>
            <slot></slot>
        </div>
    </PopUp>
{/if}
