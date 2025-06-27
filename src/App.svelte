<!-- kdyby byl competition v nerd picovinach tak toto je silny kandidat, muzes zavrit -->

<script>
    import { fade, slide } from "svelte/transition";
import pages from "./pages/pages";
import { preferences } from './preferences'

let page = pages[0];
let photo;

</script>

<!-- bg-conic from-[#C3BADC] via-[#E2D5C6] via-[#D9CCD8] to-[#C3BADC] -->
<div class="p-5 grid grid-cols-1 {photo ? 'sm:grid-cols-2' : ''} gap-4 w-screen min-h-screen">
    <div>
        <h1>BcA. Julie Šulcová</h1>
        <h2>{page[0][$preferences == 'en' ? 1 : 0]}</h2>

        <svelte:component this={page[1]} bind:photo={photo}></svelte:component>
    </div>
    {#if photo}
        <div class="flex sm:justify-end sm:row-span-3" in:fade>
            <img src={photo} alt="" class="shadow-xl h-96">
        </div>
    {/if}
    <div>
        <ul class="mb-3">
            {#each pages as _page}
                <li class="{page == _page ? 'cursor-default' : 'underline cursor-pointer'}" on:click={() => page = _page}>{_page[0][$preferences == 'en' ? 1 : 0]}</li>
            {/each}
        </ul>

        <ul>
            <li>julie.sulcova@icloud.com</li>
            <li><a href="julie_sulcova_cv_2024_5.pdf">CV</a></li>
            <li><a href="https://www.instagram.com/fiktivniodpad/">Instagram</a></li>
            <li><a href="https://soundcloud.com/julie-ulcov-124260535">SoundCloud</a></li>

        </ul>
    </div>
</div>

<div class="fixed bottom-0 right-0 sm:left-0 p-3" on:click={() => preferences.set($preferences == 'en' ? 'cz' : "en")}>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
      <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
      <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
    </svg>
</div><!-- TODO translate button !-->

<!-- todo animackyyy !-->
