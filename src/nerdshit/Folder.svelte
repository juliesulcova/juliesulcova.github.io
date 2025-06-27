<script>
    import Carousel from "./Carousel.svelte";

    export let folder;
    let count = folder.split('.')[1];
</script>

<div class="mb-3">
    <Carousel>
        {#each {length: count}, i}
            <img src="{folder}/{i}.jpg" alt="" class="h-75"> 
        {/each}
    </Carousel>
</div>
