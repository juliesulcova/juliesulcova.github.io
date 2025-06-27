<script>

    import Carousel from "./Carousel.svelte";

    export let folder;

</script>

<Carousel>
    {#each images as image}
        <img src="{image}" alt="" class="w-50"> 
    {/each}
</Carousel>
