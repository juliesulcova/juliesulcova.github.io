<script>
    import { slide } from "svelte/transition";


    import { preferences } from "../preferences";

</script>
{#if !$preferences || $preferences == 'cz' }
<div transition:slide><slot></slot></div>
{/if}
