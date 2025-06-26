<script>
    import { slide } from "svelte/transition";


    import { preferences } from "../preferences";

</script>
{#if $preferences == 'en' }
<div transition:slide><slot></slot></div>
{/if}
