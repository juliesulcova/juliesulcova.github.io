<script>
    import { fade, slide } from "svelte/transition";
</script>

<div in:fade>
    <slot></slot>
</div>
