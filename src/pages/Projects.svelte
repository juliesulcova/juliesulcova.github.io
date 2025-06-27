<script>
    import Project from "../nerdshit/Project.svelte";
    import Carousel from "../nerdshit/Carousel.svelte";
    import Page from "../nerdshit/Page.svelte";
    import Folder from "../nerdshit/Folder.svelte";

    export let photo;

    photo = null;
</script>
<Page>
    <Carousel>
        <Project thumbnail="break_the_chain/chain.JPG" name="Break the chain">
            <Folder folder="break_the_chain.3"></Folder>
        </Project>
    </Carousel>
</Page>
