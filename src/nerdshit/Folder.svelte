<script>

    import Carousel from "./Carousel.svelte";

    export let folder;
    let count = folder.split('.')[1];

</script>

<Carousel>
    {#each {length: count}, i}
        <img src="{folder}/{i}.jpg" alt="" class="w-50"> 
    {/each}
</Carousel>
