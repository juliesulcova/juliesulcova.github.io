<script>
    import Project from "../nerdshit/Project.svelte";
    import Carousel from "../nerdshit/Carousel.svelte";
    import Page from "../nerdshit/Page.svelte";

    export let photo;

    photo = null;
</script>
<Page>
    <Carousel>
        <Project name="Mega husty projekt" thumbnail="1706014563103.jpg">
            <Carousel>
                <img src="1706014563103.jpg" alt="" class="w-50">
            </Carousel>
            a tady pak bude nejaky husty popis
        </Project>


        <Project name="Mega husty projekt" thumbnail="1706014563103.jpg">
        </Project>

        <Project name="Mega husty projekt" thumbnail="1706014563103.jpg">
        </Project>


        <Project name="Mega husty projekt" thumbnail="1706014563103.jpg">
        </Project>

        <Project name="Mega husty projekt" thumbnail="1706014563103.jpg">
        </Project>


        <Project name="Mega husty projekt" thumbnail="1706014563103.jpg">
        </Project>
    </Carousel>
</Page>
